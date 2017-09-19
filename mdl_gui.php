<?php

require_once("mdl_constants.php");

function Razdelitel($page, $url)
{
	echo "<tr >"  ;
	echo "<td class='spacer' colspan='9'><a href = '".$url."?page=".$page."#karta-1'>на новую</a>&nbsp;&nbsp;&nbsp;<a href = '".$url."?page=".$page."#karta".(($page-1)*Max_Rows_Page)."'>на верх</a><img src='images/spaser.gif' border='0' width='1' height='20'></td> ";  
	echo "</tr>"  ;
	echo "<tr >"  ;
	echo "<td >"  ;
	echo "<img src='images/spaser.gif' border='0' width='1210' height='1'>	"  ;
	echo "</td >"  ;
	echo "</tr>"  ;
}

function ProgressBar($value)
{
	echo "<div style='text-align:center; '> ";
	echo "	<script type='text/javascript'> var bar1 = createBar(500,9,'white',1,'black','black',".Speed.",15,8,''); ";
	echo " 	</script> </div> ";
	echo " <script type='text/javascript'>setTimeout(".chr(34)."window.location.replace('".$value."')".chr(34).",".TIME.");  </script> ";
}
function Order ($value)
{

	if ($value==1)	{
		echo " <img src='images/up.gif' alt='' width='9' height='5' border='0'> ";
	};
	if ($value==2)	{
		echo " <img src='images/down.gif' alt='' width='9' height='5' border='0'> ";
	};

}	

?>