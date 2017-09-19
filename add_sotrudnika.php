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
		$sql="  INSERT INTO  `sotrudniki` (   `FIO_Sotrudnika` )  VALUE (   '".$_POST['FIO_Sotrudnika']."' )";
		$result=execSQL($sql);
	};
	ProgressBar("sotrudniki.php");
	
?>
</div>
</body>
</html>