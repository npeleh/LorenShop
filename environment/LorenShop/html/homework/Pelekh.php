<?php 
//ceil()
	// function myCeil($num){
	// 	$ceil = $num - $num%10;
	// 	if($num > 0){
	// 	   	if($ceil != 0){
	// 	   		return $num - $ceil + 1;
	// 	    }else{
	// 	    	return $num%10;
	// 	    }
	// 	}else if ($num < 0){
	// 		return $num%10;
	// 	}
	// }
	// echo myCeil(5.5);

//empty()
	// function myEmpty($elem){
	// 	if(!$elem) {
	// 		return 'true';
	// 	}else{
	// 		return 'false';
	// 	}
	// }
	// $item;
	// echo myEmpty($item);


//trim()
	// function myTrim($str){
	// 	$arr = explode(' ', $str);
	// 	for($i=0; $i<myCount($arr); $i++){
	// 		$result .= "$arr[$i]\n";		
	// 		if($arr[myCount($arr)-1]) $result .= "$arr[$i]";
	// 	}
	// 	return $result;
	// }
	// echo myTrim("     yujfy ggg hh h gjj hgj   ");
 
   
//count
	// function myCount($arr){
	// 	$i = 0;
	// 	foreach ($arr as $value) {
	// 		$i++;
	// 	}
	// 	return $i;
	// }
	// echo myCount(array(0, 4, "", 1, 9, 1));

//array_merge()
	// function myArray_merge($arr1, $arr2){
	// 	$result = $arr1;
	// 	for($i=0; $i<count($arr1); $i++){
	// 		for($j=0; $j<count($arr2); $j++){ 
	// 			if($arr1[$i] == $arr2[$j]){
	// 				unset($arr2[$j]);
	// 				sort($arr2);
	// 			} 
	// 		}
	// 	}
	// 	for($k=0; $k<count($arr2); $k++){
	// 		array_push($result, $arr2[$k]);			
	// 	}
	// 	return var_dump($result);
	// }

	// echo myArray_merge(array(2, 0, 4), array(3, 0, 6));


//myImplode()
	// function myImplode($str, $arr) {
	//   $res = "";
	//   for($i = 0; $i < count($arr)-1; $i++) {
	//     $res .= $arr[$i].$str;
	//   }
	//   return $res.$arr[count($arr)-1];
	// }

	// $arr = array(10, 4, 0, 8, 3, 2, 3);
	// echo myImplode("!", $arr);


//myInArray()
	// function myInArray($string, $arr, $strict = false) {
	//        $boolean = "false";
	//        for($i = 0; $i < count($arr); $i++) {
	//          if(!$strict) {
	//            if ($string == $arr[$i]) $boolean = "true";
	//          } 
	//          else {
	//            if ($string === $arr[$i]) $boolean = "true"; 
	//          }  
	//      }
	//      return $boolean;
	//    }
	// echo myInArray("10", array("aaa", "vvv", 10, array("kkk", 5)), true );

//myExplode()
	// function myExplode(string $delimiter, string $string) {
	//     mark:
	//     for ($i = 0; $i <= strlen($string); $i++) {
	//         if ($string[$i] == $delimiter || $i == strlen($string)) {
	//             $arr[] = $var;
	//             $var = "";
	//             continue;
	//             goto mark;
	//         }
	//         $var .= $string[$i];
	//     }
	//     return $arr;
	// }
	// print_r(myExplode("a", "daja3afff"));

//myArray_slice()
// function myArray_slice($arr, $offset, $len = 0) {
//      $point = $offset + $len;

//      if(!$len) $point = count($arr);
//      if($len < 0) $point = count($arr) + $len;
//      if($offset < 0) {
//        $offset = count($arr) + $offset;
//        $point = $offset + $len;
//      }
//      for($i = $offset; $i < $point; $i++) $newArray[] = $arr[$i];

//      return $newArray;
//      }

//    $input = array("0", "2", "5", "h", "10", "ff");
//    print_r(myArray_slice($input, 2, 4));
?>