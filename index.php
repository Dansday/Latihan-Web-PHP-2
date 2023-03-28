<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        h1{ text-align: center;}
    </style>
</head>

<body>
    <h1 class="my-5">Hai, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Selamat datang di pendaftaran mahasiswa baru
    <br>Politeknik Negeri Jakarta Tahun 2022.</h1>
    <b>Silahkan isi form di bawah:</b>
<form action="submit.php" method="post">
<table border="0">
<tr>
<td>NISN</td>
<td>: <input type="text" name="nisn" value=""/></td>
</tr>
<tr>
<td>NIK/No KTP</td>
<td>: <input type="text" name="nik" value=""/></td>
</tr>
<tr>
<td>Nama Lengkap</td>
<td>: <input type="text" name="nama" value=""/></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>: 
<select name="jenis_kelamin" >
    <option value="Laki - Laki">Laki - Laki</option> 
    <option value="Perempuan">Perempuan</option>
</select>
</td>
</tr>
<tr>
<td>Email</td>
<td>: <input type="text" name="email" value=""/></td>
</tr>
<tr>
<td>Prodi</td>
<td>:  <input type="radio" name="prodi" value="TMJ" />  TMJ
        <input type="radio" name="prodi" value="TI" />  TI
        <input type="radio" name="prodi" value="TKJ" />  TKJ
        <input type="radio" name="prodi" value="TMD" />  TMD
        <input type="radio" name="prodi" value="TMD AeU" />  TMD AeU
        <input type="radio" name="prodi" value="TMD MSU" />  TMD MSU
</td>
</tr>
<tr>
<td>Pilihan UKT</td>
<td>: 
<select name="ukt" > 
	<option value="1">1</option> 
	<option value="2">2</option> 
	<option value="3">3</option>
	<option value="4">4</option> 
	<option value="5">5</option>
	<option value="6">6</option> 
</select> </td>
</tr>
<tr>
<td>Alamat Lengkap</td>
<td>:<textarea name="komentar" rows="2" cols="50">
</textarea> </td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Submit!" class="btn btn-primary">
<a href="logout.php" class="btn btn-danger ml-3">Sign Out</a></td>
</tr>
</table
</form>
</body>
</html>