<?php
        include 'nav.php';
?>


<!-- Banner -->
<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/borobudur.jpg" alt="borobudur">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Wisata Candi Borobudur</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="https://www.youtube.com/watch?v=Lv_GojoT1v4" role="button">Tonton Video</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide"
                    src="../img/bromo.jpeg"
                    alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Wisata Gunung Bromo</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="https://www.youtube.com/watch?v=s5BvI5Y5DWc" role="button">Tonton Video</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide"
                    src="../img/Pantai.jpg"
                    alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Pantai Klayar</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="https://www.youtube.com/watch?v=s5BvI5Y5DWc" role="button">Tonton Video</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</main>
    <!-- Banner end -->

    <!-- Card -->
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img src="../img/borobudur.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sejarah Borobudur</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="../img/bromo.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sejarah bromo</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="../img/pantai.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sejarah Pantai Klayar</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal height
                        action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    
 <!-- Card end-->
    <?php
        include 'footer.php';
    ?>