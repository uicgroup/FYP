<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="text-align: center;">Gymboree Clubs Activites</h1>
</body>
</html>
<?php
 $completeurl = "http://www.gymboreeclasses.com.pk/classes_art.php";
 ini_set('default_socket_timeout',120);
 set_time_limit(400);
 include('simple_html_dom.php');
 $html = file_get_html($completeurl);

 foreach ($html->find('p') as $e) {

  var_dump($e->innertext);
 }
 // foreach ($html->find('img') as $e) {

 //  $image = $e->src;
 //   # code...
 // }
?>