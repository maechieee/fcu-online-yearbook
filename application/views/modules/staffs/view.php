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
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"><?= @$page_data['module'] . ' | ' . @$page_data['section']; ?></h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
						<i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
						<i class="fas fa-times"></i>
					</button>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12">
								<h4>Personal Information</h4>
								<hr>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>ID No.</label>
									<p><?= @$info['id_number']; ?></p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>First Name</label>
									<p><?= @$info['first_name']; ?></p>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<label>Middle Name</label>
									<p><?= !empty(@$info['middle_name']) ? @$info['middle_name'] : '-'; ?></p>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<label>Last Name</label>
									<p><?= @$info['last_name']; ?></p>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<label>Gender</label>
									<p><?= @$info['gender']; ?></p>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<label>Date of Birth</label>
									<p><?= view_date(@$info['dob'], 'date'); ?></p>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<label>Contact No.</label>
									<p><?= @$info['contact_no']; ?></p>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<label>Email Address</label>
									<p><?= @$info['email_address']; ?></p>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<label>Address</label>
									<p><?= @$info['address']; ?></p>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<label>Activated</label>
									<p><?= Dropdown::get_static('bool', @$info['is_activated'], 'view'); ?></p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label>Picture</label>
									<br>
									<a href="<?= !empty(@$info['picture_1']) ? site_url('assets/uploads/photo/' . @$info['picture_1']) : '#'; ?>"
									   target="_blank">Download link</a>
								</div>
							</div>
						</div>

						<div class="row float-right">
							<div class="col-sm-12">
								<a href="<?= site_url('staffs') ?>"
								   class="btn btn-danger">Go back</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
