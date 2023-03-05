<?php ?>

<section class="section-event">
	<div class="container event pt-3 mt-2">
		<div class="row">
			<div class="col-md-9">
				<h3 class="judul">Edit profil</h3>
				<form method="post" action="" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?= $editUser['id'];  ?>">
					<input type="hidden" name="deletefoto" value="<?= $editUser['foto'];  ?>">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama" value="<?= $editUser['nama']; ?>" placeholder="ex : lomba esai nasional" />
						<small class="form-text text-danger"><?= form_error('nama'); ?><?= $this->session->flashdata('flash_error_usr'); ?></small>
					</div>

					<div class="form-group">
						<label for="username">username</label>
						<input type="text" class="form-control" name="username" id="username" value="<?= $editUser['username']; ?>" placeholder="ex : lomba esai nasional" />
						<small class="form-text text-danger"><?= form_error('username'); ?><?= $this->session->flashdata('flash_error_usr'); ?></small>
					</div>

					<div class="form-group">
						<label for="poster">Foto profil</label>
						<div class="editfoto mb-2">
							<img src="<?=base_url(); ?>assets/img/profile/<?= $editUser['foto']; ?>" style="width: 200px;">
						</div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile" name="foto" >
							<label class="custom-file-label" for="customFile" style="overflow: hidden; position: absolute;">Choose file</label>
						</div>
						<small class="form-text text-danger"><?= form_error('poster'); ?><?= $this->session->flashdata('flash_img'); ?></small>
					</div>

					<div class="form-group" >
						<label for="email">Email</label>
						<input type="text" class="form-control" name="email" id="email" value="<?= $editUser['email']; ?>" />
						<small class="form-text text-danger"><?= form_error('email'); ?><?= $this->session->flashdata('flash_error_pas'); ?></small>
					</div>

					<div class="form-group">
						<label for="catatan">catatan/bio</label>
						<textarea name="catatan" class="form-control" id="catatan" rows="5"><?= $editUser['catatan']; ?></textarea>
						<small class="form-text text-danger"><?= form_error('catatan'); ?><?= $this->session->flashdata('flash_error_pas'); ?></small>
					</div>

					<div class="form-group">
						<label for="password">Masukan password baru</label>
						<input type="password" class="form-control" name="password" id="password" value="<?= $this->encryption->decrypt($editUser['password']); ?>" placeholder="*****" />
						<small class="form-text text-danger"><?= form_error('password'); ?><?= $this->session->flashdata('flash_error_pas'); ?></small>
					</div>

					<div>
						<button class="btn-submit" type="submit" name="tambah">Add event</button>
					</div>
					<div class="label mb-3">
						<label class="konfirmasi">Submit dan manajemen event kamu sob, buat form pendaftaran, manajemen peserta dll semua bisa kamu lakukan disini <a href="<?= base_url(); ?>register">Manajemen</a></label>
					</div>
				</form>

			</div>
			<div class="col-md-3 sidebar">
				<h3 class="judul">Rekomendasi event</h3>
				<hr>
				<a href="#">
					<div class="event-sidebar">
						<h4>Lomba karya tulis ilmiah</h4>
						<h5>Universitas negeri semarang</h5>
					</div>
					<hr>
				</a>
				<a href="#">
					<div class="event-sidebar">
						<h4>Lomba karya tulis ilmiah</h4>
						<h5>Universitas negeri semarang</h5>
					</div>
					<hr>
				</a>
				<a href="#">
					<div class="event-sidebar">
						<h4>Lomba karya tulis ilmiah</h4>
						<h5>Universitas negeri semarang</h5>
					</div>
					<hr>
				</a>
			</div>
		</div>
	</div>

</section>
