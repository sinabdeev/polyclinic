<?php include("inc/title.htm");?>
<div align="center">
<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");

	if($_POST['Name_jivot']<>"") 
	{
		$sql="insert into vid_jivot (Name_jivot) Values( '".$_POST['Name_jivot']."')";
		$result=execSQL($sql);
	};
	ProgressBar("vid_jivot.php");
?>
</div>
</body>
</html>