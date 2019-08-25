<div class="panel panel-default">
<div class="panel-heading">
	Tambah Data
</div>
<div class="panel-body">

			<?php require_once 'proses.php'; ?>


			<div class="row">
			<div class="col-md-12">
			    
			    <form action = "proses.php" method="POST">
			    	<div class="form-group">
			        <label>Nomor Buku</label>
			      	<input class="form-control" name="nomor"placeholder="Nomor Buku" />
					</div>

			        <div class="form-group">
			        <label>Jenis Buku</label>
			      	<input class="form-control" name="jenis" />
					</div>

					<div class="form-group">
			        <label>Nama Buku</label>
			      	<input class="form-control" name="nama" />
					</div>

					<div class="form-group">
			        <label>Pengarang</label>
			      	<input class="form-control" name="pengarang" />
					</div>

					<div class="form-group">
			        <label>Penerbit</label>
			      	<input class="form-control" name="penerbit" />
					</div>

					<div class="form-group">
                        <label>Tahun Terbit</label>
                        <select class="form-control" name="tahun">
	                        <?php

	                        	$tahun = date ("Y");
	                        	for ($i=$tahun-25; $i <= $tahun ; $i++) { 
	                        		echo '
	                        			<option value="'.$i.'">'.$i.'</option>
	                        		';
	                        	}

	                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                    	<label>Jumlah Buku</label>
                    	<input class="form-control" type="number" name="jumlah">
                    </div>

                    <div class="form-group">
                    	<div class="file-field">
                    		<div class="btn btn-info btn-sm float-left">
                    			<span>Upload Foto Buku</span>
                    			<input type="file" name="foto">
                    		</div>
                    	</div>
                	</div>

                    <div class ="form-group">
                    	<button type="submit" name="save" class="btn btn-primary">Save</button>
                    </div>
            </div>

        </form>
        </div>
</div>
</div>
</div>
		
