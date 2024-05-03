<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Pemweb</title>
</head>
<body>
	<form action="validation.php" method="POST">
		<input type="text" placeholder="Username" name="username"		><br>
		<input type="text" placeholder="Rincian barang" name="rincian"	><br>
		<input type="text" placeholder="Harga" name="harga"				><br>
		<input type="hidden" name="lunas" value="off">
		<input type="checkbox" name="lunas"								><label>Lunas</label><br>
		<input type="submit">
	</form>
</body>
</html>
