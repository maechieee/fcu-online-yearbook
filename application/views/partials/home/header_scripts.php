<?php if (!empty($page_data['header_scripts_path'])) : ?>
	<?php foreach ($page_data['header_scripts_path'] as $value) : ?>
		<script type="text/javascript" src="<?= site_url('assets/' . $value . '.js') ?>"></script>
	<?php endforeach; ?>
<?php endif; ?>
