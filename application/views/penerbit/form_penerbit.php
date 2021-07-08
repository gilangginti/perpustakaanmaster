<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Form pendaftaran pengarang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="<?= base_url()?>penerbit/simpan">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputnama" class="col-sm-2 col-form-label">Nama Penerbit</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nama Penerbit" name="nama_penerbit" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="<?= base_url()?>penerbit" class="btn btn-danger float-right">Cancel</a>
                  <button type="submit" class="btn btn-info float-right mr-2">Tambah</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->