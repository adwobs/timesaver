<?php
include("../settings/functions.php");

if(!isset($_REQUEST['cmd'])){
	echo "cmd is not provided";
	exit();
}

$cmd=$_REQUEST['cmd'];

switch($cmd){
	case 1:
	addUser();
	break;
	default:
	echo"wrong command";
	break;
}

function addUser(){
	$obj=new functions();
	if(!isset($_REQUEST['uc'])){
		echo'{"result":0,"message":"data can not be retrieved"}';
		exit();
	}
	$name=$_REQUEST['uc'];
	$group=$_REQUEST['ac'];
	$major=$_REQUEST['sc'];

	if($obj->addUser($name,$group,$major)){
		echo'{"result":1, message:"assignment added"}';
	}
	else{
	echo '{"result":0,"message":"assignment was not added"}';
	}	 
}