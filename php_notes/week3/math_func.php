<?php
/*math function */
//abs
echo abs(10)."<br>";
echo abs(0)."<br>";
echo abs(-20)."<br>";

//
echo rand()."<br>";
echo mt_getrandmax()."<br>";
echo rand(50,60)."<br>";

echo 10/5 . "<br>";
echo gettype(10/5)."<br>";

echo 11/5 . "<br>";
echo gettype(11/5)."<br>";

echo 11.5%5 . "<br>";
echo gettype(11%5)."<br>";

echo fmod(11.5,5) . "<br>";
echo gettype(fmod(11,5))."<br>";

//ceil..floor..round
echo ceil(3.4)."<br>";
echo floor(3.1)."<br>";
echo ceil(-3.4)."<br>";
echo floor(-3.1)."<br>";

echo round(5.99,1)."<br>";//6
echo round(5.94,1)."<br>";//5.9
echo round(5.995,2)."<br>";//6
echo round(5.994,1)."<br>";//6
echo round(5.994,2)."<br>";//5.99

echo round(5.994,0)."<br>";//6

echo round(5.99,0,PHP_ROUND_HALF_UP)."<br>";//6
echo round(5.49,0,PHP_ROUND_HALF_UP)."<br>";//6

echo round(5.50,0,PHP_ROUND_HALF_DOWN)."<br>";//5

echo round(5.50,0,PHP_ROUND_HALF_EVEN)."<br>";//6
echo round(4.50,0,PHP_ROUND_HALF_EVEN)."<br>";//4

echo round(5.50,0,PHP_ROUND_HALF_ODD)."<br>";//5
echo round(4.50,0,PHP_ROUND_HALF_ODD)."<br>";//5

//sqrt
echo sqrt(16)."<br>";
echo sqrt(25)."<br>";
echo sqrt(100)."<br>";

//min..max
echo min(10,20,-40,-30,50)."<br>";//-40
echo max(10,20,-40,-30,50)."<br>";//50

echo "<pre>";
print_r(min([1,3,4],[1,2,6]));
echo "</pre>";

echo "<pre>";
print_r(max([1,3,5],[1,2,6]));
echo "</pre>";
