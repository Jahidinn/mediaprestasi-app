<?php  ?>
<!-- Breadcrumb -->
<section id="search-field" >
	<div class="container-fluid">
		<div class="section-header text-center wow fadeInUp">
			<h1>Cari <span>informasi</span></h1>
		</div>
		<form action="kategori" method="get">
			<div class="input-group form wow fadeInUp" >
				<input type="search" class="form-control" placeholder="Saya mau cari info lomba, beasiswa ..." name="search">
				<div class="input-group-append"></div>
				<button class="btn btn-success" type="submit"><i class="fa fa-search"></i> Cari</button>
			</div>
		</form>
		<div class="section-header wow fadeInUp">
			<h3>Mediaprestasi.com | <span class="font-italic">your partner success</span></h3>
		</div>
		<div class="section-header text-center wow fadeInUp">
			<a href="<?= base_url(); ?>kategori" class="btn-get-started scrollto">Lihat semua</a>
			<a href="<?= base_url(); ?>event/add" class="btn-projects scrollto">Share info</a>
		</div>
	</div>
</section>

<main id="main">
    <!-- Kategori section -->
    <section id="kategori-section">
    	<div class="container-fluid">
    		<h2 class="judul-section text-center mt-2 mb-2">Menu</h2>
    		<div class="owl-carousel kategori-section">
    			<?php foreach ($kategori as $kategori) : ?>
    					<div class="box wow fadeInLeft">
    						<div class="icon"><img src="<?= base_url(); ?>assets/img/menu-icon/<?= $kategori['icon']; ?>" class="gambar-icon"></div>
    						<h4><?= $kategori['kategori']; ?></h4>
    						<button type="button" class="btn btn-projects tombolMenu" data-toggle="modal" data-target="#menuModal" data-link="<?= $kategori['link']; ?>" data-baseurl="<?= base_url(); ?>">More  <i class="fa fa-long-arrow-right"></i></button>
    					</div>
    			<?php endforeach; ?>
    		</div>
    	</div>
    </section>

    <!-- Lomba terbaru -->
    <section id="lomba-terbaru" class="wow fadeInUp">
    	<div class="container">
    		<h2 class="judul-section text-center">Info terbaru</h2>
    		<div class="row">	
    			<?php foreach ($eventTerbaru as $eventTerbaru2) : ?>
    				<div class="col-lg-3 col-md-6">
    					<a href="view/<?= $eventTerbaru2['link']; ?>">
    						<div class="member">
    							<!-- <div class="ribbon ribbon-top-left"><span><i class="fa fa-star"></i>Prioritas</span></div> -->
    							<div class="pic p-0"><img src="<?= base_url(); ?>assets/img/poster-upload/<?= $eventTerbaru2['image']; ?>" alt=""></div>
    							<div class="details m-3">
    								<div class="judul">
    									<?php if (strlen($eventTerbaru2['judul']) >= 24) { $next = "..."; } else { $next = "" ; } ?>
    									<h4><?= substr($eventTerbaru2['judul'],0,49); ?><?= $next; ?></h4>
    								</div>
    								<hr class="m-0 mt-2 mb-1">
    								<span class="m-0">Deadline : <?= $eventTerbaru2['deadline']; ?></span>
    								<div class="row text-center mt-1 mb-1 icon">
    									<div class="col "><span>12</span> <i class="fa fa-heart-o"></i></div>
    									<div class="col"><span>23</span> <i class="fa fa-eye"></i></div>
    									<div class="col"><span>42</span> <i class="fa fa-comment-o"></i></div>
    								</div>
    							</div>
    							<div class="button p-3 m-0">
    								<div class="row m-0">
    									<div style="width: 30%;"><i class="fa fa-book"></i></div>
    									<div style="width: 70%;">Read more <i class="fa fa-long-arrow-right"></i></div>
    								</div>
    							</div>
    						</div>
    					</a>
    				</div>
    			<?php endforeach; ?>
    		</div>
    	</div>
    </section>

    <!-- Lomba terbaru -->
    <section id="lomba-terbaru" class="wow fadeInUp">
    	<div class="container">
    		<h2 class="judul-section text-center">Info acak</h2>
    		<div class="row">
                <div class="owl-carousel testimonials-carousel">
    			<?php foreach ($eventRandom as $eventRandom) : ?>
    				<div class="m-3">
    					<a href="view/<?= $eventRandom['link']; ?>">
    						<div class="member">
    							<!-- <div class="ribbon ribbon-top-left"><span><i class="fa fa-star"></i>Prioritas</span></div> -->
    							<div class="pic p-0"><img src="<?= base_url(); ?>assets/img/poster-upload/<?= $eventRandom['image']; ?>" alt=""></div>
    							<div class="details m-3">
    								<div class="judul">
    									<?php if (strlen($eventRandom['judul']) >= 24) { $next = "..."; } else { $next = "" ; } ?>
    									<h4><?= substr($eventRandom['judul'],0,49); ?><?= $next; ?></h4>
    								</div>
    								<hr class="m-0 mt-2 mb-1">
    								<span class="m-0">Deadline : <?= $eventRandom['deadline']; ?></span>
    								<div class="row text-center mt-1 mb-1 icon">
    									<div class="col "><span>12</span> <i class="fa fa-heart-o"></i></div>
    									<div class="col"><span>23</span> <i class="fa fa-eye"></i></div>
    									<div class="col"><span>42</span> <i class="fa fa-comment-o"></i></div>
    								</div>
    							</div>
    							<div class="button p-3 m-0">
    								<div class="row m-0">
    									<div style="width: 30%;"><i class="fa fa-book"></i></div>
    									<div style="width: 70%;">Read more <i class="fa fa-long-arrow-right"></i></div>
    								</div>
    							</div>
    						</div>
    					</a>
    				</div>
                <?php endforeach; ?>
                </div>	
    		</div>
    	</div>
    </section>

    <!-- About me Section -->
    <section id="about" class="wow fadeInUp">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 about-img">
    				<img src="<?= base_url(); ?>assets/img/about-img.png" alt="">
    			</div>
    			<div class="col-lg-6 content">
    				<h2>Apa itu mediaprestasi.com ?</h2>
    				<h3>Kami adalah startup media pendidikan yang berfokus untuk sharing informasi dan manajemen event, beasiswa, sponsor, dan info pendidikan untuk mendukung indonesia berprestasi</h3>
    				<h3>Apa aja yang bisa dilakukan di mediaprestasi.com ??</h3>
    				<ul>
              <li><i class="fa fa-angle-double-right"></i> Sharing informasi seputar lomba, beasiswa, dan info lainya.</li>
    					<li><i class="fa fa-angle-double-right"></i> Sharing sponsorship</li>
              <li><i class="fa fa-angle-double-right"></i> Manajemen event.</li>
    					<li><i class="fa fa-angle-double-right"></i> Library/sharing ebook gratis!</li>
    					<li><i class="fa fa-angle-double-right"></i> Manajemen pendaftaran dan pembayaran event.</li>
    					<li><i class="fa fa-angle-double-right"></i> Tips & trik meraih prestasi.</li>
    				</ul>
    			</div>
    		</div>
    	</div>
    </section>

    <!-- Call To Action Section -->
    <section id="count-event" class="wow fadeInUp">
      <div class="container">
    		<div class="row text-center mb-3 count">
    			<div class="col-md-4"><span><?= $jumlahEvent; ?></span><p>Shared event</p></div>
    			<div class="col-md-4">
    				<span><?= $jumlahEbook ?></span><p>Ebook</p>
    			</div>
    			<div class="col-md-4">
    				<span><?= $jumlahUser ?></span><p>Register user</p>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-9 text-center text-lg-left">
    				<h3 class="cta-title">Publikasi event kamu</h3>
    				<p class="cta-text"> Punya informasi lomba? beasiswa? event? sponsor? atau informasi lain? yuk publikasikan disini agar lebih banyak orang yang tau dan event kamu bisa lebih sukses tentunya.</p>
    			</div>
    			<div class="col-lg-3 cta-btn-container text-center">
    				<a class="cta-btn align-middle" href="event/add">Publikasi sekarag</a>
    			</div>
    		</div>
    	</div>
    </section>

 <!--==========================
      About Section
      ============================-->
<section id="artikel" class="wow fadeInUp">
	<div class="container">
		<h2 class="judul-section text-center">Artikel</h2>
		<div class="row">
			<?php foreach ($artikelTerbaru as $artikelTerbaru) : ?>
			<div class="col-lg-6 about-im artikel-box">
				<a href="<?= base_url(); ?>artikel/<?= $artikelTerbaru['url_title']; ?>">
					<div class="artikel-content">
            <div class="judul">
            <?php if (strlen($artikelTerbaru['judul']) >= 65) { $nextartikel = "..."; } else { $nextartikel = "" ; } ?>
              <h2><?= substr($artikelTerbaru['judul'], 0, 65) ?><?= $nextartikel; ?></h2>
            </div>
            <h5>Penulis : <?= $artikelTerbaru['id_users'] ?> | <?= $artikelTerbaru['tanggal']; ?></h5>
            <hr class="mt-2 mb-1">
            <div class="isi pt-0 mt-0">
                <p class="m-0 p-0"><?= substr($artikelTerbaru['article'],0, 110); ?></p>
            </div>
      				</div>
      			</a>
      		</div> 
      	<?php endforeach; ?>
      	<div class="text-center m-auto">
      		<a href="artikel" class="btn artikel-btn">Lihat semua</a>
      	</div>
    </div>
</section>
      				<!-- #about -->

<!--==========================
      Clients Section
      ============================-->
      <section id="clients" class="wow fadeInUp">
      	<div class="container">
      		<h2 class="judul-section text-center">Media partner</h2>

      		<div class="owl-carousel clients-carousel">
      			<img src="<?= base_url(); ?>assets/img/clients/client-1.png" alt="">
      			<img src="<?= base_url(); ?>assets/img/clients/client-2.png" alt="">
      			<img src="<?= base_url(); ?>assets/img/clients/client-3.png" alt="">
      			<img src="<?= base_url(); ?>assets/img/clients/client-4.png" alt="">
      			<img src="<?= base_url(); ?>assets/img/clients/client-5.png" alt="">
      			<img src="<?= base_url(); ?>assets/img/clients/client-6.png" alt="">
      			<img src="<?= base_url(); ?>assets/img/clients/client-7.png" alt="">
      			<img src="<?= base_url(); ?>assets/img/clients/client-8.png" alt="">
      		</div>

      	</div>
      </section><!-- #clients -->
    <!--==========================
      Contact Section
      ============================-->
      <section id="contact" class="wow fadeInUp">
      	<div class="container">
      		<h2 class="judul-section text-center">Kirim pesan</h2>
      	</div>
      	<div class="container">
      		<div class="form">
      			<div id="sendmessage">Pesan anda terkirim, terimakasih!</div>
      			<div id="errormessage"></div>
      			<form action="<?= base_url(); ?>admin/pesan" method="post" role="form" class="contactForm">
      				<div class="form-row">
      					<div class="form-group col-md-6">
      						<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
      						<div class="validation"></div>
      					</div>
      					<div class="form-group col-md-6">
      						<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
      						<div class="validation"></div>
      					</div>
      				</div>
      				<div class="form-group">
      					<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
      					<div class="validation"></div>
      				</div>
      				<div class="form-group">
      					<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
      					<div class="validation"></div>
      				</div>
      				<div class="text-center"><button type="submit">Kirim pesan</button></div>
      			</form>
      		</div>

      	</div>
      </section><!-- #contact -->
      <section class="footer-top" style=" background-color:#263238;color: #fff;">
      	<div class="container pt-3">
      		<div class="row">
      			<div class="col-md-4 mt-3">
      				<h4 class="mb-2">Kontak</h4>
      				<p>Kawasan Universitas Negeri Semarang, Kel. Patemon  RT01 RW02 No.67, Kec. Gunung pati, Kota Semarang, Indonesia.</p>
      				<p>+6285735109593</p>
              <p>admin@mediaprestasi.com</p>
      				<p class="icon-media"><i class="fa fa-facebook"></i> <i class="fa fa-instagram"></i> <i class="fa fa-envelope"></i> <i class="fa fa-twitter"></i></p>
      				
      			</div>
      			<div class="col-md-4 mt-3">
      				<h4 class="mb-2">Link</h4>
              <p><a href="lomba"><i class="fa fa-angle-double-right"></i> Lomba</a></p>
              <p><a href="beasiswa"><i class="fa fa-angle-double-right"></i> Beasiswa</a></p>
              <p><a href="event"><i class="fa fa-angle-double-right"></i> Event</a></p>
              <p><a href="lainya"><i class="fa fa-angle-double-right"></i> Lainya</a></p>
              <p><a href="ebook"><i class="fa fa-angle-double-right"></i> Ebook</a></p>
              <p><a href="artikel"><i class="fa fa-angle-double-right"></i> Artikel</a></p>
              <p><a href="sponsor"><i class="fa fa-angle-double-right"></i> sponsor</a></p>
      			</div>
      			<div class="col-md-4 mt-3">
      				<h4 class="mb-2">Tentang kami</h4>
      				<p><a href="#">About</a></p>
              <p><a href="#">Blog</a></p>
      				<p><a href="#">Media partner</a></p>
      				<p><a href="#">Team</a></p>
      				<p><a href="#">Donasi</a></p>
      			</div>
      		</div>
          <hr class="m-0 mt-3 p-0 text-white bg-white">
        </div>
      </section>
  </main>


  <div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
  		<div class="modal-content">
  			<div class="modal-header">
  				<h5 class="modal-title" id="menuModalLabel"></h5>
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
  				</button>
  			</div>
        <h6  class="text-center mt-2 mb-2"><strong>Mau cari atau share event sob?</strong></h6>
        <div class="modal-body text-center row">
          <div class="col-6">
  				<a class="m-2" id="btn-lihat" href="<?= base_url(); ?>kategori">
            <div>
              <i class="fa fa-search"></i>
              <h6 class="m-0 mt-2"><strong>Cari info</strong></h6>
            </div>    
          </a>
          </div>
          <div class="col-6">
  				<a class="m-2" id="btn-share" href="<?= base_url(); ?>event/add">
            <div>
              <i class="fa fa-pencil-square-o"></i>
              <h6 class="m-0 mt-2"><strong>share info</strong></h6>
            </div>    
          </a>
          </div>
  			</div>
  			<div class="modal-footer">
  				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
  			</div>
  		</div>
  	</div>
  </div>