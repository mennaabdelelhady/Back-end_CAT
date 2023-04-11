<?php
/*
function 
introduction and dry concept
parameter
argument
 */

 function say_hello($someone){
    echo"Hello $someone<br>";

 }
 function say_hello_to($one,$two){
    echo"Hello $one $two<br>";

 }
 say_hello("menna");
 say_hello("merna");
 say_hello("asmaa");
 say_hello("sama");
 say_hello_to("injy","sara");

 function deep_freezer($item){
    if($item=="water"){
        echo"Make Ice <br>";
    }elseif($item==="coca cola"){
        echo"Make It Cold<br>";
    }elseif($item==="fruits"){
        echo"Make It Fresh<br>";
    }else{
        echo"Unknown item<br>";
    }
 }
 deep_freezer("water");
 deep_freezer("coca cola");
 deep_freezer("fruits");
 deep_freezer("TV");
 /*optional return &Null
 End after return */
 $prizes=["pc","PS","XBOX","TV","Lap","iphone"];

 function get_number($num_one,$num_two){
    return $num_one + $num_two;
    echo"will Not Echo Anthing";
 }
 //get_number(2,1);//3
 //echo $prizes[get_number(2,1)];
 //$prize_number=get_number(2,1);

 //$prize_number=get_number(2,1);
 //var_dump($prize_number);

 echo $prizes[get_number(2,1)];
echo"<br>";
 /*default parameter value
    using
    test data
    skip arguments 
*/
function get_data($country="private",$name="private",$age="private",$address="private address"){
    /*if($address===""){
        $address="Private Address";
    }*/
    $line_one="Your country is $country and your name is $name <br>";
    $line_two="Your Age is $age and you live in $address <br>";
    return $line_one.$line_two;
}
echo get_data("egypt","Menna",21);
echo get_data();
echo get_data(address:"Mansoura");
/*variable arguments list
  func_num_args()
  fun_get_arg(index) 
  fun_get_args() */
/*function calculate(...$nums){//spread syntax
    /*echo "Number Of Arguments".func_num_args()."<br>"; 
    echo "Argument Index Number.3 is ".func_get_arg(3)."<br>"; 
    print_r(func_get_args());
    $Result=0;
    foreach(func_get_args() as $arg):
        $Result +=$arg;
    endforeach;
    echo $Result;*/
   /* print_r($nums);
    $Result=0;
    foreach($nums as $num):
        $Result +=$num;
    endforeach;
    echo $Result;
}*/
//echo calculate(10,20,30,40,50,60,70,80);

echo"################<br>";

$group_of_skills=["html","css","JS","PHp"];
function get_daata($name,$country="private",...$skills){
    echo "hello $name your country is $country <br>";
    foreach($skills as $skill):
        echo"--$skill<br>";
    endforeach;
}
//get_daata("osama","Egypt",...$group_of_skills);
get_daata("osama","Egypt",...$group_of_skills);

echo"################<br>";

/*
variable function
php allow to use variable like function
when you append parantheses () to variable PHP will look for function that Name
Function Exists
function_exists("Func Name")
 */

 function one(){
    return "One From Function";
 }
 //echo one();

 $func1="one";
 echo $func1;
 echo'<br>';
 function say_helllo_to($someonne){
    return"hello $someonne";
 }
 $func2="say_helllo_to";
 echo $func2("menna");

 echo'<br>';

 function testing (){
    return "testing from function";
 }
 if(function_exists("testing")){
    echo testing();
 }else{
    echo"Function Not Found";
 }
 echo'<br>';
 //echo strlen("Elzero");
 $func3="strlen";
 echo $func3("elzero");
 echo'<br>';

 /*passing arguments by referance */
 function add_five(&$number){
    $number +=5;
    return $number;
 }
 $n=15;
 echo add_five($n).'<br>';//20
 
 echo $n.'<br>';//15

 function calculate($n1,$n2):int{
    return $n1+$n2;
 }

echo calculate(10.5,9.5).'<br>';

echo gettype(calculate(10.5,9.5));
echo'<br>';

/*anoymous function 
 when we create a function we give a name so we can call it later with that name
 sometimes we  need to create a function for a specific task <= this is not against dry*/

 //anonymous function in variable
 $say_hello=fn()=>"hello";
 
 echo $say_hello();
 echo'<br>';

 $say_helo=fn($smone)=>"hello $smone";
 echo $say_helo("menna");
 echo'<br>';

 $msg="Hi";
 $say_hi=function($smone)use($msg){
    return"$msg $smone";
 };
 echo $say_hi("menna");
 echo'<br>';
 //pass anonmyous function to function =>array_map
 $nums=[10,20,30,40,50];
 function add_three($item){
    return $item+3;
 }

 $nums_after_add=array_map("add_three",$nums);

 echo'<pre>';
 print_r($nums_after_add);
echo'</pre>';

$nums_after_adding_ten=array_map(fn($item)=> $item+10,$nums);

 echo'<pre>';
 print_r($nums_after_adding_ten);
echo'</pre>';


