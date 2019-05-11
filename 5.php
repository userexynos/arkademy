<?php

function sort_array($string)
{
	$arr_length = count($string);
	for($h=0; $h < $arr_length; $h++)
	{
		for($i=0; $i < $arr_length; $i++)
		{
			for($j = $i+1; $j < $arr_length; $j++)
			{
				if($string[$i] > $string[$j])
				{
					$temp = $string[$i];
					$string[$i] = $string[$j];
					$string[$j] = $temp;
				}
			}
		}
		for($i = 0; $i < count($string[$h]); $i++)
		{
			for($j = $i+1; $j < count($string[$h]); $j++)
			{
				if($string[$h][$i] > $string[$h][$j])
				{
					$temp = $string[$h][$i];
					$string[$h][$i] = $string[$h][$j];
					$string[$h][$j] = $temp;
					$filter = [max($string[$h])];
				}
			}
		}
		print_r($filter);
	}
}
echo "Output One => ";
$arr = [['a','c','b','e','d'],['g','e','f'],['h','j','i','l','k']];
sort_array($arr);

echo "Output Two => ";
$arr = [['g','a','u','e','d'],['m','p','f'],['z','j','i','l','k']];
sort_array($arr);