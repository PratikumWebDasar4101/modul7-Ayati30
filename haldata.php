<?php
require_once ("db.php");
session_start();
if (isset($_SESSION['hapus_error'])) {
	echo $_SESSION['hapus_error'];
	unset($_SESSION['hapus_error']);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<table>
			<tr>
				<td></td>
				<td>
					<form action="list_data.php" method="get">
						<input type="hidden" name="aksi" value="search">
						<input type="text" name="datamhs">
						<input type="submit">
					</form>
				</td>
			</tr>
		<?php
		if(isset($_GET['aksi']) && $_GET['aksi'] == 'search' && isset($_GET['datamhs'])){
			$datamhs = $_GET['datamhs'];
			$query ="SELECT `nim`, `nama` FROM `mahasiswa` WHERE `nim` LIKE '%$datamhs%' OR `nama` LIKE '%$datamhs%'";
		} else {
			$query ="SELECT `nim`, `nama` FROM `mahasiswa` WHERE 1";
		}
		$result = mysqli_query($conn,$query);
		if (mysqli_num_rows($result)>0) {
		?>
			<tr>
				<th>NIM</th>
				<th>Nama</th>
				<th>Aksi</th>
			</tr>
			<tbody>
			<?php
			while ($d = mysqli_fetch_array($result)){
			 ?>
			 	<tr>
			 		<td><?php echo $d['nim']; ?></td>
			 		<td><?php echo $d['nama']; ?></td>
			 		<td><a href="delete.php?aksi=delete&id=<?php echo $d['nim']; ?>">Hapus</a></td>
			 	</tr>
			 	<?php
		 		}
	 		?>
			 </tbody>
		</table>
		<?php
	 	}else{
	 		echo "Tidak Ada Data!";
	 	}
		?>
		<br>
		<a href="formdata.php">Tambah Data</a>
	</body>
</html>
