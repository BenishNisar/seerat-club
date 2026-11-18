@extends("Layout.layout")

@section('title', 'Blog · Seerat Club')

@section("Content")

<link
    rel="stylesheet"
    href="{{ asset('assets/css/blog.css') }}"
>


<div class="sc-blog-page">


    {{-- =====================================================
        HERO
    ====================================================== --}}

    <section class="sc-blog-hero">

        <div class="sc-blog-container">

            <div class="sc-blog-hero-inner">

                <span class="sc-blog-eyebrow">
                    SEERAT CLUB JOURNAL
                </span>

                <h1>
                    Stories that keep the learning alive.
                </h1>

                <p>
                    Reflections from our sessions, stories from our
                    community, volunteer experiences and thoughtful
                    lessons inspired by the Seerah of Prophet
                    Muhammad ﷺ.
                </p>

            </div>

        </div>

    </section>



    {{-- =====================================================
        FILTER + SEARCH
    ====================================================== --}}

    <section class="sc-blog-tools">

        <div class="sc-blog-container">

            <div class="sc-blog-tools-inner">


                <div class="sc-blog-categories">

                    <a
                        href="{{ route('blog.index') }}"
                        class="
                            sc-blog-category
                            {{ !request('category') ? 'active' : '' }}
                        "
                    >
                        All Stories
                    </a>


                    @foreach($categories as $category)

                        <a
                            href="{{
                                route(
                                    'blog.index',
                                    [
                                        'category' => $category->slug
                                    ]
                                )
                            }}"
                            class="
                                sc-blog-category
                                {{
                                    request('category') === $category->slug
                                        ? 'active'
                                        : ''
                                }}
                            "
                        >
                            {{ $category->name }}
                        </a>

                    @endforeach

                </div>



                <form
                    class="sc-blog-search"
                    action="{{ route('blog.index') }}"
                    method="GET"
                >

                    @if(request('category'))

                        <input
                            type="hidden"
                            name="category"
                            value="{{ request('category') }}"
                        >

                    @endif


                    <input
                        type="search"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search stories..."
                    >


                    <button
                        type="submit"
                        aria-label="Search"
                    >
                        <i class="fas fa-search"></i>
                    </button>

                </form>


            </div>

        </div>

    </section>



    {{-- =====================================================
        FEATURED BLOG
    ====================================================== --}}

    @if($featuredBlog)

        <section class="sc-blog-featured-section">

            <div class="sc-blog-container">

                <article class="sc-blog-featured">


                    <a
                        href="{{ route('blog.show', $featuredBlog) }}"
                        class="sc-blog-featured-image"
                    >

                        @if($featuredBlog->featured_image)

                            <img
                                src="{{
                                    asset(
                                        'storage/' .
                                        $featuredBlog->featured_image
                                    )
                                }}"
                                alt="{{ $featuredBlog->title }}"
                            >

                        @else

                            <div
                                class="sc-blog-featured-placeholder"
                            ></div>

                        @endif

                    </a>



                    <div class="sc-blog-featured-content">

                        <span class="sc-blog-eyebrow">
                            FEATURED STORY
                        </span>


                        <div class="sc-blog-featured-meta">

                            @if($featuredBlog->category)

                                <span>
                                    {{ $featuredBlog->category->name }}
                                </span>

                            @endif


                            @if($featuredBlog->published_at)

                                <span>
                                    {{
                                        $featuredBlog
                                            ->published_at
                                            ->format('d F Y')
                                    }}
                                </span>

                            @endif

                        </div>


                        <h2>

                            <a
                                href="{{
                                    route(
                                        'blog.show',
                                        $featuredBlog
                                    )
                                }}"
                            >
                                {{ $featuredBlog->title }}
                            </a>

                        </h2>


                        <p>

                            {{
                                $featuredBlog->excerpt
                                ?:
                                \Illuminate\Support\Str::limit(
                                    strip_tags(
                                        $featuredBlog->content
                                    ),
                                    220
                                )
                            }}

                        </p>


                        <a
                            href="{{
                                route(
                                    'blog.show',
                                    $featuredBlog
                                )
                            }}"
                            class="sc-blog-btn"
                        >

                            Read the story

                            <i class="fas fa-arrow-right"></i>

                        </a>

                    </div>


                </article>

            </div>

        </section>

    @endif



    {{-- =====================================================
        BLOG LIST
    ====================================================== --}}

    <section class="sc-blog-list-section">

        <div class="sc-blog-container">


            <div class="sc-blog-heading">

                <span class="sc-blog-eyebrow">

                    @if(request('search'))

                        SEARCH RESULTS

                    @elseif(request('category'))

                        EXPLORE STORIES

                    @else

                        FROM THE JOURNAL

                    @endif

                </span>


                <h2>

                    @if(request('search'))

                        Results for
                        “{{ request('search') }}”

                    @else

                        Latest stories.

                    @endif

                </h2>

            </div>



            <div class="sc-blog-grid">


                @forelse($blogs as $blog)


                    <article class="sc-blog-card">


                        <a
                            href="{{ route('blog.show', $blog) }}"
                            class="sc-blog-card-image"
                        >

                            @if($blog->featured_image)

                                <img
                                    src="{{
                                        asset(
                                            'storage/' .
                                            $blog->featured_image
                                        )
                                    }}"
                                    alt="{{ $blog->title }}"
                                    loading="lazy"
                                >

                            @else

                                <div
                                    class="sc-blog-card-placeholder"
                                ></div>

                            @endif

                        </a>



                        <div class="sc-blog-card-body">


                            <div class="sc-blog-card-meta">


                                @if($blog->category)

                                    <span>
                                        {{ $blog->category->name }}
                                    </span>

                                @endif


                                @if($blog->published_at)

                                    <span>

                                        {{
                                            $blog
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
                                            $blog
                                        )
                                    }}"
                                >
                                    {{ $blog->title }}
                                </a>

                            </h3>



                            <p>

                                {{
                                    $blog->excerpt
                                    ?:
                                    \Illuminate\Support\Str::limit(
                                        strip_tags($blog->content),
                                        150
                                    )
                                }}

                            </p>



                            <a
                                href="{{
                                    route(
                                        'blog.show',
                                        $blog
                                    )
                                }}"
                                class="sc-blog-read-more"
                            >

                                Read full story

                                <i class="fas fa-arrow-right"></i>

                            </a>


                        </div>


                    </article>


                @empty


                    <div class="sc-blog-empty">

                        <h3>
                            No stories found.
                        </h3>

                        <p>
                            Try another category or search term.
                        </p>

                        <a
                            href="{{ route('blog.index') }}"
                            class="sc-blog-btn"
                        >
                            View all stories
                        </a>

                    </div>


                @endforelse


            </div>



            @if($blogs->hasPages())

                <div class="sc-blog-pagination">

                    {{ $blogs->onEachSide(1)->links() }}

                </div>

            @endif


        </div>

    </section>


</div>

@endsection
