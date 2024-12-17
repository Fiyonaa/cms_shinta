<div id="tuyul">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="row">
	<div class="col-12">
		<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalCenter">
			Tambah Konten

		</button>
		<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<form action="<?= site_url('admin/galeri/simpan') ?>" method="post" enctype='multipart/form-data'>
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalCenterTitle">Tambah Foto</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3">
									<label for="nameWithTitle" class="form-label">Judul</label>
									<input type="text" class="form-control" name="judul" placeholder="Judul" required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label for="nameWithTitle" class="form-label">Kategori</label>
									<select name="id_kategori" class="form-control">
										<?php foreach($kategori as $y) { ?>
										<option value="<?= $y['id_kategori'] ?>"><?= $y['nama_kategori'] ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label for="nameWithTitle" class="form-label">Foto</label>
									<input type="file" class="form-control" name="foto" accept="image/png, image/jpeg"
										required />
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
								Close
							</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- <div class="col-lg-12 col-md-12"> -->
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<form action="<?= site_url('admin/galeri/simpan') ?>" method="post" >
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalCenterTitle">Tambah Foto</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Judul</label>
							<input type="text" class="form-control" name="judul" placeholder="Judul" required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Kategori</label>
							<select name="id_kategori" class="form-control">
								<?php foreach($kategori as $y) { ?>
								<option value="<?= $y['id_kategori'] ?>"><?= $y['nama_kategori'] ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Foto</label>
							<input type="file" class="form-control" name="foto" accept="image/png, image/jpeg"
								required />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="row">
	<?php $no=1; foreach ($galeri as $aa) { ?>
	<div class="col-lg-4">
		<article>
			<div class="post-img">
				<img src="<?=  base_url('assets/upload/galeri/'.$aa['foto'])?>" alt="" class="img-fluid">
				<div class="card-body">
					<h5 class="card-title"> <?= $aa['judul'] ?></h5>
					<a href="<?= site_url('admin/galeri/delete_data/'.$aa['foto']) ?>"
						class="btn btn-sm btn-outline-primary"
						onClick="return confirm('Apakah anda yakin menghapus data ini?? ')">
						<i class="tf-icons fa fa-trash"></i>
					</a>
					<a class="mdi mdi-delete-variant" onClick="return confirm('Apakah anda yakin mau menghapus???')"
							href="<?= site_url('admin/galeri/delete_data/'.$aa['foto']) ?>">
	
						</a>
					<button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
						data-bs-target="#galeri<?= $no; ?>">
						<i class="fa fa-edit"></i>
					</button>

					<div class="modal fade" id="galeri<?= $no; ?>" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-md" role="document">
							<form action="<?= base_url('admin/galeri/update')?>" method="post"
								enctype="multipart/form-data">
								<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="modalCenterTitle"><?= $aa['judul'] ?></h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col mb-6">
												<label class="form-label">Judul</label>
												<input type="text" class="form-control" value="<?= $aa['judul'] ?>"
													name="judul" />
											</div>
										</div>
										<div class="row">
											<div class="col mb-6">
												<label class="form-label">Kategori</label>
												<select name="id_kategori" class="form-control">
													<?php foreach($kategori as $uu) {?>
													<option
														<?php if($uu['id_kategori']==$aa['id_kategori']) { echo "selected"; }?>
														value="<?= $uu['id_kategori'] ?>">
														<?= $uu['nama_kategori'] ?></option>
													<?php }; ?>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="col mb-6">
												<label class="form-label">Foto</label>
												<input type="file" name="foto" class="form-control"
													accept="image/png, image/jpeg">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-outline-secondary"
											data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Simpan</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
	<?php $no++; } ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>