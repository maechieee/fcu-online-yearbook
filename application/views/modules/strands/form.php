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
						<form id="form" role="form" method="post">
							<div class="row">
								<div class="col-sm-12">
									<h4>Basic Information</h4>
									<hr>
								</div>
							</div>
							<input type="hidden" id="id" name="id" value="<?= @$info['id']; ?>" readonly>

							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="name">Strand <code>Required</code></label>
										<input type="text" id="name" name="name"
											   class="form-control"
											   placeholder="Enter strand" value="<?= @$info['name']; ?>"
											   required autofocus>
									</div>
								</div>
							</div>

							<div class="row float-right">
								<div class="col-sm-12">
									<a href="<?= site_url('strands') ?>"
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
