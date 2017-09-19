<?php
require_once("mdl_constants.php");
require_once("mdl_my.php");


function execSQL($sql)
{
	mysql_connect("localhost", POLZOVATEL, PAROL);
	mysql_select_db(BD);
	$result=mysql_query("SET CHARACTER SET cp1251");
	$result=mysql_query($sql);
	return $result;
}


function pervui_priem($Data)
{


$sql ="select max(jurnal.datapriema) as m from jurnal where jurnal.datapriema >= '".MyDate($Data)." 00:00:00' and jurnal.datapriema <= '".MyDate($Data)." 23:59:59' and jurnal.nomersotrudnika = 0";
$result=execSQL($sql);
$rows=mysql_num_rows($result);
mysql_data_seek($result,0);
$mas=mysql_fetch_array($result);
$value = $mas["m"];

return Nz($value);	

}

function viruchka($DataS,$DataP)
{
	$sql = "SELECT  SUM(jurnal.Symma) AS FIELD_SUM FROM jurnal WHERE ";
	$str_w = "jurnal.DataPriema > '".pervui_priem($DataS). "'" ;  
		$sql = $sql." ".$str_w ;	
	$str_w = "jurnal.DataPriema <= '".pervui_priem($DataP)."' ";  
		$sql = $sql." and ".$str_w ;	

	$result=execSQL($sql);
	$rows=mysql_num_rows($result);
	for($i=0;$i<$rows;$i++) {
		mysql_data_seek($result,$i);
		$arr_guest=mysql_fetch_array($result);
		$s = $arr_guest["FIELD_SUM"];
	}

	return Nz($s);

}

function ViruckaDejurstvoMes($NomerSotrudnika,$God,$Mes)
{
	$sql = " SELECT SUM(jurnal.Symma) AS FIELD_SUM FROM jurnal WHERE `NomerSotrudnika` = ".$NomerSotrudnika." and DATE_FORMAT(jurnal.DataPriema, '%Y') =".$God." and ABS(DATE_FORMAT(jurnal.DataPriema, '%m')) = ".$Mes." ";


	mysql_connect("localhost", POLZOVATEL, PAROL);
	mysql_select_db(BD);
	$result=mysql_query($sql);
	$rows=mysql_num_rows($result);
	for($i=0;$i<$rows;$i++) {
		mysql_data_seek($result,$i);
		$arr_guest=mysql_fetch_array($result);
		$s = $arr_guest["FIELD_SUM"];
	}
	return Nz($s);
}









?>