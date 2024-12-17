<div id="tuyul">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="row">
	<div class="col-12">
		<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalCenter">
			Tambah Konten
		</button>
	</div>
</div>


<!-- <div class="col-lg-12 col-md-12"> -->
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<form action="<?= site_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalCenterTitle">Tambah Konten</h5>
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
								<?php foreach($kategori as $aaa) { ?>
								<option value="<?= $aaa['id_kategori'] ?>"><?= $aaa['nama_kategori'] ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Keterangan</label>
							<textarea name="keterangan" class="form-control" id=""></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Foto</label>
							<input type="file" name="foto" class="form-control"
								accept="image/png, image/gif, image/jpeg, image/jpg">
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
<div class="card">
	<h5 class="card-header">Kategori Konten</h5>
	<div class="table-responsive text-nowrap">
		<table class="table table-bordered table-contextual" style="width: 900px;">
			<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Kategori Konten</th>
					<th>Tanggal</th>
					<th>Kreator</th>
					<th>Foto</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($konten as $a) { ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $a['judul'] ?></td>
					<td><?= $a['nama_kategori'] ?></td>
					<td><?= $a['tanggal'] ?></td>
					<td><?= $a['nama'] ?></td>
					<td>
						<a href="<?= base_url('assets/upload/konten/'.$a['foto']) ?>" target="_blank">
							<span class="mdi mdi-folder-image"> Lihat Foto</span>
						</a>
					</td>
					<td>
						<a class="mdi mdi-delete-variant btn btn-primary" onClick="return confirm('Apakah anda yakin mau menghapus???')"
							href="<?= base_url('admin/konten/delete/'.$a['foto']) ?>">
							<i class="fa fa-trash"></i>
						</a>
						<button type="button" class="btn btn-primary " data-bs-toggle="modal"
							data-bs-target="#konten<?= $a['foto'] ?>">							
							<i class="fa fa-pencil"></i>

							<!-- <i class="mdi mdi-border-color"></i> -->
						</button>
						<div class="modal fade" id="konten<?= $a['foto'] ?>" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<form action="<?= site_url('admin/konten/update') ?>" method="post"
									enctype='multipart/form-data'>
									<input type="hidden" name="nama_foto" value="<?= $a['foto'] ?>">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="konten"><?= $a['judul'] ?></h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col mb-3">
													<label for="nameWithTitle" class="form-label">Judul</label>
													<input type="text" class="form-control" name="judul"
														value="<?= $a['judul'] ?>" />
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<label for="nameWithTitle" class="form-label">Kategori</label>
													<select name="id_kategori" class="form-control">
														<?php foreach($kategori as $aaa) { ?>
														<option 
														<?php if($aaa['id_kategori']==$a['id_kategori']) { echo"selected";}?>
														value="<?= $aaa['id_kategori'] ?>">
															<?= $aaa['nama_kategori'] ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<label for="nameWithTitle" class="form-label">Keterangan</label>
													<textarea name="keterangan" class="form-control" id=""><?= $a['keterangan'] ?></textarea>
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<label for="nameWithTitle" class="form-label">Foto</label>
													<input type="file" name="foto" class="form-control"
														accept="image/png, image/gif, image/jpeg, image/jpg">
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-outline-secondary"
												data-bs-dismiss="modal">
												Close
											</button>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</td>
				</tr>
				<?php $no++; } ?>
			</tbody>
		</table>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
