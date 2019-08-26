<div class="panel panel-default">
	<div class="panel-heading">
		Tambah Data
	</div>
	<div class="panel-body">
		<?php require_once 'proses.php'; ?>
		<?php
			$q = $objek->query("SELECT * FROM buku WHERE no_buku = '".$_GET['id']."'");
			$data = @mysqli_fetch_object($q);
		?>
		<div class="row">
			<div class="col-md-12">

				<form action = "proses.php" method="POST">
					<div class="form-group">
						<label>Nomor Buku</label>
						<input class="form-control" name="data[no_buku]" readonly="readonly" value="<?= $data->no_buku; ?>" placeholder="Nomor Buku" />
					</div>

					<div class="form-group">
						<label>Jenis Buku</label>
						<input class="form-control" name="data[jenis_buku]" value="<?= $data->jenis_buku; ?>" />
					</div>

					<div class="form-group">
						<label>Nama Buku</label>
						<input class="form-control" name="data[nama_buku]" value="<?= $data->nama_buku; ?>" />
					</div>

					<div class="form-group">
						<label>Pengarang</label>
						<input class="form-control" name="data[pengarang]" value="<?= $data->pengarang; ?>" />
					</div>

					<div class="form-group">
						<label>Penerbit</label>
						<input class="form-control" name="data[penerbit]" value="<?= $data->penerbit; ?>" />
					</div>

					<div class="form-group">
						<label>Tahun Terbit</label>
						<select class="form-control" name="data[tahun_terbit]">
							<?php

							$tahun = date ("Y");
							for ($i=$tahun-25; $i <= $tahun ; $i++) { 
								if($data->tahun_terbit == $i)
									echo '<option value="'.$i.'" selected="selected">'.$i.'</option>';
								else
									echo '<option value="'.$i.'">'.$i.'</option>';
								
							}

							?>
						</select>
					</div>
					<div class="form-group">
						<label>Jumlah Buku</label>
						<input class="form-control" type="number" name="data[jumlah]" value="<?= $data->jumlah; ?>">
					</div>


                    <div class="form-group">
                    	<div class="file-field">
                    		<div class="btn btn-info btn-sm float-left">
                    			<span>Upload Foto Buku</span>
                    			<input type="file" name="data[foto]" value="<?= $data->foto; ?>">
                    		</div>
                    	</div>
                	</div>

					<div class ="form-group">
						<button type="submit" name="edit" class="btn btn-primary">Update</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>
</div>

