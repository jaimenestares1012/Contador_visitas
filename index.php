<?php 


function contar_visitas(){
	$archivo='contador.txt';
	if(file_exists($archivo)){
		$cuenta=file_get_contents($archivo)+1;
		file_put_contents($archivo, $cuenta);
		return $cuenta;

	}else{
		file_put_contents($archivo, 1);
		return 1;
	}
}



 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Contador de visitas</title>
 	<link rel="stylesheet" href="stilos.css">
 </head>
 <body>
 	<h1>Contador de visitas</h1>
 	<div class="visitantes">
 		<p class="numero">
 			<?php echo contar_visitas(); ?>
 		</p>
 		<p>
 			Visitas
 		</p>
 	</div>
 </body>
 </html>