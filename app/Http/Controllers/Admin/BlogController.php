<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of blogs.
     */
    public function index(Request $request)
    {
        $blogs = Blog::query()
            ->with('category')

            ->when($request->filled('search'), function ($query) use ($request) {
                $search = trim($request->search);

                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%{$search}%")
                        ->orWhere('author_name', 'like', "%{$search}%")
                        ->orWhere('excerpt', 'like', "%{$search}%");
                });
            })

            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->status);
            })

            ->when($request->filled('category'), function ($query) use ($request) {
                $query->where('blog_category_id', $request->category);
            })

            ->latest()
            ->paginate(15)
            ->withQueryString();


        $categories = BlogCategory::query()
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();


        return view('admin.blogs.index', compact(
            'blogs',
            'categories'
        ));
    }


    /**
     * Show the form for creating a blog.
     */
    public function create()
    {
        $categories = BlogCategory::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();


        return view('admin.blogs.create', compact(
            'categories'
        ));
    }


    /**
     * Store a new blog.
     */
    public function store(Request $request)
    {
        $validated = $this->validateBlog($request);


        $validated['slug'] = $this->generateUniqueSlug(
            $validated['title']
        );


        if ($request->hasFile('featured_image')) {

            $validated['featured_image'] = $request
                ->file('featured_image')
                ->store(
                    'blogs/featured',
                    'public'
                );
        }


        $validated['is_featured'] =
            $request->boolean('is_featured');


        if (
            $validated['status'] === 'published'
            &&
            empty($validated['published_at'])
        ) {

            $validated['published_at'] = now();
        }


        Blog::create($validated);


        return redirect()
            ->route('admin.blogs.index')
            ->with(
                'success',
                'Blog created successfully.'
            );
    }


    /**
     * Display specified blog.
     */
    public function show(Blog $blog)
    {
        return redirect()
            ->route(
                'admin.blogs.edit',
                $blog
            );
    }


    /**
     * Show edit form.
     */
    public function edit(Blog $blog)
    {
        $categories = BlogCategory::query()
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();


        return view('admin.blogs.edit', compact(
            'blog',
            'categories'
        ));
    }


    /**
     * Update blog.
     */
    public function update(
        Request $request,
        Blog $blog
    ) {
        $validated = $this->validateBlog($request);


        if ($blog->title !== $validated['title']) {

            $validated['slug'] = $this->generateUniqueSlug(
                $validated['title'],
                $blog->id
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Remove current featured image
        |--------------------------------------------------------------------------
        */

        if ($request->boolean('remove_featured_image')) {

            if ($blog->featured_image) {

                Storage::disk('public')
                    ->delete(
                        $blog->featured_image
                    );
            }

            $validated['featured_image'] = null;
        }


        /*
        |--------------------------------------------------------------------------
        | Upload new featured image
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('featured_image')) {

            if ($blog->featured_image) {

                Storage::disk('public')
                    ->delete(
                        $blog->featured_image
                    );
            }


            $validated['featured_image'] = $request
                ->file('featured_image')
                ->store(
                    'blogs/featured',
                    'public'
                );
        }


        $validated['is_featured'] =
            $request->boolean('is_featured');


        if (
            $validated['status'] === 'published'
            &&
            empty($validated['published_at'])
        ) {

            $validated['published_at'] =
                $blog->published_at ?? now();
        }


        $blog->update($validated);


        return redirect()
            ->route('admin.blogs.index')
            ->with(
                'success',
                'Blog updated successfully.'
            );
    }


    /**
     * Delete blog.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->featured_image) {

            Storage::disk('public')
                ->delete(
                    $blog->featured_image
                );
        }


        $blog->delete();


        return redirect()
            ->route('admin.blogs.index')
            ->with(
                'success',
                'Blog deleted successfully.'
            );
    }


    /**
     * Summernote inline image upload.
     */
    public function uploadSummernoteImage(
        Request $request
    ) {
        $request->validate([
            'image' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],
        ]);


        $path = $request
            ->file('image')
            ->store(
                'blogs/content',
                'public'
            );


        return response()->json([
            'success' => true,

            'url' => asset(
                'storage/' . $path
            ),
        ]);
    }


    /**
     * Blog validation.
     */
    private function validateBlog(
        Request $request
    ): array {

        return $request->validate([

            'blog_category_id' => [
                'nullable',
                'exists:blog_categories,id',
            ],

            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'author_name' => [
                'nullable',
                'string',
                'max:255',
            ],

            'excerpt' => [
                'nullable',
                'string',
                'max:1200',
            ],

            'content' => [
                'required',
                'string',
            ],

            'featured_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],

            'status' => [
                'required',
                'in:draft,published',
            ],

            'published_at' => [
                'nullable',
                'date',
            ],

            'seo_title' => [
                'nullable',
                'string',
                'max:255',
            ],

            'seo_description' => [
                'nullable',
                'string',
                'max:500',
            ],
        ]);
    }


    /**
     * Generate unique slug.
     */
    private function generateUniqueSlug(
        string $title,
        ?int $ignoreId = null
    ): string {

        $baseSlug = Str::slug($title);

        $slug = $baseSlug;

        $number = 1;


        while (
            Blog::query()
                ->where('slug', $slug)

                ->when(
                    $ignoreId,
                    function ($query) use ($ignoreId) {

                        $query->where(
                            'id',
                            '!=',
                            $ignoreId
                        );
                    }
                )

                ->exists()
        ) {

            $slug =
                $baseSlug
                . '-'
                . $number;

            $number++;
        }


        return $slug;
    }
}
