<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?= site_url('assets/temps/adminlte/plugins/fontawesome-free/css/all.min.css') ?>">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet"
	  href="<?= site_url('assets/temps/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
<!-- iCheck -->
<link rel="stylesheet"
	  href="<?= site_url('assets/temps/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
<!-- JQVMap -->
<link rel="stylesheet" href="<?= site_url('assets/temps/adminlte/plugins/jqvmap/jqvmap.min.css') ?>">
<!-- Theme style -->
<link rel="stylesheet" href="<?= site_url('assets/temps/adminlte/dist/css/adminlte.min.css') ?>">
<!-- overlayScrollbars -->
<link rel="stylesheet"
	  href="<?= site_url('assets/temps/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
<!-- DataTables -->
<link rel="stylesheet"
	  href="<?= site_url('assets/temps/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
<link rel="stylesheet"
	  href="<?= site_url('assets/temps/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
<link rel="stylesheet"
	  href="<?= site_url('assets/temps/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?= site_url('assets/temps/adminlte/plugins/daterangepicker/daterangepicker.css') ?>">
<!-- summernote -->
<link rel="stylesheet" href="<?= site_url('assets/temps/adminlte/plugins/summernote/summernote-bs4.min.css') ?>">
<link rel="stylesheet" href="<?= site_url('assets/temps/adminlte/plugins/sweetalert2/sweetalert2.min.css') ?>">
<link rel="stylesheet" href="<?= site_url('assets/temps/adminlte/plugins/toastr/toastr.min.css') ?>">
<link rel="stylesheet" href="<?= site_url('assets/css/style.css') ?>">
<?php if (!empty($page_data['styles_path'])) : ?>
	<?php foreach ($page_data['styles_path'] as $value) : ?>
		<link rel="stylesheet" href="<?= site_url('assets/' . $value . '.css'); ?>">
	<?php endforeach; ?>
<?php endif; ?>
