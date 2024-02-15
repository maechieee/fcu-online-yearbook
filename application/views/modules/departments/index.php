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
				<h3 class="card-title">List of <?= @$page_data['module']; ?></h3>
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
						<a class="btn btn-primary mb-3" href="<?= site_url('departments/form') ?>"><i
								class="fa fa-plus"></i>
							Add Department</a>
						<div class="table-responsive">
							<table id="table" class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>ID</th>
									<th>Department</th>
									<th>Description</th>
									<th>Created</th>
									<th>Updated</th>
									<th>Actions</th>
								</tr>
								</thead>
								<tbody>
								<?php if (!empty(@$items)) : ?>
									<?php foreach (@$items as $key => $value) : ?>
										<tr>
											<td><?= $value['id']; ?></td>
											<td><?= $value['name']; ?></td>
											<td><?= $value['description']; ?></td>
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
														<a href="<?= site_url('departments/view/' . $value['id']) ?>"
														   class="dropdown-item view-row">View</a>
														<a href="<?= site_url('departments/form/' . $value['id']) ?>"
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
