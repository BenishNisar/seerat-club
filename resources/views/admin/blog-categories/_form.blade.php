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

    <div class="admin-grid">


        <div class="admin-field">

            <label>
                Category Name *
            </label>

            <input
                type="text"
                name="name"
                required
                value="{{ old(
                    'name',
                    $blogCategory->name ?? ''
                ) }}"
            >

        </div>


        <div class="admin-field">

            <label>
                Description
            </label>

            <textarea
                name="description"
                rows="5"
            >{{ old(
                'description',
                $blogCategory->description ?? ''
            ) }}</textarea>

        </div>


        <div class="admin-field">

            <label>
                Sort Order
            </label>

            <input
                type="number"
                name="sort_order"
                min="0"
                value="{{ old(
                    'sort_order',
                    $blogCategory->sort_order ?? 0
                ) }}"
            >

        </div>


        <div class="admin-field">

            <div class="admin-checkbox">

                <input
                    id="is_active"
                    type="checkbox"
                    name="is_active"
                    value="1"
                    @checked(
                        old(
                            'is_active',
                            $blogCategory->is_active ?? true
                        )
                    )
                >

                <label
                    for="is_active"
                    style="margin:0;"
                >
                    Active Category
                </label>

            </div>

        </div>


    </div>

</div>
