<?php

function validasi($datatype, $str)
{
	if($datatype == 'username')
	{
		if(preg_match('/[a-z]{8,8}/', $str))
		{
			return true;
		} else {
			return false;
		}
	} 
	elseif($datatype == 'email')
	{
		if(preg_match('/^[A-Za-z0-9-_.+%]{4,1000}+@[A-Za-z0-9-.]+.[A-Za-z]{2,4}$/',$str))
		{
			return true;
		} else {
			return false;
		}
	}
}

$validUser = "anything";
$invalidUser = "aNoYin66";
$validEmail = "aku.Lov3@kamu.com";
$invalidEmail = "aku@Lov3kamu.com";

echo "\nValid User => ". $validUser .", [result] => ". validasi('username', $validUser);
echo "\nInvalid User => ". $invalidUser .", [result] => ". validasi('username', $invalidUser);
echo "\nValid Email => ". $validEmail .", [result] => ". validasi('email', $validEmail);
echo "\nInvalid Email => ". $invalidEmail .", [result] => ". validasi('email', $invalidEmail) ."\n";