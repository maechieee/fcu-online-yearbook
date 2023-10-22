<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= SYSTEM_TITLE . ' | ' . @$page_data['section']; ?></title>
	<?php $this->load->view('partials/home/styles'); ?>
	<?php $this->load->view('partials/home/header_scripts'); ?>
</head>
<body>
<?php $this->load->view('partials/home/header'); ?>
