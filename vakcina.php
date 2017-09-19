<?php include("inc/title.htm");?>
<table border='0' width='100%' style='border-width: 0px'>
<tr>
<td>

<table class='centr' border='1' align='center'>


<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");
require_once("mdl_my.php");

	
	$order=Nz($_GET['order']);
	
	$sql="SELECT `Nomer_vakcin`,`Name_vakcin` FROM `vakcini` ";
	if ($order==1) {
		$sql="SELECT `Nomer_vakcin`,`Name_vakcin` FROM `vakcini` Order by `Name_vakcin`";
	};
	if ($order==2) {
		$sql="SELECT `Nomer_vakcin`,`Name_vakcin` FROM `vakcini` Order by `Name_vakcin` desc";
	};

	$result=execSQL($sql);
	$rows=mysql_num_rows($result);



	echo "<tr class='wapka'><td class='wapka' align=center><B>Номер вакцины</B></td>";
	echo "<td class='wapka' align=center><a class='shapka' href='vakcina.php?order=".(Invers($order))."'><B>Вакцина</B></a>";
	order($order);
	echo "</td>";
	echo "<td class='wapka' align=center><B>Удалить</B></td>";
	echo "<td class='wapka' align=center><B>Изменить</B></td></tr>";
	for($i=0;$i<$rows;$i++) {
		mysql_data_seek($result,$i);
		$arr_guest=mysql_fetch_array($result);
		echo "<form method=post action='edit_vakcina.php'>";
		echo "<input type=hidden name='update' value='".$arr_guest["Nomer_vakcin"]."'>";
		echo "<tr>";
		echo "<td><input class='pole_Nomer' type=text name='Nomer_vakcin' value='".$arr_guest["Nomer_vakcin"]."'></td>";
		echo "<td><input type=text name='Name_vakcin' value='".$arr_guest["Name_vakcin"]."'></td>";
		echo "<td><input class='knopka' type=submit name='submit_delete' value='Удалить'></td>";
		echo "<td><input class='knopka' type=submit name='submit_update' value='Изменить'></td>";
		echo "</tr>";
		echo "</form>";
	};
?>

	<form method='post' action='add_vakcina.php'>
		<input type='hidden' name='update' value=''>
		<tr>
			<td><input class='pole_Nomer' type='text' name='Nomer_vakcin' value=''></td>
			<td><input  type='text' name='Name_vakcin' value=''></td>
			<td></td>
			<td><input class='knopka' type='submit' name='submit_insert' value='Вставить'></td>
		</tr>
	</form>

</table>


</td> </tr> </table> </body> </html>