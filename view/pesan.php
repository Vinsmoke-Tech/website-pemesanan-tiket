<?php   
    include 'nav.php';
?>
<?php
    include "../controler/koneksi.php";
    $idharga = $_POST['idwisata'];

    $sql = mysqli_query($koneksi, "select * from harga where id_harga ='$idharga'");
    $result = mysqli_fetch_array($sql);
?>
  
<div class="container">
    
    <div class="row mt-5 p-4">
        <div class="col-6 col-md-4 col-lg-4">
            <label for="">
                <h3>Pemesanan Tiket</h3>
            </label>
    
        </div>
        <div class="col-6 col-md-4 col-lg-6">
            <form action="../controler/tambah_tiket.php" method="post">
        <input type="hidden" name="wisata" value="<?= $result['nmwisata'] ?>">
                <div class="form-group ">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama"
                        value="<?=@$tiket['nama'] ?>">
    
                </div>
                <div class="form-group">
                    <label for="exampleInputalamat">Nomor indentitas</label>
                    <input type="text" class="form-control" id="exampleInputalamat" name="identitas"
                        value="<?=@$tiket['identitas'] ?>">
                </div>
                <div class="form-group ">
                    <label for="exampleInputEmail1">No HP</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nohp"
                        value="<?=@$tiket['nohp'] ?>">
    
                </div>
                
               
                <div class="form-group">
                    <label for="exampleInputalamat">Tanggal kunjungan</label>
                    <input type="date" class="form-control" id="exampleInputalamat" name="tgl_kunjungan"
                        value="<?=@$tiket['tgl_kunjungan'] ?>">
                </div>
    
                <div class="form-group">
                    <label for="exampleInputalamat">Pengunjung Dewasa</label>
                    <input type="number" class="form-control" id="pdew" name="pdewasa"
                        value="<?=@$tiket['pdewasa'] ?>" onkeyup="total()">
                </div>
    
                <div class="form-group">
                    <label for="exampleInputalamat">Pengunjung Anak</label>
                    <input type="number" class="form-control" id="penanak" name="panak"
                        value="<?=@$tiket['panak'] ?>"  onkeyup="total()">
                </div>
                <div class="form-group">
                    <label for="exampleInputalamat">Harga Tiket</label>
                    <input type="number" class="form-control" id="harga_tiket" name="htiket"
                        value="<?php echo $result['hgwisata'] ?>"  onchange="total()" readonly> 
                </div>
                <div class="form-group">
                    <label for="exampleInputalamat">Total Harga</label>
                    <input type="number" class="form-control" id="grand_harga" readonly name="tharga"
                        value= "0">
                </div>
               
                <br>
                <input type="hidden" name="id_tiket" value="<?=@$tiket['id_tiket']?>" >
               
                <button class="btn btn-success">Pesan Tiket</button>
                <button class="btn btn-danger">Cancel</button>
            </form>
            
                
        </div>
    </div>
</div>

<?php

    include 'footer.php';
?>