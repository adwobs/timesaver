<?php
	include("functions.php");
	var $obj=new functions();

if(!isset($_REQUEST['cmd'])){
	echo "cmd is not provided";
	exit();
}

$cmd=$_REQUEST['cmd'];

switch($cmd){
	case 1:
	viewAssign();
	break;
	case 2:
	addAssign();
	break;
	case 3:
	completeAssign();
	break;
	default:
	echo "wrong command";
	break
}

function viewAssign(){
	if($this->obj->viewAssign()){
		$row=$obj->fetch();
		$result=array();
		while($row!=false){
			$result[]=$row;
			$row=$obj->fetch();
		}
		echo'{"result":1,"assignment":';
   		echo json_encode($result);
   		echo '}';
	}
	else{
		echo'{"result":0,"message":"No asssignment found"}';
	}
}

function addAssign(){
	if(!isset($_REQUEST['uc'])){
		echo'{"result":0,"message":"data can not be retrieved"}';
		exit();
	}

	$name=$_REQUEST['uc'];
	$course=$_REQUEST['ac'];
	$due=$_REQUEST['as'];
	$type=$_REQUEST['us'];

	if($this->obj->addAssign($name,$course,$due,$type)){
		echo'{"result":1, message:"assignment added"}';
	}
	else{
	echo '{"result":0,"message":"assignment was not added"}';
	}
}

function completeAssign(){
	if(!isset($_REQUEST['uc'])){
		echo'{"result":0,"message":"data can not be retrieved"}';
		exit();
	}

	$id=$_REQUEST['uc'];
	$complete=$_REQUEST['ac'];

	if($this->obj->editAssign($id, $complete)){
		echo'{"result":1, message:"assignment completed"}';
	}
	else{
	echo '{"result":0,"message":"completed failed"}';
	}
}
?>