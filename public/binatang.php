<?php
include_once "header.php";

include_once "../functions/functions.php";


$kategori = $_GET['id_kategori'];

$binatang = query("SELECT * FROM binatang JOIN kategori ON binatang.id_kategori = kategori.id_kategori WHERE kategori.id_kategori = $kategori");

$nama_kategori = query("SELECT nama_kategori FROM kategori WHERE id_kategori = $kategori")[0];

?>
      <div class="w-100 vh-100" id="home">
        <div id="carouselExample" class="carousel slide carousel-fade h-100">
            <div class="carousel-inner h-100">
                <div class="carousel-item h-100 active">
                    <img src="../img/kopi1.jpg" class="d-block w-100 h-70 object-fit-cover" alt="Gambar 1">
                </div>
                <div class="carousel-item h-100">
                    <img src="../img/nonkopi1.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Gambar 2">
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


            <div class="row">
                <div class="col-12 p-5">
                <h1 class="display-4 mt-3 mb-5"> Kategori - <?= $nama_kategori['nama_kategori']?></h1>
                
                <div class="row ">
                  <?php foreach($binatang as $row):?>
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="../img/<?= $row['gambar']?>" alt="" class="img-fluid" > 
                            <h5 class="m-0 text-center mt-2"> <?= $row['nama_binatang']?></h5>
                            <button class="btn btn-primary btn-sm mt-2 detail" data-nama="<?= $row['nama_binatang']?>" data-keterangan="<?= $row['keterangan_binatang']?>" data-img="<?= $row['gambar']?>" data-kategori="<?=$row['nama_kategori']?>"> Detail</button>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                </div>
                </div>
                </div>

                <!-- Modal -->
<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDetailLabel">Detail Binatang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="modal-img" class="img-fluid">
        <h3 class="text-center mt-2" id="modal-nama"></h3>
                <div class="text-center mt-2"> Kategori <span id="modal-kategori" ></span></div>

                <div class="text-center mt-2" id="modal-keterangan"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


              
<?php
include_once "footer.php"
?>

<script type="text/javascript">
  $('.nav-link').removeClass('active');
  $('.menu-binatang').addClass('active');

  $(document).ready(function() {
    $('.detail').click(function(){
        $('#modal-img').attr('src','../img/' + $(this).data('img'));
        $('#modal-nama').html($(this).data('nama'));
        $('#modal-kategori').html($(this).data('kategori'));
        $('#modal-keterangan').html('"<em>'+$(this).data('keterangan')+'</em>"');
        $('#modalDetail').modal('show');
    });
  });
</script>
