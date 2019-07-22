<?php

session_start();
$out=session_destroy();
if($out)
{	echo "<br><br><center><img src='../assets/gif/loadingp.gif'><br></center>";
}
?>

<META HTTP-EQUIV="REFRESH" CONTENT = '2;url=../index.php'>
