
	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Daftar mahasiswa</h3>
			<?php if(empty($user)): ?>
				<div class="alert alert-warning" role="alert">
				  Tidak ada data user yang anda cari.
				</div>
			<?php endif; ?>
			<ul class="list-group">
				<?php foreach ($user as $usr ): ?>
				<li class="list-group-item">
					<?= $usr['username']; ?>
					<a href="user/<?= $usr['username']; ?>" class="badge badge-primary float-right">detail</a>
					<a href="<?= base_url(); ?>mahasiswa/ubah/<?= $usr['id']; ?>" class="badge badge-success float-right">ubah</a>
					<a href="<?= base_url(); ?>mahasiswa/hapus/<?= $usr['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Data akan dihapus');">hapus</a>
						
				</li>
			<?php endforeach; ?>
				
			</ul>
		</div>
	</div>