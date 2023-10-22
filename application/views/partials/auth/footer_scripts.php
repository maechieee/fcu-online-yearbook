<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/jquery/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/jquery-validation/jquery.validate.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/temps/adminlte/plugins/toastr/toastr.min.js'); ?>"></script>
<script type="text/javascript" src="<?= site_url('assets/js/amagiloader.js')?>"></script>
<script src="<?= site_url('assets/js/login.js')?>"></script>
<?php if (!empty($page_data['footer_scripts_path'])) : ?>
	<?php foreach ($page_data['footer_scripts_path'] as $value) : ?>
		<script type="text/javascript" src="<?= site_url('assets/' . $value . '.js') ?>"></script>
	<?php endforeach; ?>
<?php endif; ?>
