<!-- jQuery -->
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/jquery-validation/jquery.validate.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script type="text/javascript">
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- ChartJS -->
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/chart.js/Chart.min.js'); ?>"></script>
<!-- Sparkline -->
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/sparklines/sparkline.js'); ?>"></script>
<!-- JQVMap -->
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/moment/moment.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
<!-- Summernote -->
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/jszip/jszip.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/toastr/toastr.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/dist/js/adminlte.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/js/amagiloader.js')?>"></script>
<script type="text/javascript" src="<?= site_url('assets/js/global.js')?>"></script>
<?php if (!empty($page_data['footer_scripts_path'])) : ?>
	<?php foreach ($page_data['footer_scripts_path'] as $value) : ?>
		<script type="text/javascript" src="<?= site_url('assets/' . $value . '.js') ?>"></script>
	<?php endforeach; ?>
<?php endif; ?>
