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
				<h3 class="card-title">List of Students</h3>
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
						<a class="btn btn-primary mb-3" href="<?= site_url('students/form') ?>"><i class="fa fa-plus"></i>
							Add Student</a>
						<div class="table-responsive">
							<table id="table" class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>Student No.</th>
									<th>Name</th>
									<th>Gender</th>
									<th>Department</th>
									<th>Date of Birth</th>
									<th>Contact No.</th>
									<th>Created</th>
									<th>Updated</th>
									<th>Actions</th>
								</tr>
								</thead>
								<tbody>
								<?php if (!empty(@$items)) : ?>
									<?php foreach (@$items as $key => $value) : ?>
										<tr>
											<td><?= $value['student_no']; ?></td>
											<td><?= $value['last_name'] . ', ' . $value['first_name']; ?></td>
											<td><?= Dropdown::get_static('gender', $value['gender'], 'view'); ?></td>
											<td><?= get_name_by_id($value['department_id'], 'departments'); ?></td>
											<td><?= view_date($value['dob']); ?></td>
											<td><?= $value['contact_no']; ?></td>
											<td style="width: 15%;"><?= '<div class="badge bg-info">' . get_person_name($value['created_by']) . '</div>' . ' <div>' . view_date($value['created_at'], 'date_am_pm') . '</div>'; ?></td>
											<td style="width: 15%;"><?= '<div class="badge bg-info">' . get_person_name($value['updated_by']) . '</div>' . ' <div>' . view_date($value['updated_at'], 'date_am_pm') . '</div>'; ?></td>
											<td>
												<div class="btn-group">
													<button type="button" class="btn btn-info btn-flat">Action
													</button>
													<button type="button"
															class="btn btn-info btn-flat dropdown-toggle dropdown-icon"
															data-toggle="dropdown">
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div class="dropdown-menu" role="menu">
														<a href="<?= site_url('students/view/' . $value['id']) ?>"
														   class="dropdown-item view-row">View</a>
														<a href="<?= site_url('students/form/' . $value['id']) ?>"
														   class="dropdown-item update-row">Update</a>
														<div class="dropdown-divider"></div>
														<button class="dropdown-item delete-row"
																data-id="<?= $value['id']; ?>">Delete
														</button>
													</div>
												</div>
											</td>
										</tr>
									<?php endforeach; ?>
								<?php endif; ?>
								</tbody>
							</table>
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
