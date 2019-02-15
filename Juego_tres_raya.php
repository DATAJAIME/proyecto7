<?php

echo
	'<html lang="es"> 
		<head>
			<meta charset="UTF-8"/>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		</head>
		<body>
			<div class="container rounded mt-5 text-center text-white pb-4" style="background-color: #007acc; width:400px;">';
			
if(isset($_POST["Boton1"]))
{
	echo
		'<Form Action="Multijugador.php" Method="POST">
			<br><h3 class="rounded pb-1" style="background-color: #006bb3;">Elige ficha para el jugador 1</h1><br>
			<Input Type="Submit" Name="BotonX" Value="X" class="btn-lg btn-primary">
			<Input Type="Submit" Name="BotonO" Value="O" class="btn-lg btn-primary">
		</form>';
}
else if(isset($_POST["Boton2"]))
{
	echo
		'<Form Action="Maquina.php" Method="POST">
			<br><h3 class="rounded pb-1" style="background-color: #006bb3;">Elige ficha para el jugador 1</h1><br>
			<Input Type="Submit" Name="BotonX" Value="X" class="btn-lg btn-primary">
			<Input Type="Submit" Name="BotonO" Value="O" class="btn-lg btn-primary">
		</form>';
}
else
{
	echo
		'<Form Action="Juego_tres_raya.php" Method="POST">
			<br><h1 class="rounded pb-2" style="background-color: #006bb3;">Menu</h1><br>
			<Input Type="Submit" Name="Boton1" Value="Jugador 1 vs Jugador 2" class="btn-lg btn-primary btn-block">
			<Input Type="Submit" Name="Boton2" Value="Jugador vs CPU" class="btn-lg btn-primary btn-block">
		</form>';
}

echo
		'</div>
	</body>
</html>';

?>