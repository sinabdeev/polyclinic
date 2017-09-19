<?php include("inc/title.htm");?>
<table border="0" width="100%" style="border-width: 0px">
<tr>
<td>

<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");

	$order=Nz($_GET['order']);


	$sql="SELECT `Nomer_kind_jivot`, `Name_kind_jivot` FROM `kind_jivot`";
	if ($order==1) {
		$sql="SELECT `Nomer_kind_jivot`, `Name_kind_jivot` FROM `kind_jivot` order by `Name_kind_jivot`";
	};
	if ($order==2) {
		$sql="SELECT `Nomer_kind_jivot`, `Name_kind_jivot` FROM `kind_jivot` order by `Name_kind_jivot` desc";
	};
	$result=execSQL($sql);
	$rows=mysql_num_rows($result);
	echo "<table class='centr' border=1 align=center>";
	echo "<tr class='wapka'><td class='wapka' align=center><B>Номер породы животного</B></td>";
	echo "<td class='wapka' align=center><a class='shapka' href='kind_jivot.php?order=".(Invers($order))."'><B>Порода животного</B></a>";
	order($order);
	echo "</td>";

	echo "<td class='wapka' align=center><B>Удалить</B></td>";
	echo "<td class='wapka' align=center><B>Изменить</B></td></tr>";
	for($i=0;$i<$rows;$i++) {
		mysql_data_seek($result,$i);
		$arr_guest=mysql_fetch_array($result);
		echo "<form method=post action='edit_kind_jivot.php'>";
		echo "<input type=hidden name='update' value='".$arr_guest["Nomer_kind_jivot"]."'>";
		echo "<tr>";
		echo "<td><input class='pole_Nomer' type=text name='Nomer_kind_jivot' value='".$arr_guest["Nomer_kind_jivot"]."'></td>";
		echo "<td><input type=text name='Name_kind_jivot' value='".$arr_guest["Name_kind_jivot"]."'></td>";
		echo "<td><input class='knopka' type=submit name='submit_delete' value='Удалить'></td>";
		echo "<td><input class='knopka' type=submit name='submit_update' value='Изменить'></td>";
		echo "</tr>";
		echo "</form>";
	};
	echo "<form method=post action='add_kind_jivot.php'>";
	echo "<input type=hidden name='update' value=''>";
	echo "<tr>";
	echo "<td><input class='pole_Nomer' type=text name='Nomer_kind_jivot' value=''></td>";
	echo "<td><input  type=text name='Name_kind_jivot' value=''></td>";
	echo "<td></td>";
	echo "<td><input class='knopka' type=submit name='submit_insert' value='Вставить'></td>";
	echo "</tr>";
	echo "</form>";
	echo "</table>";
?>

</td>
</tr>
</table>
</body>
</html>