<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{asset('recursos/plugins/jquery/js/jquery-2.2.0.min.js')}}"></script>
<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script-->
<script src="{{asset('recursos/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('recursos/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('recursos/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('recursos/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('recursos/plugins/fastclick/fastclick.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('recursos/js/app.min.js')}}" type="text/javascript"></script>

<script>
      $(function () {
        $("#categoryTable").DataTable();
      });

      $(function () {
        $("#productTable").DataTable();
      });

      $(function () {
        $("#userTable").DataTable();
      });
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->