<?php

echo
	'<html lang="es"> 
		<head>
			<meta charset="UTF-8"/>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		</head>
		<body>';

function mostrarTablero($tablero, $disabled)
{
	if($disabled==0)
		echo 
			'<div>
				<div class="mt-2 alert alert-warning" style="width:350px; margin:auto;">
					<b>Atención:</b>
					Pulsa para colocar ficha
				</div>
			</div>
			<Form Action="Maquina.php" Method="POST">
				<div>
					<div class="rounded mt-3 text-center text-white pb-3 pl-4" style="background-color: #007acc; width:550px; height:550px; margin:auto;">
						<table style="width:100%; height:100%;">
							<tr>
								<td class="pt-3" style="width:150px; height:150px;"><button Type="Submit" Name="Boton1" Value="1" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[0] . '</button></td>
								<td class="pt-3" style="width:150px; height:150px;"><button Type="Submit" Name="Boton1" Value="2" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[1] . '</button></td>
								<td class="pt-3" style="width:150px; height:150px;"><button Type="Submit" Name="Boton1" Value="3" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[2] . '</button></td>
							</tr>
							<tr>
								<td class="pt-3" style="width:150px; height:150px;"><button Input Type="Submit" Name="Boton1" Value="4" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[3] . '</button></td>
								<td class="pt-3" style="width:150px; height:150px;"><button Input Type="Submit" Name="Boton1" Value="5" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[4] . '</button></td>
								<td class="pt-3" style="width:150px; height:150px;"><button Input Type="Submit" Name="Boton1" Value="6" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[5] . '</button></td>
							</tr>
							<tr>
								<td class="pt-3" style="width:150px; height:150px;"><button Input Type="Submit" Name="Boton1" Value="7" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[6] . '</button></td>
								<td class="pt-3" style="width:150px; height:150px;"><button Input Type="Submit" Name="Boton1" Value="8" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[7] . '</button></td>
								<td class="pt-3" style="width:150px; height:150px;"><button Input Type="Submit" Name="Boton1" Value="9" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[8] . '</button></td>
							</tr>
						</table> 
					</div>
				</div>
			</form>';
	else
		echo 
			'<div>
				<div class="rounded mt-3 text-center text-white pb-3 pl-4" style="background-color: #007acc; width:550px; height:550px; margin:auto;">
					<table style="width:100%; height:100%;">
						<tr>
							<td class="pt-3" style="width:150px; height:150px;"><button Type="Submit" Name="Boton1" Value="1" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[0] . '</button></td>
							<td class="pt-3" style="width:150px; height:150px;"><button Type="Submit" Name="Boton1" Value="2" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[1] . '</button></td>
							<td class="pt-3" style="width:150px; height:150px;"><button Type="Submit" Name="Boton1" Value="3" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[2] . '</button></td>
						</tr>
						<tr>
							<td class="pt-3" style="width:150px; height:150px;"><button Input Type="Submit" Name="Boton1" Value="4" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[3] . '</button></td>
							<td class="pt-3" style="width:150px; height:150px;"><button Input Type="Submit" Name="Boton1" Value="5" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[4] . '</button></td>
							<td class="pt-3" style="width:150px; height:150px;"><button Input Type="Submit" Name="Boton1" Value="6" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[5] . '</button></td>
						</tr>
						<tr>
							<td class="pt-3" style="width:150px; height:150px;"><button Input Type="Submit" Name="Boton1" Value="7" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[6] . '</button></td>
							<td class="pt-3" style="width:150px; height:150px;"><button Input Type="Submit" Name="Boton1" Value="8" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[7] . '</button></td>
							<td class="pt-3" style="width:150px; height:150px;"><button Input Type="Submit" Name="Boton1" Value="9" class="btn-lg btn-primary btn-block mt-1" style="width:150px; height:150px; font-size:50px;">' . $tablero[8] . '</button></td>
						</tr>
					</table> 
				</div>
			</div>';
}

function comprobacionGanado($tablero)
{
	$ganado=0;
	
	for($i=0,$k=0;$i<3;$i++) //Para checkear las columnas
		if(($tablero[($k=0)+$i]=="X" && $tablero[($k+=3)+$i]=="X" && $tablero[($k+=3)+$i]=="X") || ($tablero[($k=0)+$i]=="O" && $tablero[($k+=3)+$i]=="O" && $tablero[($k+=3)+$i]=="O"))
			$ganado=1;
		
	for($i=0,$k=$i;$i<3;$i++,$k+=3) //Para checkear las filas
		if(($tablero[$k]=="X" && $tablero[$k+1]=="X" && $tablero[$k+2]=="X") || ($tablero[$k]=="O" && $tablero[$k+1]=="O" && $tablero[$k+2]=="O"))
			$ganado=1;
	
	if(((($tablero[0]=="X" && $tablero[8]=="X") || ($tablero[2]=="X" && $tablero[6]=="X")) && $tablero[4]=="X") || ((($tablero[0]=="O" && $tablero[8]=="O") || ($tablero[2]=="O" && $tablero[6]=="O")) && $tablero[4]=="O"))
		$ganado=1;
	
	return $ganado;
}

function comprobacionEmpate($tablero)
{
	$empate=0;
	
	for($i=0;$i<9;$i++)
		if($tablero[$i]!=" ")
			$empate++;
	
	if($empate==9)
		$empate=1;
	else
		$empate=0;
	
	return $empate;
}

function checkAi($tablero,$casillaAi)
{
	$repetir=0;
	if($tablero[$casillaAi]!=" ")
		$repetir=1;
	return $repetir;
}

function movimientoAi($tablero, $jugador)
{
	$resultado=0;
	$movimiento=0;
	
	for($i=0;$i<9 && $resultado==0;$i++)
	{
		$tablero=$_SESSION["tablero"]; //Cargar
		if($jugador==0)
		{
			if($tablero[$i]==" ")
				$tablero[$i]="O";
		}
		else
		{
			if($tablero[$i]==" ")
				$tablero[$i]="X";
		}
		$resultado=comprobacionGanado($tablero);
		$movimiento=$i;
	}
	
	for($i=0;$i<9 && $resultado==0;$i++)
	{
		$tablero=$_SESSION["tablero"]; //Cargar
		if($jugador==0)
		{
			if($tablero[$i]==" ")
				$tablero[$i]="X";
		}
		else
		{
			if($tablero[$i]==" ")
				$tablero[$i]="O";
		}
		$resultado=comprobacionGanado($tablero);
		$movimiento=$i;
	}
	
	$tablero=$_SESSION["tablero"]; //Cargar
	
	if($resultado==0)
	{
		if($tablero[4]!=" " && $tablero[0]==" " && $tablero[2]==" ")
			$movimiento=0;
		elseif(($tablero[0]!=" " || $tablero[6]!=" " || $tablero[2]!=" " || $tablero[8]!=" ") && $tablero[4]==" ")
			$movimiento=4;	
		elseif(($tablero[2]!=" " || $tablero[8]!=" ") && $tablero[3]==" ")
			$movimiento=3;
		elseif(($tablero[0]!=" " || $tablero[6]!=" ") && $tablero[5]==" ")
			$movimiento=5;
		else
		{
			do
			$casillaAi=rand(0,8);
			while(checkAi($tablero,$casillaAi)==1);
			$movimiento=$casillaAi;
		}
	}
	
	return $movimiento;
}

session_start();

$error=0;
$disabled=0;

if(isset($_POST["Boton1"])) //Control error
{
	$tablero=$_SESSION["tablero"]; //Cargar
	$turnoAi=$_SESSION["turnoAi"];
	
	if($turnoAi==0 && @$tablero[$_POST["Boton1"]-1]!=" ")
	{
		$error=1;
		echo
			'<div>
				<div class="mt-2 alert alert-danger" style="width:350px; margin:auto;">
					<b>Error:</b>
					No puede introducir un valor en una casilla que ya tiene un valor asignado
				</div>
			</div>';
		mostrarTablero($tablero, $disabled);
	}
	else
	{
		$jugador=$_SESSION["jugador"]; //Cargar
		
		if($turnoAi==1)
		{
			if($jugador==0)
			{
				$movimiento=movimientoAi($tablero, $jugador);
				$tablero[$movimiento]="O";
			}
			else
			{
				$movimiento=movimientoAi($tablero, $jugador);
				$tablero[$movimiento]="X";
			}
			
			$turnoAi=0;
		}
		else
		{
			if($jugador==0)
				$tablero[$_POST["Boton1"]-1]="X";
			else
				$tablero[$_POST["Boton1"]-1]="O";
			
			$turnoAi=1;
		}
		
		$_SESSION["tablero"]=$tablero; //Guardar
		$_SESSION["jugador"]=$jugador;
		$_SESSION["turnoAi"]=$turnoAi;
	}
} 
else
{
	$tablero=array();
	$jugador=0;
	$turnoAi=0;

	//Inicialización tablero
	for($i=0;$i<9;$i++)
		$tablero[]=" ";
	//Fin inicializacion
	
	if(isset($_POST["BotonX"]))
		$jugador=0;
	else
		$jugador=1;
	
	$_SESSION["tablero"]=$tablero; //Guardar
	$_SESSION["jugador"]=$jugador;
	$_SESSION["turnoAi"]=$turnoAi;
}

if($error==0)
{
	$ganado=comprobacionGanado($tablero);
	$empate=comprobacionEmpate($tablero);
	
	if($ganado==0 && $empate==0 && $turnoAi==0)
		mostrarTablero($tablero, $disabled);
	
	if($ganado==0 && $empate==0 && $turnoAi==1)
	{
		$disabled=1;
		mostrarTablero($tablero, $disabled);
		echo
			'<Form Action="Maquina.php" Method="POST">
				<div>
					<div class="rounded mt-2 text-center text-white pb-2 pt-2 pr-2 pl-2" style="background-color: #007acc; width:350px; margin:auto;">
						<Input Type="Submit" Name="Boton1" Value="Turno A.I" class="btn-lg btn-primary btn-block mt-1">
					</div>
				</div>
			</form>';
	}
	
	if($ganado==0 && $empate==1)
	{
		$disabled=1;
		mostrarTablero($tablero, $disabled);
		echo
			'<div>
				<div class="mt-2 alert alert-primary" style="width:350px; margin:auto;">
					<b>Atención:</b>
					Habéis quedado en empate
				</div>
			</div>
			<Form Action="Juego_tres_raya.php" Method="">
				<div>
					<div class="rounded mt-2 text-center text-white pb-2 pt-2 pr-2 pl-2" style="background-color: #007acc; width:250px; margin:auto;">
						<Input Type="Submit" Name="Undefined" Value="Volver al menu" class="btn-lg btn-primary btn-block mt-1">
					</div>
				</div>
			</form>';
	}
	
	if($ganado==1)
	{
		$disabled=1;
		mostrarTablero($tablero, $disabled);
		echo
			'<div>
				<div class="mt-2 alert alert-success" style="width:350px; margin:auto;">
					<b>Felicidades:</b>
					Ha ganado 🎂
				</div>
			</div>
			<Form Action="Juego_tres_raya.php" Method="">
				<div>
					<div class="rounded mt-2 text-center text-white pb-2 pt-2 pr-2 pl-2" style="background-color: #007acc; width:250px; margin:auto;">
						<Input Type="Submit" Name="Undefined" Value="Volver al menu" class="btn-lg btn-primary btn-block mt-1">
					</div>
				</div>
			</form>';
	}
}

echo
	'</body>
</html>';

?>