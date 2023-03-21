
 <footer class="main-footer">
    <strong>Copyright &copy; <?php echo(date("Y"));?>  <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=THEME?>plugins/jquery/jquery.min.js"></script>


  <script>

      $("td").each(function(){

        if($(this).text() =="0"){
          $(this).css("background-color", "red");
        }
        if($(this).text() =="1"){
          $(this).css("background-color", "green");
        }
      });

/*
window.onload = function()
{
if (window.jQuery)
{
alert('jQuery is loaded');
}
else
{
alert('jQuery is not loaded');
}
}
*/
  </script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=THEME?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=THEME?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=THEME?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=THEME?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=THEME?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=THEME?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=THEME?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=THEME?>plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=THEME?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=THEME?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=THEME?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=THEME?>dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=THEME?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=THEME?>dist/js/pages/dashboard.js"></script>
</body>
</html>
