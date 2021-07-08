<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Form pendaftaran anggota perpustakaan ars</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="<?= base_url()?>anggota/update">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID Anggota</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?= $data['id_anggota'];?>" placeholder="ID anggota" name="id_anggota" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputnama" class="col-sm-2 col-form-label">Nama Anggota</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nama Anggota" value="<?= $data['nama_anggota'];?>" name="nama_anggota" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputnama" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <select name="jenkel" class="form-control" required>
                        <?php
                           if($data["jenkel"] == "Laki - Laki") {?>
                                <option valu="Laki - Laki" selected>Laki - Laki</option>
                                <option valu="Perempuan">Perempuan</option>
                           <?php }else{?>
                                <option valu="Laki - Laki">Laki - Laki</option>
                                <option valu="Perempuan" selected>Perempuan</option>
                           <?php }
                        ?>
                        <option valu="Laki - Laki">Laki - Laki</option>
                        <option valu="Perempuan">Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputnama" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <textarea name="alamat" class="form-control" cols="30" rows="5" required><?= $data['alamat'];?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputnama" class="col-sm-2 col-form-label">No Telpon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="08xxxxx" name="no_hp" value="<?= $data['no_hp'];?>" required>
                    </div>
                  </div>
             
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="<?= base_url()?>anggota" class="btn btn-danger float-right">Cancel</a>
                  <button type="submit" class="btn btn-info float-right mr-2">Update</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->