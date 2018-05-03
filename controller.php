<?php
	error_reporting( error_reporting() & ~E_NOTICE );
	function gejalaB($no) {
		include "data.php";

		// $objek = json_decode($gejala2);
		foreach ($data2 as $data) {
			echo "<br>";
			$jml = count($data);
			echo $data['no'] ."=". " ";
			for ($i=0; $i < $jml ; $i++) { 
				echo $data[$i]." ";
			}
		}
	}
?>