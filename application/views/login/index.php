<?php  ?>
<section id="reglogin">
	<div class="container text-center">
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
			<?php if ($this->session->flashdata('flash')): ?>

			<?php endif; ?>
		<div class="login">
			<div class="judul-login">
				<h2 class="judul-section2">Login</h2>
			</div>
			<form method="post" action="">
				<div class="form-group">
					<label for="username">Username/ Email</label>
					<input type="text" class="form-control" name="username" id="username" value="<?= $this->input->post('username');?><?= $this->session->flashdata('flash_error_user'); ?>" placeholder="Username / Email" />
					 <small class="form-text text-danger"><?= form_error('username'); ?><?= $this->session->flashdata('flash_error_usr'); ?></small>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password" value="<?= $this->input->post('password'); ?><?= $this->session->flashdata('flash_error_pasword'); ?>" placeholder="password" />
					 <small class="form-text text-danger"><?= form_error('password'); ?><?= $this->session->flashdata('flash_error_pas'); ?></small>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="margin: 0 3px 0 0;">
					<label class="form-check-label" for="inlineCheckbox1">Keep login</label>
				</div>
				<div>
					<button class="btn-submit" type="submit" name="login">Login</button>
				</div>
				<div class="label">
					<label class="konfirmasi">Belum punya akun? <a href="<?= base_url(); ?>register">Daftar</a></label>
					<label class="konfirmasi">Lupa password? <a href="#">Click here</a></label>
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