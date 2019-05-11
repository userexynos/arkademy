<?php

function words()
{
	// untuk mengacak kata kata dan dipangkas
	// menjadi kata acak terdiri dari 32 huruf!
	$str = "abcdefghijklmnopqrstuvwxyz0123456789";
	for($ii = 0; $ii < 32; $ii++)
	{
		// mengacak dengan menggunakan rand()
		$generate = rand(0, strlen($str)-1);
		$string .= $str{$generate};
	}
	return $string;
}
function cetak($length) 
{
	// for() mencetak
	// sesuai yang di kehendaki variable $length
	for($i = 0; $i < $length; $i++)
	{
		// memanggil function untuk mengambil data
		// didalam function `return $string`
		$str = words();
		// menyaring rand() agar tidak ditemukan string yang sama
		while(in_array($str, array()))
		{
			$str = words();
		}
		// mencetak variable string
		print_r($str."\n");
	}
}

// cetak
cetak(2);