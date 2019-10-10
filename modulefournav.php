<nav class="nav nav-tabs bg-primary" >
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" style="color: blue;">sss</span>
                <span class="icon-bar" style="color: blue;"></span>
                <span class="icon-bar" style="color: blue;"></span>
            </button>
            <a href="#" class="navbar-brand"style="color: white;"><?php echo $result = $trans->translate($source,$target,"Kids Care Platform");?></a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="moduletwo.php" style="color: white;" target="_blank"><i class="fas fa-home fa-lg" style="color: white; margin-right: 2px;"></i><?php echo $result = $trans->translate($source,$target,"Home");?></a></li>
                <li class="active"><a href="about.php" style="color: white;" target="_blank"><i class="fas fa-info fa-lg" style="color: white; margin-right: 2px;"></i><?php echo $result = $trans->translate($source,$target,"About Us");?></a></li>
                <li class="active"><a href="Maincontactpage.php" style="color: white;" target="_blank"><i class="fas fa-phone fa-lg" style="color: white; margin-right: 2px;"></i><?php echo $result = $trans->translate($source,$target,"Contact Us");?></a></li>
                <li class="active"><a href="helppage.php" style="color: white;" target="_blank"><i class="fas fa-hands-helping" style="color: white; margin-right: 2px;"></i><?php echo $result = $trans->translate($source,$target,"Help");?></a></li>
                
                 <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;" target="_blank"><i class="fas fa-tv fa-lg" style="color: white; margin-right: 2px;"></i>
                       <?php echo $result = $trans->translate($source,$target,"Basic Education");?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="modulefive.php" class="btn btn-primary" style="color: white;" target="_blank"><?php echo $result = $trans->translate($source,$target,"Kids Clubs");?></a></li>
                        <li><a href="moduleseven.php" class="btn btn-primary" style="color: white;" target="_blank"><?php echo $result = $trans->translate($source,$target,"Schools Information");?></a></li>
                        <li><a href="modulefour.php" class="btn btn-primary" style="color: white;" target="_blank"><?php echo $result = $trans->translate($source,$target,"Entertainment");?></a></li>
                <li><a href="modulesix.php" class="btn btn-primary" style="color: white;" target="_blank"><?php echo 
                $result = $trans->translate($source,$target,"Mother Corner");?></a></li>
                    </ul>
                  </li>


                  <!--  <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;"><i class="fa fa-user" aria-hidden="true"style="color: white; margin-right: 2px; font-size: 20px;"></i>
                       <?php echo $result = $trans->translate($source,$target,"Profile");?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="edit.php" class="btn btn-primary" style="color: white;"><?php echo $result = $trans->translate($source,$target,"Edit Profile");?></a></li>
                        <li><a href="" class="btn btn-primary" style="color: white;"><?php echo $result = $trans->translate($source,$target,"View Profile");?></a></li>
                        
                    </ul>
                  </li> -->
                  <li>
                    <div class="form-group" >
                        <form method="post" action="modulefour.php">
            <select name="lang" class="form-control"  style="color:black;font-size: 20px; margin-top: 6px;"><option  value="en">English</option><option value="sd">Sindhi</option><option value="ur-PK">Urdu</option ><option value="ps">Phisto</option></select>
            <button class="btn btn-primary">Change Language</button>
             </form>
        </div>
                  </li>
            </ul> 
        </div>
    </div>
</nav>