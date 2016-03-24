<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 21/03/2016
 * Time: 11:47
 */
?>
<html>
<head>
    <title>Kamar Form</title>
</head>
<body>
<form method="post" action="{{URL('/save-kamar')}}">
    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <td>Nama Kamar</td>
            <td><input type="text" name="nama_kamar"></td>
        </tr>
        <tr>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
    </table>
</form>
</body>
</html>

