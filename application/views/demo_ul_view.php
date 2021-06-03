<?php echo doctype('html5'); ?>
<html>
<head>
<title>Demo Daftar Tidak Terurut Afrilian Anggina</title>
<?php echo meta('description', 'Tutorial Codeigniter'); ?>
</head>
<body>

	<?php echo heading('Demo Menampilkan Daftar Tidak Terurut Afrilian Anggina', 2); ?>

	<p>Kategori Buku:</p>
	<?php
	$list = array (
		'Desain Grafis',
		'Pemrograman' => array(
			'C/C++/C#',
			'Python',
			'PHP',
			'Java' => array(
				'Java ME',
				'Java SE',
				'Java EE'
			),
			'Ruby'
		),
		'Jaringan Komputer'
	);

	$attributes = array(
		'type' => 'circle'
	);

	echo ul($list, $attributes);

	?>

</body>
</html>