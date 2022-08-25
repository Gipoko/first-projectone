<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Mar 2021 16:24:43 GMT -->
<head>

        <meta charset="utf-8" name="csrf-token" content="{{ csrf_token() }}" />
        <title>Dashboard | Skote - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
       
        @include('script.headlink')

    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

        @include('layouts.topbar')
        @include('layouts.navigation')

            

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        </div>
        <!-- END layout-wrapper -->

       

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

   
       
    </body>
    @include('script.script')

<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Mar 2021 16:24:43 GMT -->
</html>