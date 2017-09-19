<?php include("inc/title.htm");?>
<div align="center">
<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_my.php");
require_once("mdl_sql.php");

	if($_POST['submit_insert']<>"") 
	{
		$s=MyDate($_POST['DataPovtornogoPriema']);
		$sql="INSERT INTO jurnal ( DataPriema, NomerSotrudnika, NomerPovtornogoPriema, Nomer_vida_jivot, DataPovtornogoPriema, kind , Klichka                , Pol              , Vozrast              , Phone                , Prichina                , Lechenie                , Symma              , Dolg              , Kassa ,                                         `Dom`,               `kv`,                        `klient`,              `Ulica`,  `Ulica2`,   Nomer_diagnoza1, Nomer_diagnoza2, Nomer_diagnoza3, Nomer_diagnoza4, Nomer_diagnoza5, Nomer_vakcin1, Nomer_vakcin2, Nomer_vakcin3, Nomer_vakcin4, Nomer_vakcin5  )";
		$s_value = " VALUE (            NOW(), ".$_POST['sotrudnik'].", ".$_POST['Nomer_povtornogo_priema'].", ".$_POST['VidJivot'].", '".$s."'            ,  ".$_POST['kind_jivot'].", '".$_POST['Klichka']."', ".$_POST['sex'].", ".$_POST['Vozrast'].", '".$_POST['Phone']."', '".$_POST['Prichina']."', '".$_POST['Lechenie']."', ".$_POST['Symma'].", ".$_POST['Dolg'].", ".$_POST['Kassa'].", ".$_POST['Dom'].", ".$_POST['kv'].", '".$_POST['klient']."', '".$_POST['Ulica']."', '".Nz_str($_POST['Ulica2'])."', ".$_POST['diagnoz1'].", ".$_POST['diagnoz2'].", ".$_POST['diagnoz3'].", ".$_POST['diagnoz4'].", ".$_POST['diagnoz5'].", ".$_POST['vakcina1'].", ".$_POST['vakcina2'].", ".$_POST['vakcina3'].", ".$_POST['vakcina4'].", ".$_POST['vakcina5']." )";
		$sql_all = $sql ."". $s_value;
		//echo $sql_all;
		$result=execSQL($sql_all);		
		$sql = "select * from jurnal";
		$result=execSQL($sql);
		$rows=mysql_num_rows($result);
		$r = $rows-1;
	};
	if (div_c($rows, Max_Rows_Page)*Max_Rows_Page < $rows)
	{
		$count_page = div_c($rows, Max_Rows_Page) + 1;
	}
	else {
		$count_page = div_c($rows, Max_Rows_Page) ;
	};
	$url = $_POST['url'];
	ProgressBar("".$url."?page=".$count_page."#karta".$r."");
?>
</div>
</body>
</html>