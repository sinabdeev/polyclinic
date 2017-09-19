<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");
require_once("mdl_html.php");



function forma_karta($name, $arr_guest, $i, $i_start, $action, $url, $page)
{
	if ($i_start ==$i){
		echo "<form name='".$name.(0)."' method=post action='".$action."'>";
	}
	else {
		echo "<form name='".$name.$i."' method=post action='".$action."'>";
	};
		
		echo "<tr>";
		echo "<td colspan='7'>";
			echo "<table border='0' align='center' class='centr' cellpadding='1' cellspacing='0'>";
			echo "<tr>";
				echo "<td><a name='karta".$i."'>№</a></td>";
				td("","Дата приёма");
				td("","Дежурство");
				td("","№№");
				td("","Вид животного");
				td("","Пол");
				td("","Порода");
				td("","Кличка");
				td("","Возраст");
			echo "</tr>";
		
			echo "<input type=hidden name='update' value='".$arr_guest["Nomer"]."'>";
			echo "<input type=hidden name='karta' value='".$i."'>";
			
			echo "<input type=hidden name='page' value='".$page."'>";
			echo "<input type=hidden name='url' value='".$url."'>";
			echo "<tr>";
				echo "<td><input class='pole_Nomer' type=text name='Nomer' value='".$arr_guest["Nomer"]."'></td>";
				echo "<td><input class='pole_Data' type=text name='DataPriema' value='".$arr_guest["DataPriema"]."'></td>";
				echo "<td>";
				$ex2 = new sotrudnik();
				$ex2->get($arr_guest["NomerSotrudnika"]);
				echo "</td>";  
				echo "<td>";
				$ex1 = new Nomer_povtornogo_priema();
				$ex1->get($arr_guest["NomerPovtornogoPriema"]);
				echo "</td>";  
				echo "<td>";
				$ex = new vid_jivot();
				$ex->get($arr_guest["Nomer_vida_jivot"]);
				echo "</td>";  
				echo "<td>";
				sex($arr_guest["Pol"]);
				echo "</td>";

				echo "<td>";
				Kind($arr_guest["kind"]);
				echo "</td>";
				
				echo "<td><input type=text name='Klichka' value='".$arr_guest["Klichka"]."'></td>";
				echo "<td><input class='Vozrast' type=text name='Vozrast' value='".$arr_guest["Vozrast"]."'></td>";
			echo "</tr>";
			echo "</table>";
		echo "</td>";
		echo "</tr>";

	  



	
	echo "<tr>";
	echo "<td colspan='7'>";
		echo "<table border='0' align='center' class='centr' cellpadding='1' cellspacing='1'>";	
			echo "<tr>";
			
			
			if ($action =="edit.php") {
				echo "<td align=left style='text-align:left;'>&nbsp;ул.&nbsp;<input type=text class='ulica' name='ulica' value='".$arr_guest["Ulica"]."'></td>";
			};
			
			if ($action =="add.php") {
				echo "<td align=left style='text-align:left;'>&nbsp;ул.&nbsp;";
				region($arr_guest["KodUlica"]);
				echo"</td>";
			};
			
			echo "<td>&nbsp;дом&nbsp;<input type=text class='Dom' name='Dom' value='".$arr_guest["Dom"]."'></td>";
			echo "<td>&nbsp;кв.&nbsp;<input type=text class='Flat' name='kv' value='".$arr_guest["kv"]."'></td>";
			echo "<td>&nbsp;тел.&nbsp;<input type=text name='Phone' value='".$arr_guest["Phone"]."'></td>";
			echo "<td>&nbsp;ФИО&nbsp;<input type=text class='FIO' name='klient' value='".$arr_guest["klient"]."'></td>";
			echo "</tr>";
		echo "</table>";
	echo "</td>";
	echo "</tr>";
		
		
	echo "<tr>";
	echo "<td colspan='7'>";
		echo "<table border='0' align='center' class='centr' cellpadding='1' cellspacing='0'>";	
			echo "<tr>";
				echo "<td colspan='3' align=left style='text-align:left;'>&nbsp;ул.&nbsp;<input type=text class='ulica' name='Ulica2' value='".$arr_guest["Ulica2"]."'>&nbsp;&nbsp;Причина обращения</td>";
				echo "<td colspan='4'  align=center>Лечение</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td  colspan='3' ><textarea class='Pri4ina' name='Prichina' rows='3' cols='48'>".$arr_guest["Prichina"]."</textarea></td>";
				echo "<td  colspan='4' ><textarea class='Le4enie' name='Lechenie' rows='3' cols='70'>".$arr_guest["Lechenie"]."</textarea></td>";
			echo "</tr>";
		echo "</table>";
	echo "</td>";
	echo "</tr>";



	echo "<tr>";
	echo "<td colspan='7' align='right'>";
		echo "<table border='0' align='center' class='centr' cellpadding='1' cellspacing='0'>";	
			echo "<tr>";
				echo "<td width='50' align=center>Диагнозы</td>";

				echo "<td>";
				diagnoz1($arr_guest["Nomer_diagnoza1"]);
				echo "</td>";

				echo "<td>";
				diagnoz2($arr_guest["Nomer_diagnoza2"]);
				echo "</td>";

				echo "<td>";
				diagnoz3($arr_guest["Nomer_diagnoza3"]);
				echo "</td>";

				echo "<td>";
				diagnoz4($arr_guest["Nomer_diagnoza4"]);
				echo "</td>";

				echo "<td>";
				diagnoz5($arr_guest["Nomer_diagnoza5"]);
				echo "</td>";
				
			echo "</tr>";
			echo "<tr>";
				echo "<td width='50'  align=center>Вакцины</td>";

				echo "<td>";
				vakcina1($arr_guest["Nomer_vakcin1"]);
				echo "</td>";

				echo "<td>";
				vakcina2($arr_guest["Nomer_vakcin2"]);
				echo "</td>";

				echo "<td>";
				vakcina3($arr_guest["Nomer_vakcin3"]);
				echo "</td>";

				echo "<td>";
				vakcina4($arr_guest["Nomer_vakcin4"]);
				echo "</td>";

				echo "<td>";
				vakcina5($arr_guest["Nomer_vakcin5"]);
				echo "</td>";
				
			echo "</tr>";
		echo "</table>";
	echo "</td>";
	echo "</tr>";
	

	
	
	echo "<tr>";
	echo "<td colspan='7'>";
		echo "<table border='0' align='center' class='centr' cellpadding='1' cellspacing='0'>";	
			echo "<tr>";
				echo "<td align=center>Дата П приёма</td>";
				echo "<td align=center>Сумма</td>";
				echo "<td align=center>Долг</td>";
				echo "<td align=center>".chr(34)."К".chr(34)."</td>";
			echo "</tr>";

			echo "<tr >";
				echo "<td><input class='pole_Data' type=text style='text-align:center;cursor:pointer' onclick='kalendaR(event)' name='DataPovtornogoPriema' value='".$arr_guest["DataPovtornogoPriema"]."'></td>";
				echo "<td><input type=text class='Symma' name='Symma' value='".$arr_guest["Symma"]."'></td>";
				echo "<td><input type=text class='Dolg' name='Dolg' value='".$arr_guest["Dolg"]."'></td>";
				echo "<td>";
				Kassa($arr_guest["Kassa"]);
				echo "</td>";
				
				if ($action =="edit.php") {
					echo "<td><input class='knopka' type=submit name='submit_delete' value='Удалить'></td>";
					if ( $url == "index.php"  or $url == "find.php") {
						echo "<td><input class='knopka' type=submit name='submit_update' value='Изменить'></td>";	
					}
					if ( $url == "remember.php")  {
						echo "<td><input class='knopka' type=submit name='submit_clear' value='Очистить'></td>";	
					};
					
					
					echo "<td><input class='knopka' type=submit name='submit_copy' value='Копировать'></td>";
				};
				if ($action =="add.php") {
					echo "<td><input class='knopka' type=submit name='submit_insert' value='Вставить'></td>";
				};

				
			echo "</tr>";
		echo "</table>";
	echo "</td>";
	echo "</tr>";

	
	
	
	echo "</form>";

}



function Spisok($sql, $page, $url)
{

	$page = Nz($page);
	if ($page==0){
		$page=1;
	};
	$result=execSQL($sql);
	$rows=mysql_num_rows($result);
	
	
	if (div_c($rows, Max_Rows_Page)*Max_Rows_Page < $rows)
	{
		$count_page = div_c($rows, Max_Rows_Page) + 1;
	}
	else {
		$count_page = div_c($rows, Max_Rows_Page) ;
	};
	echo " &nbsp;";

	$for_i = ($count_page-200+1);
	If ($for_i<1 ) { 
		$for_i = 1;
	};
	
	for ($i=$for_i; $i<=$count_page; $i++){
		if ($i == $page){
			echo "<a class='navigator2' href = '".$url."?page=".$i."'>".$i."</a>";
		}
		else {
			echo "<a class='navigator' href = '".$url."?page=".$i."'>".$i."</a>";
		}		;
		echo " &nbsp;";
	};
	
	$i_start = ($page-1)*Max_Rows_Page;
	$i_end = ($page-1)*Max_Rows_Page + Max_Rows_Page;
	if ($i_end > $rows ) {
		$i_end = $rows;
		
	};
	
	for($i=$i_start;$i<$i_end;$i++) {
		mysql_data_seek($result,$i);
		$arr_guest=mysql_fetch_array($result);
		forma_karta("MyForm",$arr_guest, $i, $i_start, "edit.php", $url, $page);
		Razdelitel($page, $url);
	};
}

function SpisokNew($i, $url)
{

	
	if ($i>-1) {
		$sql = SELECT_jurnal;
		$sql = $sql." where Nomer = ".$i;
		$result=execSQL($sql);
		$rows=mysql_num_rows($result);
		mysql_data_seek($result,0);
		$arr_guest=mysql_fetch_array($result);	
	};
	forma_karta("NewItem",$arr_guest, "-1", "99","add.php", $url,1);


}

?>