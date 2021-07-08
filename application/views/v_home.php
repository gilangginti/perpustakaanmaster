 <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $anggota;?></h3>

                <p>Anggota</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="<?= base_url()?>anggota" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $buku;?></h3>

                <p>Buku</p>
              </div>
              <div class="icon">
              <i class="fas fa-book"></i>
              </div>
              <a href="<?= base_url()?>buku" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $peminjam;?></h3>

                <p>Peminjaman</p>
              </div>
              <div class="icon">
              <i class="fas fa-book-reader"></i>
              
              </div>
              <a href="<?= base_url()?>peminjaman" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $pengembalian;?></h3>

                <p>Pengembalian</p>
              </div>
              <div class="icon">
              <i class="far fa-handshake"></i>
              </div>
              <a href="<?= base_url()?>pengembalian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

      </div>
<div class="container">
<div id="carouselExampleControls" class="carousel slide " data-ride="carousel" style="height: 50;">
 <div class="carousel-inner" style="border-radius: 2em;">
     <div class="carousel-item active">
     <img src="<?= base_url()?>assets/dist/img/perpuscorousel.jpg" class="d-block w-100" alt="...">
     </div>
</div>
</div>
<br>