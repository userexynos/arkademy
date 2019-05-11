
<?php

function cetak_gambar($str){
	$arr_length = count($str);
	$c = $arr_length-1;
	for($a = 0; $a < $arr_length; $a++)
	{
		for($b = 0; $b < $arr_length; $b++)
		{
			if($a == $b)
			{
				echo $str[$a];
			} else {
				if($b == $c)
				{
					echo $str[$a];
					$c--;
				} else {
					echo " = ";
				}
			}
		}
		echo "\n";
	}
}

$str = ['P','R','O','G','R','A','M','M','E','R'];
cetak_gambar($str);
