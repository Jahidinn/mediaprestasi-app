<?php  ?>
<section class="section-event">
	<div class="container event pt-3 mt-2">
		<div class="row">
			<div class="col-md-8 pr-3 pl-4 mb-5">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Media prestasi</a>
					</li>
					<li class="breadcrumb-item active"><?= $detailEvent['kategori']; ?></li>
				</ol>
				<div class="judul-event">
					<h2 class="mb-0"><?= $detailEvent['judul']; ?></h2>
					<h6 class="m-0 mt-1"><?= $detailEvent['instansi']; ?> - deadline <?= $detailEvent['deadline']; ?></h6>
					<h6 class="m-0 mt-1"><?= $detailEvent['peserta']; ?></h6>
					<hr class="mb-0">
					<?php
					if (isset($this->session->userdata['logged_in'])):
						$username = strtolower($this->session->userdata['username']);
						$user2 = strtolower($detailEvent['id_users']);
						if ($username === $user2) : ?>
						<a href="<?= base_url(); ?>event/edit/<?= $detailEvent['link']; ?>" class="col p-0"><div class="mt-2"><i class="fa fa-pencil"></i> <span class="menu-user ">Edit this</span></div></a>
					<?php endif;endif; ?>
				</div>
				<div class="isi-content">
					<div class="gambar mt-3 mb-3">
						<img src="<?=base_url();?>assets/img/poster-upload/<?= $detailEvent['image']; ?>">
					</div>
					<div class="isi">
						<p class="m-0 mt-1"><?= $detailEvent['deskripsi']; ?></p>
					</div>

                </div><hr>
                <div class="share-button mt-2">
                    <div class="row text-center mt-1 mb-2 icon">
                                <div class="col "><span>12</span> <i class="fa fa-heart-o"></i></div>
                                <div class="col"><span>23</span> <i class="fa fa-eye"></i></div>
                                <div class="col"><span>42</span> <i class="fa fa-comment-o"></i></div>
                    </div><hr>
                    <?php $my_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  ?>
                    <i class="fa fa-share-alt"></i> share
                    <a href="http://www.facebook.com/sharer.php?u=<?= $my_link; ?>"><button class="btn btn-primary tombol-fb"><i class="fa fa-facebook"></i></button> </a>
                    <a href="https://wa.me/?text=<?= $detailEvent['judul']; ?> <?= $my_link; ?>"><button class="btn btn-success tombol-wa"><i class="fa fa-whatsapp"></i></button></a>
<!--                     <a href="#"><button class="btn btn-secondary tombol-ig"><i class="fa fa-instagram"></i> Ig</button></a> -->
                    <a href="https://twitter.com/share?url=<?= $my_link; ?>&text=<?= $detailEvent['judul']; ?>&hashtags=mediaprestasi"><button class="btn btn-primary tombol-twitter"><i class="fa fa-twitter"></i></button></a>

                </div>
                <hr>
                <div class="komentar">
                    <h4>Komentar (<?= $jumlahKomentar; ?>)</h4>
                    <?php if (isset($this->session->userdata['logged_in'])) {
                    $type = 'readonly="readonly"';
                    $nama = $detailUser['nama'];
                    $email = $detailUser['email'];
                    $idusercomment = '';
                    }else{
                    $type = "";
                    $nama = "";
                    $email = '';
                    }
                    ?>
                    <form method="post" action="<?= base_url(); ?>event/comment">
                        <input type="hidden" name="id_event" value="<?= $detailEvent['id']; ?>">
                        <?php if (isset($this->session->userdata['logged_in'])) : ?>
                            <input type="hidden" name="id_user" value="<?= $detailUser['username']; ?>">
                        <?php endif; ?>
                            <small class="form-text text-danger"><?= form_error('nama'); ?><?= $this->session->flashdata('komentar-error'); ?></small>
                        <input type="hidden" name="link" value="<?= $my_link; ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" <?= $type; ?> placeholder="Nama *" value="<?= $nama; ?>">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" <?= $type; ?> placeholder="Email *" value="<?= $email; ?>">
                        </div>
                        <div class="form-group">
                            <textarea name="komentar" id="" class="form-control" rows="4" placeholder="Komentar"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit" name="submit">comment</button>
                    </form>
                    <?php if ($jumlahKomentar !== 0 ) : ?>
                    <h6 class="mt-2 mb-2"><strong>Komentar terbaru :</strong></h6>
                    <?php endif; ?>
                    <?php foreach ($komentar as $komentar) : ?>
                    <div class="komentar-event p-2 mb-3">
                        <h6 class="m-0 mt-2 "><strong><?= $komentar['nama']; ?></strong></h6>
                        <small class="mt-0 mb-1 text-muted"><?= $komentar['tanggal']; ?> At : <?= $komentar['jam']; ?></small>
                        <p class="m-0"><?= $komentar['komentar']; ?></p>
                        <hr>
                        <div class="reply ml-4">
                            <a data-toggle="collapse" href="#reply<?= $komentar['id'] ?>"><i class="fa fa-share"></i> Replay</a>
                            <div class="collapse" id="reply<?= $komentar['id']; ?>">
                                <form method="post" action="<?= base_url(); ?>event/replyComment">
                                    <input type="hidden" name="id_event" value="<?= $detailEvent['id']; ?>">
                                    <input type="hidden" name="id_comment" value="<?= $komentar['id']; ?>">
                                    <?php if (isset($this->session->userdata['logged_in'])) : ?>
                                        <input type="hidden" name="id_user" value="<?= $detailUser['username']; ?>">
                                    <?php endif; ?>
                                    <small class="form-text text-danger"><?= form_error('nama'); ?><?= $this->session->flashdata('komentar-error'); ?></small>
                                    <input type="hidden" name="link" value="<?= $my_link; ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nama" <?= $type; ?> placeholder="Nama *" value="<?= $nama; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" <?= $type; ?> placeholder="Email *" value="<?= $email; ?>">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="komentar" id="" class="form-control" rows="4" placeholder="Komentar"></textarea>
                                    </div>
                                    <button class="btn btn-primary" type="submit" name="submit-reply">reply comment</button>
                                </form>
                            </div>
                            <p class="mb-1 mt-2"><strong>Balasan komentar (<?= $jumlahBalasanKomentar; ?>) :</strong></p>
                            <hr>
                            <?php foreach ($balasan_komentar as $balasan) : ?>
                                <?php if ($balasan['id_comment'] == $komentar['id']) : ?>
                                    <h6 class="mt-2 mb-1"><strong><?= $balasan['nama']; ?></strong> <small><?= $balasan['tanggal']; ?> At : <?= $balasan['jam']; ?></small></h6>
                                    <p><?= $balasan['balasan']; ?></p>
                                    <hr class="m-0">
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
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
