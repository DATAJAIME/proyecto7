<?PHP

echo "Introduce una frase y te la daré invertida. ";

	if(isset($_POST["Boton1"])) {
		$a=$_POST["frase1"];
		$arr1= str_split($a);
		$invertido=array_reverse($arr1);
		$frase=implode($invertido);
		
		echo "La frase invertida es: ",$frase ;
	}
	else {
		echo'
		<form action="fraseinvertida.php" method="post">
		<input type="text" name="frase1">

		<input type="submit" name="Boton1" value="Adelante">
		</form> ';
		}
	
?>