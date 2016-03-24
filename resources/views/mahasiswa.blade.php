<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 21/03/2016
 * Time: 10:11
 */
 ?>
<html>
<head>
 <title>Mahasiswa Tabel</title>
</head>
<body>
<a href="{{URL('form-mahasiswa')}}">+Mahasiswa</a>
<a href="{{URL('form-kamar')}}">+Kamar</a>
<a href="#">+Penempatan</a>
<table border="1" cellpadding="10" cellspacing="1">
 <tr>
  <th>No</th>
  <th>Nama</th>
  <th>No Telp</th>
  <th>Alamat</th>
  <th>Action</th>
 </tr>
 <?php $no=1; ?>
 @foreach($kamarlists as $list)
 <tr>
  <td>{{$no++}}</td>
  <td>{{$list['nama']}}</td>
  <td>{{$list['no_telp']}}</td>
  <td>{{$list['alamat']}}</td>
  <td>
   <a href="{{URL('listid-mahasiswa/'.$list['mahasiswa_id'])}}">Update</a>
   <a href="{{URL('delete-mahasiswa/'.$list['mahasiswa_id'])}}">Delete</a>
  </td>
 </tr>
  @endforeach
</table>
<br>
<hr>
<table border="1" cellpadding="10" cellspacing="1">
 <tr>
  <th>No</th>
  <th>Nama Kamar</th>
  <th>Action</th>
 </tr>
 <?php $no=1; ?>
 @foreach($lists as $list)
  <tr>
   <td>{{$no++}}</td>
   <td>{{$list['nama']}}</td>
   <td>
    <a href="{{URL('listid-mahasiswa/'.$list['mahasiswa_id'])}}">Update</a>
    <a href="{{URL('delete-mahasiswa/'.$list['mahasiswa_id'])}}">Delete</a>
   </td>
  </tr>
 @endforeach
</table>

<hr>
<table border="1" cellpadding="10" cellspacing="1">
 <tr>
  <th>No</th>
  <th>Nama Mahasiswa</th>
  <th>Nama Kamar</th>
  <th>Action</th>
 </tr>
 <?php $no=1; ?>
 @foreach($lists as $list)
  <tr>
   <td>{{$no++}}</td>
   <td>{{$list['nama']}}</td>
   <td>
    <a href="{{URL('listid-mahasiswa/'.$list['mahasiswa_id'])}}">Update</a>
    <a href="{{URL('delete-mahasiswa/'.$list['mahasiswa_id'])}}">Delete</a>
   </td>
  </tr>
 @endforeach
</table>
</body>
</html>

