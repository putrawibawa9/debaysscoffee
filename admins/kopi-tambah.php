<?php 
    require_once '../admin/header.php';
    require_once '../functions/functions.php';

    $kategori = query("SELECT * FROM kategori");
    $binatang = query("SELECT * FROM binatang");






//check whether the button has been click or not
if(isset($_POST['submit'])){

    
    //check the progress
    if (tambahBinatang($_POST)>0){
        echo "
            <script>
            alert('data berhasil ditambah');
            document.location.href = 'kopi.php';
            </script>
        ";
    }else{
        echo " <script>
        alert('data gagal ditambah');
        document.location.href = 'kopi.php';
        </script>
    ";

    }

}
?>
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <h3>Tambah Menu</h3>


        <form method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <select class="form-select" name="id_kategori" required>
            <option value=""> --Pilih Kategori Menu --</option>
            <?php foreach ($kategori as $jns) : ?>
                <option value="<?= $jns['id_kategori'] ?>"><?= $jns['nama_kategori'] ?> </option>
            <?php endforeach; ?>
        </select>
    </div>

            <div class="mb-3">
                <label class="form-label">Nama Menu</label>
                <input type="text" name="nama_binatang" class="form-control">
            </div>


            <label class="form-label">Keterangan Menu</label>
            <div class="mb-3">
            <textarea class="form-control" name="keterangan_binatang" rows="3"   required></textarea>
            </div>


            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Menu</label>
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