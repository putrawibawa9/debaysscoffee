<?php

require_once '../functions/functions.php';
$id_binatang = $_GET['id_binatang'];

if (hapusBinatang($id_binatang)>0){
    echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'kopi.php';
      </script>";
}else{
  echo "  <script>
            alert('data gagal dihapus');
            document.location.href = 'kopi.php';
            </script>";
}


?>