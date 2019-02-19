<?php
  //1-100的和
function sum($n){
    $sum = 0;
    for ($i = 1;$i<=$n;$i++){
        $sum +=$i;
    }
    return $sum;
}
echo sum(100);
echo "<br>";

//阶乘
function jiecheng($n){
    $sum = $n;
    for ($i=1;$i<$n;$i++){
        $sum *= $n-$i;
    }
    return $sum;
}
echo jiecheng(4);
echo "<br>";

//回文
function huiwen($str){
    $rev = '';
    $len = strlen($str);
    for ($i = $len-1;$i>=0;$i--){
        $rev .= $str[$i];
    }
    return $str == $rev;
}
var_dump(huiwen('123321'));
echo "<br>";

//第一天日考 首次出现3次
function day1($str){
    $str = str_replace(' ' ,'',$str);
    $len = strlen($str);
    $arr = [];
    for ($i = 0;$i<$len;$i++){
        if(isset($arr[$str[$i]])){
            $arr[$str[$i]]++;
            if($arr[$str[$i]] == 3){
                return $str[$i];
            }
        }else{
            $arr[$str[$i]] = 1;
        }
    }
      return false;
}
echo day1('a a sdsasfsdsfasdsfsd');
echo "<br>";

//冒泡
function maopao($arr){
    $len = count($arr);
    for($i = 1;$i<$len;$i++){
        for ($k = 0;$k<$len-$i;$k++){
            if($arr[$k] > $arr[$k+1]){
                $arr[$k] = $arr[$k]^$arr[$k+1];
                $arr[$k+1] = $arr[$k]^$arr[$k+1];
                $arr[$k] = $arr[$k]^$arr[$k+1];
            }
        }
    }
    return $arr;
}
  print_r( maopao(['8','6','9','11','30','25']));
echo "<br>";

//快排
function kuaipai($arr){
    $len = count($arr);
    if($len < 2){
        return $arr;
    }
    $middle = $arr[0];
    $left = [];
    $right = [];
    for ($i = 1; $i<$len;$i++){
        if($arr[$i] > $middle){
            $right[] = $arr[$i];
        }else{
            $left[] = $arr[$i];
        }
    }
    $left = kuaipai($left);
    $right = kuaipai($right);
    return array_merge($left,[$middle],$right);
}

print_r( kuaipai(['8','6','9','11','30','25','3']));
echo "<br>";


//水仙花
function shui($n,$m){
    $arr = [];
    for ($i = $n ; $i<=$m;$i++){
        if(strlen($i) !=3){
            continue;
        }
        $a = floor($i/100);
        $b = floor(($i % 100)/10);
        $c = $i % 10;
        $sum = pow($a,3) + pow($b,3) + pow($c,3);
        if($sum == $i){
            $arr[] = $i;
        }
    }
    return $arr;
}

print_r(shui(100,500));
echo "<br>";

//数字转化成字母
function shu($num){
    $list = range('a','z');
    $count = count($list);
    $arr = [];
    while ($num){
        $tmp = floor($num/$count);
        $rem = $num % $count;
        if($rem == 0){
            $tmp--;
            array_unshift($arr,$list[$count-1]);
        }else{
            array_unshift($arr,$list[$rem-1]);
        }
        $num = $tmp;
    }
    return implode('',$arr);
}
echo shu(27);
echo '<br>';

//分界点
function fen($arr)
{
    $strlen=count($arr);
    for($i=1;$i<$strlen;$i++)
    {
        $left=0;
        $right=0;
        for($l=0;$l<$i;$l++)
        {
            $left+=$arr[$l];
//            echo $left;die;
        }

        for($r=$i+1;$r<$strlen;$r++)
        {
            $right+=$arr[$r];
        }

        if($left==$right)
        {
            echo "分界点为$i";
            echo "<br>";
            echo "分界点左侧和为$left ,分界点右侧和为$right";
        }

    }
}
$arr=[20,30,50,40,10];

fen($arr);
echo "<br>";


//斐波那契数列
function fbnq($n){
    $arr =[];
    for($i = 0;$i< $n; $i++){
        if($i<2){
            $arr[]= 1;
        }else{
//            var_dump($arr);
            $arr[] = $arr[$i - 1] + $arr[$i - 2];
        }
    }
    return $arr;
}
print_r(fbnq(10));
echo "<br>";

//银行
function bank($active_time,$process_time){
    $windows = [];
    $wait_time = 0;
    $number = count($active_time);
    for ($i =0;$i<$number;$i++){
           if(count($windows) < 4 ){
               $windows[] = $active_time[$i] + $process_time[$i];
               continue;
           }
           sort($windows);
           $min = array_shift($windows);
           if($min > $active_time[$i]){
               $wait_time += $min - $active_time[$i];
               $now_windows_time = $min + $process_time[$i];
           }else{
               $now_windows_time = $active_time[$i] + $process_time[$i];
           }
           $windows[] = $now_windows_time;
    }
    return $wait_time / $number;
}
print_r(bank([
   9.00,9.05,9.10,9.20,9.21,9.25,9.28,9.30
],[
   0.30,0.31,0.35,0.40,0.38,0.50,0.55,0.33
]));
echo "<br>";



//将首字母大写改变成小写用下划线拼接


$a = 'Hello World';

function s($str){
    $arr = explode(' ', $str);
    foreach ($arr as &$v) {
        $v[0] = strtolower($v[0]);
    }
    return implode('', $arr);
}

echo s($a);




?>