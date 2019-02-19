<?php
 //水仙花
function shui($n,$m){
   $arr = [];
   for ($i= $n;$i<$m;$i++){
       if(strlen($i) != 3){
           continue;
       }
       $a = floor($i / 100);
       $b = floor(($i % 100)/10);
       $c = $i % 10;
       $sum = pow($a,3)+pow($b,3)+pow($c,3);
       if($sum == $i){
           $arr[] = $i;
       }
   }
  return $arr;

}
print_r(shui(100,500));
echo "<br>";

//首次出现的次数
function ci($str){
    $str = str_replace(' ','',$str);
    $len = strlen($str);
    $arr = [];
    for ($i = 1;$i<=$len;$i++){
        if (isset($arr[$str[$i]])){
            $arr[$str[$i]]++;
            if($arr[$str[$i]] ==3){
               return $str[$i];
            }
        }else{
            $arr[$str[$i]] = 1;
        }
    }
    return false;
}
echo ci('asddsaaa');
echo "<br>";

//回文
function hui($n){
    $aa = '';
    $len = strlen($n);
    for ($i = $len-1;$i>=0;$i--){
        $aa .=$n[$i];
    }
    return $aa = $n;
}
echo hui('abba');
echo "<br>";

//裴波那契
function fbnq($n){
    $arr = [];
    for ($i = 0;$i<=$n;$i++){
        if($i < 2){
            $arr[] = 1;
        }else{
            $arr[] = $arr[$i-1]+$arr[$i-2];
        }
    }
  return $arr;
}
print_r(fbnq(10));
echo "<br>";
//数字转字母
function shu($num){
  $list = range('a','z');
  $count = count($list);
  $res = [];
  while ($num){
      $tmp = floor($num/$count);
      $rem = $num % $count;
      if($rem == 0){
          $tmp--;
          array_unshift($res,$list[$count - 1]);
      }else {
          array_unshift($res,$list[$rem - 1]);
      }
       $num = $tmp;
  }
    return implode('',$res);
}
echo shu(27);
echo "<br>";

//阶乘
function jiecheng($n){
    $sum = $n;
    for ($i=1;$i<$n;$i++){
        $sum *= $n-$i;
    }
    return $sum;
}
echo jiecheng(3);
echo "<br>";

?>