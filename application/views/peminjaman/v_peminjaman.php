<?php
  if (!empty($this->session->flashdata('info'))) {?>
  <div class="alert alert-success" role="alert">
    <?= $this->session->flashdata('info');?>
  </div>
  <?php }
?>

<div class="row">
  <div class="col-md-12 ml-2">
    <a href="<?= base_url()?>peminjaman/tambah_peminjaman" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Peminjaman</a>
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
                <h3 class="card-title">Data peminjam buku perpustakaan universitas ars</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Peminjaman</th>
                    <th>Peminjam</th>
                    <th>Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach($data as $row)  {
                      $tgl_kembali = new DateTime($row->tgl_kembali);
                      $tgl_sekarang = new DateTime();
                      $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");
                      ?>
                      <tr>
                        <td><?= $row->id_pm;?></td>
                        <td><?= $row->nama_anggota;?></td>
                        <td><?= $row->judul_buku;?></td>
                        <td><?= $row->tgl_pinjam;?></td>
                        <td><?= $row->tgl_kembali;?></td>
                        <td>
                          <?php
                            if($tgl_kembali >= $tgl_sekarang OR $selisih == 0){
                              echo "<span class='bg-warning'>Belum dikembalikan</span>";
                            }else{
                              echo "Telat <b style='color:red;'>$selisih</b> hari <br> <span class='bg-danger'> denda perhari = Rp 1.000</span>";
                            }
                          ?>
                        </td>
                        <td>
                        <a href="<?= base_url()?>peminjaman/kembalikan/<?= $row->id_pm;?>" class="btn btn-primary btn-sm">Kembalikan</a>
                        </td>
                      </tr>
                    <?php }

                  ?>



                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID Peminjaman</th>
                    <th>Peminjam</th>
                    <th>Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
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