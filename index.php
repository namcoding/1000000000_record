<?php
	set_time_limit(0);
	$connect=mysql_connect("localhost","root","123nam");
	mysql_select_db("test",$connect);
	$value="insert into test values ";
	$array=array();
	for($i=0;$i<=1000000000;$i++){
		if($i%50000==0){
			$value.="(null,$i)";
			//echo $value."<br>";
			mysql_query($value);
			$value="insert into test values ";
		}
		else{
			$value.="(null,$i),";
		}
	}
	
	
	//echo $value;
?>