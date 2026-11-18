@extends('admin.layout')

@section('title', 'Add Blog')
@section('section', 'Blog Management')


@push('head')

<link
    rel="stylesheet"
    href="{{ asset('assets/css/admin-blog.css') }}"
>

<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/summernote@0.9.1/dist/summernote-lite.min.css"
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
                    Add New Blog
                </h1>

            </div>


            <a
                href="{{ route('admin.blogs.index') }}"
                class="admin-btn admin-btn-light"
            >
                Back to Blogs
            </a>

        </div>


        <form
            action="{{ route('admin.blogs.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf


            @include('admin.blogs._form')


            <div style="margin-top:25px;">

                <button
                    type="submit"
                    class="admin-btn"
                >
                    Save Blog
                </button>

            </div>


        </form>


    </div>

</section>

@endsection


@push('scripts')

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.1/dist/summernote-lite.min.js"></script>

@include('admin.blogs._summernote')

@endpush
