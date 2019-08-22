<html>
    <head><title>Login Here</title></head>
        <body>
            <FORM ACTION="proses05.php" METHOD="POST" NAME="input">
                <h2>formulir pendaftaran</h2>
                No pendaftaran : <input type="text" name="no pendaftaran"><br>
                NISN           : <input type="text" name="nisn"><br>
                Alamat         : <textarea name="alamat" cols="30"rows="5"></textarea><br>
                Tempat Lahir   : <input type="text" name="tl"><br>
                Tanggal Lahir  : <input type="date" name="tgl"><br>
                Asal sekolah   : <input type="text" name="as"><br>
                Jurusan        :<select name="jurusna">
                                <option value="Rekayasa Perangkat Lunak">RPL</option>
                                <option value="Teknik Kendaraan Ringan">TKR</option>
                                <option value="Teknik Sepedah Motor">TSM</option>
                                </select><br>
                Jenis kelamin  : <input type="radio" name="jk" value="laki-laki"checked> laki-laki
                                 <input type="radio" name="jk" value="perempuan"checked> perempuan<br>
                Agama          :<select name="agama">
                                <option value="islam">islam</option>
                                <option value="hindu">hindu</option>
                                <option value="budha">budha</option>
                                </select><br>
                Nama Ayah      :<input type="text" name=na""><br>
                Pekerjaan Ayah :<input type="text" name="pa"><br>
                Nama Ibu       :<input type="text" name="ni"><br>
                Pekerjaan Ibu  :<input type="text" name="pi"><br>
                Hoby           :<input type="checkbox" value="sepak bola">sepak bola
                                <input type="checkbox" value="ngegame">ngegame
                                <input type="checkbox" value="futsal">futsal
                                <input type="checkbox" value="pilot">pilot
                                <input type="checkbox" value="mancing">mancing<br>
                <input type="submit" name="Login" value="Login">
                <input type="reset" name="reset" value="Reset"
            </FORM>
        </body>
</html>