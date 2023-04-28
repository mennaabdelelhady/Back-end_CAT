<?php
/*filter_list() */
echo"<pre>";
print_r(filter_list());
echo"<pre>";

echo filter_id("boolean")."<br>";//258

$val=true;
if(filter_var($val,FILTER_VALIDATE_BOOL)){
    echo "This is True";

}else{
    echo "This is False";

}
echo "<br>";

$bool=true;

var_dump(filter_var($bool,FILTER_VALIDATE_BOOL,FILTER_NULL_ON_FAILURE));
echo "<br>";

$url="https://elzero.org";
var_dump(filter_var($url,FILTER_VALIDATE_URL));

echo "<br>";

$ip="192.168.2.1";
var_dump(filter_var($ip,FILTER_VALIDATE_IP));

echo "<br>";

$mac="00-B0-D0-63-C2-26";
var_dump(filter_var($ip,FILTER_VALIDATE_MAC));

$email="mmm@gmail.com";
var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));

$int=90.50;
var_dump(filter_var($int,FILTER_VALIDATE_INT,FILTER_NULL_ON_FAILURE));
echo "<br>";
var_dump(filter_var(   
    $int,
    FILTER_VALIDATE_INT,
["flags"=>FILTER_NULL_ON_FAILURE,"options"=>["min_range"=>50,"max_range"=>100]]
));

$float=90.50;
var_dump(filter_var($int,FILTER_VALIDATE_INT,FILTER_NULL_ON_FAILURE));
echo "<br>";
var_dump(filter_var(   
    $float,
    FILTER_VALIDATE_FLOAT,
["flags"=>FILTER_NULL_ON_FAILURE,"options"=>["min_range"=>50,"max_range"=>100]]
));

$emaiil="mm@mail.com";
var_dump(filter_var($emaiil,FILTER_SANITIZE_EMAIL));


 
