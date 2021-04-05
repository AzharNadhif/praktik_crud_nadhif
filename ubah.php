<?php
require 'functions.php';

//ambil data di URL
$id = $_GET["id"];
//query data siswa berdasar id
$sw = query("SELECT * FROM siswa WHERE id = $id")[0];



//cek apakah tombol sudah ditekan atau belum
if ( isset($_POST ["submit"])){
    
    //cek data berhasil atau tidak
    if (ubah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil diubah !');
                document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
        <script>
            alert('data gagal diubah !');
            document.location.href = 'index.php';
        </script>
        ";
    }
    
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Ubah data siswa</title>
</head>
<body>
    <h1>Ubah data siswa</h1>

    <form action="" method="post">
    <input type="hidden" name = "id" value ="<?= $sw ["id"]; ?>">
        <ul>
        <li>
            <label for="nis"> NIS : </label>
            <input type="text" name= "nis" id="nis" required value = "<?= $sw ["nis"] ?> ">
            </li>
            <li>
            <label for="nama"> Nama : </label>
            <input type="text" name= "nama" id="nama" value = "<?= $sw ["nama"] ?> ">
            </li>
            <li>
            <label for="email"> Email : </label>
            <input type="text" name= "email" id="email" value = "<?= $sw ["email"] ?> ">
            </li>
            <li>
            <label for="jurusan"> Jurusan : </label>
            <input type="text" name= "jurusan" id="jurusan" value = "<?= $sw ["jurusan"] ?> ">
            </li>
            <li>
            <label for="gambar"> Gambar : </label>
            <input type="text" name= "gambar" id="gambar" value = "<?= $sw ["gambar"] ?>">
            </li>
            <li>
                <button class="btn btn-info" type="submit" name= "submit">Ubah Data!</button>
            </li>
        </ul>

    
    
    </form>
    
</body>
</html>