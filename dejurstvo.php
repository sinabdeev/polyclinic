<?php include("inc/title.htm");?>
<table border="0" width="100%" style="border-width: 0px"><tr><td>
<form name="Form_money" method="POST" action="dejurstvo.php">
<br />
<br />
	<table width='60%' class="centr" cellSpacing="0" cellPadding="0" align="center" border="1">
		<tr><td align="center" colspan='13'>Выручка с дежурств 2008</td></tr>
		<tr>
			<td class="wapka" style='vertical-align: middle;'>Сотрудник</td>
			<td><img src="images/01.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/02.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/03.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/04.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/05.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/06.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/07.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/08.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/09.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/10.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/11.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/12.gif" alt="" width="24" height="72" border="0"></td>
		</tr>
<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");
require_once("mdl_my.php");
$sql=" SELECT   `NomerSotrudnika`,  `FIO_Sotrudnika` FROM   `sotrudniki` order by `FIO_Sotrudnika` ";
$result=execSQL($sql);
$rows=mysql_num_rows($result);
for($i=0;$i<$rows;$i++) {
	mysql_data_seek($result,$i);
	$arr_guest=mysql_fetch_array($result);
	echo "<tr>";
	echo "<td>".$arr_guest["FIO_Sotrudnika"]."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2008,1)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2008,2)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2008,3)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2008,4)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2008,5)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2008,6)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2008,7)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2008,8)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2008,9)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2008,10)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2008,11)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2008,12)."</td>";
	echo "</tr>";
};
?>
</table>	
<br />
<br />
<table width='60%' class="centr" cellSpacing="0" cellPadding="0" align="center" border="1">
		<tr><td align="center" colspan='13'>Выручка с дежурств 2009</td></tr>
		<tr>
			<td class="wapka" style='vertical-align: middle;'>Сотрудник</td>
			<td><img src="images/01.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/02.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/03.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/04.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/05.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/06.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/07.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/08.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/09.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/10.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/11.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/12.gif" alt="" width="24" height="72" border="0"></td>
		</tr>
<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");
require_once("mdl_my.php");
$sql=" SELECT   `NomerSotrudnika`,  `FIO_Sotrudnika` FROM   `sotrudniki` order by `FIO_Sotrudnika` ";
$result=execSQL($sql);
$rows=mysql_num_rows($result);
for($i=0;$i<$rows;$i++) {
	mysql_data_seek($result,$i);
	$arr_guest=mysql_fetch_array($result);
	echo "<tr>";
	echo "<td>".$arr_guest["FIO_Sotrudnika"]."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2009,1)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2009,2)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2009,3)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2009,4)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2009,5)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2009,6)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2009,7)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2009,8)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2009,9)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2009,10)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2009,11)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2009,12)."</td>";
	echo "</tr>";
};
?>
</table>
<br />
<br />
	<table width='60%' class="centr" cellSpacing="0" cellPadding="0" align="center" border="1">
		<tr><td align="center" colspan='13'>Выручка с дежурств 2010</td></tr>
		<tr>
			<td class="wapka" style='vertical-align: middle;'>Сотрудник</td>
			<td><img src="images/01.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/02.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/03.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/04.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/05.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/06.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/07.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/08.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/09.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/10.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/11.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/12.gif" alt="" width="24" height="72" border="0"></td>
		</tr>
<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");
require_once("mdl_my.php");
$sql=" SELECT   `NomerSotrudnika`,  `FIO_Sotrudnika` FROM   `sotrudniki` order by `FIO_Sotrudnika` ";
$result=execSQL($sql);
$rows=mysql_num_rows($result);
for($i=0;$i<$rows;$i++) {
	mysql_data_seek($result,$i);
	$arr_guest=mysql_fetch_array($result);
	echo "<tr>";
	echo "<td>".$arr_guest["FIO_Sotrudnika"]."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2010,1)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2010,2)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2010,3)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2010,4)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2010,5)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2010,6)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2010,7)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2010,8)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2010,9)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2010,10)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2010,11)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2010,12)."</td>";
	echo "</tr>";
};
?>
</table>


<br />
<br />
	<table width='60%' class="centr" cellSpacing="0" cellPadding="0" align="center" border="1">
		<tr><td align="center" colspan='13'>Выручка с дежурств 2011</td></tr>
		<tr>
			<td class="wapka" style='vertical-align: middle;'>Сотрудник</td>
			<td><img src="images/01.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/02.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/03.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/04.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/05.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/06.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/07.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/08.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/09.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/10.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/11.gif" alt="" width="24" height="72" border="0"></td>
			<td><img src="images/12.gif" alt="" width="24" height="72" border="0"></td>
		</tr>
<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");
require_once("mdl_my.php");
$sql=" SELECT   `NomerSotrudnika`,  `FIO_Sotrudnika` FROM   `sotrudniki` order by `FIO_Sotrudnika` ";
$result=execSQL($sql);
$rows=mysql_num_rows($result);
for($i=0;$i<$rows;$i++) {
	mysql_data_seek($result,$i);
	$arr_guest=mysql_fetch_array($result);
	echo "<tr>";
	echo "<td>".$arr_guest["FIO_Sotrudnika"]."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2011,1)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2011,2)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2011,3)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2011,4)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2011,5)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2011,6)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2011,7)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2011,8)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2011,9)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2011,10)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2011,11)."</td>";
	echo "<td>".ViruckaDejurstvoMes($arr_guest["NomerSotrudnika"],2011,12)."</td>";
	echo "</tr>";
};
?>
</table>


</form></td></tr></table></body></html>