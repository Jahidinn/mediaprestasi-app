
<div class="m-0 search-event">
	<div class="container bg-white mt-3 pb-5">
		<div class="row ml-0 pt-3 mb-0">
			<div class="col">
				<form class="form-inline row" action="" method="get">
					<div class="col p-0 mr-0">
						<div class="form-group mb-2 form-search">
							<input type="search" name="search" class="form-control" id="inputPassword2" placeholder="Saya mau cari ..." value="<?= $this->input->get('search'); ?>">
						</div>
					</div>
					<div class="col-auto p-0 mr-2">
						<button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i> <span id="hide">cari</span></button>
					</div>
				</form>
			</div>
			<!-- <div class="col-auto">
				<span class="float-right m-auto"><i class="fa fa-filter"></i> <span id="hide">Filter</span></span>
			</div> -->
		</div>
		<div class="owl-carousel search-menu col-md-6 m-0 p-0">
			<a href="<?= base_url(); ?>kategori">Semua</a>		
			<a href="<?= base_url(); ?>lomba" >Lomba</a>	
			<a href="<?= base_url(); ?>beasiswa">Beasiswa</a>	
			<a href="#" class="active9"><strong>Event</strong></a>	
			<a href="<?= base_url(); ?>ebook">Ebook</a>	
			<a href="<?= base_url(); ?>lowongan">Lowongan</a>	
			<a href="<?= base_url(); ?>seminar">Seminar</a>	
			<a href="<?= base_url(); ?>pelatihan">Pelatihan</a>	
			<a href="<?= base_url(); ?>olimpiade">Olimpiade</a>	
			<a href="<?= base_url(); ?>lainya">Lainya</a>
		</div>
		<div class="garis mb-1"></div>
		<div class="box-event">
			<div class="row m-0">
				<?php foreach ($event as $event ) : ?>
				<div class="col-md-3 p-2">
					<div class="card">
						<img src="<?= base_url(); ?>assets/img/poster-upload/<?= $event['image']; ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<div class="judul">
								<?php if (strlen($event['judul']) >= 35) { $next = " ..."; } else { $next = "" ; } ?>
								<h5 class="card-title mb-1"><?= substr($event['judul'],0,35); ?><?= $next; ?></h5>
							</div>
							<p class="card-text m-0 mb-1"><small class="text-muted m-0"><?= $event['instansi']; ?></small></p>
							<hr class="m-0 p-0">
							<div class="row text-center mt-1 mb-0 icon">
								<div class="col "><span>12</span> <i class="fa fa-heart-o"></i></div>
								<div class="col"><span>23</span> <i class="fa fa-eye"></i></div>
								<div class="col"><span>42</span> <i class="fa fa-comment-o"></i></div>
							</div>
							<div class="isi mt-2 mb-2">
								 <?php if (strlen($event['deskripsi']) >= 80) { $next2 = " ..."; } else { $next2 = "" ; } ?>
							<p class="card-text m-0 p-0"><?= substr($event['deskripsi'],0,80).$next2; ?></p>
							</div>
							<a href="<?= base_url(); ?>view/<?= $event['link']; ?>" class="btn btn-primary tombol-event"><i class="fa fa-angle-double-right"></i> Lihat</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
