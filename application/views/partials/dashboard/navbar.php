<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<li class="nav-item dropdown user-menu">
			<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
				<img src="<?= site_url('assets/images/filamer_logo.png') ?>" class="user-image img-circle elevation-2"
					 alt="User Image">
				<span
					class="d-none d-md-inline"><?= $this->session->userdata('user')['last_name'] . ', ' . $this->session->userdata('user')['first_name'] ?></span>
			</a>
			<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<!-- User image -->
				<li class="user-header bg-primary">
					<img src="<?= site_url('assets/images/filamer_logo.png') ?>" class="img-circle elevation-2"
						 alt="User Image">
					<p>
						<?= Dropdown::get_static('roles', $this->session->userdata('user')['role_id'], 'view'); ?>
					</p>
				</li>
				<!-- Menu Footer-->
				<li class="user-footer">
<!--					<button id="btn_update_profile" type="button" class="btn btn-default btn-flat w-100">Update-->
<!--						Profile-->
<!--					</button>-->
<!--					<button id="btn_change_password" type="button" class="btn btn-default btn-flat w-100">Change-->
<!--						Password-->
<!--					</button>-->
					<a href="<?= site_url('auth/logout') ?>" class="btn btn-default btn-flat w-100">Sign out</a>
				</li>
			</ul>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-widget="fullscreen" href="#" role="button">
				<i class="fas fa-expand-arrows-alt"></i>
			</a>
		</li>
	</ul>
</nav>
<!-- /.navbar -->
