<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="box">
        <div class="box-header">
            <form method="post" action="<?= site_url("laporan/data_anggota") ?>">
                <div class="row">
                    <div class="col-md-2">
                        <a href="<?= site_url("laporan/pdf_anggota") ?>" class="btn btn-danger btn-block btn-pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> View PDF</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id Anggota</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($data as $row) {
                    ?>
                        <tr>
                            <td><?= $row->id_anggota; ?></td>
                            <td><?= $row->nim; ?></td>
                            <td><?= $row->nama_anggota; ?></td>
                            <td><?= $row->gender; ?></td>
                            <td><?= $row->alamat; ?></td>
                            <td><?= $row->no_hp; ?></td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>