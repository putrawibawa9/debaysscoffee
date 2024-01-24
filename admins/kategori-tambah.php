<?php 
    require_once '../admin/header.php';
    require_once '../functions/functions.php';

    if(isset($_POST['submit'])){    
        if (tambahKategori($_POST)>0){
            echo "
                <script>
                alert('data berhasil ditambah');
                document.location.href = 'kategori.php';
                </script>
            ";
        }else{
            echo " <script>
            alert('data gagal ditambah');
            document.location.href = 'kategori.php';
            </script>
        ";
    
        }
    
    }
?>

<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <h3>Tambah Kategori Menu</h3>
        <form method="post">  
            <div class="mb-3">
                <input type="text" name="nama_kategori" placeholder="Kategori Menu" class="form-control" required>
            </div>
            <a href="kategori.php" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit" >Simpan</button>
        </form>
    </div>
  </div>
</div>


<?php require_once '../admin/footer.php';?>

<script type="text/javascript">
  $('.nav-link').removeClass('active');
  $('.menu-category').addClass('active');
</script>