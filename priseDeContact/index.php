<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">


<head>


	<title>Page d'accueil</title>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	


</head>



<body>



	<div id="container">


		<input hidden type="radio" name="carousel-control" id="button1" checked/>
		<input hidden type="radio" name="carousel-control" id="button2"/>
		<input hidden type="radio" name="carousel-control" id="button3"/>
		<input hidden type="radio" name="carousel-control" id="button4"/>  
		<input hidden type="radio" name="carousel-control" id="button5"/>            



		<div id="carousel">
			<div class="p-wrapper">

				<section class="panel1">

					<div class="insidePannel">
						<!--<img id="imgPeugeot1" src="IMG/peugeot208e2.webp">-->

						
				
					</div>
				</section>

				<section class="panel2">
					<div class="insidePannel">

						<div class="peugeotImg"><img src="IMG/peugeot1.webp"></div>
						<div>
							<h2>Panel 2</h2>
							<p>Fusce convallis arcu mauris, vitae semper ligula maximus vitae. Morbi a nibh id justo ullamcorper tincidunt. Aliquam et mollis mauris, eu varius metus. Praesent eget mi ac diam congue iaculis.</p>
						</div>
						
					</div>
				</section>

				<section class="panel3">



					<<div class="insidePannel">
						<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">

							<ol class="carousel-indicators">
								<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-2" data-slide-to="1"></li>
								<li data-target="#carousel-example-2" data-slide-to="2"></li>
							</ol>

							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="view">
										<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
										alt="First slide">
										<div class="mask rgba-black-light"></div>
									</div>
									<div class="carousel-caption">
										<h3 class="h3-responsive">Light mask</h3>
										<p>First text</p>
									</div>
								</div>
								<div class="carousel-item">

									<div class="view">
										<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
										alt="Second slide">
										<div class="mask rgba-black-strong"></div>
									</div>
									<div class="carousel-caption">
										<h3 class="h3-responsive">Strong mask</h3>
										<p>Secondary text</p>
									</div>
								</div>
								<div class="carousel-item">

									<div class="view">
										<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
										alt="Third slide">
										<div class="mask rgba-black-slight"></div>
									</div>
									<div class="carousel-caption">
										<h3 class="h3-responsive">Slight mask</h3>
										<p>Third text</p>
									</div>
								</div>
							</div>

							<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>

						</div>

					</div>





              

            </section>

            <section class="panel4">

            	<div class="insidePannel">
            		<h2>Panel 4</h2>
            		<p>Aenean maximus accumsan mauris. Praesent rutrum vitae purus et mattis. Nunc at mi et diam pulvinar euismod. Curabitur interdum, leo quis tincidunt pharetra, risus nisl mollis velit, interdum consectetur justo orci in nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus elit turpis, tincidunt non dui et, molestie maximus nisl. Duis pretium eros sed ultricies convallis. Pellentesque vitae tempor lorem, eu laoreet metus. Vivamus sit amet lorem libero. Vestibulum tristique ligula in gravida volutpat. Sed facilisis ipsum velit, et pharetra nisi ullamcorper ut. Maecenas purus dui, tincidunt non ipsum vel, bibendum aliquam elit. Cras rutrum velit diam, semper aliquet libero posuere nec.</p>
            		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec ut eleifend lacus. Sed fringilla ullamcorper justo, porttitor cursus nisl. Sed et mi aliquet, rutrum erat at, porttitor felis. Mauris consequat mauris id posuere dictum. Proin nec congue purus, nec rhoncus justo. Cras sit amet neque eu ex feugiat auctor at dignissim augue. Sed commodo tellus id erat lobortis, sit amet elementum felis commodo. Ut massa diam, tristique vel lacinia sed, vulputate eget mauris. Fusce lacinia bibendum iaculis.</p>

            	</div>
            </section>

            <section class="panel5">

            	<div class="insidePannel">
            		<h2>Panel 5</h2>
            		<p>Aenean maximus accumsan mauris. Praesent rutrum vitae purus et mattis. Nunc at mi et diam pulvinar euismod. Curabitur interdum, leo quis tincidunt pharetra, risus nisl mollis velit, interdum consectetur justo orci in nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus elit turpis, tincidunt non dui et, molestie maximus nisl. Duis pretium eros sed ultricies convallis. Pellentesque vitae tempor lorem, eu laoreet metus. Vivamus sit amet lorem libero. Vestibulum tristique ligula in gravida volutpat. Sed facilisis ipsum velit, et pharetra nisi ullamcorper ut. Maecenas purus dui, tincidunt non ipsum vel, bibendum aliquam elit. Cras rutrum velit diam, semper aliquet libero posuere nec.</p>
            		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec ut eleifend lacus. Sed fringilla ullamcorper justo, porttitor cursus nisl. Sed et mi aliquet, rutrum erat at, porttitor felis. Mauris consequat mauris id posuere dictum. Proin nec congue purus, nec rhoncus justo. Cras sit amet neque eu ex feugiat auctor at dignissim augue. Sed commodo tellus id erat lobortis, sit amet elementum felis commodo. Ut massa diam, tristique vel lacinia sed, vulputate eget mauris. Fusce lacinia bibendum iaculis.</p>

            	</div>
            </section>

        </div>
    </div>          

    
    <div id="navigation">
    	<label for="button1" class="label1"> <span></span> </label>
    	<label for="button2" class="label2"> <span></span> </label>
    	<label for="button3" class="label3"> <span></span> </label>
    	<label for="button4" class="label4"> <span></span> </label>
    	<label for="button5" class="label5"> <span></span> </label>
    </div>            


    <a id="logo" href="index.php">
    	<img src="IMG/logoPeugeot.png" alt="Logo de Peugot">
    </a>

    
    <div id="wrapperEssai">
    	<a id="essai" href="essai.php"><span>Faire un Essai!</span></a>	
    </div>

</div> 



<script type="text/javascript" src="JS/script.js"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>





</html>