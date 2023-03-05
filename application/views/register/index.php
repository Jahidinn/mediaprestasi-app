<?php  ?>
<section id="reglogin">
	<div class="container text-center">
		<div class="login">
			<div class="judul-login">
				<h2 class="judul-section2">Register</h2>
			</div>
			<form method="post" action="">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" id="username" class="form-control" name="username" placeholder="Username" value="<?= $this->input->post('username');?>" />
					 <small class="form-text text-danger"><?= form_error('username'); ?></small>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $this->input->post('email');?>"  />
					 <small class="form-text text-danger"><?= form_error('email'); ?></small>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="password" value="<?= $this->input->post('password');?>" />
					 <small class="form-text text-danger"><?= form_error('password'); ?></small>
				</div>
				<div class="form-group">
					<label for="confirm-password">Confirm password</label>
					<input type="password" class="form-control" id="confirm-password"  name="password2" placeholder="konfirmasi password" value="<?= $this->input->post('password2');?>" />
					 <small class="form-text text-danger"><?= form_error('password2'); ?></small>
				</div>
				<div>
					<button class="btn-submit" type="submit" name="register">Register</button>
				</div>
				<div class="label">
					<label class="konfirmasi">Sudah punya akun? <a href="<?= base_url(); ?>login">Login</a></label>
				</div>
				<div class="btn-alternatif">
					<label class="konfirmasi">Login with </label>
					<button class="btn-fb"><i class="fa fa-facebook"></i> facebook</button>
					<button class="btn-gogl"><i class="fa fa-google"></i> Google</button>
				</div>
			</form>
		</div>
	</div>
</section>
