<?php
  if (!empty($this->session->flashdata('info'))) {?>
  <div class="alert alert-success" role="alert">
    <?= $this->session->flashdata('info');?>
  </div>
  <?php }
?>

<div class="row">
  <div class="col-md-12 ml-2">
    <a href="<?= base_url()?>penerbit/tambah_penerbit" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Pengarang</a>
  </div>
</div>
<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-success">
                <h3 class="card-title">Data penerbit perpustakaan universitas ars</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Penerbit</th>
                    <th>Nama Penerbit</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach($data as $row)  {?>
                      <tr>
                        <td><?= $row->id_penerbit;?></td>
                        <td><?= $row->nama_penerbit;?></td>
                        <td>
                        <a href="<?= base_url()?>penerbit/edit/<?= $row->id_penerbit;?>" class="btn btn-success btn-sm">EDIT</a>
                        <a href="<?= base_url()?>penerbit/hapus/<?= $row->id_penerbit;?>" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi penghapusan data');">HAPUS</a>
                        </td>
                      </tr>
                    <?php }

                  ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID Penerbit</th>
                    <th>Nama Penerbit</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>