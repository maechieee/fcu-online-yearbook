<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="#" class="brand-link text-center">
		<span class="brand-text font-weight-light"><?= 'FCU Record System'; ?></span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 text-center">
			<div class="info">
				<a href="#"
				   class="d-block"><?= Dropdown::get_static('roles', $this->session->userdata('user')['role_id'], 'view'); ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
				<li class="nav-header">PAGES</li>
				<?php if ($this->session->userdata('user')['role_id'] == ROLE_ADMINISTRATOR) : ?>
					<li class="nav-item">
						<a href="<?= site_url('dashboard/admin_main') ?>"
						   class="nav-link <?= strtolower(@$page_data['module']) == 'dashboard' && (strtolower(@$page_data['section']) == 'index') ? 'active' : null; ?>">
							<i class="nav-icon fa fa-home"></i>
							<p>
								Home
							</p>
						</a>
					</li>
					<li class="nav-item <?= strtolower(@$page_data['module']) == 'staffs' ? 'menu-open' : null; ?>">
						<a href="#"
						   class="nav-link <?= strtolower(@$page_data['module']) == 'staffs' ? 'active' : null; ?>">
							<i class="nav-icon fa fa-users"></i>
							<p>
								Staffs
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?= site_url('staffs/form') ?>"
								   class="nav-link <?= strtolower(@$page_data['module']) == 'staffs' && (strtolower(@$page_data['section']) == 'add staff') ? 'active' : null; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>Add</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= site_url('staffs') ?>"
								   class="nav-link <?= strtolower(@$page_data['module']) == 'staffs' && (strtolower(@$page_data['section']) == 'index' || strtolower(@$page_data['section']) == 'update staff') ? 'active' : null; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>Manage</p>
								</a>
							</li>
						</ul>
					</li>

					<li class="nav-item">
						<a href="<?= site_url('departments') ?>"
						   class="nav-link <?= (strtolower(@$page_data['section']) == 'index departments' || strtolower(@$page_data['section']) == 'add department' || strtolower(@$page_data['section']) == 'update department')? 'active' : null; ?>">
							<i class="nav-icon fa fa-building"></i>
							<p>
								Departments
							</p>
						</a>
					</li>

<!--					<li class="nav-item">-->
<!--						<a href="--><?php //= site_url('departments') ?><!--"-->
<!--						   class="nav-link --><?php //= strtolower(@$page_data['section']) == 'index departments' ? 'active' : null; ?><!--">-->
<!--							<i class="nav-icon fa fa-building"></i>-->
<!--							<p>-->
<!--								Grade Level-->
<!--							</p>-->
<!--						</a>-->
<!--					</li>-->


					<li class="nav-item <?= strtolower(@$page_data['module']) == 'students' ? 'menu-open' : null; ?>">
						<a href="#"
						   class="nav-link <?= strtolower(@$page_data['module']) == 'students' ? 'active' : null; ?>">
							<i class="nav-icon fa fa-users"></i>
							<p>
								Students
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?= site_url('students/form') ?>"
								   class="nav-link <?= strtolower(@$page_data['module']) == 'students' && (strtolower(@$page_data['section']) == 'add student') ? 'active' : null; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>Add</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= site_url('students') ?>"
								   class="nav-link <?= strtolower(@$page_data['module']) == 'students' && (strtolower(@$page_data['section']) == 'index') ? 'active' : null; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>Manage</p>
								</a>
							</li>
						</ul>
					</li>

					<li class="nav-item">
						<a href="<?= site_url('departments') ?>"
						   class="nav-link <?= strtolower(@$page_data['section']) == 'index departments' ? 'active' : null; ?>">
							<i class="nav-icon fa fa-users"></i>
							<p>
								Application for Updating
							</p>
						</a>
					</li>


					<li class="nav-item <?= strtolower(@$page_data['module']) == 'yearbook' ? 'menu-open' : null; ?>">
						<a href="#"
						   class="nav-link <?= strtolower(@$page_data['module']) == 'yearbook' ? 'active' : null; ?>">
							<i class="nav-icon fas fa-list"></i>
							<p>
								Yearbook
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?= site_url('yearbook') ?>" class="nav-link <?= strtolower(@$page_data['module']) == 'yearbook' && (strtolower(@$page_data['section']) == 'index') ? 'active' : null; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>Students</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Honor Students</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Organizations</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Staffs</p>
								</a>
							</li>
						</ul>
					</li>


					<li class="nav-item <?= strtolower(@$page_data['module']) == 'announcements' ? 'menu-open' : null; ?>">
						<a href="#"
						   class="nav-link <?= strtolower(@$page_data['module']) == 'announcements' ? 'active' : null; ?>">
							<i class="nav-icon fas fa-list"></i>
							<p>
								Announcements
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Add</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Manage</p>
								</a>
							</li>
						</ul>
					</li>

					<li class="nav-item <?= strtolower(@$page_data['module']) == 'reports' ? 'menu-open' : null; ?>">
						<a href="#"
						   class="nav-link <?= strtolower(@$page_data['module']) == 'reports' ? 'active' : null; ?>">
							<i class="nav-icon fas fa-chart-pie"></i>
							<p>
								Reports
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?= site_url('students/form') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Activity Logs</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= site_url('students/form') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Backup Database</p>
								</a>
							</li>
						</ul>
					</li>
				<?php else: ?>
					<li class="nav-item">
						<a href="<?= site_url('dashboard/admin_main') ?>"
						   class="nav-link <?= strtolower(@$page_data['module']) == 'dashboard' && (strtolower(@$page_data['section']) == 'index') ? 'active' : null; ?>">
							<i class="nav-icon fa fa-home"></i>
							<p>
								Home
							</p>
						</a>
					</li>

					<li class="nav-item <?= strtolower(@$page_data['module']) == 'yearbook' ? 'menu-open' : null; ?>">
						<a href="#"
						   class="nav-link <?= strtolower(@$page_data['module']) == 'yearbook' ? 'active' : null; ?>">
							<i class="nav-icon fas fa-list"></i>
							<p>
								Yearbook
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?= site_url('yearbook') ?>" class="nav-link <?= strtolower(@$page_data['module']) == 'yearbook' && (strtolower(@$page_data['section']) == 'index') ? 'active' : null; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>Students</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Honor Students</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Organizations</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Staffs</p>
								</a>
							</li>
						</ul>
					</li>
				<?php endif; ?>


			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
