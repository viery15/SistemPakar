<?php
	
	include "data.php";

	$objek = json_decode($gejala);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Konsultasi Penyakit</title>
</head>
<body>
	<?php
		foreach ($objek as $data => $value) {		
	?>

	<form action="proses.php" method="post" name="gejala">
		<input type="checkbox" name="gejala[]" value="<?= $value->no ?>"> <?= $value->pertanyaan ?> <br>
	<?php } ?>

	<input type="submit" name="" value="Submit">
	</form>
</body>
</html>