<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">

    
    @include('includes.meta_css_script')

</head>

<body>

    <div id="page-container" class="main-content-boxed">

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            @yield('content')
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
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
