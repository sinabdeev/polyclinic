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
		$sql="update vid_jivot set Name_jivot ='".$_POST['Name_jivot']."' where Nomer_vida_jivot = ".$_POST['Nomer_vida_jivot']."";
		$result=execSQL($sql);
	};
	if($_POST['submit_delete']<>"") 
	{
		$sql="delete from vid_jivot where Nomer_vida_jivot = ".$_POST['Nomer_vida_jivot']."";
		$result=execSQL($sql);		
	};
	ProgressBar("vid_jivot.php");
?>
</div> </body> </html>