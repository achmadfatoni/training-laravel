<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<form action="{{ url('biodata') }}" method="POST">
		<label>Name</label>
		<input type="text" name="name" />

		<label>Address</label>
		<input type="text" name="address">

		<label>Email</label>
		<input type="email" name="email">

		<button type="submit">Simpan</button>
	</form>
</body>
</html>