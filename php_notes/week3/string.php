<?php
/* 
access elements
string is array of character
access elements by index "zero based indexing"
negative index are allowed
update elements
add new elements
search
single -byte and multi-byte */


$str="elzero";

echo"first letter is $str[0]<br>";
echo"4th letter is $str[3]<br>";
echo"Number of letters ".strlen($str);
echo"last letter is {$str[strlen($str)-1]}<br>";
echo"last letter is $str[-1]<br>";

echo $str."<br>";
$str[0]='a';
echo $str."<br>";

/*
string functions
lcfirst(string[required])//lower first character
ucfirst(string[required])//upper first character
strtolower(string[required])
strtoupper(string[required])
ucwords(string[required],Delimiters[optional])
str_repeat(string[required],count[required])
 */
echo lcfirst("Elzero Web School")."<br>";
echo ucfirst("elzero web school")."<br>";
echo strtolower("ELZERO WEB SCHOOL")."<br>";
echo strtoupper("elzero web school")."<br>";
echo ucwords("elzero web school")."<br>";
echo ucwords("elzero web |school","|")."<br>";
echo str_repeat("Menna ",3)."<br>";

/*
implode(separator[optional],Array[Required])=>join() is alias
explode(separator[required],string[required],limit[optional])
str-shuffle(string[required])
strrev(string[required])
trim(string[required],charslist[optional])
ltrim(string[required],charslist[optional])
rtrim(string[required],charslist[optional])
space ""
tab \t
new line \n
carriage return \r
vertiicaal tab "\x08"
NULL "\0"
 */

 $friends=["sama","asmaa","nada","menna"];

 echo implode(" ",$friends)."<br>";
 echo implode(",",$friends)."<br>";
 echo implode("@@",$friends)."<br>";
 echo implode("",$friends)."<br>";
 echo implode($friends)."<br>";

 $strr="Elzero web school is cool";

 echo"<pre>";
 print_r(explode(" ",$strr));
 echo"</pre>";

 echo"<pre>";
 print_r(explode("i",$strr));
 echo"</pre>";

 echo"<pre>";
 print_r(explode(" ",$strr,4));
 echo"</pre>";

 echo"<pre>";
 print_r(explode(" ",$strr,-4));//return string -last 4 words
 echo"</pre>";

 echo str_shuffle("Elzero")."<br>";
 echo strrev("Elzero")."<br>";

 echo strlen("   Elzero  ")."<br>";
 echo strlen(trim("   Elzero  "))."<br>";


 echo trim("###Elzero##","#")."<br>";
 echo trim("###@@Elzero@@##","#@")."<br>";// just el2traf aywa ya mohsen ya hala2
 echo rtrim("###@@Elzero@@##","#@")."<br>";
 echo ltrim("###@@Elzero@@##","#@")."<br>";
 /*
 chunk_split(string[Required],Length[Optimal],end[Optional])
 strlen(string[Required])
 str_split(String[Required],Length[Optional])
 strip_tags(String[Required],Allowed[Optional])
 nl2br(String[Required],XHTML[Optional])
  */

  echo chunk_split("Elzero Web School",3,"@")."<br>";

  echo'<pre>';
  print_r(str_split("Elzero"));
  echo'</pre>';

  echo'<pre>';
  print_r(str_split("Elzero",2));
  echo'</pre>';

echo strip_tags("<h3>Hello <b>Elzero</b></h3>")."<br>";

echo "<h3>Hello <b>Elzero</b></h3>"."<br>";

echo strip_tags("<h3>Hello <b>Elzero</b></h3>","<h3>")."<br>";

echo nl2br("Elzero\nweb\nschool");

echo nl2br("Elzero\nweb\nschool",false);
echo"<br>";

/*
strpos(String[Required],Value[Required],Start Position[Optional])Case-Sensitive
strrpos(String[Required],Value[Required],Start Position[Optional])Case-Sensitive
stripos(String[Required],Value[Required],Start Position[Optional])Case-Sensitive
strripos(String[Required],Value[Required],Start Position[Optional])Case-Sensitive
substr_count(String[Required],Value[Required],Start Position[Optional],Length[optional])
 */
var_dump(strpos("Hello Hello","H"));//0
echo"<br>";
var_dump(strpos("Hello Hello","H",3));//6
echo"<br>";
var_dump(strpos("Hello Hello","H",6));//6
echo"<br>";
var_dump(strpos("Hello Hello","h"));//false
echo"<br>";
var_dump(stripos("Hello Hello","h"));//0
echo"<br>";
var_dump(strripos("Hello Hello","h"));//6
echo"<br>";
var_dump(strpos("Hello Hello","H",-2));//false
echo"<br>";
var_dump(strpos("Hello Hello","H",-5));//6
echo"<br>";
var_dump(strpos("Hello Hello","H",-11));//0
echo"<br>";
var_dump(strrpos("Hello Hello","H"));//6
echo"<br>";
var_dump(strrpos("Hello Hello","H",5));//6
echo"<br>";
var_dump(substr_count("Hello Hello","He"));//2
echo"<br>";
var_dump(substr_count("Hello Hello","He",1));//1
echo"<br>";
var_dump(substr_count("Hello Hello","He",1,7));//1
echo"<br>";
var_dump(substr_count("Hello Hello","He",1,6));//0
echo"<br>";
var_dump(substr_count("abcdabcd","abcd"));//2
echo"<br>";
var_dump(substr_count("abcdabcda","abcda"));//1
echo"<br>";

/*
parse_str(String[Required],Array[Required])
quotemeta(string[Required])
str_pad(string[Required],Length[Required],String[optional],Pad Flag[Optional])
STR_PAD_BOTH
STR_PAD_LEFT
STR_PAD_RIGHT
strtr(String[Required],From[Required],To[Required])|| strtr(string[Required],Array[Required])
 */
parse_str("name=Osama&email=jjj@gh&os=mac",$query);

echo'<pre>';
print_r($query);
echo'</pre>';

echo $query["name"]."<br>";
echo $query["email"]."<br>";
echo $query["os"]."<br>";

echo "Hello [] () * + . <br>";
echo quotemeta("Hello [] () * + . <br>");

echo str_pad("12",8)."<br>";
echo str_pad("321",8)."<br>";
echo str_pad("1313",8)."<br>";
echo str_pad("15435",8)."<br>";
echo str_pad("500432",8)."<br>";

echo strlen(str_pad("12",8))."<br>";//8

echo str_pad("12",8,0)."<br>";
echo str_pad("321",8,0)."<br>";
echo str_pad("1313",8,0)."<br>";
echo str_pad("15435",8,0)."<br>";
echo str_pad("500432",8,0)."<br>";

echo str_pad("12",8,0,STR_PAD_BOTH)."<br>";

echo str_pad("12",8,0,STR_PAD_LEFT)."<br>";
echo str_pad("321",8,0,STR_PAD_LEFT)."<br>";
echo str_pad("1313",8,0,STR_PAD_LEFT)."<br>";
echo str_pad("15435",8,0,STR_PAD_LEFT)."<br>";
echo str_pad("500432",8,0,STR_PAD_LEFT)."<br>";

echo strtr("E@zero web schoo@","@","l");
echo "<br>";
$trans=["@"=>"l","##"=>"oo"];
echo strtr("E@zero web sch##@",$trans)."<br>";

/*str_replace(Find[Required],Replace With[Required],Data[Required],Replace Count[Optional]) 
  its case sensitive
  str_ireplace(Find[Required],Replace With[Required],Data[Required],replace Count[Optional])*/

echo str_replace("@","o","Elzer@ web sch@@l",$r);
echo'<br>';
echo "Replaces Count is $r"."<br>";
echo str_replace(["#","@"],"o","Elzer@ web sch@@#")."<br>";
echo str_replace(["#","@"],["l","o"],"Elzer@ web sch@@#");

echo'<pre>';
print_r(str_replace(["one","two","three"],[1,2,3],["one","two","three","one"]));
echo'</pre>';
echo "<br>";

echo substr_replace("oneTwo",1,0);//1
echo "<br>";
echo substr_replace("oneTwo",1,3);//one1
echo "<br>";
echo substr_replace("oneTwo",1,5);
echo "<br>";
echo substr_replace("oneTwo",2,2);//on2
echo "<br>";
echo substr_replace("oneTwo",2,2,2);//on2wo
echo "<br>";
echo substr_replace("oneTwo",2,1,4);//o2o
echo "<br>";


$strrr ="welcome To Elzero";
echo strlen($strrr)."<br>";
echo wordwrap($strrr,8,"<br>");

echo chr(97);//a
echo"<br>";
echo similar_text("Elz_ero","Elz_eroo");
echo"<br>";
echo similar_text("Elzero","Elzero",$perc);
echo"<br>";
echo $perc;

echo"<br>";

echo strstr("Elzero Web","W")."<br>";
echo strstr("Elzero Web","W",true)."<br>";

echo 10_000_000;
echo"<br>";

echo number_format(10000000.156023,3);
echo"<br>";
echo number_format(10000000.156023,3,"@");
echo"<br>";
echo number_format(10000000.156023,3,"@","A");
echo"<br>";