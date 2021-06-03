<html>
<head>
<title>Captcha Helper Afrilian Anggina</title>
</head>
<body>

	<h2>Demo Membuat Gambar CAPTCHA Afrilian Anggina</h2>

	<form action="http://localhost/ci/index.php/captcha_helper" method="post">
		Nama:<br />
		<input type="text" name="nama" /><br />
		Komentar:<br />
		<textarea name="komentar" rows="5" cols="40" /></textarea><br /><br />
		<?php echo $captcha['image']; ?><br /><br />
	<input type="text" name="teks" 
		size="40"
		placeholder="Tulis teks pada gambar di atas" /><br /><br />
	<input type="submit" name="btnSubmit" value="Kirim" />
</form>
</body>
</html>