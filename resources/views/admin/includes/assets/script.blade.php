<script src="{{ asset('/')}}assets/libs/jquery/jquery.min.js"></script>
<script src="{{ asset('/')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/')}}assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('/')}}assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('/')}}assets/libs/node-waves/waves.min.js"></script>

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
{{--@if(Session::has('message'))--}}
{{--    <script>--}}
{{--        toastr.success("{{ Session::get('message') }}");--}}
{{--    </script>--}}
{{--@endif--}}

<!-- apexcharts -->
<script src="{{ asset('/')}}assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="{{ asset('/')}}assets/js/pages/dashboard.init.js"></script>


<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<!-- App js -->

<script>
    CKEDITOR.replace( 'editor' );
</script>

<!-- App js -->
<script src="{{ asset('/')}}assets/js/app.js"></script>
<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
    } );
</script>
