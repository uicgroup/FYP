<style>
  .info{
    font-size: 100px;
  }

</style>
<?php
 $completeurl = "http://www.dpsrwp.edu.pk/Procedure.aspx";
 ini_set('default_socket_timeout',120);
 set_time_limit(400);
 include('simple_html_dom.php');
 $html = file_get_html($completeurl);
   $data;
    foreach ($html->find('div.info p') as $e) {
  var_dump($e->innertext);
 }
?>