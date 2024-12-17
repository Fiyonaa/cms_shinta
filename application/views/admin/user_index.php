<div id="tuyul">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="row">
	<div class="col-12">
	<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalCenter">
		Tambah User
	</button>
	</div>
</div>


<!-- <div class="col-lg-12 col-md-12"> -->
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<form action="<?= site_url('admin/user/simpan') ?>" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalCenterTitle">Tambah User</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Nama</label>
							<input type="text" class="form-control" name="nama" placeholder="nama" required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Username</label>
							<input type="text" class="form-control" name="username" placeholder="Username" required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Password</label>
							<input type="password" class="form-control" name="password" placeholder="Password"
								required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Level</label>
							<select name="level" class="form-control">
								<option value="admin">Admin</option>
								<option value="user">Kontributor</option>
							</select>
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
<div class="card col-12">
	<h5 class="card-header">Data Pengguna</h5>
	<div class="table-responsive text-nowrap">
		<table class="table table-bordered table-contextual" style="width: 900px;">
			<thead>
				<tr>
					<th>Username</th>
					<th>Nama</th>
					<th>Level</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($user as $a) { ?>
				<tr class="table-info">
					<td><?= $a['username'] ?></td>
					<td><?= $a['nama'] ?></td>
					<td><?= $a['level'] ?></td>
					<td><a onClick="return confirm('Apakah anda yakin mau menghapus???')" class=" btn btn-primary"
							href="<?= base_url('admin/user/delete/'.$a['id_user']) ?>">
							<i class="fa fa-trash"></i>
						</a>
						<button type="button" data-bs-toggle="modal" class=" btn btn-primary"
							data-bs-target="#edit<?= $a['id_user'] ?>">
							<i class="fa fa-edit"></i>
						</button>
						<!-- <div class="col-lg-12 col-md-12"> -->
						<div class="modal fade" id="edit<?= $a['id_user'] ?>" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<form action="<?= site_url('admin/user/update') ?>" method="post">
									<input type="hidden" name="id_user" value="<?= $a['id_user'] ?>">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="editTitle">Edit User</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col mb-3">
													<label for="nameWithTitle" class="form-label">Nama</label>
													<input type="text" class="form-control" name="nama"
														value="<?= $a['nama'] ?>" />
													
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<label for="nameWithTitle" class="form-label">Username</label>
													<input type="text" class="form-control" name="username"
														value="<?= $a['username'] ?>" readonly />
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
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>