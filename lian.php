<?php
  //1-100的和
 function sum($n){
     $sum = 0;
     for($i = 1;$i<=$n; $i++){
         $sum +=$i;
     }
     return $sum;
 }
 echo sum(100);
 echo "<br>";

 //阶乘
function jiecheng($n){
    $sum= $n;
    for ($i=1 ; $i<$n;$i++){
        $sum *= $n-$i;
    }
    return $sum;
}
echo jiecheng(5);
echo "<br>";

//回文
function huiwen($str){
    $rev = '';
    $len = strlen($str);
    for($i = $len-1;$i>=0;$i--){
        $rev .=$str[$i];
    }
    return $str == $rev;
}
var_dump(huiwen('123321'));
echo "<br>";

//字母首次出现三次
function day1($str){
    $str = str_replace(' ','',$str);
    $len = strlen($str);
    $arr = [];
    for ($i = 0;$i<$len;$i++){
        if(isset($arr[$str[$i]])){
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
echo day1('a aa sfasfwqsdgfgsdfwe');
echo "<br>";

//冒泡
function maopao($str){
    $len = count($str);
    for ($i = 1;$i<$len;$i++){
        for ($k = 0;$k<$len-$i;$k++){
            if($str[$k] > $str[$k+1]){
                $str[$k] = $str[$k]^$str[$k+1];
                $str[$k+1] = $str[$k]^$str[$k+1];
                $str[$k] = $str[$k]^$str[$k+1];
            }
        }
    }
    return $str;
}
var_dump(maopao(['6','9','3','52','25']));
echo "<br>";
//快排
function kuaipai($str){
    $len = count($str);
     if($len < 2){
         return $str;
     }
     $middon = $str[0];
     $left = [];
     $right = [];
     for($i = 1;$i<$len;$i++){
         if($str[$i] > $middon){
             $right[] = $str[$i];
         }else{
             $left[] = $str[$i];
         }
     }
     $left = kuaipai($left);
     $right = kuaipai($right);
     return  array_merge($left,[$middon],$right);
}
var_dump(kuaipai(['6','9','3','52','25']));
echo "<br>";

//水仙花
function shui($n,$m){
   $arr = [] ;
   for ($i=$n;$i<=$m;$i++){
       if(strlen($i) != 3){
           continue;
       }
       $a = floor($i/100);
       $b = floor(($i%100)/10);
       $c = $i % 10;
       $sum = pow($a,3)+pow($b,3)+pow($c,3);
       if($sum == $i){
           $arr[] =$i;
       }
   }
   return $arr;
}
print_r(shui(100,500));
echo "<br>";

//数字 转字母
function shu($num){
    $list = range('a','z');
    $count = count($list);
    $arr = [];
    while ($num){
        $tem = floor($num/$count);
        $rem = $num % $count;
        if($rem == 0){
            $tem--;
            array_unshift($arr,$list[$count-1]);
        }else{
            array_unshift($arr,$list[$rem-1]);
        }
        $num = $tem;
    }
   return implode('',$arr);
}
echo shu(27);
echo "<br>";


?>