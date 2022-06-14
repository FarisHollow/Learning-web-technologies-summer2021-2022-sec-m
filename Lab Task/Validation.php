<?php
 
 $Name ="";
 $NameError="";
if ($SERVER['REQUEST-METHOD']=="POST"
{
	$Name=$_POST['name']
}
if ($name ==null){
$_sessION["Name"]=$Name;}
else {
$NameError="Validation Error";}

?>