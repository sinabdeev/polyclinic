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
		$sql="update kind_jivot set Name_kind_jivot ='".$_POST['Name_kind_jivot']."' where Nomer_kind_jivot = ".$_POST['Nomer_kind_jivot']."";
		$result=execSQL($sql);
	};
	if($_POST['submit_delete']<>"") 
	{
		$sql="delete from kind_jivot where Nomer_kind_jivot = ".$_POST['Nomer_kind_jivot']."";
		$result=execSQL($sql);		
	};
	ProgressBar("kind_jivot.php");
?>
</div> </body> </html>