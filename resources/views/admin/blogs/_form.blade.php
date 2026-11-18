@if($errors->any())

    <div class="admin-alert admin-alert-error">

        @foreach($errors->all() as $error)

            <div>
                {{ $error }}
            </div>

        @endforeach

    </div>

@endif


<div class="admin-card">

    <div class="admin-grid admin-grid-two">


        <div class="admin-field admin-field-full">

            <label>
                Blog Title *
            </label>

            <input
                type="text"
                name="title"
                value="{{ old('title', $blog->title ?? '') }}"
                required
            >

        </div>


        <div class="admin-field">

            <label>
                Category
            </label>

            <select name="blog_category_id">

                <option value="">
                    Select Category
                </option>

                @foreach($categories as $category)

                    <option
                        value="{{ $category->id }}"
                        @selected(
                            old(
                                'blog_category_id',
                                $blog->blog_category_id ?? ''
                            ) == $category->id
                        )
                    >
                        {{ $category->name }}
                    </option>

                @endforeach

            </select>

        </div>


        <div class="admin-field">

            <label>
                Author Name
            </label>

            <input
                type="text"
                name="author_name"
                value="{{ old(
                    'author_name',
                    $blog->author_name ?? 'Seerat Club'
                ) }}"
            >

        </div>


        <div class="admin-field admin-field-full">

            <label>
                Short Excerpt
            </label>

            <textarea
                name="excerpt"
                rows="4"
                placeholder="Short description for the blog card..."
            >{{ old('excerpt', $blog->excerpt ?? '') }}</textarea>

        </div>


        <div class="admin-field admin-field-full">

            <label>
                Blog Content *
            </label>

            <textarea
                id="summernote"
                name="content"
            >{{ old('content', $blog->content ?? '') }}</textarea>

        </div>


        <div class="admin-field">

            <label>
                Featured Image
            </label>

            <input
                type="file"
                name="featured_image"
                accept=".jpg,.jpeg,.png,.webp"
            >


            @isset($blog)

                @if($blog->featured_image)

                    <img
                        class="blog-current-image"
                        src="{{ asset('storage/' . $blog->featured_image) }}"
                        alt=""
                    >


                    <div
                        class="admin-checkbox"
                        style="margin-top:12px;"
                    >

                        <input
                            id="remove_featured_image"
                            type="checkbox"
                            name="remove_featured_image"
                            value="1"
                        >

                        <label
                            for="remove_featured_image"
                            style="margin:0;"
                        >
                            Remove current image
                        </label>

                    </div>

                @endif

            @endisset

        </div>


        <div class="admin-field">

            <label>
                Status *
            </label>

            <select
                name="status"
                required
            >

                <option
                    value="draft"
                    @selected(
                        old(
                            'status',
                            $blog->status ?? 'draft'
                        ) === 'draft'
                    )
                >
                    Draft
                </option>


                <option
                    value="published"
                    @selected(
                        old(
                            'status',
                            $blog->status ?? ''
                        ) === 'published'
                    )
                >
                    Published
                </option>

            </select>

        </div>


        <div class="admin-field">

            <label>
                Published Date
            </label>

            <input
                type="datetime-local"
                name="published_at"
                value="{{
                    old(
                        'published_at',
                        isset($blog) && $blog->published_at
                            ? $blog->published_at->format('Y-m-d\TH:i')
                            : ''
                    )
                }}"
            >

        </div>


        <div class="admin-field">

            <label>
                Featured Blog
            </label>

            <div class="admin-checkbox">

                <input
                    id="is_featured"
                    type="checkbox"
                    name="is_featured"
                    value="1"
                    @checked(
                        old(
                            'is_featured',
                            $blog->is_featured ?? false
                        )
                    )
                >

                <label
                    for="is_featured"
                    style="margin:0;"
                >
                    Show as featured blog
                </label>

            </div>

        </div>


        <div class="admin-field admin-field-full">

            <label>
                SEO Title
            </label>

            <input
                type="text"
                name="seo_title"
                value="{{ old(
                    'seo_title',
                    $blog->seo_title ?? ''
                ) }}"
            >

        </div>


        <div class="admin-field admin-field-full">

            <label>
                SEO Description
            </label>

            <textarea
                name="seo_description"
                rows="4"
            >{{ old(
                'seo_description',
                $blog->seo_description ?? ''
            ) }}</textarea>

        </div>


    </div>

</div>
