<?php
  session_start();
  if($_SESSION['login_lev']==='1')
	{
	header('Location:student.php');
	}
	if($_SESSION['login_lev']==='2')
	{
	header('Location:teacher.html');
	}
	if($_SESSION['login_lev']==='3')
	{
	header('Location:admin.html');
	}
	else
	{
	echo $_SESSION['login_lev'];
	header('refresh:1;url=home.php');
	}
?>