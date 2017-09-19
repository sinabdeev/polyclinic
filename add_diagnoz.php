<?php include("inc/title.htm");?>
<div align="center">
<?php

require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");

	if($_POST['submit_insert']<>"") 
	{
		$sql="insert into diagnozi (Name_diagnoza) Values( '".$_POST['Name_diagnoza']."')";
		$result=execSQL($sql);
	};
	ProgressBar("diagnoz.php");

?>
</div>
</body>
</html>