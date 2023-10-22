<link rel="stylesheet" href="<?= site_url('assets/css/swiper-bundle.min.css') ?>">
<link rel="stylesheet" href="<?= site_url('assets/css/home.css') ?>">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<?php if (!empty($page_data['styles_path'])) : ?>
	<?php foreach ($page_data['styles_path'] as $value) : ?>
		<link rel="stylesheet" href="<?= site_url('assets/' . $value . '.css'); ?>">
	<?php endforeach; ?>
<?php endif; ?>
