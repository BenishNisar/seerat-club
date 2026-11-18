@extends("Layout.layout")

@section(
    'title',
    ($blog->seo_title ?: $blog->title)
    . ' · Seerat Club'
)

@section("Content")

<link
    rel="stylesheet"
    href="{{ asset('assets/css/blog.css') }}"
>


<div class="sc-blog-page">


    {{-- =====================================================
        DETAIL HERO
    ====================================================== --}}

    <section class="sc-blog-detail-hero">

        <div class="sc-blog-container">


            <div class="sc-blog-breadcrumb">

                <a href="{{ url('/') }}">
                    Home
                </a>

                <span>/</span>

                <a href="{{ route('blog.index') }}">
                    Blog
                </a>


                @if($blog->category)

                    <span>/</span>

                    <a
                        href="{{
                            route(
                                'blog.index',
                                [
                                    'category' =>
                                    $blog->category->slug
                                ]
                            )
                        }}"
                    >
                        {{ $blog->category->name }}
                    </a>

                @endif

            </div>



            <header class="sc-blog-detail-header">


                @if($blog->category)

                    <span class="sc-blog-eyebrow">

                        {{ $blog->category->name }}

                    </span>

                @else

                    <span class="sc-blog-eyebrow">
                        SEERAT CLUB JOURNAL
                    </span>

                @endif



                <h1>
                    {{ $blog->title }}
                </h1>



                @if($blog->excerpt)

                    <p class="sc-blog-detail-excerpt">
                        {{ $blog->excerpt }}
                    </p>

                @endif



                <div class="sc-blog-detail-meta">


                    @if($blog->author_name)

                        <span>

                            <i class="far fa-user"></i>

                            {{ $blog->author_name }}

                        </span>

                    @endif


                    @if($blog->published_at)

                        <span>

                            <i class="far fa-calendar-alt"></i>

                            {{
                                $blog
                                    ->published_at
                                    ->format('d F Y')
                            }}

                        </span>

                    @endif


                </div>


            </header>



            @if($blog->featured_image)

                <figure class="sc-blog-detail-featured">

                    <img
                        src="{{
                            asset(
                                'storage/' .
                                $blog->featured_image
                            )
                        }}"
                        alt="{{ $blog->title }}"
                    >

                </figure>

            @endif


        </div>

    </section>



    {{-- =====================================================
        BLOG BODY
    ====================================================== --}}

    <section class="sc-blog-content-section">

        <div class="sc-blog-container">

            <div class="sc-blog-content-layout">


                <article class="sc-blog-content">

                    {!! $blog->content !!}

                </article>



                <aside>

                    <div class="sc-blog-sidebar-card">

                        <span class="sc-blog-eyebrow">
                            SEERAT CLUB
                        </span>

                        <h3>
                            Keep exploring the Seerah.
                        </h3>

                        <p>
                            Read more reflections, session stories
                            and experiences from the Seerat Club
                            community.
                        </p>

                        <a
                            href="{{ route('blog.index') }}"
                            class="sc-blog-btn"
                        >
                            Explore the journal
                        </a>

                    </div>

                </aside>


            </div>

        </div>

    </section>



    {{-- =====================================================
        RELATED BLOGS
    ====================================================== --}}

    @if($relatedBlogs->count())

        <section class="sc-blog-related">

            <div class="sc-blog-container">


                <div class="sc-blog-heading">

                    <span class="sc-blog-eyebrow">
                        CONTINUE READING
                    </span>

                    <h2>
                        Related stories.
                    </h2>

                </div>



                <div class="sc-blog-grid">


                    @foreach($relatedBlogs as $relatedBlog)


                        <article class="sc-blog-card">


                            <a
                                href="{{
                                    route(
                                        'blog.show',
                                        $relatedBlog
                                    )
                                }}"
                                class="sc-blog-card-image"
                            >

                                @if($relatedBlog->featured_image)

                                    <img
                                        src="{{
                                            asset(
                                                'storage/' .
                                                $relatedBlog
                                                    ->featured_image
                                            )
                                        }}"
                                        alt="{{
                                            $relatedBlog->title
                                        }}"
                                        loading="lazy"
                                    >

                                @else

                                    <div
                                        class="
                                            sc-blog-card-placeholder
                                        "
                                    ></div>

                                @endif

                            </a>



                            <div class="sc-blog-card-body">


                                <div class="sc-blog-card-meta">

                                    @if($relatedBlog->category)

                                        <span>
                                            {{
                                                $relatedBlog
                                                    ->category
                                                    ->name
                                            }}
                                        </span>

                                    @endif


                                    @if($relatedBlog->published_at)

                                        <span>

                                            {{
                                                $relatedBlog
                                                    ->published_at
                                                    ->format('d M Y')
                                            }}

                                        </span>

                                    @endif

                                </div>



                                <h3>

                                    <a
                                        href="{{
                                            route(
                                                'blog.show',
                                                $relatedBlog
                                            )
                                        }}"
                                    >
                                        {{
                                            $relatedBlog->title
                                        }}
                                    </a>

                                </h3>



                                <p>

                                    {{
                                        $relatedBlog->excerpt
                                        ?:
                                        \Illuminate\Support\Str::limit(
                                            strip_tags(
                                                $relatedBlog->content
                                            ),
                                            140
                                        )
                                    }}

                                </p>



                                <a
                                    href="{{
                                        route(
                                            'blog.show',
                                            $relatedBlog
                                        )
                                    }}"
                                    class="sc-blog-read-more"
                                >

                                    Read story

                                    <i
                                        class="
                                            fas fa-arrow-right
                                        "
                                    ></i>

                                </a>


                            </div>


                        </article>


                    @endforeach


                </div>


            </div>

        </section>

    @endif


</div>

@endsection
