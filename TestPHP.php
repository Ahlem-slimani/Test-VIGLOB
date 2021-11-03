<html>
	<head>
		<meta charset="utf-8"/>
		<title>Test Ahlem</title>
	</head>
<body>
	<?php
		error_reporting(0);
		if(!mysql_connect("127.0.0.1","root",""))exit("<h1>connection au serveur impossible</h1>");
		if(!isset($_POST['Nb_Col']))exit("<h1>Formulaire non envoyé</h1>");
		?>
		<table align="center" width="80%" border="2" bgcolor="99BBCC">
			<?php
					$NBC=$_POST['Nb_Col'];
					$tab=array("1" => "a","2" => "b","3" => "c","4" => "d","5" => "e","6" => "f","7" => "g","8" => "h","9" => "i","10" => "j","11" => "k","12" => "l","13" => "m","14" => "n","15" => "o","16" => "p","17" => "q","18" => "r","19" => "s","20" => "t","21" => "u","22" => "v","23" => "w","24" => "x","25" => "y","26" => "z");
					$k="1";
					$M=1;
					for($i=1;$i<=ceil(26/$NBC);$i++){
						echo("<tr>");
						for($j=1;$j<=$NBC;$j++){
							echo("<td>".$tab[$k]."</td>");
							$M++;
							$k=strval($M);
						}
						echo("</tr>");
					}
			?>
		</table>
</body>
</html>