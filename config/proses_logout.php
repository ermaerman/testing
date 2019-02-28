<?php

session_start();
$out=session_destroy();
if($out)
{	echo "<br><br><br><br><br><center><img src='../assets/gif/loading.gif'><br></center>";
}
?>

<META HTTP-EQUIV="REFRESH" CONTENT = '2;url=../index.php'>
