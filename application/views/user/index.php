<section id="user-profil" >
	<div class="container">
		<div class="section-header text-center wow fadeInUp">
			<?php 
				$cekfoto = strlen($user['foto']);
				if ($cekfoto === 0) {
					$cekdata = 'default.png';
				}else{
					$cekdata = $user['foto']; 
				} ?>
			<div class="rounded-circle foto-profil">
					<img src="<?= base_url();?>assets/img/profile/<?= $cekdata ?>">
			</div>
		</div>
		<div class="nama text-center">
			<h3><?= $user['nama']; ?></h3>
			<h4>@<?= $user['username']; ?></h4>
			<p>" <?= $user['catatan']; ?> "</p>
		</div>
	</div>
</section>


<div class="container-fluid text-center menu-profile" >
	<div class="container-fluid menu-profil-header">
		<div class="row nav nav-tabs box-menu wow fadeInUp">
			<a href="#profile" class="col active" data-toggle="tab"><div><i class="fa fa-user-o"></i> <span class="menu-user">Profil</span></div></a>
			<a href="#home" class="col" data-toggle="tab"><div><i class="fa fa-share-square-o"></i> <span class="menu-user">Event</span></div></a>
			<?php
			if (isset($this->session->userdata['logged_in'])):
				$username = $this->session->userdata['username'];
				$user2 = $user['username'];
				if ($username === $user2) : ?>
				<a href="#profile2" class="col"  data-toggle="tab"><div><i class="fa fa-check-square-o"></i> <span class="menu-user">Manajemen</span></div></a>
			<?php endif;endif; ?>
			<a href="#messages2" class="col"  data-toggle="tab"><div><i class="fa fa-laptop"></i> <span class="menu-user">Artikel</span></div></a>
			<a href="#settings" class="col"  data-toggle="tab"><div><i class="fa fa-list-alt"></i> <span class="menu-user">Ebook</span></div></a>
			<?php
			if (isset($this->session->userdata['logged_in'])):
				if ($username === $user2) : ?>
				<a href="#settings2" class="col"  data-toggle="tab"><div><i class="fa fa-bell-o"></i> <span class="menu-user">Notifikasi</span></div></a></div></a>
			<?php endif;endif; ?>
		</div>

		<div class="container tab-content wow fadeInUp" >
			<div class="tab-pane active" id="profile">
				<h3 class="judul"><span>PROFIL</span> <i class="fa fa-exclamation-circle"></i></h3>
				<?php
				if (isset($this->session->userdata['logged_in'])):
					if ($username === $user2) : ?>
					<a href="<?= base_url(); ?>user/edit/<?= $username; ?>"><button class="tombol-setting"><i class="fa fa-gear"></i> Setting profil</button></a>
				<?php endif;endif; ?>
				<div class="row">
					<div class="col detail-kiri"><p>Nama</p></div>
					<div class="col detail-kanan"><p><?= $user['nama']; ?></p></div>
				</div>
				<div class="row">
					<div class="col detail-kiri"><p>Username</p></div>
					<div class="col detail-kanan"><p><?= $user['username']; ?></p></div>
				</div>
				<?php
				if (isset($this->session->userdata['logged_in'])):
					if ($username === $user2) : ?>
					<div class="row">
						<div class="col detail-kiri"><p>Foto profil</p></div>
						<div class="col detail-kanan"><a href="<?= base_url(); ?>user/edit/<?= $username; ?>"><i class="fa fa-pencil-square-o"></i> Ganti</a></div>
					</div>
				<?php endif;endif; ?>
				<div class="row">
					<div class="col detail-kiri"><p>Email</p></div>
					<div class="col detail-kanan"><p><?= $user['email']; ?></p></div>
				</div>
				<?php
				if (isset($this->session->userdata['logged_in'])):
					if ($username === $user2) : ?>
					<div class="row">
						<div class="col detail-kiri"><p>Password</p></div>
						<div class="col detail-kanan"><p>*******</p></div>
					</div>
				<?php endif;endif; ?>
				<div class="row">
					<div class="col detail-kiri"><p>Bio</p></div>
					<div class="col detail-kanan"><p><?= $user['catatan']; ?></p></div>
				</div>
				 <section class="count">
      	<div class="">
      		<div class="row">
      			<div class="col-md-6">
      				<div class="card-counter primary">
      					<i class="fa fa-trophy"></i>
      					<span class="count-numbers"><?= $jumlahEvent; ?></span>
      					<span class="count-name">Events</span>
      				</div>
      			</div>

      			<div class="col-md-6">
      				<div class="card-counter danger">
      					<i class="fa fa-television"></i>
      					<span class="count-numbers"><?= $jumlahArtikel; ?></span>
      					<span class="count-name">Article</span>
      				</div>
      			</div>

      			<div class="col-md-6">
      				<div class="card-counter success">
      					<i class="fa fa-file-pdf-o"></i>
      					<span class="count-numbers"><?= $jumlahEbook; ?></span>
      					<span class="count-name">Ebook</span>
      				</div>
      			</div>

      			<div class="col-md-6">
      				<div class="card-counter info">
      					<i class="fa fa-check-square-o"></i>
      					<span class="count-numbers">35</span>
      					<span class="count-name">event sukses</span>
      				</div>
      			</div>
      		</div>
      	</div>
      </section>
			</div>
			<div class="tab-pane" id="home">
				<h3 class="judul"><span>EVENT</span></h3>
				<p>Buat event atau bagikan info yang kamu tau disini sob, kamu bisa sharing info lomba, beasiswa, lowongan, seminar dll. Bagikan sampai ke pelosok negeri dan mari wujudkan indonesia berprestasi !</p>
				<?php
				if (isset($this->session->userdata['logged_in'])):
					if ($username === $user2) : ?>
					<a href="<?= base_url(); ?>event/add"><button class="tombol-setting mb-2"><i class="fa fa-plus"></i> Share event</button></a>
				<?php endif; endif; ?>
				<div class="table-responsive">
					<table class="table">
						<thead class="thead-light">
							<tr>
								<th style="width: 12%;">Kategori</th>
								<th style="width: ;">Judul</th>
								<th style="width: 260px;">#</th>
							</tr>
						</thead>
						<tbody>
							<?php if(empty($myevent)): ?>
								<div class="alert alert-warning" role="alert"><?= $user['nama']; ?> belum pernah share info apapun sob.</div>
							<?php endif; ?>
							<?php foreach ($myevent as $myev ): ?>
								<tr>
									<td><?= $myev['kategori']; ?></td>
									<td><?= $myev['judul']; ?></td>
									<td>
										<a href="<?=base_url(); ?>view/<?= $myev['link'];  ?>" class="badge badge-primary" ><i class="fa fa-eye"></i> Lihat</a>
										<?php
										$username = $this->session->userdata['username']; 
										if (isset($this->session->userdata['logged_in'])):
											if ($username === $user2) : ?>
											<a href="<?=base_url(); ?>event/edit/<?= $myev['link'];  ?>" class="badge badge-success"><i class="fa fa-pencil"></i> Edit</a>
											<a href="<?= base_url(); ?>delete/event/<?= $myev['link']; ?>?img=<?= $myev['image']; ?>&username=<?= $username; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash-o"></i> Delete</a>
										<?php endif; endif; ?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>

			<div class="tab-pane" id="profile2">
				<h3 class="judul"><span>MANAJEMEN EVENT</span></h3>
				<p>Manajenem event kamu sob, buat form pendaftaran, manajemen data pendaftaran peserta, manajemen pembayaran. kami akan menyerahkan data peserta kepada penyelenggara dan menyerahkan uang pendaftaran peserta (jika ada).</p>
				<div class="table-responsive">
					<table class="table">
						<thead class="thead-light">
							<tr>
								<th>Event</th>
								<th>Manajemen</th>
							</tr>
						</thead>
						<tbody>
							<?php if(empty($myevent)): ?>
								<div class="alert alert-warning" role="alert"><?= $user['nama']; ?> belum pernah share info apapun sob.</div>
							<?php endif; ?>
							<?php foreach ($myevent as $myev ): ?>
							<tr>
								<td><?= $myev['judul']; ?></td>
								<td>
									<a href="<?=base_url(); ?>view/<?= $myev['link'];  ?>" class="badge badge-success" ><i class="fa fa-eye"></i> Buat form pendaftaran</a>
									<a href="<?=base_url(); ?>view/<?= $myev['link'];  ?>" class="badge badge-primary" ><i class="fa fa-eye"></i> Promosikan</a>
									<a href="<?=base_url(); ?>view/<?= $myev['link'];  ?>" class="badge badge-warning" ><i class="fa fa-eye"></i> Laporan</a>


								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>

			<div class="tab-pane" id="messages2">
				<h3 class="judul"><span>ARTIKEL</span></h3>
				<p>Tuliskan ide-ide kreatifmu dan mari cerdaskan indonesia bersama mediaprestasi.com dan nama kamu akan tampil sebagai penulis</p>
				<?php
				if (isset($this->session->userdata['logged_in'])):
					if ($username === $user2) : ?>
				<a href="<?= base_url(); ?>artikel/add"><button class="tombol-setting"><i class="fa fa-pencil-square-o"></i> Tulis artikel</button></a>
			<?php endif; endif; ?>
				<div class="table-responsive">
					<table class="table">
						<thead class="thead-light">
							<tr>
								<th>Kategori</th>
								<th>Judul artikel</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php if(empty($myartikel)): ?>
								<div class="alert alert-warning" role="alert"><?= $user['nama']; ?> belum pernah share info apapun sob.</div>
							<?php endif; ?>
							<?php foreach ($myartikel as $artikel ): ?>
								<tr>
									<td><?= $artikel['kategori-artikel']; ?></td>
									<td><?= $artikel['judul']; ?></td>
									<td>
										<a href="<?=base_url(); ?>artikel/detail/<?= $artikel['url_title'];  ?>" class="badge badge-primary" ><i class="fa fa-eye"></i> Lihat</a>
										<?php
										if (isset($this->session->userdata['logged_in'])):
											if ($username === $user2) : ?>
											<a href="<?=base_url(); ?>artikel/edit/<?= $artikel['url_title'];  ?>" class="badge badge-success"><i class="fa fa-pencil"></i> Edit</a>
											<a href="<?= base_url(); ?>delete/artikel/<?= $artikel['url_title']; ?>?img=<?= $artikel['image']; ?>&username=<?= $username; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash-o"></i> Delete</a>
										<?php endif; endif; ?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>


			</div>

			<div class="tab-pane" id="settings">
				<h3 class="judul"><span>EBOOK</span></h3>
				<p>Punya ebook yang bermanfaat? Bagikan disini sob, siapa tau ada yang membutuhkan. kamu juga bisa membagikan ebook premium lhoo! </p>
				<?php 
				if (isset($this->session->userdata['logged_in'])):
					if ($username === $user2) :  ?>
				<a href="<?= base_url(); ?>ebook/add"><button class="tombol-setting"><i class="fa fa-plus"></i> Share ebook</button></a>
			<?php endif;endif; ?>
				<div class="table-responsive">
					<table class="table">
						<thead class="thead-light">
							<tr>
								<th>Kategori</th>
								<th>Judul ebook</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php if(empty($myebook)): ?>
								<div class="alert alert-warning" role="alert"><?= $user['nama']; ?> belum pernah share ebook apapun sob.</div>
							<?php endif; ?>
				
				<?php foreach ($myebook as $ebook ): ?>
					<tr>
						<td><?= $ebook['kategori-ebook']; ?></td>
						<td><?= $ebook['judul']; ?></td>
						<td>
							<a href="<?=base_url(); ?>ebook/detail/<?= $ebook['url_title'];  ?>" class="badge badge-primary" ><i class="fa fa-eye"></i> Lihat</a>
							<?php
							if (isset($this->session->userdata['logged_in'])):
								if ($username === $user2) : ?>
								<a href="<?=base_url(); ?>ebook/edit/<?= $ebook['url_title'];  ?>" class="badge badge-success"><i class="fa fa-pencil"></i> Edit</a>
								<a href="#" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash-o"></i> Delete</a>
							<?php endif; endif; ?>
						</td>
					</tr>
				<?php endforeach; ?>
					</tbody>
					</table>
				</div>
			</div>

			<div class="tab-pane" id="settings2">
				<h3 class="judul"><span>Notifikasi</span></h3>
				<div class="alert alert-primary row mt-1 md-1" role="alert">
					<div class="col">
						Ada komentar baru nih
					</div>
					<div class="col">
						<a href="#" class="badge badge-danger float-right" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
					</div>
				</div>
				<div class="alert alert-primary row mt-1 md-1" role="alert">
					<div class="col">
						Ada komentar baru nih
					</div>
					<div class="col">
						<a href="#" class="badge badge-danger float-right" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
