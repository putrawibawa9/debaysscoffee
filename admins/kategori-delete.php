<?php

require_once '../functions/functions.php';
$id_kategori = $_GET['id_kategori'];

if (hapusKategori($id_kategori)>0){
    echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'kategori.php';
      </script>";
}else{
  echo "  <script>
            alert('data gagal dihapus');
            document.location.href = 'kategori.php';
            </script>";
}


?>