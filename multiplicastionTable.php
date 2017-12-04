<!DOCTYPE html>
<html>
<body>

<?php
//Example 1
$array1=array(1,2,3,4,7,6);
$array2=array(2,3,1,0,5);

//Example 2
$array3=array(5,9,4,8);
$array4=array(2,6,3,7,5);


//Result 1
echo "<center>";
echo "<h2>Multiplication table for array one: </h2>";
printTable($array1,$array2);
echo "<br> <br> <br>";

//Result 2
echo "<h2> Multiplication table for array two: </h2>";
printTable($array3,$array4);

function printTable($array1, $array2){
	
	$arrlength=count($array1);
    $arrlength2=count($array2);
	
	 echo "<table border=2 width=20%>";
	 echo "<tr>";
	 echo "<td> x </td>";
	 
 for($x=0;$x<$arrlength;$x++) {
		  echo "<td>".$array1[$x]."</td>";
	  }
     echo "</tr>";
  
  
  for ($y=0;$y<$arrlength2;$y++){
      echo "<tr>";
	  echo "<td>".$array2[$y]. "</td>";  
    
	  
	  for ($i=0;$i<$arrlength;$i++){
		 echo "<td>".$array1[$i] * $array2[$y]. "</td>"; 
       		 
	  }
	  echo "</tr>";
  }
  echo "</table>";
  
} 
echo "</center>";
?>

</body>
</html>