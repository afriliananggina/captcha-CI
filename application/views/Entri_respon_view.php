<html>
<head>
	<title>Demo Model Afrilian</title>
</head>
<body>
	<h2>Entri Data Sukses</h2>

	<p>Baris data berikut telah ditambahkan ke tabel 'produk' </p>

	<table border="1">
		<tr>
			<th>Kode</th>
			<th>Nama</th>
			<th>Harga</th>
		</tr>
		<tr> 
			<td><?php echo $model->id; ?></td>
			<td><?php echo $model->nama; ?></td>
			<td><?php echo $model->harga; ?></td>
		</tr>
	</table>
</body>
</html>