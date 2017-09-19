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

	$sql=" SELECT   `NomerSotrudnika`,  `FIO_Sotrudnika` FROM   `sotrudniki` ";
	if ($order==1) {
		$sql=" SELECT   `NomerSotrudnika`,  `FIO_Sotrudnika` FROM   `sotrudniki` order by `FIO_Sotrudnika`";
	};
	if ($order==2) {
		$sql=" SELECT   `NomerSotrudnika`,  `FIO_Sotrudnika` FROM   `sotrudniki` order by `FIO_Sotrudnika` desc";
	};
	$result=execSQL($sql);
	$rows=mysql_num_rows($result);
	echo "<table class='centr' border=1 align=center>";
	echo "<tr class='wapka'><td class='wapka' align=center><B>Номер сотрудника</B></td>";
	echo "<td class='wapka' align=center><a class='shapka' href='sotrudniki.php?order=".(Invers($order))."'><B>ФИО сотрудника</B></a>";
	order($order);
	echo "</td>";
	echo "<td class='wapka' align=center><B>Удалить</B></td>";
	echo "<td class='wapka' align=center><B>Изменить</B></td></tr>";
	for($i=0;$i<$rows;$i++) {
		mysql_data_seek($result,$i);
		$arr_guest=mysql_fetch_array($result);
		echo "<form method=post action='edit_sotrudnik.php'>";
		echo "<input type=hidden name='update' value='".$arr_guest["NomerSotrudnika"]."'>";
		echo "<tr>";
		echo "<td><input class='pole_Nomer' type=text name='NomerSotrudnika' value='".$arr_guest["NomerSotrudnika"]."'></td>";
		echo "<td><input type=text name='FIO_Sotrudnika' value='".$arr_guest["FIO_Sotrudnika"]."'></td>";
		echo "<td><input class='knopka' type=submit name='submit_delete' value='Удалить'></td>";
		echo "<td><input class='knopka' type=submit name='submit_update' value='Изменить'></td>";
		echo "</tr>";
		echo "</form>";
	};
	echo "<form method=post action='add_sotrudnika.php'>";
	echo "<input type=hidden name='update' value=''>";
	echo "<tr>";
	echo "<td><input class='pole_Nomer' type=text name='NomerSotrudnika' value=''></td>";
	echo "<td><input type=text name='FIO_Sotrudnika' value=''></td>";
	echo "<td></td>";
	echo "<td><input class='knopka' type=submit name='submit_insert' value='Вставить'></td>";
	echo "</tr>";
	echo "</form>";
	echo "</table>";
	

	
	$a=  65;
	for ($i=$a;$i<150;$i++) {	
		$b=  25;
		echo "          c   =  ";
		
		$c = $i/$b;
		$d = div_c( $i,$b);
		
		echo $c;
		echo "          d   =  ";
		echo $d;
		echo " <br> ";
	}

?>
</td>
</tr>
</table>
</body>
</html>