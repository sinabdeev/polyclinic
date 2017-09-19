<?php include("inc/title.htm");?>
<div align="center">
<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");

	if($_POST['Name_kind_jivot']<>"") 
	{
		$sql="insert into kind_jivot (Name_kind_jivot) Values( '".$_POST['Name_kind_jivot']."')";
		$result=execSQL($sql);
	};
	ProgressBar("kind_jivot.php");
?>
</div>
</body>
</html>