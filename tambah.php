<?php
require 'functions.php';

//cek apakah tombol sudah ditekan atau belum
if ( isset($_POST ["submit"])){


    
    //cek data berhasil atau tidak
    if (tambah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil ditambahkan !');
                document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
        <script>
            alert('data gagal ditambahkan !');
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

    <title>Tambah data siswa</title>
</head>
<body>
    <h1>Tambah data siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
        <li>
            <label for="nis"> NIS : </label>
            <input type="text" name= "nis" id="nis" required>
            </li>
            <li>
            <label for="nama"> Nama : </label>
            <input type="text" name= "nama" id="nama">
            </li>
            <li>
            <label for="email"> Email : </label>
            <input type="text" name= "email" id="email">
            </li>
            <li>
            <label for="jurusan"> Jurusan : </label>
            <input type="text" name= "jurusan" id="jurusan">
            </li>
            <li>
            <label for="gambar"> Gambar : </label>
            <input type="file" name= "gambar" id="gambar">
            </li>
            <li>
                <button class="btn btn-info" type="submit" name= "submit">Tambah Data!</button>
            </li>
        </ul>

    
    
    </form>
    
</body>
</html>