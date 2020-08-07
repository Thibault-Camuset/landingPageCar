<?php
session_start();
?>

<html>
<head>
	<title></title>



	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



</head>
<body>


	<div id="container">
		<div id="contactImg">

			<img src="IMG/208_e208.jpg" alt="">

			
		</div>






		<div id="contactForm">






			

			<div id="finish">
				<h1>Votre demande est bien enregistrée!</h1>
				


				<!-- Boucle if pour vérifier si la checkbox est cochée ou non > Deux conditions -->

				<?php

				if(isset($_POST['gender'], $_POST['inputNom'], $_POST['inputPrenom'], $_POST['inputEmail'], $_POST['inputTelephone'], $_POST['inputAdresse'], $_POST['inputCodePostal'], $_POST['inputVille'], $_POST['inputPays'], $_POST['inputConcession'], $_POST['inputDate'],$_POST['inputHour']) AND !empty($_POST['inputPro']))
				{
					$gender=$_POST['gender'];
					$nom=$_POST['inputNom'];
					$prenom=$_POST['inputPrenom'];
					$pro=$_POST['inputPro'];
					$email=$_POST['inputEmail'];
					$telephone=$_POST['inputTelephone'];
					$adresse=$_POST['inputAdresse'];
					$codePostal=$_POST['inputCodePostal'];
					$ville=$_POST['inputVille'];
					$pays=$_POST['inputPays'];
					$concession=$_POST['inputConcession'];
					$date=$_POST['inputDate'];
					$hour=$_POST['inputHour'];


					$fp = fopen('PHP/data.txt', 'a+');
					fwrite($fp, $gender.' '.$nom.' '.$prenom."\n".$pro."\n".$email."\n".$telephone."\n".$adresse."\n".$codePostal.' '.$ville."\n".$pays."\n".$concession.' le '.$date.' entre '.$hour."\n".' '."\n");
					fclose($fp);
					
				} else {
					$gender=$_POST['gender'];
					$nom=$_POST['inputNom'];
					$prenom=$_POST['inputPrenom'];
					$email=$_POST['inputEmail'];
					$telephone=$_POST['inputTelephone'];
					$adresse=$_POST['inputAdresse'];
					$codePostal=$_POST['inputCodePostal'];
					$ville=$_POST['inputVille'];
					$pays=$_POST['inputPays'];
					$concession=$_POST['inputConcession'];
					$date=$_POST['inputDate'];
					$hour=$_POST['inputHour'];


					$fp = fopen('PHP/data.txt', 'a+');
					fputs($fp, $gender.' '.$nom.' '.$prenom."\n".$email."\n".$telephone."\n".$adresse."\n".$codePostal.' '.$ville."\n".$pays."\n".$concession.' le '.$date.' entre '.$hour."\n".' '."\n");
					fclose($fp);

				}

				?>




				<!-- Begin Mailchimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
				

<div id="mc_embed_signup" style="display:none">
	<form action="https://gmail.us17.list-manage.com/subscribe/post?u=115932eceba06a4ca1b4085e1&amp;id=d29de811ec" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<div id="mc_embed_signup_scroll">
			<h2>Subscribe</h2>
			<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
			<div class="mc-field-group">
				<label for="mce-FNAME">First Name </label>
				<input type="text" value="<?php echo $prenom; ?>" name="FNAME" class="" id="mce-FNAME">
			</div>
			<div class="mc-field-group">
				<label for="mce-LNAME">Last Name </label>
				<input type="text" value="<?php echo $nom; ?>" name="LNAME" class="" id="mce-LNAME">
			</div>
			<div class="mc-field-group">
				<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
				</label>
				<input type="email" value="<?php echo $email; ?>" name="EMAIL" class="required email" id="mce-EMAIL">
			</div>
			<div class="mc-field-group">
				<label for="mce-PHONE">Phone Number  <span class="asterisk">*</span>
				</label>
				<input type="text" value="<?php echo $telephone; ?>" name="PHONE" class="l" id="mce-PHONE">
			</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" ></div>
				<div class="response" id="mce-success-response" ></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div  aria-hidden="true">
				<input type="text" name="b_115932eceba06a4ca1b4085e1_d29de811ec" tabindex="-1" value=""></div>
			<div class="clear">
				<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		</div>
	</form>
</div>


<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->




<script type='text/javascript'>

	function clickOnBtn() {
		document.getElementById('mc-embedded-subscribe').click();
	}

	window.setTimeout(clickOnBtn(), 2000);

 </script>

</div>



</div>




</div>

<a id="logo" href="index.php">
	<img src="IMG/logoPeugeot.png" alt="Logo de Peugot">
</a>


</div>












<script type="text/javascript" src="JS/script.js"></script>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>