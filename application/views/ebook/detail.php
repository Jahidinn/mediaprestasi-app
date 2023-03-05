<?php  ?>
<section class="section-event">
	<div class="container event pt-3 mt-2">
		<div class="row">
			<div class="col-md-8 pr-3 pl-4 mb-5">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Media prestasi</a>
					</li>
					<li class="breadcrumb-item active">ebook</li>
					<li class="breadcrumb-item active"><?= $detailEbook['kategori-ebook']; ?></li>
				</ol>
				<div class="judul-event">
					<h2 class="mb-0"><?= $detailEbook['judul']; ?></h2>
					<h6 class="m-0 mt-1"><?= $detailEbook['id_users']; ?></h6>
					<h6 class="m-0 mt-1"><?= $detailEbook['id_users']; ?></h6>
					<hr class="mb-0">
					<?php
					if (isset($this->session->userdata['logged_in'])):
						$username = $this->session->userdata['username'];
						$user2 = $detailEbook['id_users'];
						if ($username === $user2) : ?>
						<a href="<?= base_url(); ?>ebook/edit/<?= $detailEbook['url_title']; ?>" class="col p-0"><div class="mt-2"><i class="fa fa-pencil"></i> <span class="menu-user ">Edit this</span></div></a>
					<?php endif;endif; ?>
				</div>
				<div class="isi-content">
					<div class="gambar mt-3 mb-3">
						<iframe src="http://docs.google.com/gview?url=https://mediaprestasi.com/file/Form-Beasiswa-Jemaah%20Muslim%202018.docx&embedded=true&widget=false" max="100"  frameborder="0"></iframe>
	<!-- 					<iframe src="https://mediaprestasi.com/file/Jahidin_5301416010.pdf"  frameborder="0"></iframe>	 -->				
					</div>
					<div class="text-center">
						<a href="<?= base_url().'assets/ebook/'.$detailEbook['file']; ?>" class="btn btn-primary">Full preview</a>
						<a href="<?= base_url(); ?>ebook/download/<?= $detailEbook['url_title']; ?>" class="btn btn-success">Download ebook</a href="">
					</div>
					<div class="isi">
						<p class="m-0 mt-1"><?= $detailEbook['deskripsi']; ?></p>
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
