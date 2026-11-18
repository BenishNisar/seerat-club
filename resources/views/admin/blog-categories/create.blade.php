@extends('admin.layout')

@section('title', 'Add Blog Category')

@section('section', 'Blog Management')


@push('head')

<link
    rel="stylesheet"
    href="{{ asset('assets/css/admin-blog.css') }}"
>

@endpush


@section('content')


<section class="blog-admin">

    <div
        class="blog-admin-container"
        style="max-width:850px;"
    >


        <div class="blog-admin-header">

            <div>

                <span class="blog-admin-eyebrow">
                    BLOG MANAGEMENT
                </span>

                <h1>
                    Add Category
                </h1>

            </div>


            <a
                href="{{ route('admin.blog-categories.index') }}"
                class="admin-btn admin-btn-light"
            >
                Back
            </a>

        </div>



        <form
            action="{{ route('admin.blog-categories.store') }}"
            method="POST"
        >

            @csrf


            @include('admin.blog-categories._form')


            <div style="margin-top:25px;">

                <button
                    type="submit"
                    class="admin-btn"
                >
                    Save Category
                </button>

            </div>


        </form>


    </div>

</section>


@endsection
