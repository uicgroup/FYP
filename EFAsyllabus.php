<?php
 $completeurl = "http://efaschools.edu.pk/admission_process.php";
 ini_set('default_socket_timeout',120);
 set_time_limit(400);
 include('simple_html_dom.php');
 $html = file_get_html($completeurl);

 foreach ($html->find('div.content') as $e) {

  var_dump($e->innertext);
 }
?>