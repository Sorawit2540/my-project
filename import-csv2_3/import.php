<?php

//import.php

header('Content-type: text/html; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");

set_time_limit(0);
ini_set('memory_limit', '500M');
ini_set('upload_max_filesize', '500M');
ini_set('post_max_size', '500M');
ob_implicit_flush(1);

session_start();

if(isset($_SESSION['csv_file_name']))
{
	$connect = new PDO("mysql:host=localhost; dbname=test", "root", "12345678");
	$connect->exec("SET NAMES TIS620");
	$file_data = fopen('file/' . $_SESSION['csv_file_name'], 'r');

	fgetcsv($file_data);

	while($row = fgetcsv($file_data))
	{
		$data = array(
			':f1'	=>	$row[0],':f2'	=>	$row[1],':f3'	=>	$row[2],':f4'	=>	$row[3],':f5'	=>	$row[4],':f6'	=>	$row[5],':f7'	=>	$row[6],':f8'	=>	$row[7]
			,':f9'	=>	$row[8],':f10'	=>	$row[9],':f11'	=>	$row[10],':f12'	=>	$row[11],':f13'	=>	$row[12],':f14'	=>	$row[13],':f15'	=>	$row[14],':f16'	=>	$row[15]
			,':f17'	=>	$row[16],':f18'	=>	$row[17],':f19'	=>	$row[18],':f20'	=>	$row[19],':f21'	=>	$row[20],':f22'	=>	$row[21],':f23'	=>	$row[22],':f24'	=>	$row[23]
			,':f25'	=>	$row[24],':f26'	=>	$row[25],':f27'	=>	$row[26],':f28'	=>	$row[27],':f29'	=>	$row[28],':f30'	=>	$row[29],':f31'	=>	$row[30],':f32'	=>	$row[31]
			,':f33'	=>	$row[32],':f34'	=>	$row[33],':f35'	=>	$row[34],':f36'	=>	$row[35],':f37'	=>	$row[36],':f38'	=>	$row[37],':f39'	=>	$row[38],':f40'	=>	$row[39]
			,':f41'	=>	$row[40],':f42'	=>	$row[41],':f43'	=>	$row[42],':f44'	=>	$row[43],':f45'	=>	$row[44],':f46'	=>	$row[45],':f47'	=>	$row[46],':f48'	=>	$row[47]
			,':f49'	=>	$row[48],':f50'	=>	$row[49],':f51'	=>	$row[50],':f52'	=>	$row[51],':f53'	=>	$row[52],':f54'	=>	$row[53],':f55'	=>	$row[54],':f56'	=>	$row[55]
			,':f57'	=>	$row[56],':f58'	=>	$row[57],':f59'	=>	$row[58],':f60'	=>	$row[59],':f61'	=>	$row[60],':f62'	=>	$row[61],':f63'	=>	$row[62],':f64'	=>	$row[63]
			,':f65'	=>	$row[64],':f66'	=>	$row[65],':f67'	=>	$row[66],':f68'	=>	$row[67],':f69'	=>	$row[68],':f70'	=>	$row[69],':f71'	=>	$row[70],':f72'	=>	$row[71]
			,':f73'	=>	$row[72],':f74'	=>	$row[73],':f75'	=>	$row[74],':f76'	=>	$row[75],':f77'	=>	$row[76],':f78'	=>	$row[77],':f79'	=>	$row[78],':f80'	=>	$row[79]
			,':f81'	=>	$row[80],':f82'	=>	$row[81],':f83'	=>	$row[82],':f84'	=>	$row[83],':f85'	=>	$row[84],':f86'	=>	$row[85],':f87'	=>	$row[86],':f88'	=>	$row[87]
			,':f89'	=>	$row[88],':f90'	=>	$row[89],':f91'	=>	$row[90],':f92'	=>	$row[91],':f93'	=>	$row[92],':f94'	=>	$row[93],':f95'	=>	$row[94],':f96'	=>	$row[95]
			,':f97'	=>	$row[96],':f98'	=>	$row[97],':f99'	=>	$row[98],':f100'=>	$row[99],':f101'=>	$row[100],':f102'=>	$row[101]
		);

		$query = "
		INSERT INTO list_ongoing_all_end0863_963 (f1,f2,f3,f4,f5,f6,f7,f8,f9,f10,f11,f12,f13,f14,f15,f16,f17,f18,f19,f20,f21,f22,f23,f24,f25,f26,f27,f28,f29,f30,f31,f32,f33,
		f34,f35,f36,f37,f38,f39,f40,f41,f42,f43,f44,f45,f46,f47,f48,f49,f50,f51,f52,f53,f54,f55,f56,f57,f58,f59,f60,f61,f62,f63,f64,f65,f66,
		f67,f68,f69,f70,f71,f72,f73,f74,f75,f76,f77,f78,f79,f80,f81,f82,f83,f84,f85,f86,f87,f88,f89,f90,f91,f92,f93,f94,f95,f96,f97,f98,f99,
		f100,f101,f102) 
    	VALUES (:f1,:f2,:f3,:f4,:f5,:f6,:f7,:f8,:f9,:f10,:f11,:f12,:f13,:f14,:f15,:f16,:f17,:f18,:f19,:f20,:f21,:f22,:f23,:f24,:f25,:f26,:f27,:f28,:f29,:f30,:f31,:f32,:f33,
		:f34,:f35,:f36,:f37,:f38,:f39,:f40,:f41,:f42,:f43,:f44,:f45,:f46,:f47,:f48,:f49,:f50,:f51,:f52,:f53,:f54,:f55,:f56,:f57,:f58,:f59,:f60,:f61,:f62,:f63,:f64,:f65,:f66,
		:f67,:f68,:f69,:f70,:f71,:f72,:f73,:f74,:f75,:f76,:f77,:f78,:f79,:f80,:f81,:f82,:f83,:f84,:f85,:f86,:f87,:f88,:f89,:f90,:f91,:f92,:f93,:f94,:f95,:f96,:f97,:f98,:f99,
		:f100,:f101,:f102)
		";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		sleep(1);

		if(ob_get_level() > 0)
		{
			ob_end_flush();
		}
	}

	unset($_SESSION['csv_file_name']);
}

?>