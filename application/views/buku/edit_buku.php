<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $judul; ?></h3>
        </div>

        <form method="post" action="<?= site_url("buku/update") ?>" class="form-horizontal">
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Id Buku</label>
                <div class="col-sm-10">
                    <input type="text" name="id_buku" value="<?= $data['id_buku']; ?>" class="form-control" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Judul Buku</label>
                <div class="col-sm-10">
                    <input type="text" name="judul_buku" value="<?= $data['judul_buku']; ?> " class="form-control" placeholder="Judul Buku" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Pengarang</label>
                <div class="col-sm-10">
                    <input type="text" name="pengarang" value="<?= $data['pengarang']; ?> " class="form-control" placeholder="Judul Buku" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Penerbit</label>
                <div class="col-sm-10">
                    <input type="text" name="penerbit" value="<?= $data['penerbit']; ?> " class="form-control" placeholder="Judul Buku" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Tahun Terbit</label>
                <div class="col-sm-10">
                    <select name="tahun_terbit" class="form-control select2">
                        <option value=""> - Pilih Tahun - </option>
                        <?php
                        for ($tahun = 2000; $tahun <= 2022; $tahun++) {
                            if ($data['tahun_terbit'] == $tahun) { ?>
                                <option value="<?= $tahun; ?>" selected> <?= $tahun; ?></option>
                            <?php } else { ?>
                                <option value="<?= $tahun; ?>"><?= $tahun; ?></option>
                        <?php }
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Stok</label>
                <div class="col-sm-10">
                    <input type="number" name="jumlah" value="<?= $data['jumlah']; ?>" class="form-control">
                </div>
            </div>

            <div class="box-footer">
                <a href="<?= site_url("buku") ?>" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>