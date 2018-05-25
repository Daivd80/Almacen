<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Chavo</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$Personajes=array("Chavo del ocho"=>array("Es que no me tienen",
			                                      "Eso, eso, eso, eso",
			                                      "Al cabo que ni queria"),

			              "Quico"=>array("Te voy a acusar con mi mama...",
			              	             "Bueno, asi pos si",
			              	             "A !Mama¡"),

			              "La chilindrina"=>array("Fijate, fijate, fijate, fijate",
			              	                      "Papito lindo, mi amor",
			              	                      "A !Si seras, si seras¡",
			              	                      "Chavo, A¿llegaste tarde a la reparticion de cerebro?"),

			              "Don Ramon"=>array("Tiene usted mucha barriga, Señor Razon",
			              	                 "A ¡Toma!",
			              	                 "A ¡Me lleva el chanfle!",
			              	                 "A ¡Chilindrina!"),

			              "Doña Florinda"=>array("Vamonos, tesoro, no te juntes con esa chusma",
			              	                     "Tesoro, no le hagas caso a la chusma",
			              	                     "A ¡Tesoro!"),

			              "Profesor Jirafales"=>array("A ¡Ta, ta, taaaa... ta!",
			              	                          "A ¿Por que causa, motivo, razon o circunstancia?",
			              	                          "Despues de usted"));

		echo "<ol>";
			foreach ($Personajes as $personas => $nombres) {
				echo "<li>".$personas."<br/>";

				foreach ($nombres as $frases => $palabra) {
					echo"<ul>"."<li>".$palabra."</li>"."</ul>";
				}
				echo "</li>";
			}
		echo "</ol>";
	?>
</body>
</html>