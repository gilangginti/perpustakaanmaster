<?php
  if (!empty($this->session->flashdata('info'))) {?>
  <div class="alert alert-success" role="alert">
    <?= $this->session->flashdata('info');?>
  </div>
  <?php }
?>

<div class="row">
  <div class="col-md-12 ml-2">
    <a href="<?= base_url()?>buku/tambah_buku" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Buku</a>
  </div>
</div>
<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Data buku perpustakaan universitas ars</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Judul Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach($data->result() as $row)  {?>
                      <tr>
                        <td><?= $row->id_buku;?></td>
                        <td><?= $row->nama_pengarang;?></td>
                        <td><?= $row->nama_penerbit;?></td>
                        <td><?= $row->judul_buku;?></td>
                        <td><?= $row->tahun_terbit;?></td>
                        <td><?= $row->jumlah;?></td>
                        <td>
                        <a href="<?= base_url()?>buku/edit/<?= $row->id_buku;?>" class="btn btn-success btn-sm">EDIT</a>
                        <a href="<?= base_url()?>buku/hapus/<?= $row->id_buku;?>" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi penghapusan data');">HAPUS</a>
                        </td>
                      </tr>
                    <?php }

                  ?>


                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Judul Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah</th>
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