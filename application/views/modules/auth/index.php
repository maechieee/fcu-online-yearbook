<div class="container">
	<div class="forms-container">
		<div class="signin-signup">
			<form id="sign_in_student_form" role="form" method="POST" class="sign-in-user-form">
				<h2 class="title">Sign In</h2>
				<input type="hidden" name="role" value="<?= ROLE_STUDENT?>" readonly required>
				<div class="input-field">
					<i class="uil uil-user"></i>
					<input id="student_username" name="student_username" type="text" placeholder="ID Number" autofocus required/>
				</div>
				<div class="input-field">
					<i class="uil uil-lock"></i>
					<input id="student_password" name="student_password" type="password" placeholder="Password" required/>
				</div>
				<a class="back" href="<?= site_url('home') ?>"><i class="uil uil-home"></i>Back to homepage</a>
				<input type="submit" value="Login" class="btn solid"/>
			</form>
			<form id="sign_in_admin_form" role="form" method="post" class="sign-in-admin-form">
				<h2 class="title">Sign In</h2>
				<input type="hidden" name="role" value="<?= ROLE_ADMINISTRATOR?>" readonly required>
				<div class="input-field">
					<i class="uil uil-user"></i>
					<input id="admin_username" name="admin_username" type="text" placeholder="Username" required/>
				</div>
				<div class="input-field">
					<i class="uil uil-lock"></i>
					<input id="admin_password" name="admin_password" type="password" placeholder="Password" required/>
				</div>
				<a class="back" href="<?= site_url('home') ?>"><i class="uil uil-home"></i>Back to homepage</a>
				<input type="submit" class="btn" value="Sign In"/>
			</form>
		</div>
	</div>
	<div class="panels-container">
		<div class="panel left-panel">
			<div class="content">
				<h3>Sign In as Admin</h3>
				<p></p>
				<button class="btn transparent" id="sign-up-btn">
					Sign in
				</button>
			</div>
			<img src="<?= site_url('assets/images/undraw_education_f8ru.svg')?>" class="image" alt=""/>
		</div>
		<div class="panel right-panel">
			<div class="content">
				<h3>Sign In as Student</h3>
				<p></p>
				<button class="btn transparent" id="sign-in-btn">
					Sign In
				</button>
			</div>
			<img src="<?= site_url('assets/images/undraw_notebook_re_id0r.svg')?>" class="image" alt=""/>
		</div>
	</div>
</div>
