 <?php
include_once "header.php";

include_once "../functions/functions.php";

$binatang = query("SELECT * FROM binatang JOIN kategori ON binatang.id_kategori = kategori.id_kategori");



?>
        <div class="w-100 vh-100" id="home">
        <div id="carouselExample" class="carousel slide carousel-fade h-100">
            <div class="carousel-inner h-100">
                <div class="carousel-item h-100 active">
                    <img src="../img/nonkopi1.jpg" class="d-block w-100 h-70 object-fit-cover" alt="Gambar 1">
                </div>
                <div class="carousel-item h-100">
                    <img src="../img/kopi1.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Gambar 2">
                </div>
                <div class="carousel-item h-100">
                    <img src="../img/kopi3.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Gambar 3">
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


            <div class="col-12 p-5">
                    <h1 class="display-4"> Home</h1>
                    <p align="justify">Step into the warm and aromatic embrace of our cozy coffee shop, where the rich scent of freshly ground beans dances in the air. Nestled in the heart of the city, our welcoming space invites you to unwind and savor the perfect cup of coffee. From the comforting hum of espresso machines to the soothing melody of soft jazz, every visit is an immersive experience. Our skilled baristas craft each cup with precision, ensuring that every sip is a flavorful journey. Whether you prefer the bold intensity of a dark roast or the velvety smoothness of a latte, our diverse menu caters to every coffee connoisseur's taste. The inviting ambiance, coupled with the subtle buzz of conversations, makes our coffee shop not just a place for a pick-me-up but a haven for those seeking a moment of respite in the delightful ritual of coffee enjoyment.</p>
                </div>
              
<?php
include_once "footer.php"
?>

<script type="text/javascript">
  $('.nav-link').removeClass('active');
  $('.menu-home').addClass('active');
</script>
