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
            <a href="#" class="navbar-brand"style="color: white;">Kids Care Platform</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#" style="color: white;"><i class="fas fa-home fa-lg" style="color: white; margin-right: 2px;"></i><?php echo $result = $trans->translate($source,$target,"Home");?></a></li>
                <li class="active"><a href="#" style="color: white;"><i class="fas fa-info fa-lg" style="color: white; margin-right: 2px;"></i><?php echo $result = $trans->translate($source,$target,"About us");?></a></li>
        <li class="active"><a href="#" style="color: white;"><i class="fas fa-phone fa-lg" style="color: white; margin-right: 2px;"></i><?php echo $result = $trans->translate($source,$target,"Contact us");?></a></li>
        <li class="active"><a href="#" style="color: white;"><i class="fas fa-hands-helping" style="color: white; margin-right: 2px;"></i><?php echo $result = $trans->translate($source,$target,"Help");?></a></li>
                
                 <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;"><i class="fas fa-tv fa-lg" style="color: white; margin-right: 2px;"></i>
                    <?php echo $result = $trans->translate($source,$target,"Basic Education");?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
        <li><a href="modulefive.php" class="btn btn-primary" style="color: white;"><?php echo $result = $trans->translate($source,$target,"Kids Clubs");?></a></li>
    <li><a href="moduleseven.php" class="btn btn-primary" style="color: white;"><?php echo $result = $trans->translate($source,$target,"Schools Information");?></a></li>
                        <li><a href="modulefour.php" class="btn btn-primary" style="color: white;"><?php echo $result = $trans->translate($source,$target,"Entertainment");?></a></li>
<li><a href="modulesix.php" class="btn btn-primary" style="color: white;"><?php echo $result = $trans->translate($source,$target,"Mother Corner");?></a></li>
                      ...
                    </ul>
                  </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" style="color: white;"><?php echo $result = $trans->translate($source,$target,"Login");?></a></li>
            </ul>

        </div>
    </div>
</nav>