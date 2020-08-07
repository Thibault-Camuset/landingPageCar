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




			<div id="infoPerso">
				<h2>Vos informations personnelles</h2>
				<p>Tous les champs sont obligatoires</p>
			</div>



			<form id="regForm" action="essai2.php" method="POST">



				
				<div class="tab">
					<label id="inputMr">M.
						<input type="radio" value="M." name="gender" checked>
						<span class="checkmark2"></span>
					</label>

					<label id="inputMme">Mme
						<input type="radio" value="Mme" name="gender">
						<span class="checkmark1"></span>
					</label>

					


					<br/>
					<br/>

					<label id="inputPro">Je suis un(e) professionnel(le)
						<input type="checkbox" value="Est un(e) Professionnel(le)" name="inputPro">
						<span class="checkmark3"></span>
					</label>



					


					<input type="text" placeholder="Nom" name="inputNom" id="inputNom" required="">
					
					<input type="text" placeholder="Prénom" name="inputPrenom" id="inputPrenom" required="">
					
					<input type="email" placeholder="E-mail" name="inputEmail" id="inputEmail" required="">
					
					<input type="text" placeholder="Téléphone" name="inputTelephone" id="inputTelephone" required="">
					
				</div>



				<div class="tab">

					<input type="text" placeholder="Adresse" id="inputAdresse" name="inputAdresse" required="">
					
					<input type="text" placeholder="Code Postal" id="inputCodePostal" name="inputCodePostal" required="">
					
					<input type="text" placeholder="Ville" id="inputVille" name="inputVille" required="">

					<select id="inputPays" name="inputPays">
						<option value="France">France</option>
						<option value="Belgique">Belgique</option>
						<option value="Luxembourg">Luxenbourg</option>
						<option value="Allemagne">Allemagne</option>
						<option value="Italie">Italie</option>
					</select>
					



				</div>

				<div class="tab">

					<h4 class="blabla">A quelle concession souhaitez-vous essayer cette voiture?</h4>
					<select id="inputConcession" name="inputConcession">
						<option value="Clermont Sud">Clermont Sud</option>
						<option value="Clermont Ouest">Clermont Ouest</option>
						<option value="Aubière">Aubière</option>
						<option value="Beaumont">Beaumont</option>
					</select>

					<h4 class="blabla">A quelle date?</h4>
					<input type="date" name="inputDate" id="inputDate" value="<?php echo date('Y-m-d'); ?>" required>

					<h4 class="blabla">Séléctionnez une plage horraire.</h4>
					<select id="inputHour" name="inputHour">
						<option value="8h - 11h">8h - 11h</option>
						<option value="11h - 14h">11h - 14h</option>
						<option value="14h - 17h">14h - 17h</option>
						<option value="17h - 20h">17h - 20h</option>
					</select>

					
				</div>

				<div class="tab">
					<h4 class="blabla">Êtes-vous sûr(e) de pouvoir conduire une voiture, et de ne pas être un robot?</h4>
					<label id="inputLast">Je ne suis pas un Robot, je peux conduire une voiture (je crois...) !
						<input type="checkbox" value="Est un(e) Professionnel(le)" name="inputLast" required>
						<span class="checkmark3"></span>
					</label>
				</div>


				<div>
					<div>
						<button type="button" id="etapePrecedente" onclick="nextPrev(-1)">Etape Précedente</button>
						<button type="button" id="etapeSuivante" onclick="nextPrev(1)">Etape Suivante</button>
					</div>
				</div>

				
				<div id="contactSteps">
					<span class="step"></span>
					<span class="step"></span>
					<span class="step"></span>
					<span class="step"></span>
				</div>

			</form> 

			<div id="finish">
				


			</div>



		</div>




	</div>

	<div id="navBar"><a id="logo" href="index.php">
		<img src="IMG/logoPeugeot.png" alt="Logo de Peugot">
	</a>
</div>


</div>












<script type="text/javascript" src="JS/script.js"></script>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>