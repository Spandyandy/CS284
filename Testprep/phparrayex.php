<?php 
	function exampleforeach ($arr){
		foreach($arr as $subarray){
			echo $subarray["name"] . "   " . $subarray["count"] . "<br>";
		}
	}
	function exampleforLoop ($arr){
		for($i=0; $i < count($arr); $i++){
			echo $arr[$i]["name"] . "   " .
				$arr[$i]["count"] . "<br>";
		}
	}
	function examplethird ($arr){
		for($i=0; $i < count($arr); $i++){
			$str = $str . $arr[$i]["name"] . "   " .
				$arr[$i]["count"] . "<br>";
		}
		return $str;
	}
	echo "<p style='text-align:center'>#";
	function tree(){
		for($i=0; $i<100; $i++){
			for($j=0; $j<$i; $j++){
				echo "#";
			}
			echo "<br>";
		}
	}
	function findtheLargestID($arr){
		$max = $arr[0]['dragID'];
		foreach($arr as $value){
			$theID = $value['dragID'];
			if($theID > $max){
				$max = $theID;
			}
		}
		return $max;
	}
	function forLoopLargestID($arr){
		$max = $arr[0]['dragID'];
		for($i = 0; $i < count($arr); $i++){
			$theID  = $arr[$i]['dragID'];
			if($theID > $max){
				$max = $theID;
			}
		}
		return $max;
	}


	$theBugs = array(
					array('dragID' => 1
							,'name' => "Spangled Skimmer"
							,'count' => 5
						)
					,array('dragID' => 2
							,'name' => "Twelve-Spotted Skimmer"
							,'count' => 10
						)
					,array('dragID' => 3
							,'name' => "Andy"
							,'count' => 10
						)
					,array('dragID' => 70070
							,'name' => "Ruby Meadowhawk"
							,'count' => 7
						)
				);
	
	exampleforeach($theBugs);
	echo "<br>";
	exampleforLoop($theBugs);
	echo "<br>";
	echo examplethird($theBugs);
	echo "<br>";
	echo findtheLargestID($theBugs);
	echo "<br>";
	echo forLoopLargestID($theBugs);
	echo "<br>";
	tree();

?>