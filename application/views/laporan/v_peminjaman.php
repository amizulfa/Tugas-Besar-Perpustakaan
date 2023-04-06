<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style type="text/css">
        .tgl-awal {
            margin-left: -30px;
        }

        .tgl-akhir {
            margin-left: -50px;
        }

        .btn-filter {
            margin-left: -70px;
        }

        .btn-refresh {
            margin-left: -90px;
        }

        .btn-pdf {
            margin-left: -110px;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="box-header">
            <form method="post" action="<?= site_url("laporan/peminjaman") ?>">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="text-primary"><b>Filter Laporan Peminjaman</b></h4>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="tgl_awal" class="form-control tgl-awal" placeholder="Tanggal Awal" onfocus="(this.type='date')">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="tgl_akhir" class="form-control tgl-akhir" placeholder="Tanggal Akhir" onfocus="(this.type='date')">
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-primary btn-block btn-filter"><i class="fa fa-filter"></i> Filter </button>
                    </div>
                    <div class="col-md-2">
                        <a href="<?= site_url("laporan/peminjaman") ?>" class="btn btn-warning btn-block btn-refresh"><i class="fa fa-refresh"></i> Refresh </a>
                    </div>
                    <div class="col-md-2">
                        <a href="<?= site_url("laporan/pdf_peminjaman") ?>" class="btn btn-danger btn-block btn-pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> View PDF</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id Peminjaman</th>
                        <th>NIM</th>
                        <th>Peminjam</th>
                        <th>Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($data as $row) {
                    ?>
                        <tr>
                            <td><?= $row->id_pm; ?></td>
                            <td><?= $row->nim; ?></td>
                            <td><?= $row->nama_anggota; ?></td>
                            <td><?= $row->judul_buku; ?></td>
                            <td><?= $row->tgl_pinjam; ?></td>
                            <td><?= $row->tgl_kembali; ?></td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>