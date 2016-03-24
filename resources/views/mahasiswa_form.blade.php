<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 21/03/2016
 * Time: 10:27
 */
?>
<html>
<head>
    <title>Mahasiswa Form</title>
</head>
<body>
<form method="post" action="{{URL('/save-mahasiswa')}}">
    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td><input type="text" name="no_telp"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
    </table>
</form>
</body>
</html>
