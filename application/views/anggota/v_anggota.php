<?php
// jika data berhasil dsimpan maka kita tampilkan pesan succes
if (!empty($this->session->flashdata('info'))) { ?>
  <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info') ?></div>
<?php
}
?>



<div class="row">
  <div class="col-md-12">
    <a href="<?= site_url("anggota/tambah_anggota") ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah anggota</a>
  </div>
</div>
<br>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Anggota</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Id Anggota</th>
          <th>Nama Anggota</th>
          <th>NIM</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>No.telepon</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($data as $row) {
        ?>
          <tr>
            <td><?= $row->id_anggota; ?></td>
            <td><?= $row->nama_anggota; ?></td>
            <td><?= $row->nim; ?></td>
            <td><?= $row->gender; ?></td>
            <td><?= $row->alamat; ?></td>
            <td><?= $row->no_hp; ?></td>
            <td>
              <a href="<?= site_url("anggota/edit/") ?><?= $row->id_anggota; ?>" class="btn btn-success btn-xs">Edit</a>
              <a href="<?= site_url("anggota/hapus/") ?><?= $row->id_anggota; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin untuk menghapus data ini?')">Hapus</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>