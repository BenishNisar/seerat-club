@extends('admin.layout')

@section('title', 'Blog Categories')

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
                    BLOG MANAGEMENT
                </span>

                <h1>
                    Blog Categories
                </h1>

            </div>


            <a
                href="{{ route('admin.blog-categories.create') }}"
                class="admin-btn"
            >
                + Add Category
            </a>

        </div>


        @if(session('success'))

            <div class="admin-alert admin-alert-success">

                {{ session('success') }}

            </div>

        @endif


        <div class="admin-card">


            <div class="admin-table-wrap">

                <table class="admin-table">

                    <thead>

                        <tr>

                            <th>Name</th>

                            <th>Slug</th>

                            <th>Blogs</th>

                            <th>Status</th>

                            <th>Order</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse($categories as $category)

                            <tr>

                                <td>

                                    <strong>
                                        {{ $category->name }}
                                    </strong>

                                </td>


                                <td>
                                    {{ $category->slug }}
                                </td>


                                <td>
                                    {{ $category->blogs_count }}
                                </td>


                                <td>

                                    @if($category->is_active)

                                        <span class="badge">
                                            Active
                                        </span>

                                    @else

                                        <span class="badge warn">
                                            Inactive
                                        </span>

                                    @endif

                                </td>


                                <td>
                                    {{ $category->sort_order }}
                                </td>


                                <td>

                                    <div class="admin-actions">


                                        <a
                                            href="{{ route(
                                                'admin.blog-categories.edit',
                                                $category
                                            ) }}"
                                            class="admin-btn admin-btn-light"
                                        >
                                            Edit
                                        </a>


                                        <form
                                            action="{{ route(
                                                'admin.blog-categories.destroy',
                                                $category
                                            ) }}"
                                            method="POST"
                                        >

                                            @csrf
                                            @method('DELETE')


                                            <button
                                                type="submit"
                                                class="admin-btn admin-btn-danger"
                                                data-confirm="Delete this category?"
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

                                        No categories created yet.

                                        <div style="margin-top:15px;">

                                            <a
                                                href="{{ route('admin.blog-categories.create') }}"
                                                class="admin-btn"
                                            >
                                                Create First Category
                                            </a>

                                        </div>

                                    </div>

                                </td>

                            </tr>


                        @endforelse

                    </tbody>

                </table>

            </div>


            @if($categories->hasPages())

                <div style="margin-top:30px;">

                    {{ $categories->links() }}

                </div>

            @endif


        </div>


    </div>

</section>


@endsection
