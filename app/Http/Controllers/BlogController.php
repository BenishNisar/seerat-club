<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function index(Request $request)
{
    $categories = BlogCategory::query()
        ->where('is_active', true)
        ->orderBy('sort_order')
        ->orderBy('name')
        ->get();


    $featuredBlog = Blog::query()
        ->with('category')
        ->where('status', 'published')
        ->where('is_featured', true)
        ->latest()
        ->first();


    $blogs = Blog::query()
        ->with('category')

        ->where('status', 'published')

        ->when(
            $featuredBlog,
            function ($query) use ($featuredBlog) {

                $query->where(
                    'id',
                    '!=',
                    $featuredBlog->id
                );

            }
        )

        ->when(
            $request->filled('category'),
            function ($query) use ($request) {

                $query->whereHas(
                    'category',
                    function ($categoryQuery) use ($request) {

                        $categoryQuery->where(
                            'slug',
                            $request->category
                        );

                    }
                );

            }
        )

        ->when(
            $request->filled('search'),
            function ($query) use ($request) {

                $search = trim(
                    $request->search
                );

                $query->where(
                    function ($q) use ($search) {

                        $q->where(
                            'title',
                            'like',
                            "%{$search}%"
                        )

                        ->orWhere(
                            'excerpt',
                            'like',
                            "%{$search}%"
                        )

                        ->orWhere(
                            'content',
                            'like',
                            "%{$search}%"
                        );

                    }
                );

            }
        )

        ->latest()
        ->paginate(9)
        ->withQueryString();


    return view(
        'blog.index',
        compact(
            'categories',
            'featuredBlog',
            'blogs'
        )
    );
}


    public function show(Blog $blog)
    {
        /*
        |--------------------------------------------------------------------------
        | Only Published Blogs
        |--------------------------------------------------------------------------
        */

        if ($blog->status !== 'published') {
            abort(404);
        }


        if (
            $blog->published_at &&
            $blog->published_at->isFuture()
        ) {
            abort(404);
        }


        $blog->load('category');


        /*
        |--------------------------------------------------------------------------
        | Related Blogs
        |--------------------------------------------------------------------------
        */

        $relatedBlogs = Blog::query()
            ->with('category')
            ->published()
            ->where('id', '!=', $blog->id)

            ->when(
                $blog->blog_category_id,
                function ($query) use ($blog) {

                    $query->where(
                        'blog_category_id',
                        $blog->blog_category_id
                    );
                }
            )

            ->latest('published_at')
            ->take(3)
            ->get();


        return view(
            'blog.show',
            compact(
                'blog',
                'relatedBlogs'
            )
        );
    }
}
