<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="{{ asset('Dashboard/js/jquery.js') }}"></script>
<!-- Popper.JS -->
<script src="{{ asset('Dashboard/js/popper.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('Dashboard/js/bootstrap.js') }}"></script>

<!-- Font Awesome JS -->
<script src="{{ asset('Dashboard/js/fontawesome-soild.js') }}"></script>
<script src="{{ asset('Dashboard/js/fontawesome.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>
{{-- 
CUSTOM JS 
--}}
@yield('script')
