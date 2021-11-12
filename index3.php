<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<? 
		$array = array(1,1,2,3,4,-51,12,12,12,-51);
		$array_count = count($array);

		for($i=0;$i<$array_count;$i++)
			{	
				if ($array[$i] == $array[$i+1]){
    				$count++;
				}
			}
		echo $count;
	?>
</body>
</html>