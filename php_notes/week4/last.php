<?php
echo round(disk_total_space("c:")/(1024*1024*1024)) ."<br>";
echo round(disk_free_space("c:")/(1024*1024*1024)) ."<br>";

var_dump(file_exists("elzero.txt"));
echo '<br>';
echo filesize("elzero.txt");

var_dump(is_dir("week3"));
echo'<br>';
var_dump(is_dir("elzero.txt"));
//mkdir("Test/Upload/Files",0777,true);
echo'<br>';
//rmdir("Test/Upload",0777,true);
var_dump(file_exists("Test/Upload/Files"));

echo'<br>';
//mkdir("Y",0700);
echo fileperms("Y")."<br>";
chmod("Y",0644);
clearstatcache();
echo fileperms("Y")."<br>";

echo basename(__FILE__)."<br>";
echo basename(__FILE__,".php")."<br>";

echo dirname(__FILE__,2);

echo realpath(__FILE__)."br";
echo"<pre>";
print_r(pathinfo(__FILE__));
echo"</pre>";

echo pathinfo(__FILE__)["extension"]."<br>";
echo pathinfo(__FILE__)["dirname"]."<br>";

echo pathinfo(__FILE__,PATHINFO_DIRNAME)."<br>";

$handle =fopen("elzero.txt","r");

echo fgets($handle,4);

echo fread($handle,1024);

fclose($handle);

$handle =fopen("elzero.txt","a+");

//echo fread($handle,1024);
fwrite($handle,"\r\n i love elzero web school");
fwrite($handle,"\r\n i love elzero web school",5);
fclose($handle);


echo '<pre>';
print_r(file("elzero.txt"));
echo '</pre>';

//echo count(file("elzero.txt"));

$handle =fopen("elzero.txt","r");
$line =1;
while( !feof($handle)){
    echo"Line $line=> ".fgets($handle)."<br>";
    $line++;
}

for($i=0;$i<count(file("elzero.txt"));$i++){
    echo"Line $line=> ".fgets($handle)."<br>";


}
fclose($handle);

$handle =fopen("elzero.txt","r");
echo fgets($handle)."<br>";
echo fgets($handle)."<br>";
echo fgets($handle)."<br>";
fclose($handle);

echo mb_strlen("Elzero\r\n","8bit");//8
//echo fgets($handle)."<br>";
//fseek($handle,-6,SEEK_END);


echo "<pre>";
print_r(glob("old/*.txt*"));
echo "</pre>";

//rename("old/Test.txt","Old/Testing.txt");

echo get_include_path()."<br>";

echo file_get_contents("elzero.txt",true,NULL,4,5);

echo file_put_contents("elzero.txt","\r\nhi <3");

echo date_default_timezone_get()."<br>";

echo date("Y-m-d H:I:s")."<br>";

date_default_timezone_set("Africa/cairo");
echo date("Y-m-d H:I:s")."<br>";

echo date_default_timezone_get()."<br>";

$d=date_create("",timezone_open("Indian/Antananarivo"));
echo date_format($d,"Y-m-d H:I:s");

var_dump(checkdate(10,25,1982));
echo"<br>";
var_dump(checkdate(31,2,1982));
echo"<br>";