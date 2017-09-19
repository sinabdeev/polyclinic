<?php
require_once("mdl_constants.php");
require_once("mdl_sql.php");

class vid_jivot
	{
		function get($value)
		{
			$sql="SELECT  `Nomer_vida_jivot`,   `Name_jivot` FROM    `vid_jivot` order by Name_jivot  ;";
			$result=execSQL($sql);
			$rows=mysql_num_rows($result);
			echo "<select class='jivot' size='1' name='VidJivot'>";
			for($i=0;$i<$rows;$i++) {
				mysql_data_seek($result,$i);
				$arr_guest1=mysql_fetch_array($result);
				if ($value<>$arr_guest1["Nomer_vida_jivot"]) {
					echo "<option   value='".$arr_guest1["Nomer_vida_jivot"]."'>".$arr_guest1["Name_jivot"]."</option>";				  
				}
				else{
					echo "<option selected value='".$arr_guest1["Nomer_vida_jivot"]."'>".$arr_guest1["Name_jivot"]."</option>";				  
				};
			};
			echo "</select>";
		}
	}	

class Nomer_povtornogo_priema
	{
		function get($value)
		{
			$rows=20;

			echo "<select class='Nomer' size='1' name='Nomer_povtornogo_priema'>";
			for($i=1;$i<$rows;$i++) {
				  
				  if ($value<>$i) {
				  echo "<option   value=$i>".$i."</option>";				  
				  }
				  else {
				  echo "<option selected value=$i>".$i."</option>";				  
				  };
			};
			echo "</select>";
		}
	}	

class sotrudnik
	{
		function get($value)
		{
			$sql=" SELECT   `NomerSotrudnika`,  `FIO_Sotrudnika` FROM   `sotrudniki`  ";
			$result=execSQL($sql);
			$rows=mysql_num_rows($result);
			echo "<select class='fio' size='1' name='sotrudnik'>";
			echo "<option   value='0'>"."<нет>"."</option>";				  
			for($i=0;$i<$rows;$i++) {
				mysql_data_seek($result,$i);
				$arr_guest=mysql_fetch_array($result);
				if ($value<>$arr_guest["NomerSotrudnika"]) {
					echo "<option   value='".$arr_guest["NomerSotrudnika"]."'>".$arr_guest["FIO_Sotrudnika"]."</option>";				  
				}
				else{
					echo "<option selected value='".$arr_guest["NomerSotrudnika"]."'>".$arr_guest["FIO_Sotrudnika"]."</option>";				  
				};
			};
			echo "</select>";
		}
	}	

function region($value)
{
			$sql="SELECT NAME, CODE, CONCAT(NAME, '  ',  SOCR, '.') FULL FROM street order by FULL;";
			$result=execSQL($sql);
			$rows=mysql_num_rows($result);
			echo "<select class='ulica' size='1' name='Ulica'>";
			echo "<option   value='0'>"." "."</option>";				  			
			for($i=0;$i<$rows;$i++) {
				mysql_data_seek($result,$i);
				$arr_guest=mysql_fetch_array($result);
				if ($value<>$arr_guest["CODE"]) {
					echo "<option   value='".$arr_guest["CODE"]."'>".$arr_guest["FULL"]."</option>";				  
				}
				else{
					echo "<option selected value='".$arr_guest["CODE"]."'>".$arr_guest["FULL"]."</option>";				  
				};
			};
			echo "</select>";
}

function Sex($value)
{
			echo "<select class='sex' size='1' name='sex'>";
				if ($value<>1) {
					echo "<option          value='1'>М</option>";				  
					echo "<option selected value='0'>Ж</option>";				  
				}
				else{
					echo "<option selected value='1'>М</option>";				  
					echo "<option          value='0'>Ж</option>";				  
				};
			echo "</select>";
			
}

function Kassa($value)
{
			echo "<select class='Kassa' size='1' name='Kassa'>";
				if ($value<>1) {
					echo "<option          value='1'>Да</option>";				  
					echo "<option selected value='0'>Нет</option>";				  
				}
				else{
					echo "<option selected value='1'>Да</option>";				  
					echo "<option          value='0'>Нет</option>";				  
				};
			echo "</select>";
}

function diagnoz1($value)
{
			$sql="SELECT `Nomer_diagnoza`,`Name_diagnoza` FROM `diagnozi` order by Name_diagnoza ;";
			$result=execSQL($sql);
			$rows=mysql_num_rows($result);
			echo "<select class='diagnoz' size='1' name='diagnoz1'>";
			echo "<option value='0'>&nbsp;</option>";				  
			for($i=0;$i<$rows;$i++) {
				mysql_data_seek($result,$i);
				$arr_guest=mysql_fetch_array($result);
				if ($value<>$arr_guest["Nomer_diagnoza"]) {
					echo "<option   value='".$arr_guest["Nomer_diagnoza"]."'>".$arr_guest["Name_diagnoza"]."</option>";				  
				}
				else{
					echo "<option selected value='".$arr_guest["Nomer_diagnoza"]."'>".$arr_guest["Name_diagnoza"]."</option>";				  
				};
			};
			echo "</select>";
}

function diagnoz2($value)
{
			$sql="SELECT `Nomer_diagnoza`,`Name_diagnoza` FROM `diagnozi` order by Name_diagnoza ;";
			$result=execSQL($sql);
			$rows=mysql_num_rows($result);
			echo "<select class='diagnoz' size='1' name='diagnoz2'>";
			echo "<option value='0'>&nbsp;</option>";				  
			for($i=0;$i<$rows;$i++) {
				mysql_data_seek($result,$i);
				$arr_guest=mysql_fetch_array($result);
				if ($value<>$arr_guest["Nomer_diagnoza"]) {
					echo "<option   value='".$arr_guest["Nomer_diagnoza"]."'>".$arr_guest["Name_diagnoza"]."</option>";				  
				}
				else{
					echo "<option selected value='".$arr_guest["Nomer_diagnoza"]."'>".$arr_guest["Name_diagnoza"]."</option>";				  
				};
			};
			echo "</select>";
}

function diagnoz3($value)
{
			$sql="SELECT `Nomer_diagnoza`,`Name_diagnoza` FROM `diagnozi` order by Name_diagnoza ;";
			$result=execSQL($sql);
			$rows=mysql_num_rows($result);
			echo "<select class='diagnoz' size='1' name='diagnoz3'>";
			echo "<option value='0'>&nbsp;</option>";				  
			for($i=0;$i<$rows;$i++) {
				mysql_data_seek($result,$i);
				$arr_guest=mysql_fetch_array($result);
				if ($value<>$arr_guest["Nomer_diagnoza"]) {
					echo "<option   value='".$arr_guest["Nomer_diagnoza"]."'>".$arr_guest["Name_diagnoza"]."</option>";				  
				}
				else{
					echo "<option selected value='".$arr_guest["Nomer_diagnoza"]."'>".$arr_guest["Name_diagnoza"]."</option>";				  
				};
			};
			echo "</select>";
}

function diagnoz4($value)
{
			$sql="SELECT `Nomer_diagnoza`,`Name_diagnoza` FROM `diagnozi` order by Name_diagnoza ;";
			$result=execSQL($sql);
			$rows=mysql_num_rows($result);
			echo "<select class='diagnoz' size='1' name='diagnoz4'>";
			echo "<option value='0'>&nbsp;</option>";				  			
			for($i=0;$i<$rows;$i++) {
				mysql_data_seek($result,$i);
				$arr_guest=mysql_fetch_array($result);
				if ($value<>$arr_guest["Nomer_diagnoza"]) {
					echo "<option   value='".$arr_guest["Nomer_diagnoza"]."'>".$arr_guest["Name_diagnoza"]."</option>";				  
				}
				else{
					echo "<option selected value='".$arr_guest["Nomer_diagnoza"]."'>".$arr_guest["Name_diagnoza"]."</option>";				  
				};
			};
			echo "</select>";
}

function diagnoz5($value)
{
			$sql="SELECT `Nomer_diagnoza`,`Name_diagnoza` FROM `diagnozi` order by Name_diagnoza ;";
			$result=execSQL($sql);
			$rows=mysql_num_rows($result);
			echo "<select class='diagnoz' size='1' name='diagnoz5'>";
			echo "<option value='0'>&nbsp;</option>";				  			
			for($i=0;$i<$rows;$i++) {
				mysql_data_seek($result,$i);
				$arr_guest=mysql_fetch_array($result);
				if ($value<>$arr_guest["Nomer_diagnoza"]) {
					echo "<option   value='".$arr_guest["Nomer_diagnoza"]."'>".$arr_guest["Name_diagnoza"]."</option>";				  
				}
				else{
					echo "<option selected value='".$arr_guest["Nomer_diagnoza"]."'>".$arr_guest["Name_diagnoza"]."</option>";				  
				};
			};
			echo "</select>";
}


function vakcina2($value)
{
			$sql="SELECT   `Nomer_vakcin`,   `Name_vakcin` FROM    `vakcini` order by Name_vakcin ";
			$result=execSQL($sql);
			$rows=mysql_num_rows($result);
			echo "<select class='diagnoz' size='1' name='vakcina2'>";
			echo "<option value='0'>&nbsp;</option>";				  			
			for($i=0;$i<$rows;$i++) {
				mysql_data_seek($result,$i);
				$arr_guest=mysql_fetch_array($result);
				if ($value<>$arr_guest["Nomer_vakcin"]) {
					echo "<option   value='".$arr_guest["Nomer_vakcin"]."'>".$arr_guest["Name_vakcin"]."</option>";				  
				}
				else{
					echo "<option selected value='".$arr_guest["Nomer_vakcin"]."'>".$arr_guest["Name_vakcin"]."</option>";				  
				};
			};
			echo "</select>";
}

function vakcina3($value)
{
			$sql="SELECT   `Nomer_vakcin`,   `Name_vakcin` FROM    `vakcini` order by Name_vakcin ";
			$result=execSQL($sql);
			$rows=mysql_num_rows($result);
			echo "<select class='diagnoz' size='1' name='vakcina3'>";
			echo "<option value='0'>&nbsp;</option>";				  			
			for($i=0;$i<$rows;$i++) {
				mysql_data_seek($result,$i);
				$arr_guest=mysql_fetch_array($result);
				if ($value<>$arr_guest["Nomer_vakcin"]) {
					echo "<option   value='".$arr_guest["Nomer_vakcin"]."'>".$arr_guest["Name_vakcin"]."</option>";				  
				}
				else{
					echo "<option selected value='".$arr_guest["Nomer_vakcin"]."'>".$arr_guest["Name_vakcin"]."</option>";				  
				};
			};
			echo "</select>";
}

function vakcina4($value)
{
			$sql="SELECT   `Nomer_vakcin`,   `Name_vakcin` FROM    `vakcini` order by Name_vakcin ";
			$result=execSQL($sql);
			$rows=mysql_num_rows($result);
			echo "<select class='diagnoz' size='1' name='vakcina4'>";
			echo "<option value='0'>&nbsp;</option>";				  			
			for($i=0;$i<$rows;$i++) {
				mysql_data_seek($result,$i);
				$arr_guest=mysql_fetch_array($result);
				if ($value<>$arr_guest["Nomer_vakcin"]) {
					echo "<option   value='".$arr_guest["Nomer_vakcin"]."'>".$arr_guest["Name_vakcin"]."</option>";				  
				}
				else{
					echo "<option selected value='".$arr_guest["Nomer_vakcin"]."'>".$arr_guest["Name_vakcin"]."</option>";				  
				};
			};
			echo "</select>";
}

function vakcina5($value)
{
			$sql="SELECT   `Nomer_vakcin`,   `Name_vakcin` FROM    `vakcini` order by Name_vakcin ";
			$result=execSQL($sql);
			$rows=mysql_num_rows($result);
			echo "<select class='diagnoz' size='1' name='vakcina5'>";
			echo "<option value='0'>&nbsp;</option>";				  			
			for($i=0;$i<$rows;$i++) {
				mysql_data_seek($result,$i);
				$arr_guest=mysql_fetch_array($result);
				if ($value<>$arr_guest["Nomer_vakcin"]) {
					echo "<option   value='".$arr_guest["Nomer_vakcin"]."'>".$arr_guest["Name_vakcin"]."</option>";				  
				}
				else{
					echo "<option selected value='".$arr_guest["Nomer_vakcin"]."'>".$arr_guest["Name_vakcin"]."</option>";				  
				};
			};
			echo "</select>";
}

function vakcina1($value)
{
			$sql="SELECT   `Nomer_vakcin`,   `Name_vakcin` FROM    `vakcini` order by Name_vakcin ";
			$result=execSQL($sql);
			$rows=mysql_num_rows($result);
			echo "<select class='diagnoz' size='1' name='vakcina1'>";
			echo "<option value='0'>&nbsp;</option>";				  			
			for($i=0;$i<$rows;$i++) {
				mysql_data_seek($result,$i);
				$arr_guest=mysql_fetch_array($result);
				if ($value<>$arr_guest["Nomer_vakcin"]) {
					echo "<option   value='".$arr_guest["Nomer_vakcin"]."'>".$arr_guest["Name_vakcin"]."</option>";				  
				}
				else{
					echo "<option selected value='".$arr_guest["Nomer_vakcin"]."'>".$arr_guest["Name_vakcin"]."</option>";				  
				};
			};
			echo "</select>";
}





function Kind($value)
{
			$sql="SELECT `Nomer_kind_jivot`, `Name_kind_jivot` FROM `kind_jivot` order by Name_kind_jivot  ";
			$result=execSQL($sql);
			$rows=mysql_num_rows($result);
			echo "<select class='kind_jivot' size='1' name='kind_jivot'>";
			for($i=0;$i<$rows;$i++) {
				mysql_data_seek($result,$i);
				$arr_guest=mysql_fetch_array($result);
				if ($value<>$arr_guest["Nomer_kind_jivot"]) {
					echo "<option   value='".$arr_guest["Nomer_kind_jivot"]."'>".$arr_guest["Name_kind_jivot"]."</option>";				  
				}
				else{
					echo "<option selected value='".$arr_guest["Nomer_kind_jivot"]."'>".$arr_guest["Name_kind_jivot"]."</option>";				  
				};
			};
			echo "</select>";
}

?>