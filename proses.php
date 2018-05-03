<?php
	error_reporting( error_reporting() & ~E_NOTICE );
	
	gKecil();

	function gKecil() {
		include "data.php";
		if( isset($_POST['gejala']) && is_array($_POST['gejala']) ) {
			//Nomor gejala besar
			$k = 0;
			foreach ($data2 as $data) {
				$hmm = 0;
				
				$j = $data['no'];
				// echo "<br>";
				$jml = count($data);
				$jml2 = $jml - 2;
				// echo $data['no'] ."=". " ";
				//no gejala kecil
				foreach($_POST['gejala'] as $gejala) {
					for ($i=0; $i < $jml ; $i++) { 
						if ($gejala == $data[$i]) {
							// echo $data[$i] . " ";
							$hmm +=1;
						}
					}
				}
				$persentase = $hmm / $jml2 * 100; //persentase total dari gejala licek
				// echo "Total = " . $hmm ."/".$jml2 ."<br>".$persentase."%";
				// echo "<br>";

				$persentase2[$j] = $persentase;
				$k++;
			}
		}	
		gBesar($persentase2);
	}

	function gBesar($persentase) {
		include "data.php";
		foreach ($data3 as $data) {
			$jml = count($data);
			$jml2 = $jml - 2;
			$tott = 100 / $jml2;
			echo "<br>";
			$no = $data['no'];
			echo $data['no'] . "= ";
			$hasil = 0;
			for ($i=0; $i < $jml2; $i++) { 
				for ($j=0; $j <= 12; $j++) { 
					if ($data[$i] == $j+20) {
						$sementara = ($persentase[$j+20] * $tott) / 100;
						$hasil = $sementara + $hasil;
					}
				}
			}
			echo "$hasil %";
		}
	}
?>