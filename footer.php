<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase text-primary" style="font-size: 30px;"><?php echo $result = $trans->translate($source,$target,"Footer Content");?></h5>
          <p><?php echo $result = $trans->translate($source,$target,"Here you can use rows and columns here to organize your footer content");?>.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase text-primary" style="font-size: 30px;"><?php echo $result = $trans->translate($source,$target,"Navigation");?></h5>

            <ul class="list-unstyled">
              <li>
                <a href="moduletwo.php"><i class="fas fa-home fa-lg" style="color: #333; margin-right: 2px; font-size: 30px;padding: 15px 0px  15px 0px;"></i><?php echo $result = $trans->translate($source,$target,"Home");?></a>


              </li>
              <li>
                <a href="aboutus.php"><?php echo $result = $trans->translate($source,$target,"About");?></a>
              </li>
              <li>
                <a href="Maincontactpage.php"><i class="fas fa-phone fa-lg" style="color: #333; margin-right: 2px; font-size: 30px;padding: 15px 0px  15px 0px;"></i><?php echo $result = $trans->translate($source,$target,"Contact");?></a>
              </li>
              <li>
                <a href="helppage.php"><i class="fas fa-hands-helping" style="color: #333; margin-right: 2px; font-size: 30px;padding: 15px 0px  15px 0px;"></i><?php echo $result = $trans->translate($source,$target,"Help");?></a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase text-primary" style="font-size: 30px;"><?php echo $result = $trans->translate($source,$target,"Modules");?></h5>

            <ul class="list-unstyled">
              <li>
                <a href="modulesix.php"><i class="fas fa-female fa-lg" style="color: #333; margin-right: 10px; font-size: 30px; padding: 15px 0px  15px 0px;"></i><?php echo $result = $trans->translate($source,$target,"Mother Corner");?></a>
              </li>
              <li>
                <a href="modulethree.php"><i class="fas fa-book fa-lg" style="color: #333; margin-right: 30px; font-size: 30px; padding: 15px 0px  15px 0px;"></i><?php echo $result = $trans->translate($source,$target,"Basic Education");?></a>
              </li>
              <li>
                <a href="modulefour.php"><i class="fas fa-tv fa-lg" style="color: #333; margin-right: 20px; font-size: 30px; padding: 15px 0px  15px 0px;"></i><?php echo $result = $trans->translate($source,$target,"Entertainment");?></a>
              </li>
              <li>
                <a href="modulefive.php"><i class="fas fa-child fa-lg" style="color: #333; margin-right: 10px; font-size: 30px; padding: 15px 0px  15px 0px;"></i><?php echo $result = $trans->translate($source,$target,"Kids Clubs");?></a>
              </li>
              <li>
              	<a href="moduleseven.php"><i class="fas fa-info fa-lg" style="color: #333; margin-right: 10px; font-size: 30px; padding: 15px 0px  15px 0px;"></i><?php echo $result = $trans->translate($source,$target,"Schools Information");?></a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center bg-primary"><?php echo $result = $trans->translate($source,$target,"© 2019 Copyright:");?>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  <script type="text/javascript" src="jquery/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    $('#change').change(function(){

      var v= $('#change').val();
      
         
            
          
         
    
    });

  });
  

  </script>
</body>
</html>