<?php include("inc/title.htm");?>
<div align="center">
<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_my.php");
require_once("mdl_sql.php");

	if($_POST['submit_update']<>"") 
	{
		$s=MyDate($_POST['DataPovtornogoPriema']);
		$sql="update jurnal set ";
		if (($s<>"-0-00")and($s<>"-0-2008"))	{
			$sql_col = "NomerSotrudnika=".$_POST['sotrudnik'].", NomerPovtornogoPriema=".$_POST['Nomer_povtornogo_priema'].", Nomer_vida_jivot=".$_POST['VidJivot'].", DataPovtornogoPriema='".$s."', kind = ".$_POST['kind_jivot'].", Klichka='".$_POST['Klichka']."', Pol=".$_POST['sex']." , Vozrast=".$_POST['Vozrast']." , Phone='".$_POST['Phone']."' , Ulica2='".Nz_str($_POST['Ulica2'])."' , Prichina='".$_POST['Prichina']."' , Lechenie='".$_POST['Lechenie']."' , Symma=".$_POST['Symma']." , Dolg= ".$_POST['Dolg'].", Kassa=".$_POST['Kassa']." , `Dom`=".$_POST['Dom'].", `kv`=".$_POST['kv'].", `klient`='".$_POST['klient']."', `Nomer_diagnoza1`=".$_POST['diagnoz1'].", `Nomer_diagnoza2`=".$_POST['diagnoz2'].", `Nomer_diagnoza3`=".$_POST['diagnoz3'].", `Nomer_diagnoza4`=".$_POST['diagnoz4'].", `Nomer_diagnoza5`=".$_POST['diagnoz5']."  , `Nomer_vakcin1`=".$_POST['vakcina1'].", `Nomer_vakcin2`=".$_POST['vakcina2'].", `Nomer_vakcin3`=".$_POST['vakcina3'].", `Nomer_vakcin4`=".$_POST['vakcina4'].", `Nomer_vakcin5`=".$_POST['vakcina5']."  ";
		}
		else	{
			$sql_col = "NomerSotrudnika=".$_POST['sotrudnik'].", NomerPovtornogoPriema=".$_POST['Nomer_povtornogo_priema'].", Nomer_vida_jivot=".$_POST['VidJivot'].", kind = ".$_POST['kind_jivot'].", Klichka='".$_POST['Klichka']."', Pol=".$_POST['sex']." , Vozrast=".$_POST['Vozrast']." , Phone='".$_POST['Phone']."' , Prichina='".$_POST['Prichina']."' , Ulica2='".Nz_str($_POST['Ulica2'])."' , Lechenie='".$_POST['Lechenie']."' , Symma=".$_POST['Symma']." , Dolg= ".$_POST['Dolg'].", Kassa=".$_POST['Kassa']." , `Dom`=".$_POST['Dom'].", `kv`=".$_POST['kv'].", `klient`='".$_POST['klient']."', `Nomer_diagnoza1`=".$_POST['diagnoz1'].", `Nomer_diagnoza2`=".$_POST['diagnoz2'].", `Nomer_diagnoza3`=".$_POST['diagnoz3'].", `Nomer_diagnoza4`=".$_POST['diagnoz4'].", `Nomer_diagnoza5`=".$_POST['diagnoz5']."  , `Nomer_vakcin1`=".$_POST['vakcina1'].", `Nomer_vakcin2`=".$_POST['vakcina2'].", `Nomer_vakcin3`=".$_POST['vakcina3'].", `Nomer_vakcin4`=".$_POST['vakcina4'].", `Nomer_vakcin5`=".$_POST['vakcina5']." ";
		};
		$sql_where = " where (Nomer=".$_POST['Nomer'].")";
		$url = $_POST['url'];
		$result=execSQL($sql.$sql_col.$sql_where);
//		echo $sql.$sql_col.$sql_where;
		ProgressBar("".$url."?page=".$_POST['page']."#karta".$_POST['karta']."");
	};
	if($_POST['submit_delete']<>"") 
	{
		$sql="delete from jurnal where Nomer = ".$_POST['Nomer']."";
		$result=execSQL($sql);
		$karta = $_POST['karta'];
		$karta = $karta - 1;
		$url = $_POST['url'];
		$page = div_c($karta+1,Max_Rows_Page);
		ProgressBar("".$url."?page=".$page."#karta".$karta."");
	};

	if($_POST['submit_clear']<>"") 
	{
		$sql="update jurnal set ";
		$sql_col = "DataPovtornogoPriema='".(0)."'";
		$sql_where = " where (Nomer=".$_POST['Nomer'].")";
		$result=execSQL($sql.$sql_col.$sql_where);
		$karta = $_POST['karta'];
		$url = $_POST['url'];
		$karta = $karta - 1;
		$page = div_c($karta+1,Max_Rows_Page);
		ProgressBar("".$url."?page=".$page."#karta".$karta."");
	};
	
	
	if($_POST['submit_copy']<>"") 
	{
		$url = $_POST['url'];
		
		ProgressBar("".$url."?copy=".$_POST['Nomer']."".chr(38)."page=".$_POST['page']."#karta-1");
	};

	
?>
</div> </body> </html>