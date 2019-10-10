<?php
 	include("login.php");

?>
 <div class="modal fade" tabindex="-1" id="loginModal"
                     data-keyboard="false" data-backdrop="static">

                    <div class="modal-dialog">
<div class="col-md-12">
<div class="modal-content">

                                <button type="button" class="close" data-dismiss="modal">
                                    &times;
                                </button>

                            <div class="modal-body">

                           <form class="log" action="welcome.php" method="POST">
                                	<h4>Login</h4>
				               <!--  <img class="img img-reponsive img-circle im1" src="images/Custom-Icon-Design-Pretty-Office-8-User-blue.ico"> -->
		                         <!-- DIV ONE -->
		                         
		                      <div class="form-group">
			                 <label>USER NAME:</label>
			                 <input type="text" name="user" class="form-control" placeholder="USER NAME">
		                       </div>
		                       <div class="form-group">
			 					<label>PASSWORD:</label>
							<input type="password" name="pass" class="form-control" placeholder="PASSWORD">
								</div>
<a href="moduletwo.php" name="submit" class="btn btn-primary  butn" style="width: 20%; margin-top: 10px;">SIGN UP</a>
<a href="moduleone.php" name="submit"class="btn btn-success butn" style="width: 20%; margin-top: 4px;">UPDATE</a>
		<a href="viewprofile.php" name="submit" class="btn btn-info" butn" style="width: 20%; margin-top: 4px;">VIEW</a>
			 <a href="" id="btnHideModal"  class="btn btn-danger" style="width: 20%; margin-top: 4px;"> CLOSE</a>
			 <div>	
		 <a href="moduleone.php" class="acr" style="margin-top: 10px; font-size: 20px;">Create an account</a></div>
               </form>
               </div>
               </div>
                        </div>
                    </div>
                </div> 

 <script type="text/javascript">
        $(document).ready(function () {
            $("#btnShowModal").click(function () {
                $("#loginModal").modal('show');
            });

            $("#btnHideModal").click(function () {
                $("#loginModal").modal('hide');
            });
             $('#loginModal').on('show.bs.modal', function () {
                alert('Modal is about to be displayed');
            });
            $('#loginModal').on('shown.bs.modal', function () {
                alert('Modal is displayed');
            });

            $('#loginModal').on('hide.bs.modal', function () {
                alert('Modal is about to be hidden');
            });
            $('#loginModal').on('hidden.bs.modal', function () {
                alert('Modal is hidden');
            });
        });
    </script>