</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Laravel
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Indra Gunanda</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<script src="{{url('/')}}/assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="{{url('/')}}/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{url('/')}}/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="{{url('/')}}/assets/dist/js/adminlte.min.js"></script>
<script src="{{url('/')}}/assets/main/sidebar.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{url('/')}}/assets/main/bootbox.min.js"></script>
<script src="{{url('/')}}/assets/main/main.js"></script>
<script type="text/javascript">
var csrf_token = $('meta[name="csrf-token"]').attr('content');
</script>
@foreach ($js as $val)
<script src="{{ $val }}"></script>
@endforeach
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
