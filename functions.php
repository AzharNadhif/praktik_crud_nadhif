<?php
//konek database
$conn = mysqli_connect("localhost","root","","phpdasar");


function query($query){
    global $conn;
    $result = mysqli_query ($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah ($data){
    global $conn;
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    //upload gambar
    $gambar = upload();
    if (!$gambar){
        return false;
    }

    
    $query = "INSERT INTO siswa
                VALUES
        ('','$nama','$nis','$email','$jurusan','$gambar')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function upload(){
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang di upload
    if( $error === 4){
        echo"<script>
            alert('silakan pilih gambar terlebih dahulu !'); 
        </script>";

        return false;
    }

    //cek apakah yang di upload gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    



}


function hapus ($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function ubah ($data){
    global $conn;

    $id = $data["id"];
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    
    $query = "UPDATE siswa SET
            nis = '$nis',
            nama = '$nama',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
        WHERE id = $id
        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);


}

function cari($keyword){
    $query = "SELECT * FROM siswa
            
            WHERE 
            nama LIKE '%$keyword%' OR 
            nis LIKE '%$keyword%' OR 
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' 
            ";
    return query ($query);           
}

?>

