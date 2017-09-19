<?php include("inc/title.htm");?>
<div align="center">
<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");
	
	if($_POST['submit_update']<>"") 
	{
		$sql="update diagnozi set Name_diagnoza ='".$_POST['Name_diagnoza']."' where Nomer_diagnoza = ".$_POST['Nomer_diagnoza']."";
		$result=execSQL($sql);
	};
	if($_POST['submit_delete']<>"") 
	{
		$sql="delete from diagnozi where Nomer_diagnoza = ".$_POST['Nomer_diagnoza']."";
		$result=execSQL($sql);
	};
	ProgressBar("diagnoz.php");
?>
</div> </body> </html>