<footer class="bg-dark text-center text-white mt-5">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-facebook"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-twitter"></i
      ></a>

      <!-- wa -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-whatsapp"></i
      ></a>

    

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="#">Daffa Ariftama Hanaris</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
<script type="text/javascript">
  //perhitungan harga otomatis
    function total(){
        let dewasa = document.getElementById('pdew').value;
        let anak = document.getElementById('penanak').value;
       
            
            let harga_total_dewasa = document.getElementById('harga_tiket').value  * document.getElementById('pdew').value;
            
            let anak_anak = document.getElementById('harga_tiket').value * document.getElementById('penanak').value;
            
            let diskon = anak_anak* 0.5;
            let grand_total = harga_total_dewasa + diskon

            document.getElementById('grand_harga').value = grand_total;
            console.log(grand_total);
        
    }
</script>
<script src="../src/js/jquery.min.js"></script>
<script src="../src/js/bootstrap.min.js"></script>
<script src="../src/js/bootstrap.bundle.js"></script>
<script src="../src/js/bootstrap.js"></script>


<script>
    function cetak(){
        window.print();
    }
</script>

</html>