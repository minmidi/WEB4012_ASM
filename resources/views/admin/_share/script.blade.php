<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="{{ asset('Dashboard/js/jquery.js') }}"></script>
<!-- Popper.JS -->
<script src="{{ asset('Dashboard/js/popper.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('Dashboard/js/bootstrap.js') }}"></script>
<!-- Sweetalert JS default delete-->
<script src="{{ asset('Dashboard/js/sweetalert.js') }}"></script>

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


<script>
    $('.delete_admin').click(function(event) {
  var form =  $(this).closest("form");
  event.preventDefault();
  swal({
      title: `Bạn có chắc chắn muốn xoá không?`,
      text: "Nếu bạn xoá, dữ liệu sẽ mất vĩnh viễn",
      icon: "warning",
      buttons: ["Quay lại", "Có, tôi đồng ý"],
      dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      form.submit();
    }
  });
});
</script>

<!-- End weetalert confirm delete -->

<!-- Plugin added sweetalert custom-->
@include('sweetalert::alert');

{{-- 
CUSTOM JS 
--}}
@yield('script')


