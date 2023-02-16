<?php
	include 'nav.php';
?>

<div class="container mt-5">
        <div class="row mb-3">
            <div class="col-md-2"></div>
           
            <div class="col-md-2"></div>
        </div>
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <h5>Nama Pemesan</h5>
            </div>
            <div class="col-md-5">
                <span><?=@$_GET['nama']?></span>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <h5>Nomor Identitas</h5>
            </div>
            <div class="col-md-5">
                <span><?=@$_GET['identitas']?></span>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <h5>No. HP</h5>
            </div>
            <div class="col-md-5">
                <span><?=@$_GET['nohp']?></span>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <h5>Tempat Wisata</h5>
            </div>
            <div class="col-md-5">
                <span><?=@$_GET['wisata']?></span>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <h5>Pengunjung Dewasa</h5>
            </div>
            <div class="col-md-5">
                <span><?=@$_GET['pdewasa']?> Orang</span>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <h5>Pengunjung Anak - Anak</h5>
            </div>
            <div class="col-md-5">
                <span><?=@$_GET['panak']?> Orang</span>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <h5>Total Tiket</h5>
            </div>
            <div class="col-md-5">
                <span>Rp. <?=@$_GET['tharga']?></span>
            </div>
            <div class="col-md-2"></div>
        </div>
       
        <div class="row mb-3">
            <div class="col-md-2"></div>
            
            <div class="col-md-2"></div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-right">
                <div class="clearfix">
					 <a class="btn btn-danger bi bi-backspace float-left" href="home.php">&nbsp; Home</a>
					<p class=" btn btn-warning bi bi-printer float-right" style="cursor:pointer;" onclick="print()"> &nbsp; Cetak!</p>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        </div>

        <script>
            function cetak(){
                window.print();
            }
        </script>

<?php
	include 'footer.php';
?>