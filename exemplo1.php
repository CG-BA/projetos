<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Test PHP</title>
	</head>
	<body>
		<?php 
		$nome = "Aline";
		$nome2 = "Maria";
		$nome3 = "Jõao";
		$numero = 10;
		$numero2 = 10.5;
		/*$ = variavel
		Na liguagem php não se pode iniciar uma variavel com: numero ou espaço.
		Expl.erro1: $ nome;
		Expl.erro2: $1nome;
		*/
		echo "<p>Olá $nome!</p>";
		/*echo = escreva
		*/
		echo "<p>Olá $nome2!</p>";
		echo "<p>Olá $nome3!</p>";
		echo "$numero<br>";
		echo "$numero2";
		?>
	</body>
</html>