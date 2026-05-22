<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form biodata</title>
</head>
<body>
    <h2>form biodata</h2>
     <form method="POST">
        Nama: <input type="text" name="nama" ><br><br>
        umur: <input type="number" name="umur"><br><br>
        alamat: <input type="text" name="alamat"><br><br>
        <button type="submit">kirim</button>
     </form>
<?php
if (isset($_POST['nama'])){
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

if ($nama==""||$umur==""||$alamat==""){
    echo "<script>alert(semua data harus diisi!);</script>";
}else{
    $nama = htmlspecialchars($nama);
    $umur = htmlspecialchars($umur);
    $alamat = htmlspecialchars($alamat);

    echo "<h3>hasil</h3>";
    echo "nama: $nama <br>";
    echo "umur: $umur <br>";
    echo "alamat: $alamat <br>";
}
}
?>
</body>
</html>