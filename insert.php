<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include ("koneksi.php");
?>
<body>
<form id="form1" name="form1" method="post" action="kodeinsert.php">
  <table width="200" border="1">
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" name="nama" id="nama" /></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td>&nbsp;</td>
      <td><input type="text" name="hrg" id="hrg" /></td>
    </tr>
    <tr>
      <td>Produksi</td>
      <td>&nbsp;</td>
      <td><input type="text" name="pro" id="pro" /></td>
    </tr>
    <tr>
      <td>Deskripsi</td>
      <td>&nbsp;</td>
      <td><input type="text" name="des" id="des" /></td>
    </tr>
    <tr>
      <td>Stok</td>
      <td>&nbsp;</td>
      <td><input type="text" name="stok" id="stok" /></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td>&nbsp;</td>
      <td><input type="file" name="foto" id="foto" /></td>
    </tr>
    <tr>
      <td colspan="3"><input name="Button" type="submit" id="simpan" value="Simpan" /></td>
    </tr>
    
  </table>
  
</form>
</body>
</html>