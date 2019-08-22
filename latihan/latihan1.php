<?php

if (isset($_POST['Input'])) {
$nama1 = $_POST['nama1'];
$nama2 = $_POST['nama2'];
$nama3 = $_POST['nama3'];
$nama4 = $_POST['nama4'];
$email = $_POST['email'];

echo "<b>form Registrasi</b><br>";
echo "Nama          : ".$nama1. "<br>";
echo "Alamat        : ".$nama2. "<br>";
echo "Jenis Kelamin : ".$nama3. "<br>";
echo "Agama         : ".$nama4. "<br>";
echo "Email         : ".$email. "<br>";
}

?>