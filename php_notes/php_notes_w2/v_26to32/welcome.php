<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* 
    operations
    used to perform operations on values
    string operations
    concatenate stringssss
*/
define("elzero","1");
$a = "elzero";
$b = "web";
$c = "school";
echo "$a $b $c";
echo'<br>';
echo "{$a} {$b} {$c}";
echo'<br>';
echo $a.$b.$c;/*no space */
echo'<br>';
echo $a." ".$b." ". $c;
echo'<br>';
echo "{$a} {$b} {$c}".elzero." ".testing();

function testing(){
    return 1;
}
$x="elzero";
$x.="web";//$x=$x+"web"=>elzero web
$x.="school";//$x=$x+"school";=>elzero web school
$arr1=[1=>"A",2=>"B"];
$arr2=[3=>"C",4=>"D"];
$arr3=$arr1 +$arr2;
echo'<pre>';
print_r($arr1 + $arr2);
echo'<pre>';
print_r($arr3);
echo'<pre>';

$arr4=[1=>"10",2=>"20"];
$arr5=[2=>20,1=>10];

var_dump($arr4==$arr5);/*same key,same value,return bool(true) */

$arr6=[1=>"100",2=>"200"];
$arr7=[1=>100,2=>200];

var_dump($arr6===$arr7);//identical check,key,order,value

/*error control operator
  control the errors
  @
  variable
  file
  include */
  $a=10;
  $b=@$a or die("variable not found");

  echo "Test $b";
  echo'<br>';

  //file
  $f=file("osama.txt");
  echo'<pre>';
  print_r($f);
  echo'</pre>';

  $f=@file("osama.txt") or die("file not found");//@ avoid the error if file not available
  echo'<pre>';
  print_r($f);
  echo'</pre>';

  //include
  include("osama.php");//note:the pre file must be found that the next will run
  echo'<br>';
  //(@include("osama_elzero.php"))or die("include file not found");

  /* 
  operators
  used to perform operations on values.

  operator precedence
  "||"has a greater precedence than"or"
  "&&"has a greater precedence than"and"
  */
  echo 2 + 4 * 5 ; //22
  echo'<br>';
  echo (2 + 4) * 5; //30
  echo'<br>';
  echo 10 || false || 0 || [] ||" ";//true=>1
  echo'<br>';
  echo true;
  echo'<br>';
  var_dump(10||false||0||[]||"");//true
  echo'<br>';
  $a=10||false;
  echo$a;

  echo'<br>';

$b=10 or false;
echo $b;//10
/*
control structure
if,elseif,else

syntax
if(condition){
    //if condition is true <=run me
}
 */
echo'<br>';
if(10>5){
    echo"first condition";
}elseif(10>5){
echo"second condition";
}
else{
    echo"no";
}
echo'<br>';

$page = "about";

if($page=="about"){
echo"this is the page";
}
echo'<br>';
$title ="home";
if($title==""){
echo"unknown";
}else{
    echo $title;
}
echo'</br>';

$lang="Arabic";
if($lang=="Arabic"){
    echo'مرحبا';
}elseif($lang =="English"){
    echo'Hello';
}else if($lang=="spanish"){
    echo'hola';
}else{
    echo'Unknown Language';
}
echo'<br>';

echo $_POST['username'];
echo'<br>';
echo $_POST['lang'];

if($_SERVER["REQUEST_METHOD"]==="POST"){
    echo $_POST['username'];
    echo'<br>';
    echo $_POST['lang'];

}

echo'<br>';

if($_SERVER["REQUEST_METHOD"]==="POST"){
     if($_POST['lang']=='ar'){
        header("location:ar.php");
        exit();
     }elseif($_POST['lang']=='en'){
        header("location:en.php");
        exit();
     }

}
echo'<br>';

if(10>5)echo"Good";
    ?>
    <form action="" method="POST">
        <input type="text" name="username">
        <select name="lang" id="">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="sp">Spanish</option>
        </select>
        <input type="submit" value="Go">
    </form>

</body>
</html>