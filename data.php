<?php 
	//Data gejala kecil
	$data1 = array(
	    array(
	    	"no" => "1",
	        "pertanyaan" => "Apakah anda sering buang air besar?",
	    ),
	    array(
	        "no" => "2",
	        "pertanyaan" => "Apakah anda mengalami berak encer?",
	    ),
	    array(
	        "no" => "3",
	        "pertanyaan" => "Apakah anda mengalami berak berdarah?",
	    ),
	    array(
	        "no" => "4",
	        "pertanyaan" => "Apakah anda merasa lesu dan tidak bergairah?",
	    ),
	    array(
	        "no" => "5",
	        "pertanyaan" => "Apakah anda tidak selera makan?",
	    ),
	    array(
	        "no" => "6",
	        "pertanyaan" => "Apakah anda merasa mual dan sering muntah?",
	    ),
	    array(
	        "no" => "7",
	        "pertanyaan" => "Apakah anda merasa sakit dibagian perut?",
	    ),
	    array(
	        "no" => "8",
	        "pertanyaan" => "Apakah Tekanan darah anda rendah?",
	    ),
	    array(
	        "no" => "9",
	        "pertanyaan" => "Apakah anda merasa pusing?",
	    ),
	    array(
	        "no" => "10",
	        "pertanyaan" => "Apakah anda mengalami pingsan?",
	    ),
	    array(
	        "no" => "11",
	        "pertanyaan" => "Apakah suhu badan anda tinggi?",
	    ),
	    array(
	        "no" => "12",
	        "pertanyaan" => "Apakah anda mengalami luka dibagian tertentu?",
	    ),
	    array(
	        "no" => "13",
	        "pertanyaan" => "Apakah anda tidak dapat menggerakkan anggota badan tertentu?",
	    ),
	    array(
	        "no" => "14",
	        "pertanyaan" => "Apakah anda pernah memakan sesuatu?",
	    ),
	    array(
	        "no" => "15",
	        "pertanyaan" => "Apakah anda memakan daging?",
	    ),
	    array(
	        "no" => "16",
	        "pertanyaan" => "Apakah anda memakan jamur?",
	    ),
	    array(
	        "no" => "17",
	        "pertanyaan" => "Apakah anda memakan makanan kaleng?",
	    ),
	    array(
	        "no" => "18",
	        "pertanyaan" => "Apakah anda membeli susu?",
	    ),
	    array(
	        "no" => "19",
	        "pertanyaan" => "Apakah anda meminum susu?",
	    ),
	);
	

	//Data gejala besar
	$data2 = array(
	    array(
	    	"no" => "20",
	        "pernyataan" => "Mencret",
	        1,2,4,5
	    ),

	    array(
	    	"no" => "21",
	        "pernyataan" => "Muntah",
	        4,5,6
	    ),
	    array(
	    	"no" => "22",
	        "pernyataan" => "Sakit Perut",
	        4,7
	    ),
	    array(
	    	"no" => "23",
	        "pernyataan" => "Darah Rendah",
	        4,8,9
	    ),
	    array(
	    	"no" => "24",
	        "pernyataan" => "Koma",
	        8,10
	    ),
	    array(
	    	"no" => "25",
	        "pernyataan" => "Demam",
	        4,5,9,11
	    ),
	    array(
	    	"no" => "26",
	        "pernyataan" => "Septicaemia",
	        4,8,11,12
	    ),
	    array(
	    	"no" => "27",
	        "pernyataan" => "Lumpuh",
	        4,13
	    ),
	    array(
	    	"no" => "28",
	        "pernyataan" => "Mencret Berdarah",
	        1,2,3,4,5
	    ),
	    array(
	    	"no" => "29",
	        "pernyataan" => "Makan Daging",
	        14,15
	    ),
	    array(
	    	"no" => "30",
	        "pernyataan" => "Makan Jamur",
	        14,16
	    ),
	    array(
	    	"no" => "31",
	        "pernyataan" => "Makan Makanan Kaleng",
	        14,17
	    ),
	    array(
	    	"no" => "32",
	        "pernyataan" => "Minum Susu",
	        18,19
	    ),
	);


	//Data Penyakit
	$data3 = array(
	    array(
	    	"no" => "33",
	        "pernyataan" => "Keracunan Staphylococcus aureus",
	        20,21,22,23,29
	    ),
	    array(
	    	"no" => "34",
	        "pernyataan" => "Keracunan jamur beracun",
	        20,21,22,24,30
	    ),
	    array(
	    	"no" => "35",
	        "pernyataan" => "Keracunan Salmonellae",
	        20,21,22,25,26,29
	    ),
	    array(
	    	"no" => "36",
	        "pernyataan" => "Keracunan Clostridium botulinum",
	        21,27,31
	    ),
	    array(
	    	"no" => "37",
	        "pernyataan" => "Keracunan Campylobacter",
	        22,25,28,32
	    ),
	);

	// print_r($data2);
	$gejala = json_encode($data1);
	$gejala2 = json_encode($data2);
	$penyakit = json_encode($data3);
?>