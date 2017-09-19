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
		$sql = "UPDATE   `sotrudniki`  SET   `FIO_Sotrudnika` = '".$_POST['FIO_Sotrudnika']."' WHERE   `NomerSotrudnika` = ".$_POST['NomerSotrudnika']."";
		$result=execSQL($sql);
	};
	if($_POST['submit_delete']<>"") 
	{
		$sql="delete from `sotrudniki` where `NomerSotrudnika` = ".$_POST['NomerSotrudnika']."";
		$result=execSQL($sql);
	};
	ProgressBar("sotrudniki.php");
?>
</div> </body> </html>