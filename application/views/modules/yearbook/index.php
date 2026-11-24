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
		<div class="card card-solid">
			<div class="card-body pb-0">
				<div class="row">
					<?php if (!empty($items)) : ?>
						<?php foreach ($items as $item) : ?>
							<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
								<div class="card bg-light d-flex flex-fill">
									<div class="card-header text-muted border-bottom-0">
										<?= $item['department_name'] ?>
									</div>
									<div class="card-body pt-0">
										<div class="row">
											<div class="col-7">
												<h2 class="lead">
													<b><?= $item['first_name'] . ' ' . $item['last_name'] ?></b>
												</h2>
												<?php if ($item['role_id'] === ROLE_STUDENT) : ?>

													<p class="text-muted text-sm">
														<b>Achievements: </b> <?= $item['achievements']; ?> </p>
													<ul class="ml-4 mb-0 fa-ul text-muted">
														<li class="small"><span class="fa-li"><i
																	class="fas fa-lg fa-award"></i></span>
															Honor: <?= !empty($item['honor']) ? $item['honor'] : '-'; ?>
														</li>
														<li class="small"><span class="fa-li"><i
																	class="fas fa-lg fa-building"></i></span>
															Address: <?= $item['address']; ?>
														</li>
														<li class="small"><span class="fa-li"><i
																	class="fas fa-lg fa-envelope"></i></span> Email
															Address: <?= $item['email_address'] ?>
														</li>
													</ul>

												<?php else: ?>
													<ul class="ml-4 mb-0 fa-ul text-muted">
														<li class="small"><span class="fa-li"><i
																	class="fas fa-lg fa-building"></i></span>
															Address: <?= $item['address']; ?>
														</li>
														<li class="small"><span class="fa-li"><i
																	class="fas fa-lg fa-envelope"></i></span> Email
															Address: <?= $item['email_address'] ?>
														</li>
													</ul>

												<?php endif; ?>
												<p class="text-muted text-sm">
													<b>Notes: </b> <?= !empty($item['notes']) ? $item['notes'] : '-'; ?>
												</p>
											</div>
											<div class="col-5 text-center">
												<img
													src="<?= site_url('assets/uploads/photo/' . $item['picture_1']) ?>"
													alt="user-avatar"
													class="img-circle img-fluid">
											</div>
										</div>
									</div>
									<div class="card-footer">
										<?php if ($this->session->userdata('user')['role_id'] === ROLE_ADMINISTRATOR) : ?>
											<div class="text-right">
												<a href="<?= site_url('staffs/form/' . $item['id']) ?>"
												   class="btn btn-sm btn-secondary">
													<i class="fas fa-edit"></i> Update Information
												</a>

												<a href="<?= site_url('staffs/view/' . $item['id']) ?>"
												   class="btn btn-sm btn-primary">
													<i class="fas fa-user"></i> View Details
												</a>
											</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endforeach; ?>

					<?php else: ?>
						<h4 class="text-center">No data available</h4>
					<?php endif; ?>
				</div>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
