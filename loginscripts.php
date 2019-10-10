<?php

?>
<script type="text/javascript" src="particles.min.js.download"></script>
<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="particlesRun.js.download"></script>
	<script type="text/javascript" >
		
		$(document).ready(function(){

			$('#loginbtn').click(function(){


				var password = $('#password').val();
				var UserName = $('#UserName').val();
				$.ajax({
                        type:'Post',
                        url:'ParitalViews/checkuser.php',
                        data:{
                        	'password':password,
                        	'UserName':UserName
                        },
                        success:function()
                        {
                        	alert("Asda");
                        }
				});
			});


		});
	</script>