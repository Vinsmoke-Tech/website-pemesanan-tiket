<?php   
    include 'nav.php';
?>
<div class="containers">
    
    <div class="row mt-5  p-4">
        <div class="col-6 col-md-4 col-lg-4">
            <label for="" class="mt-3">
                <h3>Pemesanan Tiket</h3>
            </label>
    
        </div>
        <div class="col-6 col-md-4 col-lg-6 mt-5">
            <form action="pesan.php" method="POST">
                <div class="form-group">
                    <label for="">Pilih Wisata </label>
                <select class="custom-select" name="idwisata">
                    <option value="0"> pilih wisata</option>
                    
                    <?php 
                    //menampilkan Data Wisata
                    include "../controler/koneksi.php";
                    $sqlSelectWisata = mysqli_query($koneksi, "select *from harga ");
                    foreach ($sqlSelectWisata as $key => $value) {
                        ?>
                        <option value="<?=$value['id_harga'] ?>"> <?=$value['nmwisata']?> Tiket : Rp. <?=$value['hgwisata']?></option>
                    <?php   
                    }
                    ?>
                </select>
                </div>
               
               
                <br>
                    
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning bi bi-info-square" data-toggle="modal"
                                        data-target="#exampleModal">
                                        INFORMASI
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul>
                                                        <li>Pengunjung dewasa dikenakan harga tiket normal</li>
                                                        <li> Pengunjung anak-anak yang berusia di bawah
                                                            12 tahun memperoleh potongan
                                                            harga 50%</li>
                                                    </ul>

                                                </div>
                                                <div class="modal-footer">
                                                <button class="btn btn-primary float-left"> Selanjutnya </button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Kembali</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
            </form>
           
        </div>
    </div>
</div>

<?php

    include 'footer.php';
?>