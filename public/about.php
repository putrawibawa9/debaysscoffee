<?php
include_once "header.php";

include_once "../functions/functions.php";

$binatang = query("SELECT * FROM binatang JOIN kategori ON binatang.id_kategori = kategori.id_kategori");



?>
 <div class="w-100 vh-100" id="home">
        <div id="carouselExample" class="carousel slide carousel-fade h-100">
            <div class="carousel-inner h-100">
                <div class="carousel-item h-100 active">
                    <img src="../img/kopi3.jpg" class="d-block w-100 h-70 object-fit-cover" alt="Gambar 1">
                </div>
                <div class="carousel-item h-100">
                    <img src="../img/nonkopi1.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Gambar 2">
                </div>
                <div class="carousel-item h-100">
                    <img src="../img/kopi1.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Gambar 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

            <div class="row">
                <div class="col-12 p-5">
                    <h1 class="display-4"> Reina</h1>
                
                    <p align="justify">-Tentang Reina-</p>
                    <br>
                 
                </div>
                <div class="row">
                    <div class="col-12">
                      
                    </div>
                </div>
            </div>
              
<?php
include_once "footer.php"
?>

<script type="text/javascript">
  $('.nav-link').removeClass('active');
  $('.menu-about').addClass('active');
</script>
