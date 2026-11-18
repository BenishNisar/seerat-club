<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>
        @yield('title', 'Dashboard') · Seerat Club
    </title>


    <style>

        :root {

            --ink: #18352e;
            --ink-2: #244b41;
            --ink-3: #2d5b4e;

            --sage: #e9eee8;
            --cream: #f7f3e9;
            --paper: #fffdf8;

            --gold: #b8954f;
            --gold-soft: #e4d2a2;

            --muted: #6d7974;
            --line: #dce3dd;

            --danger: #9f3d36;

            --sidebar-width: 278px;

            --shadow:
                0 18px 50px
                rgba(22, 54, 46, .08);

            --shadow-soft:
                0 10px 30px
                rgba(22, 54, 46, .06);
        }


        * {
            box-sizing: border-box;
        }


        html {
            scroll-behavior: smooth;
        }


        body {
            margin: 0;

            background:
                linear-gradient(
                    135deg,
                    #f5f7f4,
                    #f7f5ef
                );

            color: var(--ink);

            font-family:
                Inter,
                ui-sans-serif,
                system-ui,
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                sans-serif;

            -webkit-font-smoothing: antialiased;
        }


        a {
            color: inherit;
            text-decoration: none;
        }


        button,
        input,
        textarea,
        select {
            font: inherit;
        }


        /*
        |--------------------------------------------------------------------------
        | ADMIN SHELL
        |--------------------------------------------------------------------------
        */

        .admin-shell {
            min-height: 100vh;

            display: grid;

            grid-template-columns:
                var(--sidebar-width)
                minmax(0, 1fr);
        }


        /*
        |--------------------------------------------------------------------------
        | SIDEBAR
        |--------------------------------------------------------------------------
        */

        .sidebar {
            position: sticky;

            top: 0;

            height: 100vh;

            overflow-y: auto;

            padding: 22px 16px;

            color: #eef5f1;

            background:
                radial-gradient(
                    circle at top right,
                    rgba(184, 149, 79, .14),
                    transparent 32%
                ),
                linear-gradient(
                    180deg,
                    #173b31 0%,
                    #102d26 100%
                );

            z-index: 40;

            scrollbar-width: thin;
        }


        .sidebar::-webkit-scrollbar {
            width: 5px;
        }


        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255,255,255,.16);
            border-radius: 99px;
        }


        /*
        |--------------------------------------------------------------------------
        | BRAND
        |--------------------------------------------------------------------------
        */

        .brand {
            display: flex;

            align-items: center;

            gap: 13px;

            padding:
                5px
                8px
                22px;

            margin-bottom: 14px;

            border-bottom:
                1px solid
                rgba(255,255,255,.11);
        }


        .brand-mark {
            width: 46px;
            height: 46px;

            flex: 0 0 46px;

            display: grid;

            place-items: center;

            border-radius: 15px;

            background:
                linear-gradient(
                    135deg,
                    #ead9a9,
                    #c6a55f
                );

            color: #173b31;

            font-family: Georgia, serif;

            font-size: 16px;

            font-weight: 900;

            box-shadow:
                0 8px 25px
                rgba(0,0,0,.12);
        }


        .brand-copy {
            min-width: 0;
        }


        .brand strong {
            display: block;

            color: #ffffff;

            font-size: 16px;

            line-height: 1.2;
        }


        .brand small {
            display: block;

            margin-top: 4px;

            color: rgba(255,255,255,.58);

            font-size: 9px;

            font-weight: 700;

            letter-spacing: .16em;
        }


        /*
        |--------------------------------------------------------------------------
        | SIDEBAR NAV
        |--------------------------------------------------------------------------
        */

        .nav-group {
            padding:
                18px
                12px
                8px;

            color: rgba(255,255,255,.45);

            font-size: 9px;

            font-weight: 800;

            letter-spacing: .17em;

            text-transform: uppercase;
        }


        .nav-link {
            position: relative;

            display: flex;

            align-items: center;

            gap: 11px;

            min-height: 44px;

            margin: 3px 0;

            padding:
                10px
                12px;

            border-radius: 12px;

            color: #dfe9e4;

            font-size: 13px;

            font-weight: 600;

            transition:
                background .2s ease,
                color .2s ease,
                transform .2s ease;
        }


        .nav-link:hover {
            color: #ffffff;

            background:
                rgba(255,255,255,.075);

            transform:
                translateX(2px);
        }


        .nav-link.active {
            color: #ffffff;

            background:
                linear-gradient(
                    90deg,
                    rgba(255,255,255,.13),
                    rgba(255,255,255,.065)
                );

            box-shadow:
                inset 0 0 0 1px
                rgba(255,255,255,.055);
        }


        .nav-link.active::before {
            content: "";

            position: absolute;

            left: 0;

            top: 10px;

            bottom: 10px;

            width: 3px;

            border-radius: 999px;

            background:
                var(--gold-soft);
        }


        .nav-icon {
            width: 28px;
            height: 28px;

            flex: 0 0 28px;

            display: grid;

            place-items: center;

            border-radius: 9px;

            background:
                rgba(255,255,255,.07);

            color: #e3cc90;

            font-size: 12px;

            font-weight: 900;

            transition: .2s ease;
        }


        .nav-link:hover .nav-icon,
        .nav-link.active .nav-icon {
            color: #173b31;

            background:
                var(--gold-soft);
        }


        .nav-text {
            flex: 1;
        }


        /*
        |--------------------------------------------------------------------------
        | SIDEBAR FOOTER
        |--------------------------------------------------------------------------
        */

        .sidebar-footer {
            margin-top: 25px;

            padding: 15px;

            border:
                1px solid
                rgba(255,255,255,.09);

            border-radius: 15px;

            background:
                rgba(255,255,255,.045);
        }


        .sidebar-footer small {
            display: block;

            color: rgba(255,255,255,.5);

            font-size: 10px;

            line-height: 1.6;
        }


        /*
        |--------------------------------------------------------------------------
        | MAIN
        |--------------------------------------------------------------------------
        */

        .main {
            min-width: 0;
        }


        /*
        |--------------------------------------------------------------------------
        | TOPBAR
        |--------------------------------------------------------------------------
        */

        .topbar {
            position: sticky;

            top: 0;

            z-index: 30;

            min-height: 72px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            padding:
                0
                28px;

            border-bottom:
                1px solid
                rgba(220, 227, 221, .9);

            background:
                rgba(255,255,255,.90);

            backdrop-filter:
                blur(15px);

            box-shadow:
                0 5px 20px
                rgba(22,54,46,.025);
        }


        .topbar-left {
            display: flex;

            align-items: center;

            gap: 13px;

            min-width: 0;
        }


        .topbar-title {
            min-width: 0;
        }


        .topbar-title strong {
            display: block;

            overflow: hidden;

            color: var(--ink);

            font-size: 14px;

            text-overflow: ellipsis;

            white-space: nowrap;
        }


        .topbar-title small {
            display: block;

            margin-top: 2px;

            color: var(--muted);

            font-size: 10px;
        }


        .menu-btn {
            display: none;

            width: 40px;
            height: 40px;

            border: 0;

            border-radius: 11px;

            background:
                var(--sage);

            color: var(--ink);

            cursor: pointer;

            font-size: 18px;
        }


        /*
        |--------------------------------------------------------------------------
        | USER MENU
        |--------------------------------------------------------------------------
        */

        .user-menu {
            display: flex;

            align-items: center;

            gap: 11px;
        }


        .user-info {
            max-width: 180px;
        }


        .user-info strong {
            display: block;

            overflow: hidden;

            color: var(--ink);

            font-size: 12px;

            text-overflow: ellipsis;

            white-space: nowrap;
        }


        .user-info .muted {
            overflow: hidden;

            font-size: 10px;

            text-overflow: ellipsis;

            white-space: nowrap;
        }


        .avatar {
            width: 39px;
            height: 39px;

            flex: 0 0 39px;

            display: grid;

            place-items: center;

            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    var(--ink),
                    var(--ink-2)
                );

            color: #ffffff;

            font-size: 14px;

            font-weight: 800;

            box-shadow:
                0 8px 20px
                rgba(22,54,46,.13);
        }


        /*
        |--------------------------------------------------------------------------
        | CONTENT
        |--------------------------------------------------------------------------
        */

        .content {
            width: 100%;

            max-width: 1500px;

            margin: 0 auto;

            padding: 31px;
        }


        /*
        |--------------------------------------------------------------------------
        | PAGE HEADER
        |--------------------------------------------------------------------------
        */

        .page-head {
            display: flex;

            align-items: flex-end;

            justify-content: space-between;

            gap: 20px;

            margin-bottom: 25px;
        }


        .page-head h1 {
            margin: 0;

            color: var(--ink);

            font-family:
                Georgia,
                serif;

            font-size: 32px;

            letter-spacing: -.02em;
        }


        .page-head p {
            margin:
                6px
                0
                0;

            color: var(--muted);

            font-size: 13px;
        }


        /*
        |--------------------------------------------------------------------------
        | GRID
        |--------------------------------------------------------------------------
        */

        .grid {
            display: grid;

            gap: 18px;
        }


        .stats {
            grid-template-columns:
                repeat(
                    4,
                    minmax(0, 1fr)
                );

            margin-bottom: 24px;
        }


        .two {
            grid-template-columns:
                1.2fr
                .8fr;
        }


        .three {
            grid-template-columns:
                repeat(3, 1fr);
        }


        /*
        |--------------------------------------------------------------------------
        | CARDS
        |--------------------------------------------------------------------------
        */

        .card {
            overflow: hidden;

            border:
                1px solid
                var(--line);

            border-radius: 19px;

            background:
                var(--paper);

            box-shadow:
                var(--shadow);
        }


        .stat {
            position: relative;

            padding: 22px;
        }


        .stat::after {
            content: "";

            position: absolute;

            top: 0;

            right: 0;

            width: 65px;
            height: 65px;

            border-radius:
                0
                0
                0
                70px;

            background:
                rgba(184,149,79,.08);
        }


        .stat small {
            color: var(--muted);

            font-size: 11px;

            font-weight: 800;

            letter-spacing: .09em;

            text-transform: uppercase;
        }


        .stat strong {
            display: block;

            margin-top: 8px;

            color: var(--ink);

            font-size: 30px;
        }


        .stat span {
            color: #7a877f;

            font-size: 11px;
        }


        .panel {
            padding: 22px;
        }


        .panel h2 {
            margin:
                0
                0
                16px;

            font-size: 18px;
        }


        /*
        |--------------------------------------------------------------------------
        | TOOLBAR
        |--------------------------------------------------------------------------
        */

        .toolbar {
            display: flex;

            flex-wrap: wrap;

            gap: 10px;

            margin-bottom: 16px;
        }


        /*
        |--------------------------------------------------------------------------
        | INPUTS
        |--------------------------------------------------------------------------
        */

        .input,
        .select,
        .textarea {
            width: 100%;

            border:
                1px solid
                #cfd8d1;

            border-radius: 11px;

            outline: 0;

            padding:
                11px
                12px;

            background: #ffffff;

            color: var(--ink);

            transition:
                border .2s ease,
                box-shadow .2s ease;
        }


        .input:focus,
        .select:focus,
        .textarea:focus {
            border-color: #739486;

            box-shadow:
                0 0 0 3px
                rgba(115,148,134,.15);
        }


        .textarea {
            min-height: 120px;

            resize: vertical;
        }


        .toolbar .input,
        .toolbar .select {
            width: auto;

            min-width: 170px;
        }


        /*
        |--------------------------------------------------------------------------
        | BUTTONS
        |--------------------------------------------------------------------------
        */

        .btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            border: 0;

            border-radius: 11px;

            padding:
                10px
                15px;

            cursor: pointer;

            font-size: 12px;

            font-weight: 800;

            transition:
                transform .18s ease,
                background .18s ease,
                color .18s ease;
        }


        .btn:hover {
            transform:
                translateY(-1px);
        }


        .btn-primary {
            background:
                var(--ink);

            color: #ffffff;
        }


        .btn-primary:hover {
            background:
                var(--ink-2);
        }


        .btn-secondary {
            background:
                #edf1ed;

            color:
                var(--ink);
        }


        .btn-danger {
            background:
                #f7e7e5;

            color:
                var(--danger);
        }


        .btn-gold {
            background:
                #e2c783;

            color:
                #21382f;
        }


        /*
        |--------------------------------------------------------------------------
        | TABLE
        |--------------------------------------------------------------------------
        */

        .table-wrap {
            overflow-x: auto;

            border:
                1px solid
                var(--line);

            border-radius: 15px;

            background: #ffffff;
        }


        .table {
            width: 100%;

            min-width: 760px;

            border-collapse: collapse;

            background: #ffffff;
        }


        .table th,
        .table td {
            padding:
                13px
                14px;

            border-bottom:
                1px solid
                #e7ece8;

            text-align: left;

            vertical-align: middle;

            font-size: 12px;
        }


        .table th {
            background:
                #f7f9f7;

            color:
                #748078;

            font-size: 10px;

            font-weight: 800;

            letter-spacing: .08em;

            text-transform: uppercase;
        }


        .table tbody tr {
            transition:
                background .15s ease;
        }


        .table tbody tr:hover {
            background:
                #fbfcfa;
        }


        .table tr:last-child td {
            border-bottom: 0;
        }


        .table a.link {
            color:
                #285c4d;

            font-weight: 800;
        }


        /*
        |--------------------------------------------------------------------------
        | BADGES
        |--------------------------------------------------------------------------
        */

        .badge {
            display: inline-flex;

            align-items: center;

            border-radius: 999px;

            padding:
                5px
                9px;

            background:
                #e8efeb;

            color:
                #365e51;

            font-size: 10px;

            font-weight: 800;
        }


        .badge.warn {
            background:
                #fff1cc;

            color:
                #75571a;
        }


        .badge.red {
            background:
                #f8e1df;

            color:
                #8a3932;
        }


        .badge.blue {
            background:
                #e5eef7;

            color:
                #355b78;
        }


        /*
        |--------------------------------------------------------------------------
        | FORMS
        |--------------------------------------------------------------------------
        */

        .form-grid {
            display: grid;

            grid-template-columns:
                repeat(
                    2,
                    minmax(0,1fr)
                );

            gap: 16px;
        }


        .field label {
            display: block;

            margin-bottom: 7px;

            color:
                #3f514a;

            font-size: 11px;

            font-weight: 800;
        }


        .field.full {
            grid-column:
                1 / -1;
        }


        .checks {
            display: flex;

            flex-wrap: wrap;

            gap: 12px;
        }


        .check {
            display: flex;

            align-items: center;

            gap: 7px;

            font-size: 12px;
        }


        /*
        |--------------------------------------------------------------------------
        | FLASH
        |--------------------------------------------------------------------------
        */

        .flash {
            margin-bottom: 18px;

            padding:
                12px
                15px;

            border:
                1px solid
                #c9e4d0;

            border-radius: 11px;

            background:
                #e4f2e8;

            color:
                #1f6840;

            font-size: 13px;
        }


        .error-list {
            margin-bottom: 18px;

            padding:
                12px
                15px;

            border:
                1px solid
                #f1c8c3;

            border-radius: 11px;

            background:
                #fae8e6;

            color:
                #8d3832;

            font-size: 13px;
        }


        /*
        |--------------------------------------------------------------------------
        | COMMON HELPERS
        |--------------------------------------------------------------------------
        */

        .empty {
            padding: 30px;

            color:
                var(--muted);

            text-align: center;
        }


        .detail-list {
            display: grid;

            grid-template-columns:
                180px
                1fr;

            gap: 0;
        }


        .detail-list div {
            padding:
                11px
                0;

            border-bottom:
                1px solid
                var(--line);
        }


        .detail-list .key {
            color:
                #637169;

            font-size: 11px;

            font-weight: 800;
        }


        .detail-list .value {
            font-size: 13px;
        }


        .media-grid {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 12px;
        }


        .media-card {
            overflow: hidden;

            border:
                1px solid
                var(--line);

            border-radius: 14px;

            background:
                #ffffff;
        }


        .media-card img {
            display: block;

            width: 100%;
            height: 160px;

            object-fit: cover;
        }


        .media-card .actions {
            padding: 9px;
        }


        .danger-zone {
            border-color:
                #eed4d0;

            background:
                #fffafa;
        }


        .muted {
            color:
                var(--muted);
        }


        .inline {
            display: inline;
        }


        .mb16 {
            margin-bottom: 16px;
        }


        .mt16 {
            margin-top: 16px;
        }


        .quick-actions {
            display: flex;

            flex-wrap: wrap;

            gap: 10px;
        }


        /*
        |--------------------------------------------------------------------------
        | CHART
        |--------------------------------------------------------------------------
        */

        .trend {
            display: grid;

            grid-template-columns:
                repeat(6, 1fr);

            gap: 14px;

            align-items: end;

            min-height: 190px;

            padding-top: 18px;
        }


        .trend-col {
            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: flex-end;

            gap: 8px;

            height: 170px;
        }


        .trend-bar {
            position: relative;

            width:
                min(54px, 80%);

            min-height: 5px;

            border-radius:
                12px
                12px
                4px
                4px;

            background:
                linear-gradient(
                    180deg,
                    #b8954f,
                    #244b41
                );
        }


        .trend-value {
            font-size: 10px;

            font-weight: 800;
        }


        .trend-label {
            color:
                var(--muted);

            font-size: 10px;

            font-weight: 800;

            letter-spacing: .05em;

            text-transform: uppercase;
        }


        /*
        |--------------------------------------------------------------------------
        | MOBILE OVERLAY
        |--------------------------------------------------------------------------
        */

        .sidebar-overlay {
            position: fixed;

            inset: 0;

            z-index: 35;

            visibility: hidden;

            opacity: 0;

            background:
                rgba(7, 20, 16, .46);

            backdrop-filter:
                blur(2px);

            transition:
                .25s ease;
        }


        .sidebar-overlay.show {
            visibility: visible;

            opacity: 1;
        }


        /*
        |--------------------------------------------------------------------------
        | RESPONSIVE
        |--------------------------------------------------------------------------
        */

        @media (
            max-width: 1100px
        ) {

            .stats {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .two {
                grid-template-columns:
                    1fr;
            }

            .media-grid {
                grid-template-columns:
                    repeat(3, 1fr);
            }
        }


        @media (
            max-width: 820px
        ) {

            .admin-shell {
                grid-template-columns:
                    1fr;
            }


            .sidebar {
                position: fixed;

                left:
                    calc(
                        var(--sidebar-width)
                        * -1
                        - 15px
                    );

                width:
                    var(--sidebar-width);

                transition:
                    left .25s ease;
            }


            .sidebar.open {
                left: 0;
            }


            .menu-btn {
                display:
                    inline-grid;

                place-items:
                    center;
            }


            .content {
                padding: 20px;
            }


            .form-grid {
                grid-template-columns:
                    1fr;
            }


            .field.full {
                grid-column:
                    auto;
            }


            .topbar {
                padding:
                    0
                    18px;
            }


            .page-head {
                align-items:
                    flex-start;

                flex-direction:
                    column;
            }


            .media-grid {
                grid-template-columns:
                    repeat(2,1fr);
            }

        }


        @media (
            max-width: 600px
        ) {

            .user-info {
                display: none;
            }


            .user-menu form .btn {
                padding:
                    9px
                    11px;
            }


            .topbar-title small {
                display: none;
            }

        }


        @media (
            max-width: 520px
        ) {

            .stats {
                grid-template-columns:
                    1fr;
            }


            .content {
                padding: 16px;
            }


            .toolbar .input,
            .toolbar .select {
                width: 100%;
            }


            .media-grid {
                grid-template-columns:
                    1fr;
            }


            .detail-list {
                grid-template-columns:
                    1fr;
            }


            .detail-list .key {
                padding-bottom: 2px;
            }


            .detail-list .value {
                padding-top: 2px;
            }

        }

    </style>


    @stack('head')

</head>


<body>


<div class="admin-shell">


    {{-- ======================================================
        SIDEBAR
    ======================================================= --}}

    <aside
        class="sidebar"
        id="sidebar"
    >


        {{-- BRAND --}}

        <div class="brand">

            <div class="brand-mark">
                SC
            </div>


            <div class="brand-copy">

                <strong>
                    Seerat Club
                </strong>

                <small>
                    ADMINISTRATION
                </small>

            </div>

        </div>



        {{-- ==================================================
            OVERVIEW
        =================================================== --}}

        <div class="nav-group">
            Overview
        </div>


        <a
            class="nav-link {{
                request()->routeIs('admin.dashboard')
                    ? 'active'
                    : ''
            }}"
            href="{{ route('admin.dashboard') }}"
        >

            <span class="nav-icon">
                D
            </span>

            <span class="nav-text">
                Dashboard
            </span>

        </a>



        {{-- ==================================================
            CONTENT
        =================================================== --}}

        @if(
            auth()->user()->hasPermission('content.manage')
            ||
            auth()->user()->hasPermission('media.manage')
        )

            <div class="nav-group">
                Content
            </div>

        @endif



        {{-- WEBSITE CONTENT --}}

        @if(
            auth()->user()->hasPermission(
                'content.manage'
            )
        )

            <a
                class="nav-link {{
                    request()->routeIs(
                        'admin.content.*'
                    )
                        ? 'active'
                        : ''
                }}"
                href="{{
                    route(
                        'admin.content.index'
                    )
                }}"
            >

                <span class="nav-icon">
                    W
                </span>

                <span class="nav-text">
                    Website Content
                </span>

            </a>



            {{-- BLOGS --}}

            <a
                class="nav-link {{
                    request()->routeIs(
                        'admin.blogs.*'
                    )
                        ? 'active'
                        : ''
                }}"
                href="{{
                    route(
                        'admin.blogs.index'
                    )
                }}"
            >

                <span class="nav-icon">
                    B
                </span>

                <span class="nav-text">
                    Blogs
                </span>

            </a>



            {{-- BLOG CATEGORIES --}}

            <a
                class="nav-link {{
                    request()->routeIs(
                        'admin.blog-categories.*'
                    )
                        ? 'active'
                        : ''
                }}"
                href="{{
                    route(
                        'admin.blog-categories.index'
                    )
                }}"
            >

                <span class="nav-icon">
                    C
                </span>

                <span class="nav-text">
                    Blog Categories
                </span>

            </a>

        @endif



        {{-- MEDIA LIBRARY --}}

        @if(
            auth()->user()->hasPermission(
                'media.manage'
            )
        )

            <a
                class="nav-link {{
                    request()->routeIs(
                        'admin.media.*'
                    )
                        ? 'active'
                        : ''
                }}"
                href="{{
                    route(
                        'admin.media.index'
                    )
                }}"
            >

                <span class="nav-icon">
                    M
                </span>

                <span class="nav-text">
                    Media Library
                </span>

            </a>

        @endif



        {{-- ==================================================
            SUBMISSIONS
        =================================================== --}}

        @if(
            auth()->user()->hasPermission(
                'registrations.manage'
            )
            ||
            auth()->user()->hasPermission(
                'contacts.manage'
            )
            ||
            auth()->user()->hasPermission(
                'volunteers.manage'
            )
        )

            <div class="nav-group">
                Submissions
            </div>

        @endif



        @if(
            auth()->user()->hasPermission(
                'registrations.manage'
            )
        )

            <a
                class="nav-link {{
                    request()->routeIs(
                        'admin.registrations.*'
                    )
                        ? 'active'
                        : ''
                }}"
                href="{{
                    route(
                        'admin.registrations.index'
                    )
                }}"
            >

                <span class="nav-icon">
                    R
                </span>

                <span class="nav-text">
                    Registrations
                </span>

            </a>



            <a
                class="nav-link {{
                    request()->routeIs(
                        'admin.girls.*'
                    )
                        ? 'active'
                        : ''
                }}"
                href="{{
                    route(
                        'admin.girls.index'
                    )
                }}"
            >

                <span class="nav-icon">
                    G
                </span>

                <span class="nav-text">
                    Girls Registrations
                </span>

            </a>

        @endif



        @if(
            auth()->user()->hasPermission(
                'contacts.manage'
            )
        )

            <a
                class="nav-link {{
                    request()->routeIs(
                        'admin.contacts.*'
                    )
                        ? 'active'
                        : ''
                }}"
                href="{{
                    route(
                        'admin.contacts.index'
                    )
                }}"
            >

                <span class="nav-icon">
                    I
                </span>

                <span class="nav-text">
                    Contact Inbox
                </span>

            </a>

            <a
                class="nav-link {{ request()->routeIs('admin.feedback.*') ? 'active' : '' }}"
                href="{{ route('admin.feedback.index') }}"
            >
                <span class="nav-icon">F</span>
                <span class="nav-text">Feedback Inbox</span>
            </a>

        @endif



        @if(
            auth()->user()->hasPermission(
                'volunteers.manage'
            )
        )

            <a
                class="nav-link {{
                    request()->routeIs(
                        'admin.volunteers.*'
                    )
                        ? 'active'
                        : ''
                }}"
                href="{{
                    route(
                        'admin.volunteers.index'
                    )
                }}"
            >

                <span class="nav-icon">
                    V
                </span>

                <span class="nav-text">
                    Volunteers
                </span>

            </a>

        @endif



        {{-- ==================================================
            ADMINISTRATION
        =================================================== --}}

        @if(
            auth()->user()->hasPermission(
                'users.manage'
            )
            ||
            auth()->user()->hasPermission(
                'settings.manage'
            )
            ||
            auth()->user()->hasPermission(
                'seo.manage'
            )
            ||
            auth()->user()->hasPermission(
                'activity.view'
            )
        )

            <div class="nav-group">
                Administration
            </div>

        @endif



        @if(
            auth()->user()->hasPermission(
                'users.manage'
            )
        )

            <a
                class="nav-link {{
                    request()->routeIs(
                        'admin.users.*'
                    )
                        ? 'active'
                        : ''
                }}"
                href="{{
                    route(
                        'admin.users.index'
                    )
                }}"
            >

                <span class="nav-icon">
                    U
                </span>

                <span class="nav-text">
                    Admin Users
                </span>

            </a>



            <a
                class="nav-link {{
                    request()->routeIs(
                        'admin.roles.*'
                    )
                        ? 'active'
                        : ''
                }}"
                href="{{
                    route(
                        'admin.roles.index'
                    )
                }}"
            >

                <span class="nav-icon">
                    P
                </span>

                <span class="nav-text">
                    Roles & Permissions
                </span>

            </a>

        @endif



        @if(
            auth()->user()->hasPermission(
                'settings.manage'
            )
        )

            <a
                class="nav-link {{
                    request()->routeIs(
                        'admin.settings.*'
                    )
                        ? 'active'
                        : ''
                }}"
                href="{{
                    route(
                        'admin.settings.edit'
                    )
                }}"
            >

                <span class="nav-icon">
                    S
                </span>

                <span class="nav-text">
                    Website Settings
                </span>

            </a>

        @endif



        @if(
            auth()->user()->hasPermission(
                'seo.manage'
            )
        )

            <a
                class="nav-link {{
                    request()->routeIs(
                        'admin.seo.*'
                    )
                        ? 'active'
                        : ''
                }}"
                href="{{
                    route(
                        'admin.seo.index'
                    )
                }}"
            >

                <span class="nav-icon">
                    SEO
                </span>

                <span class="nav-text">
                    SEO
                </span>

            </a>

        @endif



        @if(
            auth()->user()->hasPermission(
                'activity.view'
            )
        )

            <a
                class="nav-link {{
                    request()->routeIs(
                        'admin.activity.*'
                    )
                        ? 'active'
                        : ''
                }}"
                href="{{
                    route(
                        'admin.activity.index'
                    )
                }}"
            >

                <span class="nav-icon">
                    A
                </span>

                <span class="nav-text">
                    Activity Log
                </span>

            </a>

        @endif



        {{-- ==================================================
            ACCOUNT
        =================================================== --}}

        <div class="nav-group">
            Account
        </div>


        <a
            class="nav-link {{
                request()->routeIs(
                    'admin.profile.*'
                )
                    ? 'active'
                    : ''
            }}"
            href="{{
                route(
                    'admin.profile.edit'
                )
            }}"
        >

            <span class="nav-icon">
                Me
            </span>

            <span class="nav-text">
                Profile
            </span>

        </a>



        <a
            class="nav-link"
            href="{{ route('Home.welcome') }}"
            target="_blank"
            rel="noopener"
        >

            <span class="nav-icon">
                ↗
            </span>

            <span class="nav-text">
                View Website
            </span>

        </a>



        <div class="sidebar-footer">

            <small>
                Seerat Club Administration
            </small>

            <small>
                Manage content, blogs,
                submissions and website settings.
            </small>

        </div>


    </aside>



    {{-- MOBILE SIDEBAR OVERLAY --}}

    <div
        class="sidebar-overlay"
        id="sidebarOverlay"
    ></div>



    {{-- ======================================================
        MAIN CONTENT
    ======================================================= --}}

    <main class="main">


        {{-- TOP BAR --}}

        <header class="topbar">


            <div class="topbar-left">


                <button
                    type="button"
                    class="menu-btn"
                    id="menuBtn"
                    aria-label="Toggle admin menu"
                >
                    ☰
                </button>


                <div class="topbar-title">

                    <strong>
                        @yield(
                            'section',
                            'Admin Dashboard'
                        )
                    </strong>

                    <small>
                        Seerat Club Administration
                    </small>

                </div>


            </div>



            <div class="user-menu">


                <a
                    href="{{ route('Home.welcome') }}"
                    target="_blank"
                    rel="noopener"
                    class="btn btn-secondary"
                >
                    View Site ↗
                </a>


                <div class="avatar">

                    {{
                        strtoupper(
                            substr(
                                auth()->user()->name,
                                0,
                                1
                            )
                        )
                    }}

                </div>


                <div class="user-info">

                    <strong>
                        {{ auth()->user()->name }}
                    </strong>

                    <div class="muted">
                        {{ auth()->user()->email }}
                    </div>

                </div>


                <form
                    method="POST"
                    action="{{ route('admin.logout') }}"
                >

                    @csrf

                    <button
                        class="btn btn-secondary"
                        type="submit"
                    >
                        Logout
                    </button>

                </form>


            </div>


        </header>



        {{-- PAGE CONTENT --}}

        <div class="content">


            @include(
                'admin.partials.flash'
            )


            @yield('content')


        </div>


    </main>


</div>



<script>

    const menuBtn =
        document.getElementById(
            'menuBtn'
        );

    const sidebar =
        document.getElementById(
            'sidebar'
        );

    const overlay =
        document.getElementById(
            'sidebarOverlay'
        );


    function openSidebar() {

        sidebar?.classList.add(
            'open'
        );

        overlay?.classList.add(
            'show'
        );

        document.body.style.overflow =
            'hidden';

    }


    function closeSidebar() {

        sidebar?.classList.remove(
            'open'
        );

        overlay?.classList.remove(
            'show'
        );

        document.body.style.overflow =
            '';

    }


    menuBtn?.addEventListener(
        'click',
        function () {

            if (
                sidebar.classList.contains(
                    'open'
                )
            ) {

                closeSidebar();

            } else {

                openSidebar();

            }

        }
    );


    overlay?.addEventListener(
        'click',
        closeSidebar
    );


    document.addEventListener(
        'keydown',
        function (event) {

            if (
                event.key === 'Escape'
            ) {

                closeSidebar();

            }

        }
    );


    window.addEventListener(
        'resize',
        function () {

            if (
                window.innerWidth > 820
            ) {

                closeSidebar();

            }

        }
    );


    document
        .querySelectorAll(
            '[data-confirm]'
        )
        .forEach(function (element) {

            element.addEventListener(
                'click',
                function (event) {

                    const message =
                        element.dataset.confirm
                        ||
                        'Are you sure?';


                    if (
                        !confirm(message)
                    ) {

                        event.preventDefault();

                    }

                }
            );

        });

</script>


@stack('scripts')


</body>

</html>
