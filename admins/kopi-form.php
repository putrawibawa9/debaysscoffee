<?php 
    require_once '../admin/header.php';
    require_once '../functions/functions.php'
?>

<?php
$id_binatang = $_GET['id_binatang'];

$binatang = query("SELECT * FROM binatang WHERE id_binatang= $id_binatang")[0];


$kategori = query("SELECT * FROM kategori JOIN binatang ON kategori.id_kategori = binatang.id_kategori WHERE id_binatang = $id_binatang")[0];


$semua_kategori = query("SELECT * FROM kategori");


if(isset($_POST['submit'])){


    
    //check the progress
    if (ubahBinatang($_POST)>0){
        echo "
            <script>
            alert('data berhasil diubah');
            document.location.href = 'kopi.php';
            </script>
        ";
    }else{
        echo " <script>
        alert('data gagal diubah');
        document.location.href = 'kopi.php';
        </script>
    ";

    }

}
?>
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <h3>Edit Nama Kopi</h3>


        <form method="post" enctype="multipart/form-data">

        <input type="hidden" name="id_binatang" value="<?= $id_binatang ?>;">
        <input type="hidden" name="gambarLama" value="<?= $binatang['gambar']?>">

    <div class="mb-3">
        <select class="form-select" name="id_kategori" required>
            <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?> </option>
            <?php foreach ($semua_kategori as $ktg) : ?>
                <option value="<?= $ktg['id_kategori'] ?>"><?= $ktg['nama_kategori'] ?> </option>
            <?php endforeach; ?>
        </select>
    </div>


            <div class="mb-3">
                <label class="form-label">Nama Kopi</label>
                <input type="text" name="nama_binatang" class="form-control" value="<?= $binatang['nama_binatang']?>">
            </div>
            
            
            <div class="mb-3">
                <label class="form-label">Keterangan Kopi</label>
            <textarea class="form-control" name="keterangan_binatang" rows="3" placeholder="Keterangan Binatang"  required><?= $binatang['keterangan_binatang']?></textarea>
            </div>

            <img src="../img/<?= $binatang['gambar'] ?>" width="100px" height="100px">

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Kopi</label>
                <input type="file" name="gambar" class="form-control">
            </div>

            <a href="kopi.php" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit" >Simpan</button>
        </form>
    </div>
  </div>
</div>


<?php require_once '../admin/footer.php';?>

<script type="text/javascript">
  $('.nav-link').removeClass('active');
  $('.menu-binatang').addClass('active');
</script>
