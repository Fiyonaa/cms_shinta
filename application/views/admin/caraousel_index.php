<div id="tuyul">
	<?= $this->session->flashdata('alert') ?>
</div>

<div class="col-12">
	<div class="card">
		<form action="<?= site_url('admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>
			<h5 class="card-header">File Input</h5>
			<div class="card-body">
				<div class="row">
					<div class="col mb-3">
						<label for="nameWithTitle" class="form-label">Judul</label>
						<input type="text" class="form-control" name="judul" placeholder="Judul Foto " required />

					</div>
				</div>
				<div class="mb-3">
					<label for="formFile" class="form-table">Pilih Foto</label>
					<input class="form-control" type="file" name="foto">
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>
<?php foreach ($caraousel as $d){ ?>
<div class="col-md-12 mb-3 mt-3">
	<div class="card h-100">
		<img class="card-img-top" src="<?= base_url('assets/upload/caraousel/'.$d['foto']) ?>">
		<div class="card-body">
			<h5 class="card-title"><?= $d['judul'] ?></h5>
			<a class="mdi mdi-delete-variant" onClick="return confirm('Apakah anda yakin mau menghapus???')"
				href="<?= base_url('admin/caraousel/delete/'.$d['foto']) ?>">
				<i class="fa fa-trash"></i>
			</a>
		</div>
	</div>
</div>
<?php } ?>
