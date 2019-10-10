<?php
 $completeurl = "https://alliedschools.edu.pk/admissions/#admission-criteria";
 ini_set('default_socket_timeout',120);
 set_time_limit(400);
 include('simple_html_dom.php');
 $html = file_get_html($completeurl);

 foreach ($html->find('tbody') as $e) {
  var_dump($e->innertext);
 }
?>