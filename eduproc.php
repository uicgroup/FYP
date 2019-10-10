<style>
     h4{
      font-size: 20px; 
      text-align: center;
      font-family: serif;
     }
</style>
<?php
 $completeurl = "https://www.educatorspegs.com/admissions";
 ini_set('default_socket_timeout',120);
 set_time_limit(400);
 include('simple_html_dom.php');
 $html = file_get_html($completeurl);
$heading = array();
$li = array();
 foreach ($html->find('div.ser-left-grid.col-md-6 h4') as $e) {

  $heading[] =$e->innertext;
 }
  foreach ($html->find('div.ser-left-grid.col-md-6 p') as $e) {

  $li[] =$e->innertext;
 }
 $image;
 // foreach ($html->find('img.img-responsive.zoom-img') as $e) {

 //  $image = $e->src;
 //   # code...
 // }
 $count=0;
 for ($i=0; $i < count($heading)-2 ; $i++) { 
     
     
     if($i==0)
     {
      echo $heading[$i]."<br>";
       ?>
       <!-- <img src="<?php echo $image; ?>"> --><br> 
       <?php
        
     }
     else
     {
         echo $heading[$i]."<br>";;
       for ($j=$count; $j< count($li); $j++) { 
           echo $li[$j]."<br>";;
           break;
       }
       $count = $count +1;
     }

    

 }


?>
