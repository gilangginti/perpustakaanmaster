<div class="card card-info">
  <div class="card-header">
      <h3 class="card-title">Form pendaftaran pengarang</h3>
  </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form class="form-horizontal" method="post" action="<?= base_url()?>buku/simpan">
        <div class="card-body">
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">ID Buku</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="ID BUKU" name="id_buku" value="<?= $id_buku;?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Judul Buku</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="judul buku" name="judul_buku" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Pengarang</label>
                <div class="col-sm-10">
                    <select name="id_pengarang" class="form-control">
                    <option value="">-- Pilih Pengarang --</option>
                    <?php
                        foreach($pengarang as $row){?>
                        <option value="<?= $row->id_pengarang;?>"><?= $row->nama_pengarang;?></option>
                        <?php }
                    ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                    <select name="id_penerbit" class="form-control">
                    <option value="">-- Pilih Penerbit --</option>
                    <?php
                        foreach($penerbit as $row){?>
                        <option value="<?= $row->id_penerbit;?>"><?= $row->nama_penerbit;?></option>
                        <?php }
                    ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Tahun Terbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Tahun Terbit" name="tahun_terbit" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Jumlah Buku</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Jumah Buku" name="jumlah" required>
                </div>
            </div>
        </div>
                <!-- /.card-body -->
        <div class="card-footer">
            <a href="<?= base_url()?>buku" class="btn btn-danger float-right">Cancel</a>
                <button type="submit" class="btn btn-info float-right mr-2">Tambah</button>
        </div>
                <!-- /.card-footer -->
    </form>
</div>
            <!-- /.card -->