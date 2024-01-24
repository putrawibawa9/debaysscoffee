<?php


$conn =mysqli_connect("localhost","root","","bunga");


function query($query){
    global $conn;
    $result =mysqli_query($conn, $query);
    
    //make an empty array
    $rows = [];
    //loop the $result

    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}




function detail_query($query){
  global $conn;
  $result =mysqli_query($conn, $query);
  $data = mysqli_fetch_assoc($result);

  return $data;
}


function tambahKategori($data) {
  global $conn;
  $nama_kategori = $data['nama_kategori'];

//make the insert syntax
$query = "INSERT INTO kategori VALUES 
          ('','$nama_kategori')";

mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}


function ubahKategori($data){
  global $conn;
  $id_kategori = $data['id_kategori'];
  $nama_kategori = $data['nama_kategori'];


//make the insert syntax
$query = "UPDATE kategori SET
        nama_kategori = '$nama_kategori'
        WHERE id_kategori = $id_kategori
        ";

mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}


function hapusKategori($id_kategori){
  global $conn;
  mysqli_query($conn,"DELETE FROM kategori WHERE id_kategori = $id_kategori");
  return mysqli_affected_rows($conn);
}




function tambahBinatang($data) {
  global $conn;
  $nama_binatang = $data['nama_binatang'];
  $keterangan_binatang = $data['keterangan_binatang'];
  $id_kategori = $data['id_kategori'];



  //upload gambar
  $gambar = uploadGambar();
  if(!$gambar){
    return false;
  }

//make the insert syntax
$query = "INSERT INTO binatang VALUES 
          ('','$nama_binatang','$keterangan_binatang','$gambar',' $id_kategori')";

mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}


function uploadGambar(){
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile =  $_FILES['gambar']['size'];
  $error =  $_FILES['gambar']['error'];  
  $tmp =  $_FILES['gambar']['tmp_name'];  

  //cek apakah user sudah menambah gambar

  if($error ===4){
    echo "<script>
        alert ('Silahkan pilih gambar');
          </script>";
          return false;
  }

  //cek apakah yang diupload adalah gambar
  $ekstensiGambarValid =['jpg','jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile); 
  $ekstensiGambar = strtolower(end($ekstensiGambar)); 
  if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
    echo "<script>
        alert ('format gambar salah!');
          </script>";
          return false;
  }

  //cek jika ukurannya terlalu besar
  if ($ukuranFile > 1000000){
    echo "<script>
        alert ('Ukuran terlalu besar');
          </script>";
  }

  //generate nama file random
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;


  //lolos semua hasil cek, lalu dijalankan
  move_uploaded_file($tmp, '../img/'.$namaFileBaru);

  return $namaFileBaru;
}


function ubahBinatang($data){
  global $conn;
  $id_binatang = $data['id_binatang'];
  $gambarLama = $data['gambarLama'];
  $id_kategori = $data['id_kategori'];
  $nama_binatang = $data['nama_binatang'];
  $keterangan_binatang = $data['keterangan_binatang'];


  //check whether user pick a new image or not
  if($_FILES['gambar']['error']===4){
    $gambar = $gambarLama;
  }else{
    $gambar = uploadGambar();
  }


//make the insert syntax
$query = "UPDATE binatang SET
        nama_binatang = '$nama_binatang',
        keterangan_binatang = '$keterangan_binatang',
        gambar = '$gambar',
        id_kategori = $id_kategori
        WHERE id_binatang = $id_binatang
        ";

mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}


function hapusBinatang($id_binatang){
  global $conn;
  mysqli_query($conn,"DELETE FROM binatang WHERE Id_binatang = $id_binatang");
  return mysqli_affected_rows($conn);
}
