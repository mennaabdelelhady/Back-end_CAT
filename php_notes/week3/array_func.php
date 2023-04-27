<?php
$friends =["omnia","Menna","Maram","Sama","Nada"];

echo current($friends)."<br>";//"omnia"
echo next($friends)."<br>";//"Menna"
echo prev($friends)."<br>";//"omnia"
echo next($friends)."<br>";//"Menna"
echo reset($friends)."<br>";//"omnia"
 
echo"<pre>";
print_r(array_chunk($friends,2,True));
echo"</pre>";

$countries=["EG"=>"Egypt","KSA"=>"Sadi Arabia","Sy"=>"Syria","USA"=>"United States"];

echo'<pre>';
print_r(array_change_key_case($countries));
echo'</pre>';
print_r(array_change_key_case($countries,CASE_UPPER));

echo'<pre>';
print_r(array_flip($countries));
echo'</pre>';

$Keys=["A","O","K"];
$Values=["Ahmed","Osama","Kamal"];

echo'<pre>';
print_r(array_combine($Keys,$Values));
echo'</pre>';

$counting =["A","B","C",["1",2,3,4]];
echo count($counting);
echo"<br>";
 
/*echo'<pre>';
print_r(array_count_values($counting));
echo'</pre>';*/

$search =["1",2,3,4];
if(in_array("1",$search)){
    echo "is found"."<br>";
}

$courses =[
    "JS"=>100,
    "PHP"=>100,
    "HTML"=>60,
    "CSS"=>65
];
if(array_key_exists("PHP",$courses)){
    echo"found and cost is".  $courses["PHP"];
} 

$pad=["A","B","C","D"];
echo'<pre>';
print_r(array_pad($pad,10,"@"));
echo'</pre>';

echo'<pre>';
print_r(array_pad($pad,-10,"@"));
echo'</pre>';

$product=[10,5,2,10];
echo array_product($product);
echo"<br>";

$sum=[10,5,2,10];
echo array_sum($sum);
echo"<br>";

$merge_one=["One"=>"PHP","Two"=>"CSS","Three"=>"JavaScript"];
$merge_two=["one"=>"HTML","Four"=>"Python"];
echo'<pre>';
print_r(array_merge($merge_one,$merge_two));
echo'</pre>';

$merge_three=[10=>"PHP",20=>"CSS",30=>"JavaScript"];
$merge_four=[40=>"HTML",10=>"Go"];

echo'<pre>';
print_r(array_replace($merge_three,$merge_four));
echo'</pre>';

$main=["One"=>"PHP","Two"=>"CSS","Three"=>"JavaScript"];
$replace=["one"=>"HTML","Four"=>"Python"];

echo'<pre>';
print_r(array_replace($main,$replace));
echo'</pre>';

$nums=[1,2,3,4,5];
echo $nums[array_rand($nums)]."<br>";
echo'<pre>';
print_r(array_rand($nums,3));
echo'</pre>';

shuffle($nums);
echo'<pre>';
print_r($nums);
echo'</pre>';


$chars=["A","B","C","D"];

$first=array_shift($chars);

echo "$first<br>";//"A"

echo '<pre>';
print_r($chars);
echo '</pre>';

$last=array_pop($chars);

echo "$last<br>";//"D"

echo '<pre>';
print_r($chars);
echo '</pre>';

array_push($chars,"X","Y","Z");
echo '<pre>';
print_r($chars);
echo '</pre>';

$chars[]="1";
echo '<pre>';
print_r($chars);
echo '</pre>';

array_unshift($chars,"One","Two","Three");
echo '<pre>';
print_r($chars);
echo '</pre>';

$chaars=["A","B","C","D","E","F","G"];
$chaars_with_string_keys=["A"=>1,"8"=>2,"C"=>3];
$chaars_with_numeric_keys=[10=>1,20=>2,30=>3];

echo'<pre>';
print_r(array_slice($chaars,2));
print_r(array_slice($chaars,-4));
print_r(array_slice($chaars,2,3));
print_r(array_slice($chaars,2,-2));
echo'</pre>';

$numss=[10,20,30,40,50,60,70];

echo'<pre>';
print_r(array_splice($numss,2,1,["One","Two"]));
print_r($numss);
echo'</pre>';

$names =["Osama","Ahmed","Sayed","Sameh","Gaml"];

sort($names);

echo '<pre>';
print_r($names);
echo '</pre>';

rsort($names);

echo '<pre>';
print_r($names);
echo '</pre>';

$country=["S"=>"syria","E"=>"Egypt","I"=>"Iraq","Q"=>"Qatar"];
asort($country);
echo '<pre>';
print_r($country);
echo '</pre>';

arsort($country);
echo '<pre>';
print_r($country);
echo '</pre>';

$codes=["1"=>"syria","3"=>"Egypt","2"=>"Iraq","5"=>"Qatar"];

ksort($codes);
echo '<pre>';
print_r($codes);
echo '</pre>';

$files=["Photo1.png","Photo20.png","Photo3.png"];
echo'<pre>';
print_r($files);
echo'</pre>';

sort($files);
echo'<pre>';
print_r($files);
echo'</pre>';

natsort($files);
echo'<pre>';
print_r($files);
echo'</pre>';

function add_title($fname,$lname){
    return "Hello MR $fname $lname";
}

//echo add_title("Osama");

$first_names=["Osama","Ahmed","Sayed","Mahmoud","Sameh","Gamal"];
$last_names=["Ameer","Samy","Shady","Amr","Mohamed","Ibrahim"];

echo'<pre>';
print_r(array_map("add_title",$first_names,$last_names));
print_r(array_map(fn($f,$l)=>"Hello Mr $f $l",$first_names,$last_names));
echo'</pre>';

$numsss=[
    1=>3,
    6=>1,
    3=>2,
    4=>8,
    5=>4
];

function check_numsss($n,$n2){
    return $n>4 || $n2>4;
}
echo'<pre>';
print_r(array_filter($numsss,"check_numsss",ARRAY_FILTER_USE_BOTH));
echo'</pre>';

//array reduce
function add($carry,$item){
    echo "$carry<br>";
    echo "$item<br>";
    echo $carry+$item ."<br>";
    echo "############<br>";
    return $carry + $item;
}
$numms=[10,20,50,100,10];
echo array_reduce($numms,"add",100);


