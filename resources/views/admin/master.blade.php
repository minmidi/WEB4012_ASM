<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Style CSS -->
    @include('admin._share.style')
</head>

<body>

<div class="wrapper">
    <!-- Sidebar Holder -->
        @include('admin._share.sidebar')
    <!-- End sidebar Holder -->

    <!-- Page Content Holder -->
    <div id="content">
        <!-- Header page -->
        @include('admin._share.header_page')
        <!-- End header page -->

        <!-- Header page bottom -->
        @include('admin._share.header_bottom')
        <!-- End header page bottom -->

        <!-- Table content -->
        <div>
            @yield('main')
        </div>
        <!-- End table content -->
    </div>
    <!-- End page Content Holder -->
</div>

<!-- Style JS -->
@include('admin._share.script')
</body>

</html>
