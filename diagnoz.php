<?php include("inc/title.htm");?>
<table border='0' width='100%' style='border-width: 0px'> <tr> <td> 
<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");

	$order=Nz($_GET['order']);
	$sql="SELECT `Nomer_diagnoza`, `Name_diagnoza` FROM `diagnozi`";
	if ($order==1) {
		$sql="SELECT `Nomer_diagnoza`, `Name_diagnoza` FROM `diagnozi` order by `Name_diagnoza`";
	};
	if ($order==2) {
		$sql="SELECT `Nomer_diagnoza`, `Name_diagnoza` FROM `diagnozi` order by `Name_diagnoza` desc";
	};
	$result=execSQL($sql);
	$rows=mysql_num_rows($result);
	
	echo "<table class='centr' border='1' align='center'>";
	echo "<tr class='wapka'>";
	echo "<td class='wapka' align=center><B>Номер диагноза</B></td>";
	echo "<td class='wapka' align=center><a class='shapka' href='diagnoz.php?order=".(Invers($order))."'><B>Диагноз</B></a>";
	order($order);
	echo "</td>";
	echo "<td class='wapka' align=center><B>Удалить</B></td>";
	echo "<td class='wapka' align=center><B>Изменить</B></td>";
	echo "</tr>";
	
	
	for($i=0;$i<$rows;$i++) {
		mysql_data_seek($result,$i);
		$arr_guest=mysql_fetch_array($result);
		echo "<form method='post' action='edit_diagnoz.php'>";
		echo "<input type=hidden name='update' value='".$arr_guest["Nomer_diagnoza"]."'>";
		echo "<tr>";
		echo "<td><input class='pole_Nomer' type=text name='Nomer_diagnoza' value='".$arr_guest["Nomer_diagnoza"]."'></td>";
		echo "<td><input type=text name='Name_diagnoza' value='".$arr_guest["Name_diagnoza"]."'></td>";
		echo "<td><input class='knopka' type=submit name='submit_delete' value='Удалить'></td>";
		echo "<td><input class='knopka' type=submit name='submit_update' value='Изменить'></td>";
		echo "</tr>";
		echo "</form>";

	};
?>

	<form method='post' action='add_diagnoz.php'>
		<tr>
			<td><input class='pole_Nomer' type='text' name='Nomer_diagnoza' value=''></td>
			<td><input  type='text' name='Name_diagnoza' value=''></td>
			<td></td>
			<td><input class='knopka' type='submit' name='submit_insert' value='Вставить'></td>
		</tr>
	</form>
</table>
</td></tr></table></body></html>