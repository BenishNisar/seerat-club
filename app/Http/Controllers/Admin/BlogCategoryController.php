<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::query()
            ->withCount('blogs')
            ->orderBy('sort_order')
            ->orderBy('name')
            ->paginate(20);


        return view(
            'admin.blog-categories.index',
            compact('categories')
        );
    }


    public function create()
    {
        return view(
            'admin.blog-categories.create'
        );
    }


    public function store(Request $request)
    {
        $validated = $request->validate([

            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'sort_order' => [
                'nullable',
                'integer',
                'min:0',
            ],
        ]);


        $validated['slug'] =
            $this->generateUniqueSlug(
                $validated['name']
            );


        $validated['is_active'] =
            $request->boolean('is_active');


        $validated['sort_order'] =
            $validated['sort_order'] ?? 0;


        BlogCategory::create(
            $validated
        );


        return redirect()
            ->route(
                'admin.blog-categories.index'
            )
            ->with(
                'success',
                'Blog category created successfully.'
            );
    }


    public function edit(
        BlogCategory $blogCategory
    ) {
        return view(
            'admin.blog-categories.edit',
            compact('blogCategory')
        );
    }


    public function update(
        Request $request,
        BlogCategory $blogCategory
    ) {
        $validated = $request->validate([

            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'sort_order' => [
                'nullable',
                'integer',
                'min:0',
            ],
        ]);


        if (
            $blogCategory->name
            !==
            $validated['name']
        ) {

            $validated['slug'] =
                $this->generateUniqueSlug(
                    $validated['name'],
                    $blogCategory->id
                );
        }


        $validated['is_active'] =
            $request->boolean('is_active');


        $validated['sort_order'] =
            $validated['sort_order'] ?? 0;


        $blogCategory->update(
            $validated
        );


        return redirect()
            ->route(
                'admin.blog-categories.index'
            )
            ->with(
                'success',
                'Blog category updated successfully.'
            );
    }


    public function destroy(
        BlogCategory $blogCategory
    ) {
        $blogCategory->delete();


        return redirect()
            ->route(
                'admin.blog-categories.index'
            )
            ->with(
                'success',
                'Blog category deleted successfully.'
            );
    }


    private function generateUniqueSlug(
        string $name,
        ?int $ignoreId = null
    ): string {

        $baseSlug = Str::slug($name);

        $slug = $baseSlug;

        $number = 1;


        while (
            BlogCategory::query()
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
