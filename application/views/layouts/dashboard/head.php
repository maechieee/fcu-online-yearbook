<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= SYSTEM_TITLE . ' | ' . @$page_data['section']; ?></title>
	<link rel="shortcut icon" href="<?= site_url('assets/images/filamer_logo.png'); ?>">
	<?php $this->load->view('partials/dashboard/styles'); ?>
	<?php $this->load->view('partials/dashboard/header_scripts'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
	<?php $this->load->view('partials/dashboard/preloader') ?>
	<?php $this->load->view('partials/dashboard/navbar') ?>
	<?php $this->load->view('partials/dashboard/sidebar') ?>
