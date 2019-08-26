<div class="panel panel-default">
<div class="panel-heading">
	Tambah Data
</div>
<div class="panel-body">

			<div class="row">
			<div class="col-md-12">
			    
			    <form >
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
                    	<input class="form-control" type="number" name="jumlahbuku">
                    </div>
                    <div>
                    	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </div>
            </div>

        </form>
        </div>
</div>
</div>
</div>

<?php 
	$no_buku = @$_POST['no_buku'];
	$jenis_buku = @$_POST ['jenis'];
	$nama_buku = @$_POST ['nama'];
	$pengarang = @$_POST ['pengarang'];
	$penerbit = @$_POST ['penerbit'];
	$tahun_terbit = @$_POST ['tahun'];

	$simpan = @$_POST ['simpan'];
	if ($simpan) {
		$sql = $koneksi->query("INSERT INTO buku SET no_buku = '$no_buku', jenis = '$jenis_buku', nama = '$nama_buku', pengarang = '$pengarang', penerbit = '$penerbit', tahun = '$tahun_terbit'");
		if ($sql) {
			?>
			<script type="text/javascript">
				
				alert ("Data Berhasil Disimpan");
				window.location.href="?page=buku";
			</script>
			<?php
		}
	}
?>