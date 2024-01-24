<?php
require_once '../functions/functions.php'; 
require_once '../admin/header.php'; 

$binatang = query("SELECT * FROM binatang JOIN kategori ON binatang.id_kategori = kategori.id_kategori");



?>


    
    
    
    <div class="container">
      <div class="row">
        <div class="col-12 p-3 bg-white">
          <h3>Menu</h3>
          <a href="kopi-tambah.php" class="btn btn-primary  mb-3">Add</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center">ID</th>
                    <th class="text-center">Kategori</th>
                    <th class="text-center">Nama Minuman</th>
                    <th class="text-center">Keterangan</th>
                    <th class="text-center">Gambar</th>
                    <th class="text-center">Options</th>
                    
                  </tr>
            </thead>
            <tbody>
              <?php foreach($binatang as $row):?>
                <tr>
                  <td class="text-center" ><?=$row['id_binatang']?></td>
                  <td ><?=$row['nama_kategori']?></td>
                  <td ><?=$row['nama_binatang']?></td>
                  <td ><?=$row['keterangan_binatang']?></td>
                  <td class="text-center" > <img src="../img/<?=$row['gambar']?>" width="100px"></td>
                   <td>
                    <a  href="kopi-form.php?id_binatang=<?=$row['id_binatang'];?>" class="btn btn-warning btn-sm ">Edit</a>
                    <a href="binatang-delete.php?id_binatang=<?=$row['id_binatang'];?>" class="btn btn-danger btn-sm " onclick="return confirm('yakin?');">Delete</a>
                   </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
        </table>
        <div>
          
          </div>
    </div>
  </div>
</div>



<?php require_once '../admin/footer.php';?>

<?php require_once '../admin/footer.php';?>
<script type="text/javascript">
  $('.nav-link').removeClass('active');
  $('.menu-binatang').addClass('active');
</script>
 
