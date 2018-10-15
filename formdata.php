<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<form action ="connectdb.php" method ="post" >  <br/>
	<table border=0 align="center" cellpadding=5 cellspacing=0>
		<tr>
<td colspan=3><center><font size=5>Data Mahasiswa</font></center></td>
</tr>
		<tr>
		<td>Nama</td><td>:</td><td><input type="text" name="nama"></td>
		</tr>
		<tr>
		<td>Nim</td><td>:</td><td><input type="text" name="nim"></td>
		</tr>
    <tr>
      <td>Jenis Kelamin</td><td>:</td><td><input type="radio" name="jenis_kelamin" value="pria">pria
 						  <input type="radio" name="jenis_kelamin" value="wanita">wanita</td><br/>
		</tr>
    <tr>
      <td>Program Studi</td><td>:</td><td>
        <input type="checkbox" name="program_studi[]" value="D3MI"> D3MI<br>
          <input type="checkbox" name="program_studi[]" value="D3MP"> D3MP<br>
          <input type="checkbox" name="program_studi[]" value="D3KA"> D3KA<br>
          <input type="checkbox" name="program_studi[]" value="D3IF"> D3IF<br>
          <input type="checkbox" name="program_studi[]" value="D3TK"> D3TK<br><br>
      </td>
      </td>
      <tr>
        <td>Fakultas</td><td>:</td><td>
        <select name="fakultas">
          <option value="">--- Fakultas ---</option>
          <option value="FIT">FIT</option>
          <option value="FIK">FIK</option>
          <option value="FEB">FEB</option>
          <option value="FKB">FKB</option>
          <option value="FIF">FIF</option>
          <option value="FTE">FTE</option>
        </select>
  		</tr>
      <tr>
  		<td>Asal</td><td>:</td><td><input type="text" name="asal"></td>
  		</tr>
      <tr>
  		<td>Moto Hidup</td><td>:</td><td>
         <textarea name="moto" rows="10" cols="30"></textarea></td>
  		</tr>
			<tr>
			<td></td><td></td><td><input type="submit" name="submit" value="submit"></td>
			</tr>
</form>
<a href="haldata.php">List Data Mahasiswa</a>
</body>
</html>
