<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<body>
		<center><h2>Profile</h2></center>
		<a class = "btn btn-warning float-right" href="login.php">Logout</a>
		<form action="profile.php" method="get">
				<div class = "form-inline"><input type="text" name="cari" placeholder="cari nama" class="form-control">
				<input type="submit" >
				</div>
			</form>
		
	<table align="center" class="table table-sm">
		<thead>
		<tr>
			<th>NIM</th>
			<th>Username</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Hobi</th>
			<th>Genre</th>
			<th>Wisata</th>
			<th>Tanggal</th>
			<th>Aksi</th>
		</tr>
		</thead>
	<?php if (mysqli_num_rows($result) > 0) : ?>
	`	<?php while ($rows = mysqli_fetch_array($result)) {
    ?>
			<tr>
				<td><?php echo $rows["nim"] ?></td>
				<td><?php echo $rows["username"] ?></td>
				<td><?php echo $rows["nama"] ?></td>
				<td><?php echo $rows["kelas"] ?></td>
				<td><?php echo $rows["hobi"] ?></td>
				<td><?php echo $rows["genre"] ?></td>
				<td><?php echo $rows["wisata"] ?></td>
				<td><?php echo $rows["tanggal"] ?></td>
				<td><a href="form_edit.php?nim=<?php echo $rows['nim'] ?>">Edit</a> | <a href="delete.php?nim=<?php echo $rows['nim'] ?>">Hapus</a></td>
			</tr>

	<?php
} endif ?>
</table>
</body>
</html>