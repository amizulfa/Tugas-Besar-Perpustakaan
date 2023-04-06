<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Pengembalian</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama Peminjam</th>
          <th>Judul Buku</th>
          <th>Tanggal Pinjam</th>
          <th>Tanggal Kembali</th>
          <th>Tanggal di Kembalikan</th>
          <th>Denda</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $no = 1;
        foreach ($data as $row) { 
          $tgl_kembali = new DateTime($row->tgl_kembali);
          $tgl_sekarang = new DateTime();
          $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");
           $denda=2000*$selisih;
           
           ?>

          <tr>
            <td><?= $no++; ?></td>
            <td><?= $row->nim; ?></td>
            <td><?= $row->nama_anggota; ?></td>
            <td><?= $row->judul_buku; ?></td>
            <td><?= $row->tgl_pinjam; ?></td>
            <td><?= $row->tgl_kembali; ?></td>
            <td><?= $row->tgl_kembalikan; ?></td>
             <td>
               <?php
              if ($tgl_kembali >= $tgl_sekarang or $selisih == 0) {
                echo "0";
              } else {
                 echo "Rp. $denda";
              }
              ?>
            </td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>