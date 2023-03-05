
<section id="search-field" >
	<div class="container-fluid">
		<div class="section-header text-center wow fadeInUp">
			<h1>Cari <span>informasi</span></h1>
		</div>
		<div class="input-group form wow fadeInUp" >
			<input type="text" class="form-control" placeholder="Saya mau cari info lomba, beasiswa ..." name="">
			<div class="input-group-append"></div>
			<button class="btn btn-success"><i class="fa fa-search"></i> Cari</button>
		</div>
		<div class="section-header wow fadeInUp">
			<h3>Temukan semua informasinya disini sob! Atau punya event? Bisa di share juga lhoo! GRATIS DEH</h3>
		</div>
		<div class="section-header text-center wow fadeInUp">
			<a href="#about" class="btn-get-started scrollto">Lihat semua</a>
			<a href="#portfolio" class="btn-projects scrollto">Share info</a>
		</div>
	</div>
</section>

<!-- halaman depan -->
<main id="main">
    <!--==========================
    		Kategori section
    ============================-->
    <section id="kategori-section">
    	<div class="container-fluid">
    		<h2 class="judul-section text-center mt-2">Menu</h2>
    		<div class="owl-carousel kategori-section">
    			<a href="#">
    				<div class="box wow fadeInLeft">
    					<div class="icon"><img src="<?= base_url(); ?>assets/img/trophy.png" class="gambar-icon"></div>
    					<h4>Lomba</h4>
    					<p class="btn-projects scrollto">More  <i class="fa fa-long-arrow-right" data-toggle="modal" data-target="#exampleModal"></i></p>
    				</div>
    			</a>
    			<a href="#">
    				<div class="box wow fadeInLeft">
    					<div class="icon"><img src="<?= base_url(); ?>assets/img/grad.png" class="gambar-icon"></div>
    					<h4>Beasiswa</h4>
    					<p href="#" class="btn-projects scrollto">More  <i class="fa fa-long-arrow-right"></i></p>
    				</div>
    			</a>
    			<a href="#">
    				<div class="box wow fadeInLeft">
    					<div class="icon"><img src="<?= base_url(); ?>assets/img/calendar.png" class="gambar-icon"></div>
    					<h4>Event</h4>
    					<p href="#" class="btn-projects scrollto">More  <i class="fa fa-long-arrow-right"></i></p>
    				</div>
    			</a>
    			<a href="#">
    				<div class="box wow fadeInLeft">
    					<div class="icon"><img src="<?= base_url(); ?>assets/img/book.png" class="gambar-icon"></div>
    					<h4>Ebook</h4>
    					<p href="#" class="btn-projects scrollto">More  <i class="fa fa-long-arrow-right"></i></p>
    				</div>
    			</a>
    			<a href="#">
    				<div class="box wow fadeInLeft">
    					<div class="icon"><img src="<?= base_url(); ?>assets/img/next.png" class="gambar-icon"></div>
    					<h4>Lainya</h4>
    					<p href="#" class="btn-projects scrollto">More  <i class="fa fa-long-arrow-right"></i></p>
    				</div>
    			</a>

    		</div>
    	</div>
    </section>
    

    <section id="lomba-terbaru" class="wow fadeInUp">
    	<div class="container">
    		<h2 class="judul-section text-center">Info terbaru</h2>
    		<div class="row">	
    			<?php foreach ($eventTerbaru as $eventTerbaru):?>
    				<?php if (strlen($eventTerbaru['judul']) >= 24) {
    					$next = "...";
    				} else { $next = ""; } ?>
    				<div class="col-lg-3 col-md-6">
    					<a href="view/<?= $eventTerbaru['link']; ?>">
    						<div class="member">
    							<!-- <div class="ribbon ribbon-top-left"><span><i class="fa fa-star"></i>Prioritas</span></div> -->
    							<div class="pic p-0"><img src="<?= base_url(); ?>assets/img/poster-upload/<?= $eventTerbaru['image']; ?>" alt=""></div>
    							<div class="details m-3">
    								<div class="judul">
    									<h4><?= substr($eventTerbaru['judul'],0,49); ?><?= $next; ?></h4>
    								</div>
    								<hr class="m-0 mt-2 mb-1">
    								<span class="m-0">Deadline : 10 Oktober 2019</span>
    								<div class="row text-center mt-1 mb-1">
    									<div class="col">
    										<i class="fa fa-heart-o"></i>
    									</div><div class="col">
    										<i class="fa fa-eye"></i>
    									</div><div class="col">
    										<i class="fa fa-comment-o"></i>
    									</div>
    									
    								</div>
    							</div>
    							<div class="button p-3 m-0">
    								<div class="row m-0">
    									<div style="width: 30%;">
    									<i class="fa fa-book"></i>
    								</div>
    								<div style="width: 70%;">
    									Read more <i class="fa fa-long-arrow-right"></i>
    								</div>
    								</div>
    							</div>

    						</div>
    					</a>
    				</div>
    			<?php endforeach; ?>
    		</div>
    	</div>
    </section>
    <!--==========================
      Testimonials Section
      ============================-->
    <section id="testimonials" class="wow fadeInUp">
    	<div class="container">
    		<h2 class="judul-section text-center">Info random</h2>
    		<div class="owl-carousel testimonials-carousel">
    			<?php foreach ($eventRandom as $eventRandom):?>
    				<a href="view/<?= $eventRandom['link']; ?>">
    					<div class="testimonial-item">
    						<div class="testimonial-img"><img src="<?= base_url();?>assets/img/poster-upload/<?= $eventRandom['image']; ?>" alt=""></div>
    						<h3><?= substr($eventRandom['judul'],0,29); ?><?= $next; ?></h3>
    						<h4>Deadline : 10 Desember 2018</h4>
    						<hr>
    						<p>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
    						</p>
    						<button class="btn-more-info">Details</button>
    						<button class="btn-more-daftar">Daftar</button>

    					</div>
    				</a>
    			<?php endforeach; ?>


    		</div>
    		<div class="slider-nav">
    			<div class="prev"><i class="fa fa-angle-double-left"></i></div>
    			<div class="next"><i class="fa fa-angle-double-right"></i></div>
    		</div>

    	</div>
    </section><!-- #testimonials -->


  <!--==========================
      About Section
      ============================-->
      <section id="about" class="wow fadeInUp">
      	<div class="container">
      		<div class="row">
      			<div class="col-lg-6 about-img">
      				<img src="<?= base_url(); ?>assets/img/about-img.png" alt="">
      			</div>

      			<div class="col-lg-6 content">
      				<h2>Apa itu mediaprestasi.com ?</h2>
      				<h3>Kami adalah platform sharing informasi event pendidikan</h3>
      				<h3>Apa aja yang bisa dilakukan di mediaprestasi.com ??</h3>

      				<ul>
      					<li><i class="fa fa-angle-double-right"></i> Sharing informasi seputar lomba, beasiswa, dan info lainya.</li>
      					<li><i class="fa fa-angle-double-right"></i> Manajemen event.</li>
      					<li><i class="fa fa-angle-double-right"></i> Manajemen ppendaftaran dan pembayaran event.</li>
      					<li><i class="fa fa-angle-double-right"></i> Tips & trik meraih prestasi.</li>
      				</ul>

      			</div>
      		</div>

      	</div>
      </section><!-- #about -->



   <!--==========================
      Call To Action Section
      ============================-->
      <section id="call-to-action" class="wow fadeInUp">
      	<div class="container">
      		<div class="row text-center mb-3 count">
      			<div class="col-md-4">
      				<span>8998</span>
      				<p>shared event</p>
      			</div>
      			<div class="col-md-4">
      				<span>600</span>
      				<p>ebook</p>
      			</div>
      			<div class="col-md-4">
      				<span>1967</span>
      				<p>shared event</p>
      			</div>
      		</div>
      		<div class="row">
      			<div class="col-lg-9 text-center text-lg-left">
      				<h3 class="cta-title">Publikasi event kamu</h3>
      				<p class="cta-text"> Punya informasi lomba? beasiswa? event? atau informasi lain? yuk publikasikan disini agarr lebih banyak orang yang tau dan event kamu bisa lebih sukses tentunya.</p>
      			</div>
      			<div class="col-lg-3 cta-btn-container text-center">
      				<a class="cta-btn align-middle" href="#">Publikasi sekarag</a>
      			</div>
      		</div>

      	</div>
      </section><!-- #call-to-action -->

 <!--==========================
      About Section
      ============================-->
      <section id="artikel" class="wow fadeInUp"">
      	<div class="container">
      		<h2 class="judul-section text-center">Artikel</h2>
      		<div class="row">

      			<div class="col-lg-6 about-im artikel-box">
      				<a href="">
      					<div class="artikel-content">
      						<h2>Judur artikel pertama</h2>
      						<h5>Kategori: pendidikan | 16 Desember 2019</h5>
      						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      							tempor incididunt <span>[...]</span></p>
      						</div>
      					</a>
      				</div> 
      				<div class="col-lg-6 about-im artikel-box">
      					<a href="">
      						<div class="artikel-content">
      							<h2>Judur artikel pertama</h2>
      							<h5>Kategori: pendidikan | 16 Desember 2019</h5>
      							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      								tempor incididunt <span>[...]</span></p>
      							</div>
      						</a>
      					</div> 
      					<div class="col-lg-6 about-im artikel-box">
      						<a href="">
      							<div class="artikel-content">
      								<h2>Judur artikel pertama</h2>
      								<h5>Kategori: pendidikan | 16 Desember 2019</h5>
      								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      									tempor incididunt <span>[...]</span></p>
      								</div>
      							</a>
      						</div> 
      						<div class="col-lg-6 about-im artikel-box">
      							<a href="">
      								<div class="artikel-content">
      									<h2>Judur artikel pertama</h2>
      									<h5>Kategori: pendidikan | 16 Desember 2019</h5>
      									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      										tempor incididunt <span>[...]</span></p>
      									</div>
      								</a>
      							</div>


      						</div>
      						<div class="text-center">
      							<button class="btn artikel-btn">Lihat semua</button>
      						</div>

      					</div>
      				</section><!-- #about -->

<!--==========================
      Clients Section
      ============================-->
      <section id="clients" class="wow fadeInUp">
      	<div class="container">
      		<h2 class="judul-section text-center">Media partner</h2>

      		<div class="owl-carousel clients-carousel">
      			<img src="img/clients/client-1.png" alt="">
      			<img src="img/clients/client-2.png" alt="">
      			<img src="img/clients/client-3.png" alt="">
      			<img src="img/clients/client-4.png" alt="">
      			<img src="img/clients/client-5.png" alt="">
      			<img src="img/clients/client-6.png" alt="">
      			<img src="img/clients/client-7.png" alt="">
      			<img src="img/clients/client-8.png" alt="">
      		</div>

      	</div>
      </section><!-- #clients -->
    <!--==========================
      Contact Section
      ============================-->
      <section id="contact" class="wow fadeInUp">
      	<div class="container">
      		<h2 class="judul-section text-center">Kontak kami</h2>

      		<div class="row contact-info">

      			<div class="col-md-4">
      				<div class="contact-address">
      					<i class="ion-ios-location-outline"></i>
      					<h3>Alamat</h3>
      					<address>Sekaran, Kec. Gunung pati, Kota Semarang, pos 50229, Indonesia</address>
      				</div>
      			</div>

      			<div class="col-md-4">
      				<div class="contact-phone">
      					<i class="ion-ios-telephone-outline"></i>
      					<h3>No tlp</h3>
      					<p><a href="tel:+155895548855">+62 2130 5050 20</a></p>
      				</div>
      			</div>

      			<div class="col-md-4">
      				<div class="contact-email">
      					<i class="ion-ios-email-outline"></i>
      					<h3>Email</h3>
      					<p><a href="mailto:info@example.com">admin@mediaprestasi.com</a></p>
      				</div>
      			</div>
      		</div>
      		<hr>
      	</div>
      	<div class="container">
      		<div class="form">
      			<div id="sendmessage">Pesan anda terkirim, terimakasih!</div>
      			<div id="errormessage"></div>
      			<form action="" method="post" role="form" class="contactForm">
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
      <section class="footer" style=" background-color:#263238;color: #fff;">
      	<div class="container pt-3">
      		<div class="row">
      			<div class="col-md-4">
      				<h4>Kontak</h4>
      				<p>Jl. WR. Supratman No.58 Semarang, Indonesia.</p>
      				<p>+6285735109593</p>
      				<p>admin@mediaprestasi.com</p>
      				
      			</div>
      			<div class="col-md-4">
      				<h4>Link</h4>

      			</div>
      			<div class="col-md-4">
      				<h4>Tentang kami</h4>
      				<p><a href="#">About</a></p>
      				<p><a href="#">Blog</a></p>
      				<p><a href="#">Team</a></p>
      				<p><a href="#">Donasi</a></p>
      			</div>
      		</div>
      	</div>
      </section>
  </main>

