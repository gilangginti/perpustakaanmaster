<?php
    $tgl_pinjam = date('Y-m-d');
    $tujuh_hari = mktime(0,0,0,date("n"),date("j")+ 7,date("Y"));
    $tgl_kembali = date('Y-m-d', $tujuh_hari);
?>

<div class="card card-info">
  <div class="card-header">
      <h3 class="card-title">Form pendaftaran peminjaman</h3>
  </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form class="form-horizontal" method="post" action="<?= base_url()?>peminjaman/simpan">
        <div class="card-body">
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">ID Peminjaman</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="id_pm" value="<?= $id_peminjaman?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Peminjam</label>
                <div class="col-sm-10">
                    <select name="id_anggota" class="form-control">
                    <option value="">-- Pilih Peminjam --</option>
                    <?php
                        foreach($peminjam as $row){?>
                        <option value="<?= $row->id_anggota;?>"><?= $row->nama_anggota;?></option>
                        <?php }
                    ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Buku</label>
                <div class="col-sm-10">
                    <select name="id_buku" id="id_buku" class="form-control">
                    <option value="">-- Pilih Buku --</option>
                    <?php
                        foreach($buku as $row){?>
                        <option value="<?= $row->id_buku;?>"><?= $row->judul_buku;?></option>
                        <?php }
                    ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_pinjam" value="<?= $tgl_pinjam;?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_kembali" value="<?= $tgl_kembali;?>">
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
<script>
    $('#id_buku').change(function(){
        var id = $(this).val();
        $.ajax({
            url:'<?= base_url()?>peminjaman/jumlah_buku',
            data : {id:id},
            method : 'post',
            dataType : 'json',
            success:function(hasil){
                var jummlah = JSON.stringify(hasil.jumlah);
                var jumlah1 = jumlah.split('"').join('');
                if (jumlah1 <= 0){
                    alert('Maaf, Stok buku ini sedang kosong'):
                    location.reload();
                }
            } 
        });
    });
</script>