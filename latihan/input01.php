<html>
<head><title>nama lengkap</title></head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
Nama Anda : <input type="text" name="nama"><br>
Nilai 1 <input type="text" name="a"><br>
Nilai 2 <input type="text" name="b"><br>
<input type="submit" name="Input" value="Input">
<input type="reset" name="reset" value="reset">
</FORM>
</body>
</html>
<?php
if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
$a = $_POST['a'];
$b = $_POST['b'];
echo "Nama Anda : <b>$nama</b><br>";
echo "Nilai 1 : <b>$a</b><br>";
echo "Nilai 2 : <b>$b</b><br>";
$c = ($a+$b)/2;
echo "Rata - Rata :<b>$c</b>";
}
?>