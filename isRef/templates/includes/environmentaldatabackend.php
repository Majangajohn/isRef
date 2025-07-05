<?php 
	//environmental data
	$data['coverage'] = $_POST['coverage'];
	$data['built'] = $_POST['built'];
	$data['treespace'] = $_POST['treespace'];
	$data['tinitiative'] = $_POST['tinitiative'];

	if(isset($_POST['tireason'])){
		$data['tireason'] = $_POST['tireason'];
	}else{
		$data['tireason'] = "none";
	}

	$data['eclub'] = $_POST['eclub'];
	$data['eopinion'] = $_POST['eopinion'];

	//fruit trees
	$fruittrees = "";
	if(isset($_POST['fruittree'])){
		$checkbox =  $_POST['fruittree'];
		foreach($checkbox as $title){
			$fruittrees = $fruittrees.$title.",";
		}
	}else{
		$fruittrees = $fruittrees."";
	}
	if(isset($_POST['otherfruittree'])){
		$fruittrees = $fruittrees.$_POST['otherfruittree'];
		
	}else{
		$fruittrees = $fruittrees."";
	}

	if($fruittrees == ""){
		$fruittreeeserror = "** --please provide fruit trees under environmental data-- **"; 
		$errors = $errors.$fruittreeeserror."<br/>";
	}else{
		$data['fruittree'] =  $fruittrees;
	}
	
	//trees
	$trees = "";
	if(isset($_POST['tree'])){
		$checkbox =  $_POST['tree'];
		foreach($checkbox as $title){
			$trees .= $title.",";
		}
	}else{
		$trees .= "";
	}
	if(isset($_POST['othertree'])){
		$trees .= $_POST['othertree'];
		
	}else{
		$trees .= "";
	}

	if($trees == ""){
		$treeserror = "** --please provide data for other trees under environmental data-- **"; 
		$errors .= $treeserror."<br/>";
	}else{
		$data['tree'] =  $trees;
	}

	//trees use
	$treesuse = "";
	if(isset($_POST['treeuse'])){
		$checkbox =  $_POST['treeuse'];
		foreach($checkbox as $title){
			$treesuse .= $title.",";
		}
	}else{
		$treesuse .= "";
	}

	if($treesuse == ""){
		$treesuseerror = "** --please provide data tree use under environmental data-- **"; 
		$errors .= $treesuseerror."<br/>";
	}else{
		$data['treeuse'] =  $treesuse;
	}
	$data['ehname'] =  $_POST['ehname'];
	$data['ehtel'] =  $_POST['ehtel'];
    $data['ehemail'] =  $_POST['ehemail'];
    ?>