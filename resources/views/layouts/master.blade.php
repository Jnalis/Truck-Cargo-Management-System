{{--
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

</html> --}}

<!doctype html>
<html lang="en">

<head>
    @include('includes.meta_css_script')
</head>

<body>

    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
        <!-- Sidebar -->
        @include('components.sidebar')
        <!-- END Sidebar -->

        <!-- Header -->
        @include('components.top_navigation_bar')
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="content">

                @yield('main_page')

            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        @include('includes.footer')
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        Codebase JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->

    @include('includes.script_links')
</body>

</html>
