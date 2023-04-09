<?php
/*
control structure
if,elseif,else<=alternate syntax
 */
//echo'menna is here';
if(10>11)echo"Good";else echo"bad";
echo'<br>';
if(10>10):
    echo"First";
elseif(10>5):
        echo"second";
else:
    echo"Last";
endif;
echo'<br>';
/*nested condition */
$name="osama";
$is_student=true;
$is_orphan=true;
$price=100;
$country="Egypt";
$country_discount=50;
$student_discount=10;
$orphan_discount=15;

if($country=="Egypt"){
    if($is_student==true){
        echo"Hello $name";
    echo"<br>";
    echo" country Discount $country_discount";
    echo"<br>";
    echo" student Discount $student_discount";
    echo"<br>";
    echo" orphan Discount $orphan_discount";
    echo"<br>";
    echo"the final price is" .$price-$country_discount-$student_discount-$orphan_discount;
    }
else{
    echo"Hello $name";
    echo"<br>";
    echo" country Discount $country_discount";
    echo"<br>";
    echo" student Discount $student_discount";
    echo"<br>";
    echo"the final price is" .$price-$country_discount-$student_discount;
    }

}else{
    echo"Hello $name";
    echo"<br>";
    echo" country Discount $country_discount";
    echo"<br>";
    echo"the final price is $price-$country_discount";

}
echo'<br>';
/*
control structure
ternary operator =>short if
 */
//condition?True:False
$a=6;
echo $a>8?"Good":"Bad";
echo"<br>";
/*switch */
//switch syntax?
/*
switch(expression){
    case 1:
        //code block 1
        break;
    case 2:
        //code block 2
        break;
    case 3:
        //code block 3
        break;
    Default:
    //Default code Block
}
 */
$day="Sat";
switch($day){
    case "Sat":
        echo"Hello today is $day we are open from 10:16";
        break;
    case "Sun":
        echo"Hello today is $day we are open from 12:18";
        break;
    case"Mon":
    case"Thu":
        echo"Hello today is $day we are open from 08:12";
        break;
    Default:
    echo"Unknown Day";
}
