<?php include("inc/title.htm");?>
<table border='0' width='100%' style='border-width: 0px'>
<tr>
<td>

<form name='Form_money' method='POST' action='money.php'>
	<table class='centr' cellSpacing='0' cellPadding='0' align='center' border='1'>
		<tr>
			<td colspan='2'>
			<p align="center">Общая выручка</td>
		</tr>
		<tr>
			<td>Дата С</span></td>
			<td>Дата По</span></td>
		</tr>
<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");

	if($_POST['count_click']<>"") 
	{
		$Rezult = viruchka($_POST['DataS'],$_POST['DataP']);
	};
	
echo "<tr>";
	echo "<td><input value='".$_POST['DataS']."' class='pole_Data' style='CURSOR: pointer; TEXT-ALIGN: center' onclick='kalendaR(event)' name='DataS' size='20'></td>";
	echo "<td><input value='".$_POST['DataP']."' class='pole_Data' style='CURSOR: pointer; TEXT-ALIGN: center' onclick='kalendaR(event)' name='DataP' size='20'></td>";
echo "</tr>";
echo "<tr>";
	echo "<td align='middle'><input class='knopka' type='submit' value='Подсчитать' name='count_click'></td>";
	echo "<td><input class='pole_Nomer_Viruchka' value='".$Rezult."' name='Rezult' size='20'></td>";
echo "</tr>";

?>
</table> </form> 		
</td> </tr> </table> </body> </html>