<div class="box">
    <div class="box-header">
        <h3 class="box-title">Daftar Buku</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Stok Buku</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($data->result() as $row) { ?>
                    <tr>
                        <td><?= $row->judul_buku; ?></td>
                        <td><?= $row->pengarang; ?></td>
                        <td><?= $row->penerbit; ?></td>
                        <td><?= $row->tahun_terbit; ?></td>
                        <td><?= $row->jumlah; ?></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>