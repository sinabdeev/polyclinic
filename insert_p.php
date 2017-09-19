<?php include("inc/title.htm");?>
<table border="0" width="100%" style="border-width: 0px">
<tr>
<td >

<?php
require_once("mdl_constants.php");
require_once("mdl_gui.php");
require_once("mdl_form.php");
require_once("mdl_obj.php");
require_once("mdl_sql.php");

	if($_POST['insert']<>"") {
		ProgressBar("insert_p.php");
		echo "<br>";
		$s = str_replace( "\'",  "'", $_POST['STR']);
		echo $s;
		$result=execSQL($s);		
	};
?>
<form method="POST" action="insert_p.php">
	<textarea name="STR" rows="30" cols="91"></textarea>
	<br>
	<input type="submit" class='knopka' value="insert" name="insert">
</form>

</td>
</tr>
</table>
</body>
</html>