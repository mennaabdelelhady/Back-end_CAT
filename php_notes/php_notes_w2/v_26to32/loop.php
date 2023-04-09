<?php
/*
control structure
loop
while
 */
$i=1;
while($i<=3){
    echo"$i<br>";
    $i++;

}
echo"<br>";
$a=1;
while($a<=3):
    echo"$a<br>";
    $a++;
endwhile;
echo"<br>";
//dowhile
$i=1;
do {
    echo"$i<br>";
    $i++;

}while($i<=3);
echo"<br>";
//loop with for
for($i=1;$i<=5;$i++){
    if($i==4)continue;
    echo"$i<br>";
}
echo"<br>";
for($i=1;;$i++){
    if($i==4)break;
    echo"$i<br>";
}
echo"<br>";
/*foreach */
$countries=["EG","SA","QA","SY"];
echo'<pre>';
print_r($countries);
echo'</pre>';
foreach($countries as $country){
    echo"$country<br>";

}

$countries_with_discount=["EG"=>50,"SA"=>30,"QA"=>50,"SY"=>70];
echo'<pre>';
print_r($countries_with_discount);
echo'</pre>';

foreach($countries_with_discount as $country=>$discount){
    echo"Country Name Is $country And Discount Is $discount <br>";
}
echo"<br>";
$countries=["EG","SA","QA","SY","USA","GER"];
foreach($countries as $country){
    echo"$country<br>";
    if($country=="USA"){
        //break;will not print USA & GER and stop
        continue;//will not print USA only
    }
}
echo"##########<br>";

include_once("test.php");//$a=10;
echo $a.'<br>';
$a=20;
include_once("test.php");//$a=10;
echo $a.'<br>';
echo"Continue";
