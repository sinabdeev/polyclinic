<?php include("inc/title.htm");?>
<div align="center">
<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");

	if($_POST['submit_insert']<>"") {
		$sql="insert into vakcini (Name_vakcin) Values( '".$_POST['Name_vakcin']."')";
		$result=execSQL($sql);	
	};
	ProgressBar("vakcina.php");
?>

</div>
</body>
</html>