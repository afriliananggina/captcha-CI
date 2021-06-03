<?php echo doctype('html5'); ?>
<html>
<head>
<title>Demo Gambar</title>
<?php echo meta('description', 'Tutorial Codeigniter'); ?>
</head>
<body>

	<?php echo heading('Demo Menampilkan Gambar Afrilian Anggina', 2); ?>

	<img src="<?php echo base_url() ?>assets/images/uniks.jpg" alt="logo" width="200">


<?php echo heading('Demo Menampilkan Gambar dengan Atribut Afrilian Anggina', 2); ?>

<?php
$attributes = array(
'width' => '200',
'height' => '150',
'title' => 'Ini adalah gambar Universitas Islam Kuantan Singingi',
);
echo img('assets/images/uniks.jpg', FALSE, $attributes);

?>

</body>
</html>