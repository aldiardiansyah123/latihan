<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  
  <form action="databuku.php" method="GET">
    <center><h2>Ulangan Harian</h2></center>
    <?php
         echo "<h3 align='right'>".date("d/m/Y H:i:s")."</h3>";
         ?>
    <fieldset style="border-color:yellow">
    <legend><h2 >Selamat Datang</h2></legend>
    <div class="a">
    <form>
    <table>
    <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" required></td>
    </tr>
    <tr>
    <td>Alamat</td>
    <td><input type="textarea" name="alamat" required></td>
    </tr>
    <tr>
    <td>Jenis Kelamin</td>
    <td><input type="radio" name="jenis" value="Laki - Laki" checked>Laki - Laki</td>
    <td><input type="radio" name="jenis" value="Perempuan">Perempuan</td>
    </tr>
    <tr>
    <td>Tanggal Beli</td>
    <td><input type="date" name="tanggal" required></td>
    </tr>
    <tr>
    <td>Jumlah Pembelian buku</td>
    <td><input type="number" min="1" name="jumlah" required></td>
    </tr>
    </table>
    <br> 
    <input type="submit" name="input" value="Simpan">
    <input type="reset" value="Reset">
    <hr>
    </div>
    </form>
</form>
    </fieldset>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
</html>