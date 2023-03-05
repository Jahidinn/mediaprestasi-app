<?php  ?>
<section class="section-event">
	<div class="container event pt-3 mt-2">
		<div class="row">
			<div class="col-md-8">
				<h3 class="judul">Share event</h3>
				<form method="post" action="" enctype="multipart/form-data">
					<input type="hidden" name="id_user" value="<?= $this->session->userdata['username']; ?>">
					<div class="form-group">
						<label for="username">Kategori</label>
						<select name="kategori" class="form-control">
							<option value="Lomba">Lomba</option>
							<option value="Beasiswa">Beasiswa</option>
							<option value="Event">Event</option>
							<option value="Seminar">Seminar</option>
							<option value="Lowongan pekerjaan">Lowongan pekerjaan</option>
							<option value="Lainya">Lainya</option>
						</select>
						<small class="form-text text-danger"><?= form_error('username'); ?><?= $this->session->flashdata('flash_error_usr'); ?></small>
					</div>

					<div class="form-group">
						<label for="judul">Judul</label>
						<input type="text" class="form-control" name="judul" id="judul" value="<?= $this->input->post('judul');?><?= $this->session->flashdata('flash_error_user'); ?>" placeholder="ex : lomba esai nasional" />
						<small class="form-text text-danger"><?= form_error('judul'); ?><?= $this->session->flashdata('flash_error_usr'); ?></small>
					</div>

					<div class="form-group">
						<label for="link-event">Link event (mediaprestasi.com/)</label>
						<input type="text" class="form-control" name="link-event" id="link-event" value="<?= $this->input->post('link-event'); ?><?= $this->session->flashdata('flash_error_pasword'); ?>" placeholder="lktin2019" />
						<small class="form-text text-danger"><?= form_error('link-event'); ?><?= $this->session->flashdata('flash_error_pas'); ?></small>
					</div>
					<div class="form-group">
						<label for="deadline">Deadline pendaftaran</label>
						<input type="text" class="form-control deadline" name="deadline" value="" placeholder="10-12-2019" id="deadline"/>
						<small class="form-text text-danger"><?= form_error('deadline'); ?><?= $this->session->flashdata('flash_error_pas'); ?></small>
					</div>
					<div class="form-group">
						<label for="poster">Poster</label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile" name="poster" >
							<label class="custom-file-label" for="customFile" style="overflow: hidden; position: absolute;">Choose file</label>
						</div>
						<small class="form-text text-danger"><?= form_error('poster'); ?><?= $this->session->flashdata('flash_img'); ?></small>
					</div>

					<div class="form-group">
						<label for="peserta">Peserta</label>
						<input type="text" class="form-control" name="peserta" id="peserta" value="<?= $this->input->post('peserta');?><?= $this->session->flashdata('flash_error_user'); ?>" placeholder="ex : Mahasiswa - nasional" />
						<small class="form-text text-danger"><?= form_error('peserta'); ?><?= $this->session->flashdata('flash_error_usr'); ?></small>
					</div>

					<div class="form-group">
						<label for="penyelenggara">Instansi/Penyelenggara</label>
						<input type="text" class="form-control" name="penyelenggara" id="penyelenggara" value="<?= $this->input->post('penyelenggara');?><?= $this->session->flashdata('flash_error_user'); ?>" placeholder="ex : Universitas Indonesia" />
						<small class="form-text text-danger"><?= form_error('penyelenggara'); ?><?= $this->session->flashdata('flash_error_usr'); ?></small>
					</div>

					<div class="form-group">
						<label for="deskripsi">Deskripsi</label>
						<textarea class="form-control ckeditor" name="deskripsi" id="deskripsi" rows="6"> </textarea>
						<small class="form-text text-danger"><?= form_error('deskripsi'); ?><?= $this->session->flashdata('flash_error_pas'); ?></small>
					</div>

					<div>
						<button class="btn-submit" type="submit" name="tambah">Add event</button>
					</div>
					<div class="label mb-3">
						<label class="konfirmasi">Submit dan manajemen event kamu sob, buat form pendaftaran, manajemen peserta dll semua bisa kamu lakukan disini <a href="<?= base_url(); ?>register">Manajemen</a></label>
					</div>
				</form>
			</div>
			<div class="col-md-4 sidebar">
				<h3 class="judul">Info terbaru</h3>
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
