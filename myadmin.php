<?
$file = "db.json";
$json = $_POST['json'];

$json[] = ["first" => "zfirst", "last" => "zlast"];
$json[] = ["first" => "zfirst", "last" => "zlast"];

// if(isset($json) && is_array($json))
file_put_contents($file, json_encode($json));

$json = json_decode(file_get_contents($file),TRUE);
