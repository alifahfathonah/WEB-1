<a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;">Tambah Data</a>

<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
    Tambah Buku
    </div>
    <div class="panel-body">
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
      <tr>
      <th>No Buku</th>
      <th>Jenis Buku</th>
      <th>Nama Buku</th>
      <th>Pengarang</th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
      <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
      <?php

        $no = 1;

        $sql = $koneksi->query("select * from buku");

        while ($data=$sql->fetch_assoc()) {
           
        
      ?>
      <tr>
          <td><?php echo $data['no_buku'];?></td>
          <td><?php echo $data['jenis_buku'];?></td>
          <td><?php echo $data['nama_buku'];?></td>
          <td><?php echo $data['pengarang'];?></td>
          <td><?php echo $data['penerbit'];?></td>
          <td><?php echo $data['tahun_terbit'];?></td>
          <td>
              <a href="" class="btn btn-info">Ubah</a>
              <a href="" class="btn btn-danger">Hapus</a>
          </td>
      </tr>
      <?php } ?>
      </tbody>

  </table>
</div>
</div>
</div>
</div>
</div>