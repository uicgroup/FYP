<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('abouthead.php')?>
</head>
<body>
<div class="container-fluid">
	

<div class="row">
	<div class="col-md-12">
		<?php include('aboutlogo.php')?>
	</div>

<div class="col-md-12">
	<?php include('aboutnavbar.php')?>
</div>
<div class="col-md-12">
	<h1 class="text-primary" style="font-family: cursive; font-weight: bolder; font-size: 80px; text-align: center;"><?php echo $result = $trans->translate($source,$target,"ABOUT US");?></h1>
</div>
<div class="col-md-12">
	<?php include('aboutimg.php')?>
</div>
<div class="col-md-12" style="margin-top: 10px;">
	<h1 class="text-primary" style="font-family: sans-serif; font-size: 30px; font-weight: bolder;"><?php echo $result = $trans->translate($source,$target,"MISSION STATEMENT");?></h1>
	<p style="font-size: 25px; font-family: sans-serif;"><?php echo $result = $trans->translate($source,$target,"Provide a platform which help mothers finding solution regarding children’s health problems, can provide them basic education at home, and entertain their children with appropriate content which is according to our norms and values. Mothers can also find best nearby available clubs and We will design this platform especially for Pakistani mothers who are working");?>
		</p>
		<p style="font-size: 25px; font-family: sans-serif;"><?php echo $result = $trans->translate($source,$target,"Women or housewife. There are lots of content available and finding solution related to our problems is very difficult task. Keeping in the view needs of our Pakistani mothers we design this platform in this way where mother can find proper solution of their problems easily and it helps to educate their children according to need of the time.By accessing this single platform a Pakistani mothers can provide basic education to their child, entertain their them through videos of cartoon, Stories, Rhymes, which is according to our norms and values and as well as information regarding kids club their membership methods, activity, sport, games and membership rules & fee .Also mothers can see best schools in their area.");?>
        

	</p>
</div>
	<div class="col-md-12">
		<p class="text-primary bg-primary" style="text-align: center; font-size: 20px;"><?php echo $result = $trans->translate($source,$target,"© 2019 Copyright:");?></p>
    </div>
</div>
</div>
</body>
</html>