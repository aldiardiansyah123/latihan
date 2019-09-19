<?php
session_start();
if (isset($_POST['Login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];

    if ($a == "admin" && $b == "123456") {
        $_SESSION['login'] = $a;
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<a href='assalaam.php'>Klik</a>";
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=lo.php> Login </a>");
    }
} else {
    ?>
    <html>

    <head>
        <title>Login here...</title>
    </head>

    <body>
        <nav>
        </nav>
        <form action="" method="post">
            <h2>Login Here...</h2>
            Username : <input type="text" name="user"><br>
            Password : <input type="password" name="pass"><br>
            <input type="submit" name="Login" value="Log In">
        </form>
    </body>

    </html>
<?php
}
?>