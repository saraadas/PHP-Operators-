<?php
function year_check($my_year)
{
   if ($my_year % 400 == 0)
      print("It is a leap year");
   if ($my_year % 4 == 0)
      print("It is a leap year");
   else if ($my_year % 100 == 0)
      print("It is not a leap year");
   else
      print("It is not a leap year");
}
$my_year = 2024;
year_check($my_year);
echo "<hr>";
function test($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo test(1, 2)."\n";
echo "<hr>";
function test2($n) 
{
     $z = 100;

     if ($n > $z)
     {
       return ($n - $z)*3;
     }
   return $z - $n;
}
echo test2(20)."\n";
echo "<hr>";
function test3($a, $b) 
{
    return ($a == 30) || ($b == 30) || ($a + $b == 30);
}

var_dump(test3(25, 20));
echo "<hr>";
function test4($c) 
{
   if(abs($c - 100) <= 10 || abs($c - 200) <= 10)
            return true;
     return false;
}

var_dump(test4(98));
echo "<hr>";
function test5($d) 
{
   return $d % 3 == 0 || $d % 7 == 0;
}

var_dump(test5(25));
echo "<hr>";
function test6($i) 
{
  if (strlen($i) > 2 && substr($i,0, 2) == "if")
            {
                return $i;
            }
      return "if ".$i;
}

echo test6(" you")."\n";
echo "<hr>";
function test7($e, $f) 
{
   return substr($e,0,$f).substr($e,$f+1,strlen($e)-$f);
}

echo test7("Sara", 1)."\n";
echo "<hr>";
function test8($g, $h) 
{
    return ($g >= 100 && $h <= 200) || ($g >= 100 && $h <= 200);
}

var_dump(test8(98, 205));
echo "<hr>";
function test9($j, $k) 
{
   return ($j <= 20 || $k >= 50) || ($j <= 20 || $k >= 50);
}

var_dump(test9(33, 45));
echo "<hr>";
function test10($l, $m, $n) 
{
  $max = max($l, max($m, $n));
  return $max;
}

echo test10(5, 8, 10)."\n";
echo "<hr>";
function test11($o, $p) 
{
   $q = 100;
   $val = abs($o - $q);
   $val2 = abs($p - $q);
   return $val == $val2 ? 0 : ($val < $val2 ? $o : $p);
}

echo test11(55, 91)."\n";
echo test11(98, 98)."\n";
echo "<hr>";
function test12($r, $t)
{
   return $r == 5 || $t == 5 || $r + $t == 5 || abs($r - $t) == 5;
 }

var_dump(test12(5, 11));
var_dump(test12(2, 3));

























?>

