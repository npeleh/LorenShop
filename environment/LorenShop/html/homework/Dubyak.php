
   <?php
//1. ceil()

 // function myCeil($myNumb) {
 // 	$remainNumb = $myNumb - $myNumb % 10;
 // 	if($remainNumb == 0) {
 // 		return $myNumb;
 // 	} else if ($myNumb > 0) {
 // 		return ($myNumb - $remainNumb) + 1;
 // 	} else {
 // 		return $myNumb - $remainNumb;
 // 	}
 // }

 // echo myCeil(-2.8);

//2. empty()

// function myEmpty($myVariable) {
// 	return ($myVariable) ? "FALSE" : "TRUE";
// }

// echo myEmpty("");

//3. count()

/*   function myCount($myObject){
    foreach ($myObject as $key => $value) {
      $key++;
    }
    return $key;
  }
  echo myCount(array("vhgchc", 2, "3", 6, false, 5, 6));*/

  //4. trim()

/*  function myTrim($str){
    $myArray = myExplode('2', $str);

    for($i = 0; $i < count($myArray); $i++){
      	$result .= $myArray[$i]; 
    }
    return $result; 
  }
  echo myTrim("2222yujfy ggg hh h gjj hgj222");*/

//5. implode()

/*function myImplode($splitString, $myArray) {
	$result = "";
	$lastSymbol = count($myArray)-1;
	for($i = 0; $i < $lastSymbol; $i++) {
		$result .= $myArray[$i].$splitString;
	}
	return $result.$myArray[$lastSymbol];
}

$array = array(1, 2, 3, 4, 6);
echo myImplode("? ", $array);*/

//6. in_array()

/*   function	myInArray($str, array $myArray, $strict = False) {
   		$boolVar = 'FALSE';
   		for($i = 0; $i < count($myArray); $i++) {
		   	if($strict) {
		   		if ($str === $myArray[$i]) {
		   			$boolVar = 'TRUE';
		   		} 
		   	} 
		   	else {
		   		if ($str == $myArray[$i]) {
		   			$boolVar = 'TRUE';
		   			}
		   		}	
 		}
 		return $boolVar;
   }
   echo myInArray("10", array("Mac", 10, "Irix", "Linux", array(1, 2)), True);*/

//8. explode()

/*   function myExplode($delimiter, $str) {
   	$myArray = array();
   	$myVariable = "";

   	inner:
    for ($i = 0; $i <= strlen($str); $i++) {
        if ($str[$i] == $delimiter || $i == strlen($str)) {
            $myArray[] = $myVariable;
   	        $myVariable = "";
             continue;
             goto inner;
        }
   		   $myVariable .= $str[$i];
    }
    return $myArray;
}*/
 
/*print_r(myExplode("2", "zar2foo2a"));*/

//9. myArray_merge()

 /*function myArray_merge($arr1, $arr2){
    $result = $arr1;
    for($i = 0; $i < count($arr1); $i++){
      for($j=0; $j < count($arr2); $j++){ 
        if($arr1[$i] == $arr2[$j]){
        	array_splice($arr2, $j, 1);
        } 
      }
    }
    for($i = 0; $i < count($arr2); $i++){
      $result[] = $arr2[$i];      
    }
    //var_dump($result);
    return $result;
  }

   myArray_merge(array(3, 2, 1, 0), array(3, 0, 2, 6, 5));*/

   //array_slice()

   /*function myArray_slice($myArray, $offset, $length = 0) {
   	$newArray = array();
   	$beginning = $offset;
   	$breakpoint = $offset + $length;
   	if($offset < 0) {
   		$beginning = count($myArray) + $offset;
   		$breakpoint = $beginning + $length;
   	}
   	if(!$length) {
   		$breakpoint = count($myArray);
   	}
   	if($length < 0) {
   		$breakpoint = count($myArray) + $length;
   	}
   	for($i = $beginning; $i < $breakpoint; $i++) {
   		$newArray[] = $myArray[$i];
   	}
   	return $newArray;
   	}
   $input = array("a", "b", "c", "d", "e");
   myArray_slice($input, 2, -2);

print_r(array_slice($a,-3, 2));*/

?> 

