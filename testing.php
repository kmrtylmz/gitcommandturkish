<?php 

include "vendor/autoload.php";

use Nahid\JsonQ\Jsonq;

$server_var = json_encode($_SERVER ,JSON_FORCE_OBJECT); 

$b = @fopen('server.json' , 'w+');

$path = stream_resolve_include_path('server.json');

fwrite($b, $server_var);

fclose($b);


$jsonq = new Jsonq($path);

$json_clone = $jsonq->copy();  # Object okudugu zaman direk olarak Garbage Collector oluyor. O yüzden CLone edildi.

echo "REQUEST_METHOD :" . nl2br($jsonq->from('REQUEST_METHOD')->get() . "\n" . "SERVER_PROTOCOL :" . $json_clone->reset()->from('SERVER_PROTOCOL')->get() . "\n");



$file = $_SERVER['DOCUMENT_ROOT']. $_SERVER['REQUEST_URI'] . 'images' . '/' . 'trees.png';

echo file_exists($file) ?  "Dosya Bulundu" :  "Gitignore engelledi gitmedi."; 

printf("<br /> %d.ncu Commitide atalım" ,  3 );

clearstatcache();