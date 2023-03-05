<?php
// Produces: whats_wrong_with_css

?>
<section class="section-event">
	<div class="container event pt-3 mt-2">
		<div class="row">
			<div class="col-md-8">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Media prestasi</a>
					</li>
					<li class="breadcrumb-item active">add artikel</li>
				</ol>
				<form method="post" action="" enctype="multipart/form-data">
					<input type="hidden" name="id_user" value="<?= $this->session->userdata['username']; ?>">
					<div class="form-group">
						<label for="kategori-artikel">Kategori rtikel</label>
						<input type="text" class="form-control" name="kategori-artikel" id="kategori-artikel" value="<?= $this->input->post('kategori-artikel');?><?= $this->session->flashdata('flash_error_user'); ?>" placeholder="ex : Pendidikan" />
						<small class="form-text text-danger"><?= form_error('kategori-artikel'); ?><?= $this->session->flashdata('flash_error_usr'); ?></small>
					</div>
					<div class="form-group">
						<label for="judul">Judul</label>
						<input type="text" class="form-control" name="judul" id="judul" value="<?= $this->input->post('judul');?><?= $this->session->flashdata('flash_error_user'); ?>" placeholder="ex : lomba esai nasional" />
						<small class="form-text text-danger"><?= form_error('judul'); ?><?= $this->session->flashdata('flash_error_usr'); ?></small>
					</div>

					<div class="form-group">
						<label for="image">image</label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile" name="image" >
							<label class="custom-file-label" for="customFile" style="overflow: hidden; position: absolute;">Choose file</label>
						</div>
						<small class="form-text text-danger"><?= form_error('image'); ?><?= $this->session->flashdata('flash_img'); ?></small>
					</div>

					<div class="form-group">
						<label for="isi">Isi Artikel</label>
						<textarea class="form-control ckeditor" name="isi" id="isi" rows="14"> </textarea>
						<small class="form-text text-danger"><?= form_error('isi'); ?><?= $this->session->flashdata('flash_error_pas'); ?></small>
					</div>

					<div class="form-group">
						<label for="keywords">Keywords</label>
						<input type="text" class="form-control" name="keywords" id="keywords" value="<?= $this->input->post('keywords');?><?= $this->session->flashdata('flash_error_user'); ?>" placeholder="ex : Tutorial, beasiswa, travelling" />
						<small class="form-text text-danger"><?= form_error('keywords'); ?><?= $this->session->flashdata('flash_error_usr'); ?></small>
					</div>
					<div>
						<button class="btn-submit" type="submit" name="tambah">Submit artikel</button>
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
