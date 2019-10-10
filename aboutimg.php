<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/1246686.jpg" alt="Los Angeles" style="width: 100%; height: 400px;">
    </div>

    <div class="item">
      <img src="images/EDUCATION.jpg" alt="Chicago" style="width: 100%; height: 400px;">
    </div>

    <div class="item">
      <img src="images/KCLogo.png" alt="New York" style="width: 100%; height: 400px;">
    </div>
     <div class="item">
      <img src="images/gie5XAejT.jpg" alt="New York" style="width: 100%; height: 400px;">
    </div>
     <div class="item">
      <img src="images/download.jpg" alt="New York" style="width: 100%; height: 400px;">
    </div>
  </div>
 
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only"><?php echo $result = $trans->translate($source,$target,"Previous");?></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only"><?php echo $result = $trans->translate($source,$target,"Next");?></span>
  </a>
</div>