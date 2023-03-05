<?php
// Produces: whats_wrong_with_css

?>
<section class="section-event">
	<div class="container event pt-3 mt-2 mb-2">
		<div class="row">
			<div class="col-md-8">
				<h3 class="judul">Share ebook</h3>
				<form method="post" action="" enctype="multipart/form-data">
					<input type="hidden" name="id_user" value="<?= $this->session->userdata['username']; ?>">
					<div class="form-group">
						<label for="kategori-ebook">Kategori ebook</label>
						<input type="text" class="form-control" name="kategori-ebook" id="kategori-ebook" value="<?= $this->input->post('kategori-ebook');?><?= $this->session->flashdata('flash_error_user'); ?>" placeholder="Pendidikan" />
						<small class="form-text text-danger"><?= form_error('kategori-ebook'); ?><?= $this->session->flashdata('flash_error_usr'); ?></small>
					</div>
					<div class="form-group">
						<label for="judul">Judul ebook</label>
						<input type="text" class="form-control" name="judul" id="judul" value="<?= $this->input->post('judul');?><?= $this->session->flashdata('flash_error_user'); ?>" placeholder="ex : ebook perkembangan perekonomian indonesia" />
						<small class="form-text text-danger"><?= form_error('judul'); ?><?= $this->session->flashdata('flash_error_usr'); ?></small>
					</div>

					<div class="form-group">
						<label for="file">Upload document (.pdf/.doc/.docx)</label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile" name="file" >
							<label class="custom-file-label" for="customFile" style="overflow: hidden; position: absolute;">Choose file</label>
						</div>
						<small class="form-text text-danger"><?= form_error('file'); ?><?= $this->session->flashdata('flash_img'); ?></small>
					</div>

					<div class="form-group">
						<label for="deskripsi">deskripsi ebook</label>
						<textarea class="form-control ckeditor" name="deskripsi" id="deskripsi" rows="14"> </textarea>
						<small class="form-text text-danger"><?= form_error('deskripsi'); ?><?= $this->session->flashdata('flash_error_pas'); ?></small>
					</div>

					<div class="form-group">
						<label for="keywords">Keywords</label>
						<input type="text" class="form-control" name="keywords" id="keywords" value="<?= $this->input->post('keywords');?><?= $this->session->flashdata('flash_error_user'); ?>" placeholder="ex : Tutorial, beasiswa, travelling" />
						<small class="form-text text-danger"><?= form_error('keywords'); ?><?= $this->session->flashdata('flash_error_usr'); ?></small>
					</div>
					<div>
						<button class="btn-submit" type="submit" name="tambah">Save ebook</button>
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
