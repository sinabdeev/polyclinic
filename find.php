<?php
session_start();

include("inc/title.htm");?>

<table border="0" width="100%" cellpadding="0" cellspacing="0"  style="border-width: 0px">
<tr>
<td>
<table class="centr" cellSpacing="0" cellPadding="0" align="center" border="1" align='center'>
	<form name='FormFind' method='POST' action='find.php'>
	<tr>
		<td >Кличка</td>
		<td >Вид животного</td>
		<td >ФИО</td>
		<td >Дата приёма</td>
		
	</tr>
	<tr>

	
<?php 



require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");




if($_POST['turn_click']<>"" )
{

$_SESSION['Klichka'] = $_POST['Klichka'];
$_SESSION['VidJivot'] = $_POST['VidJivot'];
$_SESSION['klient'] = $_POST['klient'];
$_SESSION['F_DataPriema'] = $_POST['F_DataPriema'];
	
};



echo "<td><input type='text'  name='Klichka' value=".$_SESSION['Klichka']."></td>";		
echo "<td> ";
$ex = new vid_jivot();
$ex->get($_SESSION['VidJivot']);
echo "</td>";
echo "<td><input type='text' name='klient' value = ".$_SESSION['klient']."></td>";
//echo "<td><input class='pole_Data' style='text-align:center;cursor:pointer' onclick='kalendaR(event)' name='F_DataPriema' value=".$_SESSION['F_DataPriema']."></td>";
echo "<td><input class='pole_Data' style=' TEXT-ALIGN: center'  value='00.00.0000' name='F_DataPriema' size='20'></td>";
?>
	</tr>
	
	<tr>
		<td colspan=4 align=center ><input class="knopka" type=submit value="Поиск" name="turn_click"></td>
</form>
		
	</tr>
</table>
</td>
</tr>



	<tr cellpadding="0" cellspacing="0" >
<td>
<table border=1 align=center class='centr' cellpadding='0' cellspacing='0' >		


<?php

require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_my.php");



if($_SESSION['Klichka']<>"" or $_SESSION['VidJivot']<>"" or $_SESSION['klient']<>"" or $_SESSION['DataPriema']<>"" ) {


$sql=SELECT_jurnal." WHERE ";

$find_sql = " jurnal.Nomer_vida_jivot = ".$_SESSION['VidJivot']." ";  
$sql = $sql." ".$find_sql ;


	// filter # №
	if($_SESSION['VidJivot']<>"") {
		$find_sql = " jurnal.Nomer_vida_jivot = '".$_SESSION['VidJivot']."' ";  
		$sql = $sql." and ".$find_sql ;	};


	// filter # №
	if($_SESSION['Klichka']<>"") {
		$find_sql = " jurnal.Klichka = '".$_SESSION['Klichka']."' ";  
		$sql = $sql." and ".$find_sql ;	};

	// filter # №
	if($_SESSION['klient']<>"") {
		$find_sql = " jurnal.klient = '".$_SESSION['klient']."' ";  
		$sql = $sql." and ".$find_sql ;	};

	// filter # №
	if (($_SESSION['F_DataPriema']<>"")and($_SESSION['F_DataPriema']<>"0000-00-00")and($_SESSION['F_DataPriema']<>"00.00.0000") ){
		$find_sql = " DATE_FORMAT(jurnal.DataPriema, '%Y-%m-%d') = '".MyDate($_SESSION['F_DataPriema'])."' ";  
		$sql = $sql." and ".$find_sql ;	};
		
		
}
else
{
$sql=SELECT_jurnal;
};

	$page=($_GET['page']);
	$url = "find.php";
	Spisok($sql,$page,$url);

$i=($_GET['copy']);
SpisokNew( $i,"index.php");


?>
		</table>
		</td>
	</tr>
	</table>
</body>
</html>