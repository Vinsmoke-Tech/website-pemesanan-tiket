<?php
    include 'nav.php';
?>
<section class="simperpus">
        <div class="container">
            <div class="row-12 mt-5">
            
            <a href="anggotaprint.php" class="btn btn-danger float-right" >Print</a>
            <table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">No Identitas</th>
      <th scope="col">No Hp</th>
      <th scope="col">Wisata</th>
      <th scope="col">tanggal kunjungan</th>
      <th scope="col">Pengunjung dewasa</th>
      <th scope="col">Pengunjung anak</th>
    </tr>
  </thead>
  <tbody>
    <?php
        include '../controler/koneksi.php';
         $pemesanan = mysqli_query($koneksi, 'select * from pemesanan');
         $no = 1;
         foreach($pemesanan as $key => $val){
             ?>
              <tr>
            <td><?=$no?></td>
            <td><?=$val['nama']?></td>
            <td><?=$val['identitas']?></td>
            <td><?=$val['nohp']?></td>
            <td><?=$val['wisata']?></td>
            <td><?=$val['tgl_kunjungan']?></td>
            <td><?=$val['pdewasa']?></td>
            <td><?=$val['panak']?></td>
            
            </tr>
         
        <?php
       $no++;
         }
    ?>
  </tbody>
</table>
            </div>
        </div>
    </section>
    <?php
    include 'footer.php';
?>