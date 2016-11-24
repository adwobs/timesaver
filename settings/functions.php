<?php

include_once("wrapper.php");

class functions extends wrapper{
	function functionsz(){

	}

	function addAssign($name,$course,$due,$type){
		$strQuery="insert into assignment set fk_course='$course', name='$name', due_date='$due', type='$type'";
		return $this->query($strQuery);
	}

	function viewAssign(){
		$strQuery="select name, due_date, work_days, completed_assign from assignment";
		return $this->query($strQuery);
	}

	function editAssign($id, $complete){
		$strQuery="insert into assigment set completed_assign='$complete' where aid=$id";
		return $this->query($strQuery);
	}
	function delAssign($complete){
		$strQuery="delete from assignment where completed_assign=$complete";
		return $this->query($strQuery);
	}
}
?>