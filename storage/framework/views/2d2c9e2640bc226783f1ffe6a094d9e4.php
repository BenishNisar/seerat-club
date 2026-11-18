<?php $__env->startSection('title', 'Blog · Seerat Club'); ?>

<?php $__env->startSection("Content"); ?>

<link
    rel="stylesheet"
    href="<?php echo e(asset('assets/css/blog.css')); ?>"
>


<div class="sc-blog-page">


    

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



    

    <section class="sc-blog-tools">

        <div class="sc-blog-container">

            <div class="sc-blog-tools-inner">


                <div class="sc-blog-categories">

                    <a
                        href="<?php echo e(route('blog.index')); ?>"
                        class="
                            sc-blog-category
                            <?php echo e(!request('category') ? 'active' : ''); ?>

                        "
                    >
                        All Stories
                    </a>


                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <a
                            href="<?php echo e(route(
                                    'blog.index',
                                    [
                                        'category' => $category->slug
                                    ]
                                )); ?>"
                            class="
                                sc-blog-category
                                <?php echo e(request('category') === $category->slug
                                        ? 'active'
                                        : ''); ?>

                            "
                        >
                            <?php echo e($category->name); ?>

                        </a>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>



                <form
                    class="sc-blog-search"
                    action="<?php echo e(route('blog.index')); ?>"
                    method="GET"
                >

                    <?php if(request('category')): ?>

                        <input
                            type="hidden"
                            name="category"
                            value="<?php echo e(request('category')); ?>"
                        >

                    <?php endif; ?>


                    <input
                        type="search"
                        name="search"
                        value="<?php echo e(request('search')); ?>"
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



    

    <?php if($featuredBlog): ?>

        <section class="sc-blog-featured-section">

            <div class="sc-blog-container">

                <article class="sc-blog-featured">


                    <a
                        href="<?php echo e(route('blog.show', $featuredBlog)); ?>"
                        class="sc-blog-featured-image"
                    >

                        <?php if($featuredBlog->featured_image): ?>

                            <img
                                src="<?php echo e(asset(
                                        'storage/' .
                                        $featuredBlog->featured_image
                                    )); ?>"
                                alt="<?php echo e($featuredBlog->title); ?>"
                            >

                        <?php else: ?>

                            <div
                                class="sc-blog-featured-placeholder"
                            ></div>

                        <?php endif; ?>

                    </a>



                    <div class="sc-blog-featured-content">

                        <span class="sc-blog-eyebrow">
                            FEATURED STORY
                        </span>


                        <div class="sc-blog-featured-meta">

                            <?php if($featuredBlog->category): ?>

                                <span>
                                    <?php echo e($featuredBlog->category->name); ?>

                                </span>

                            <?php endif; ?>


                            <?php if($featuredBlog->published_at): ?>

                                <span>
                                    <?php echo e($featuredBlog
                                            ->published_at
                                            ->format('d F Y')); ?>

                                </span>

                            <?php endif; ?>

                        </div>


                        <h2>

                            <a
                                href="<?php echo e(route(
                                        'blog.show',
                                        $featuredBlog
                                    )); ?>"
                            >
                                <?php echo e($featuredBlog->title); ?>

                            </a>

                        </h2>


                        <p>

                            <?php echo e($featuredBlog->excerpt
                                ?:
                                \Illuminate\Support\Str::limit(
                                    strip_tags(
                                        $featuredBlog->content
                                    ),
                                    220
                                )); ?>


                        </p>


                        <a
                            href="<?php echo e(route(
                                    'blog.show',
                                    $featuredBlog
                                )); ?>"
                            class="sc-blog-btn"
                        >

                            Read the story

                            <i class="fas fa-arrow-right"></i>

                        </a>

                    </div>


                </article>

            </div>

        </section>

    <?php endif; ?>



    

    <section class="sc-blog-list-section">

        <div class="sc-blog-container">


            <div class="sc-blog-heading">

                <span class="sc-blog-eyebrow">

                    <?php if(request('search')): ?>

                        SEARCH RESULTS

                    <?php elseif(request('category')): ?>

                        EXPLORE STORIES

                    <?php else: ?>

                        FROM THE JOURNAL

                    <?php endif; ?>

                </span>


                <h2>

                    <?php if(request('search')): ?>

                        Results for
                        “<?php echo e(request('search')); ?>”

                    <?php else: ?>

                        Latest stories.

                    <?php endif; ?>

                </h2>

            </div>



            <div class="sc-blog-grid">


                <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                    <article class="sc-blog-card">


                        <a
                            href="<?php echo e(route('blog.show', $blog)); ?>"
                            class="sc-blog-card-image"
                        >

                            <?php if($blog->featured_image): ?>

                                <img
                                    src="<?php echo e(asset(
                                            'storage/' .
                                            $blog->featured_image
                                        )); ?>"
                                    alt="<?php echo e($blog->title); ?>"
                                    loading="lazy"
                                >

                            <?php else: ?>

                                <div
                                    class="sc-blog-card-placeholder"
                                ></div>

                            <?php endif; ?>

                        </a>



                        <div class="sc-blog-card-body">


                            <div class="sc-blog-card-meta">


                                <?php if($blog->category): ?>

                                    <span>
                                        <?php echo e($blog->category->name); ?>

                                    </span>

                                <?php endif; ?>


                                <?php if($blog->published_at): ?>

                                    <span>

                                        <?php echo e($blog
                                                ->published_at
                                                ->format('d M Y')); ?>


                                    </span>

                                <?php endif; ?>


                            </div>



                            <h3>

                                <a
                                    href="<?php echo e(route(
                                            'blog.show',
                                            $blog
                                        )); ?>"
                                >
                                    <?php echo e($blog->title); ?>

                                </a>

                            </h3>



                            <p>

                                <?php echo e($blog->excerpt
                                    ?:
                                    \Illuminate\Support\Str::limit(
                                        strip_tags($blog->content),
                                        150
                                    )); ?>


                            </p>



                            <a
                                href="<?php echo e(route(
                                        'blog.show',
                                        $blog
                                    )); ?>"
                                class="sc-blog-read-more"
                            >

                                Read full story

                                <i class="fas fa-arrow-right"></i>

                            </a>


                        </div>


                    </article>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


                    <div class="sc-blog-empty">

                        <h3>
                            No stories found.
                        </h3>

                        <p>
                            Try another category or search term.
                        </p>

                        <a
                            href="<?php echo e(route('blog.index')); ?>"
                            class="sc-blog-btn"
                        >
                            View all stories
                        </a>

                    </div>


                <?php endif; ?>


            </div>



            <?php if($blogs->hasPages()): ?>

                <div class="sc-blog-pagination">

                    <?php echo e($blogs->onEachSide(1)->links()); ?>


                </div>

            <?php endif; ?>


        </div>

    </section>


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("Layout.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/blog/index.blade.php ENDPATH**/ ?>