<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?= @$page_data['module']; ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a
								href="<?= strtolower(@$page_data['module']); ?>"><?= @$page_data['module']; ?></a></li>
						<li class="breadcrumb-item active"><?= @$page_data['section']; ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-lg-4 col-12">
				<!-- small box -->
				<div class="small-box bg-success">
					<div class="inner">
						<h3><?= count_all('users'); ?></h3>
						<p>Staffs</p>
					</div>
					<div class="icon">
						<i class="ion ion-android-person"></i>
					</div>
					<a href="<?= site_url('users'); ?>" class="small-box-footer">More info <i
							class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-4 col-12">
				<!-- small box -->
				<div class="small-box bg-primary">
					<div class="inner">
						<h3><?= count_all('users'); ?></h3>
						<p>Strands</p>
					</div>
					<div class="icon">
						<i class="ion ion-android-person"></i>
					</div>
					<a href="<?= site_url('users'); ?>" class="small-box-footer">More info <i
							class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-12">
				<!-- small box -->
				<div class="small-box bg-secondary">
					<div class="inner">
						<h3><?= count_all('users'); ?></h3>
						<p>Grade Level</p>
					</div>
					<div class="icon">
						<i class="ion ion-android-archive"></i>
					</div>
					<a href="<?= site_url('users'); ?>" class="small-box-footer">More info <i
							class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-12">
				<!-- small box -->
				<div class="small-box bg-warning">
					<div class="inner">
						<h3><?= count_all('users'); ?></h3>
						<p>Students</p>
					</div>
					<div class="icon">
						<i class="ion ion-android-person"></i>
					</div>
					<a href="<?= site_url('users'); ?>" class="small-box-footer">More info <i
							class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-4 col-12">
				<!-- small box -->
				<div class="small-box bg-secondary">
					<div class="inner">
						<h3><?= count_all('users'); ?></h3>
						<p>Year Books</p>
					</div>
					<div class="icon">
						<i class="ion ion-android-archive"></i>
					</div>
					<a href="<?= site_url('users'); ?>" class="small-box-footer">More info <i
							class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-4 col-12">
				<!-- small box -->
				<div class="small-box bg-primary">
					<div class="inner">
						<h3><?= count_all('users'); ?></h3>
						<p>Announcements</p>
					</div>
					<div class="icon">
						<i class="ion ion-android-archive"></i>
					</div>
					<a href="<?= site_url('users'); ?>" class="small-box-footer">More info <i
							class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
