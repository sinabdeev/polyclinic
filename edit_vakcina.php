<?php include("inc/title.htm");?>
<div align="center">
<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");

	if($_POST['submit_update']<>"") 	{
		$sql="update vakcini set Name_vakcin ='".$_POST['Name_vakcin']."' where Nomer_vakcin = ".$_POST['Nomer_vakcin']."";
		$result=execSQL($sql);
	};
	if($_POST['submit_delete']<>"") 	{
		$sql="delete from vakcini where Nomer_vakcin = ".$_POST['Nomer_vakcin']."";
		$result=execSQL($sql);
	};
	ProgressBar("vakcina.php");
?>
</div> </body> </html>