<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('includes.meta_css_script')
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        @include('components.top_navigation_bar')
        <!-- Header Menu Area End Here -->


        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">

            @include('components.sidebar')

            @yield('main_page')

        </div>
        <!-- Page Area End Here -->
    </div>

    @include('includes.script_links')

</body>

</html>
