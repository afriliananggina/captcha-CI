<?php echo doctype('html5'); ?>
<html>
<head>
<title>Demo Daftar Terurut Afrilian Anggina</title>
<?php echo meta('description', 'Tutorial Codeigniter'); ?>
</head>
<body>

	<?php echo heading('Membuat Daftar Terurut Menggunakan Codeigniter Afrilian Anggina', 2); ?>
	<p>Langkah-langkah membuat format penulisan sebuah laporan , yang terdiri atas:</p>
		<?php
		$list = array (
		'Judul.',
		'Kata Pengantar.',
		'Daftar Isi.',
		'Isi (Pendahuluan, Latar Belakang, Tujuan Kegiatan, Isi, Saran, Penutup, Daftar Pustaka, Lampiran)',
		'Selesai',
		);
		$attributes = array(
		'type' => '1'
		);
		echo ol($list, $attributes);

		?>

	</body>
	</html>