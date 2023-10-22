<script src="<?= site_url('assets/js/swiper-bundle.min.js')?>"></script>
<script src="<?= site_url('assets/js/home.js')?>"></script>
<?php if (!empty($page_data['footer_scripts_path'])) : ?>
	<?php foreach ($page_data['footer_scripts_path'] as $value) : ?>
		<script type="text/javascript" src="<?= site_url('assets/' . $value . '.js') ?>"></script>
	<?php endforeach; ?>
<?php endif; ?>
