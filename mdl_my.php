<?php

function MyDate($value)
{
	$date = $value;
	list($month, $day, $year) = sscanf($date, "%d.%d.%d");
	
	if ($day < 10) { $day = "0".$day; };
	if ($month < 10) { $month = "0".$month; };
	
	$s = $year."-".$day."-".$month;
	return $s;

}

function Nz($value)
{
	if (($value <> null)and($value <> "") )	{
		$s = $value;
	}
	else {
		$s = "0";
	};
	return $s;
}


function Nz_str($value)
{
	if (($value <> null)and($value <> "") )	{
		$s = $value;
	}
	else {
		$s = "";
	};
	return $s;
}


function Invers($value)
{


	if (Nz($value)==0)	{
		$return = 1;
	};
	if (Nz($value)==1)	{
		$return = 2;
	};
	if (Nz($value)==2)	{
		$return = 1;
	};
	return $return ;
}


function div_c($a, $b)  // целая часть числа
{
	$c = (int)( $a/$b);
	return $c;
}

?>