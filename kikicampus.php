<?php
 $completeurl = "http://www.kidskampus.edu.pk/search.php?x=0&y=0&Keywords=Activiti";
 ini_set('default_socket_timeout',120);
 set_time_limit(400);
 include('simple_html_dom.php');
 $html = file_get_html($completeurl);

 foreach ($html->find('div#Search') as $e) {

  var_dump($e->innertext);
 }
 // foreach ($html->find('img') as $e) {

 //  $image = $e->src;
 //   # code...
 // }
?>