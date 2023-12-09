@include('admin.layouts.header')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('admin') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo"
                height="60" width="60">
        </div>
        @include('admin.layouts.nav')
        @include('admin.layouts.aside')
        @yield('content')
        @include('admin.layouts.footer')>
        @include('admin.layouts.js')
