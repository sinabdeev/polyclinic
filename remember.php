<?php include("inc/title.htm");?>
<table border="0" width="100%" cellpadding="0" cellspacing="0"  style="border-width: 0px">
<tr>
<td>

<table border=1 align='center' class='centr' cellpadding='0' cellspacing='0' >		
<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");

	$sql=SELECT_jurnal." WHERE DataPovtornogoPriema < NOW() AND DataPovtornogoPriema <> 0";     
	$page=($_GET['page']);
	$url = "remember.php";
	Spisok($sql,$page,$url);
?>
</table>
</td>

</tr>
</table>
</body>
</html>