<!DOCTYPE html>
<html lang="en">
<head>
<?
$hd = 'http://new.com/dev/shopjs/';
   $args = explode('/', trim($_SERVER['QUERY_STRING'],'/'));
      $i = 0;
       foreach ($args as $k => $v) {
          $i++;
         if($i%2 == 0)
           $p[$args[$i - 2]] = $v;      
       }

$slug = $p['c'] ? $p['c'] : $p['p']; 
$type = $p['c'] ? 'cat' : 'pro'; 
?>
  <meta charset="UTF-8">
  <base href="<?=$hd?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ShopJS</title>
</head>
<body>
<?


echo $type.'/'.$slug;
/*
$json = '[
  {"title":"trench", "img":"https://i.imgur.com/HoPQJqI.jpg"},
  {"title":"coat"}
  ]';
$data = [
  ["title"=>"stuff","img"=>"omg"],
  ["title"=>"stuff"]
  ];
 $mydata = json_decode($json);

 foreach ($mydata as $v):
    if ($v->title == $id) {
     $item = $v->title; // 1234
    break;
 }
 endforeach;

  echo $item ? "<h2>$item</h2>" : '404';


  $f = include 'array.txt';
  print_r($f);
*/  
?>
<nav>
<a href="p/trench" title="trench">P1</a>
<a href="p/coat" title="coat">P2</a>
</nav>
<h1 id="title"><?=$slug?></h1>
<script>
  var slug = '<?=$slug?>',
    hd = '<?=$hd?>';
</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?=$hd?>main.js"></script>
</body>
</html>