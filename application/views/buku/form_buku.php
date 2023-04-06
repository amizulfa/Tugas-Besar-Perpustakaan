<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $judul; ?></h3>
        </div>

        <form method="post" action="<?= site_url("buku/simpan") ?>" class="form-horizontal">
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Id Buku</label>
                <div class="col-sm-10">
                    <input type="text" name="id_buku" value="<?= $id_buku; ?>" class="form-control" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Judul Buku</label>
                <div class="col-sm-10">
                    <input type="text" name="judul_buku" class="form-control" placeholder="Judul Buku" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Pengarang</label>
                <div class="col-sm-10">
                    <input type="text" name="pengarang" class="form-control" placeholder="pengarang" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Penerbit</label>
                <div class="col-sm-10">
                    <input type="text" name="penerbit" class="form-control" placeholder="penerbit" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Tahun Penerbit</label>
                <div class="col-sm-10">
                    <select name="tahun_terbit" class="form-control select2" required>
                        <option value=""> - Pilih Tahun - </option>
                        <?php
                        for ($tahun = 2000; $tahun <= 2022; $tahun++) { ?>
                            <option value="<?= $tahun ?>"><?= $tahun ?></option>
                        <?php }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Stok</label>
                <div class="col-sm-10">
                    <input type="number" name="jumlah" class="form-control" required>
                </div>
            </div>

            <div class="box-footer">
                <a href="<?= site_url("buku") ?>" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>