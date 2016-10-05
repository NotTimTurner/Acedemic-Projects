<?PHP

Session_start();
$var1=$_SESSION["NUM"];
$var2=$_SESSION["NAME"];
Print"Var 1 is $var1 and var 2 is $var2";
session_destroy();
?>