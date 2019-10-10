<?php include('header.php');?>
<div class="container-fluid">
<div class="row">
  <div class="col-md-12">
    <?php include('logoheader.php');?>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <?php include('navbar.php');?>
  </div>
</div>
<div class="row">
  <div class="col-md-8">

  <div class="col-md-12">

    <iframe width="600" height="480" src="https://www.youtube.com/embed/xY3Z8acE8ew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <!--  <iframe width="852" height="480" src="https://www.youtube.com/embed/UJBzHNQhwjE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div id="myModal" class="modal fade" role="dialog" style="margin-top: 5%;"> -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="gogogo"></h4>
      </div>
      <div class="modal-body">
     
         <div class="caption" style="padding:0;">
           <iframe id="player_vid" class="video" style="width:590px;height:270px;border-radius:1px"  width="460" height="800"  src="https://www.youtube.com/embed/UCFJoQo997MIqx-HV11XmlcA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
      
      <div class="row">
        <div class="col-md-12">
        <p id="gogo"></p>
      </div>
      </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  </div>
  <div class="col-md-4">
    
    <div id='videos' >

    </div>

  </div>
</div>
  
</div>


<div class="col-md-12">
  <div class="row">
      <div class="col-md-12">
        <?php include('feedbackform.php');?>
      </div>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src="js/abcgame.js" type="text/javascript"></script>
  <script  src="js/abcfun.js"></script>

<?php include('footer.php');?>