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
						<form id="form" role="form" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-sm-12">
									<h4>Personal Information</h4>
									<hr>
								</div>
							</div>
							<input type="hidden" id="id" name="id" value="<?= @$info['id']; ?>" readonly>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="id_number">Student No <code>Required</code></label>
										<input type="text" id="id_number" name="id_number"
											   class="form-control"
											   placeholder="Enter student no" value="<?= @$info['id_number']; ?>"
											   required
											   autofocus>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="first_name">First Name <code>Required</code></label>
										<input type="text" id="first_name" name="first_name"
											   class="form-control"
											   placeholder="Enter first name" value="<?= @$info['first_name']; ?>"
											   required>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label for="middle_name">Middle Name</label>
										<input type="text" id="middle_name" name="middle_name"
											   class="form-control"
											   placeholder="Enter middle name" value="<?= @$info['middle_name']; ?>">
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label for="last_name">Last Name <code>Required</code></label>
										<input type="text" id="last_name" name="last_name"
											   class="form-control"
											   placeholder="Enter last name" value="<?= @$info['last_name']; ?>"
											   required>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label for="gender">Gender <code>Required</code></label>
										<?= form_dropdown('gender', Dropdown::get_static('gender'), @$info['gender'], 'id="gender" class="form-control" required') ?>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label for="dob">Date of Birth <code>Required (dd/mm/yyyy)</code></label>
										<input type="date" id="dob" name="dob"
											   class="form-control"
											   placeholder="Enter date of birth" value="<?= @$info['dob']; ?>" required>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label for="contact_no">Contact No. <code>Required</code></label>
										<input type="text" id="contact_no" name="contact_no"
											   class="form-control"
											   placeholder="Enter contact no." value="<?= @$info['contact_no']; ?>"
											   required>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label for="email_address">Email Address <code>Required</code></label>
										<input type="email" id="email_address" name="email_address"
											   class="form-control"
											   placeholder="Enter email address" value="<?= @$info['email_address']; ?>"
											   required>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label for="address">Address <code>Required</code></label>
										<input type="text" id="address" name="address"
											   class="form-control"
											   placeholder="Enter address" value="<?= @$info['address']; ?>" required>
									</div>
								</div>

								<?php if (!empty(@$info['id'])) : ?>
									<div class="col-sm-4">
										<div class="form-group">
											<label for="is_activated">Activated <code>Required</code></label>

											<?= form_dropdown('is_activated', Dropdown::get_static('bool'), @$info['is_activated'], 'id="is_activated" class="form-control" required autofocus') ?>
										</div>
									</div>
								<?php else: ?>
									<div class="col-sm-4">
										<div class="form-group">
											<label for="is_activated">Activated <code>Required</code></label>

											<?= form_dropdown('is_activated', Dropdown::get_static('bool'), @$info['is_activated'], 'id="is_activated" class="form-control" required') ?>
										</div>
									</div>
								<?php endif; ?>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<h4>Educational Information</h4>
									<hr>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="strand_id">Strand <code>Required</code></label>
										<select name="strand_id" id="strand_id" class="form-control" required>
											<option value="">Select Value</option>
											<?php if (!empty(@$strands)) : ?>
												<?php foreach ($strands as $key => $value) : ?>
													<option
														value="<?= $value['id']; ?>" <?= @$info['strand_id'] == $value['id'] ? 'selected' : null; ?>><?= $value['name']; ?></option>
												<?php endforeach; ?>
											<?php endif; ?>
										</select>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label for="grade_level_id">Grade Level <code>Required</code></label>
										<select name="grade_level_id" id="grade_level_id" class="form-control" required>
											<option value="">Select Value</option>
											<?php if (!empty(@$grade_levels)) : ?>
												<?php foreach ($grade_levels as $key => $value) : ?>
													<option
														value="<?= $value['id']; ?>" <?= @$info['grade_level_id'] == $value['id'] ? 'selected' : null; ?>><?= $value['name']; ?></option>
												<?php endforeach; ?>
											<?php endif; ?>
										</select>
									</div>
								</div>
							</div>


							<div class="row float-right">
								<div class="col-sm-12">
									<a href="<?= site_url('students') ?>"
									   class="btn btn-danger">Go back</a>
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</form>
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
