<?php 
$arr = array(4,2,1,6,8,4,7,2,8);
//冒泡排序法
/*for($i=0;$i<count($arr)-1;$i++){
	for($j=0;$j<)count($arr)-1-$i;$j++){
		if($arr[$j]>$arr[$j+1]){
			$t= $arr[$j];
			$arr[$j]=$arr[$j+1];
			$arr[$j+1]=$t;
		}
	}
}*/
//选择排序法
/*for($i=0;$i<count($arr)-1;$i++){
	$minval = $arr[$i];
	$minindex = $i;
	for($j=1+$i;$j<count($arr);$j++){
		if($arr[$j]<$minval){
			$minval =$arr[$j];
			$minindex = $j;
		}
	}
	$t = $arr[$minindex];
	$arr[$minindex] = $arr[$i];
	$arr[$i] = $t;
}*/

/*echo "<pre>";
//print_r($_SERVER);
echo "</pre>";*/
//$arr= array('red'=>"1",'aed'=>"3",'ced'=>"5",'bed'=>"2",'eed'=>"4");
//$arr = array(4,2,1,6,8,4,7,2,8);
krsort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
$time1 = mktime(0,0,0,6,3,2037);
$time2 = time();
//echo $time2;
$time3 = $time1 - $time2;
echo $time3;
 ?>