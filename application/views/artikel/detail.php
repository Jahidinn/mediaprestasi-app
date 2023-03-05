<?php  ?>
<section class="section-event">
	<div class="container event pt-3 mt-2">
		<div class="row">
			<div class="col-md-8 pr-3 pl-4 mb-5">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Media prestasi</a>
					</li>
					<li class="breadcrumb-item active">artikel</li>
					<li class="breadcrumb-item active"><?= $detailArtikel['kategori-artikel']; ?></li>
				</ol>
				<div class="judul-event">
					<h2 class="mb-0"><?= $detailArtikel['judul']; ?></h2>
					<h6 class="m-0 mt-1">Oleh : <?= $detailArtikel['id_users']; ?> | <?= $detailArtikel['tanggal']; ?></h6>
					<hr class="mb-0">
					<?php
					if (isset($this->session->userdata['logged_in'])):
						$username = strtolower($this->session->userdata['username']);
						$user2 = strtolower($detailArtikel['id_users']);
						if ($username === $user2) : ?>
						<a href="<?= base_url(); ?>artikel/edit/<?= $detailArtikel['url_title']; ?>" class="col p-0"><div class="mt-2"><i class="fa fa-pencil"></i> <span class="menu-user ">Edit this</span></div></a>
					<?php endif;endif; ?>
				</div>
				<div class="isi-content">
					<div class="gambar mt-3 mb-3">
						<img src="<?=base_url();?>assets/img/artikel-image/<?= $detailArtikel['image']; ?>">
					</div>
					<div class="isi">
						<p class="m-0 mt-1"><?= $detailArtikel['article']; ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 sidebar  pr-3 pl-4">
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
