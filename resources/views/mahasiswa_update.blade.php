<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 21/03/2016
 * Time: 10:52
 */

?>
<html>
<head>
    <title>Mahasiswa Update</title>
</head>
<body>
<form method="post" action="{{URL('/update-mahasiswa/'.$lists['mahasiswa_id'])}}">
    <input type="hidden" name="_method" value="put">
    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="{{$lists['nama']}}"></td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td><input type="text" name="no_telp" value="{{$lists['no_telp']}}"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat">{{$lists['alamat']}}</textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>
