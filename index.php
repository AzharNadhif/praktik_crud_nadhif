<?php
require 'functions.php';
$siswa = query ("SELECT * FROM siswa");

//tombol cari diklik
if(isset($_POST["cari"])){
    $siswa = cari($_POST["keyword"]);


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>belajarphp</title>
</head>
<body>
    <h1 style ="text-align : center">Daftar Siswa</h1>

    <a href="tambah.php" class="btn btn-info"
    > Tambah data siswa</a>
    <br><br>

    <form action="" method="post">
    
        <input type="text"name="keyword" size="35" autofocus placeholder ="Masukkan keyword pencarian..." autocomplete="off">
        <button type="text" name="cari" class="btn btn-info" >Cari !</button>

    </form>
    <br>

    <table border = "1" cellpadding="10" cellspacing="0" class="table">
    <thead class="thead-dark">
    <tr>
    <th>No</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
    </thead>

    <?php $i = 1; ?>
    <?php foreach ($siswa as $row) : ?>
    <tr>
    <td><?= $i ?></td>
    <td>
         <a href="ubah.php?id=<?= $row ["id"]; ?>"class="btn btn-info" style="color : white">Ubah</a>|
        <a href="hapus.php?id=<?= $row ["id"]; ?>"class="btn btn-danger" style="color : white" onclick="return confirm ('yakin ?')";>Hapus</a>
    </td>
    <td> <img src="img/<?= $row ["gambar"]; ?>" width="50" alt=""></td>
    <td><?= $row ["nis"]; ?></td>
    <td><?= $row ["nama"]; ?></td>
    <td><?= $row ["email"]; ?></td>
    <td><?= $row ["jurusan"]; ?></td>
    </tr>

    <?php $i++ ?>
    <?php endforeach; ?>
    </table>

    </tr>
</body>
</html>