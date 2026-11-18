@extends('admin.layout')

@section('title', 'Blogs')
@section('section', 'Blog Management')

@push('head')
<link
    rel="stylesheet"
    href="{{ asset('assets/css/admin-blog.css') }}"
>
@endpush

@section('content')

<section class="blog-admin">

    <div class="blog-admin-container">

        <div class="blog-admin-header">

            <div>

                <span class="blog-admin-eyebrow">
                    SEERAT CLUB ADMIN
                </span>

                <h1>
                    Blogs
                </h1>

            </div>

            <a
                href="{{ route('admin.blogs.create') }}"
                class="admin-btn"
            >
                + Add New Blog
            </a>

        </div>


        @if(session('success'))

            <div class="admin-alert admin-alert-success">

                {{ session('success') }}

            </div>

        @endif


        <div class="admin-card">


            <form
                method="GET"
                action="{{ route('admin.blogs.index') }}"
                class="admin-filter"
            >

                <input
                    type="text"
                    name="search"
                    placeholder="Search blogs..."
                    value="{{ request('search') }}"
                >


                <select name="category">

                    <option value="">
                        All Categories
                    </option>

                    @foreach($categories as $category)

                        <option
                            value="{{ $category->id }}"
                            @selected(
                                request('category') == $category->id
                            )
                        >
                            {{ $category->name }}
                        </option>

                    @endforeach

                </select>


                <select name="status">

                    <option value="">
                        All Status
                    </option>

                    <option
                        value="published"
                        @selected(
                            request('status') === 'published'
                        )
                    >
                        Published
                    </option>

                    <option
                        value="draft"
                        @selected(
                            request('status') === 'draft'
                        )
                    >
                        Draft
                    </option>

                </select>


                <button
                    type="submit"
                    class="admin-btn"
                >
                    Filter
                </button>

            </form>



            <div class="admin-table-wrap">

                <table class="admin-table">

                    <thead>

                        <tr>

                            <th>Image</th>

                            <th>Title</th>

                            <th>Category</th>

                            <th>Status</th>

                            <th>Published</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse($blogs as $blog)

                            <tr>

                                <td>

                                    @if($blog->featured_image)

                                        <img
                                            class="admin-blog-thumb"
                                            src="{{ asset('storage/' . $blog->featured_image) }}"
                                            alt="{{ $blog->title }}"
                                        >

                                    @else

                                        <span class="muted">
                                            No image
                                        </span>

                                    @endif

                                </td>


                                <td>

                                    <strong>
                                        {{ $blog->title }}
                                    </strong>

                                    @if($blog->is_featured)

                                        <br>

                                        <span class="badge warn">
                                            Featured
                                        </span>

                                    @endif

                                </td>


                                <td>

                                    {{ $blog->category?->name ?? 'No Category' }}

                                </td>


                                <td>

                                    @if($blog->status === 'published')

                                        <span class="badge">
                                            Published
                                        </span>

                                    @else

                                        <span class="badge warn">
                                            Draft
                                        </span>

                                    @endif

                                </td>


                                <td>

                                    {{
                                        $blog->published_at
                                            ? $blog->published_at->format('d M Y')
                                            : 'Not Published'
                                    }}

                                </td>


                                <td>

                                    <div class="admin-actions">

                                        <a
                                            href="{{ route('admin.blogs.edit', $blog) }}"
                                            class="admin-btn admin-btn-light"
                                        >
                                            Edit
                                        </a>


                                        <form
                                            action="{{ route('admin.blogs.destroy', $blog) }}"
                                            method="POST"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="admin-btn admin-btn-danger"
                                                data-confirm="Are you sure you want to delete this blog?"
                                            >
                                                Delete
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6">

                                    <div class="empty">

                                        No blogs have been created yet.

                                        <div style="margin-top:15px;">

                                            <a
                                                href="{{ route('admin.blogs.create') }}"
                                                class="admin-btn"
                                            >
                                                Create First Blog
                                            </a>

                                        </div>

                                    </div>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            <div style="margin-top:25px;">

                {{ $blogs->links() }}

            </div>


        </div>

    </div>

</section>

@endsection
