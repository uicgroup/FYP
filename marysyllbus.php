<style>
   table{
  align-content: center;
  font-size: 20px;
  width: 50%;
  margin-left: 25%;

   } 
</style>
<?php
 $completeurl = "http://www.cjmwaverley.org/book_list.aspx";
 ini_set('default_socket_timeout',120);
 set_time_limit(400);
 include('simple_html_dom.php');
 $html = file_get_html($completeurl);
 $table = array();
 $table2 = array();

 foreach ($html->find('table#table td') as $e) {

  if($e->innertext!=null)
    {
      $table[]= $e->innertext;
    }
 }
 $a =0;
 $b=1;
 $c=2;
 ?>
 <table border="1">
 <?php
 for ($i=0; $i < count($table); $i++) { 

     ?>
     
        <tr>
     <?php
     
     if($i == $a)
     {
       ?>
          <td><?php echo $table[$i];?></td>
       <?php
      
        $a = $a + 3;
        }
        else if($i == $b)
        {

          ?>
          <td><?php echo $table[$i];?></td>
       <?php

              
              $b = $b + 3;
        }
        else if($i==$c)
        {
          ?>
          <td><?php echo $table[$i];?></td>
        </tr>
       <?php
             
             $c = $c + 3;
        }

        


    
   # code...
 }
 ?>
      </table>
      <?php
 
?>