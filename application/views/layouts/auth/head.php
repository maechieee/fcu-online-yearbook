<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?= SYSTEM_TITLE . ' | ' . @$page_data['section']; ?></title>
	<link rel="shortcut icon" href="<?= site_url('assets/images/filamer_logo1.png'); ?>">
	<?php $this->load->view('partials/auth/styles') ?>
	<?php $this->load->view('partials/auth/header_scripts') ?>
</head>
<body>
