<div id="tuyul">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="row">
	<div class="col-12">
	<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalCenter">
		Tambah Kategori
	</button>
	</div>
</div>


<!-- <div class="col-lg-12 col-md-12"> -->
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<form action="<?= site_url('admin/kategori/simpan') ?>" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalCenterTitle">Tambah Kategori</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Nama Kategori</label>
							<input type="text" class="form-control" name="nama_kategori" placeholder="nama" required />
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
					<th>Nama Kategori Konten</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($kategori as $a) { ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $a['nama_kategori'] ?></td>
					<td><a class="mdi mdi-delete-variant  btn btn-primary" onClick="return confirm('Apakah anda yakin mau menghapus???')"
							href="<?= base_url('admin/kategori/delete/'.$a['id_kategori']) ?>">
							<i class="fa fa-trash"></i>
						</a>
						<button type="button" class="mdi mdi-border-color  btn btn-primary" data-bs-toggle="modal"
							data-bs-target="#edit<?= $a['id_kategori'] ?>">
							<i class="fa fa-edit"></i>
						</button>
						<!-- <div class="col-lg-12 col-md-12"> -->
						<div class="modal fade" id="edit<?= $a['id_kategori'] ?>" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<form action="<?= site_url('admin/kategori/update') ?>" method="post">
									<input type="hidden" name="id_kategori" value="<?= $a['id_kategori'] ?>">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="editTitle">Edit Kategori</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col mb-3">
													<label for="nameWithTitle" class="form-label">Nama Kategori Konten</label>
													<input type="text" class="form-control" name="nama_kategori"
														value="<?= $a['nama_kategori'] ?>" />
													
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