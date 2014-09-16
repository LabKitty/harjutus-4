<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-4 - Andmetüübid</title>
</head>

<body>
	<h2>Arvutamine murd- ja täisarvudega</h2>
		<?php 
			echo $float = 3.14; 
		?>
			<br>
		<?php 
			echo $float + 7; 
		?>
			<br>
		
		<?php 
			echo  4/3; 
		?>
			<br>
		
	<h2>Murdarvude ümardamine</h2>
		<?php 
			$float = 3.14; 
		?>
		<?php 
			echo  round($float, 0); //  Ümarda ja väljasta muutuja $float väärtus täpsusega 1  
		?>
			<br>
		<?php 
			echo  ceil($float); //  funktsiooni abil muutub numbriks 3 
		?>
			<br>
		<?php 
			echo  floor($float); //  funktsiooni abil muutub numbriks 4
		?>
			<br> 
		
	<h2>Andmetüübi funktsioonid</h2>	
		<?php 
			$integer = 3;
		?>
		<?php
			echo "Kas {$integer} on integer? " . is_int($integer); 
		?>
			<br>
			
		<?php 
			$integer = 7;
		?>
		<?php
			echo "Kas {$integer} on integer? " . is_int($integer); 
		?>
			<br>
		
		<?php 
			$integer = 3.14;
		?>
		<?php
			echo "Kas {$integer} on integer? " . is_int($integer); 
		?>
			<br>
			
		<?php 
			$float = 7;
		?>
		<?php
			echo "Kas {$float} on float? " . is_float($float); 
		?>
			<br>
			
		<?php 
			$float = 3.14;
		?>
		<?php
			echo "Kas {$float} on float? " . is_float($float); 
		?>
			<br>
			
		<?php 
			$number = 7;
		?>
		<?php
			echo "Kas {$number} on number? " .is_numeric($integer); 
		?>
			<br>
			
		<?php 
			$number = 3.14;
		?>
		<?php
			echo "Kas {$number} on number? " . is_numeric($integer); 
		?>
			<br>
			
	<h2>Jadad (array)</h2>	
		<?php
			$numbers = array(4,8,15,16,23,42);
		?>
		<?php
			echo $numbers[1];
		?>
			<br>
	<h2>Arrays</h2>	
		<?php
			echo $numbers[0];
		?>
			<br>
		<?php
			echo $numbers[1];
		?>
			<br>
		<?php
			echo $numbers[2];
		?>
			<br>
		<?php
			echo $numbers[3];
		?>
			<br>
		<?php
			echo $numbers[4];
		?>
			<br>
		<?php
			echo $numbers[5];
		?>
			<br>
	
		<?php
			$numbers = array(6, "rebane", "koer", 5.5, array("x", "y", "z"));
		?>
		<?php
			echo $numbers[2];
		?>
			<br>
		<?php
			echo $numbers[4][2];
		?>
			<br>
			
		<?php
			$mixed = array(6, "rebane", "koer", 5.5, array("x", "y", "z"));
		?>
		
		<?php 
			$mixed[2] = "kass"; 
		?>
		<?php 
			$mixed[5] = "kass"; 
		?>
		<?php 
			$mixed[] = "hobune";
		?>
		
	<pre>
		<?php
			echo print_r($mixed); 
		?>
	</pre>
	
	<h2>Associative arrays</h2>	
		<?php 
			$assoc = array("first_name" => "Veronika", "last_name" => "Bondar"); 
		?>
		<?php
			echo $assoc["first_name"];
		?>
			<br>
		<?php
			echo $assoc["last_name"];
		?>
		
		<?php 
			$numbers = array(0 => 4, 5 => 8, 6 => 15, 9 => 16, 10 => 23, 15 => 42); 
		?>
		<?php 
			$assoc["age"] = 25; 
		?>
		<?php 
			$assoc["sinu_eposti_aadress"] = "xxx@gmail.com" 
		?>
			<br>
		<?php
			echo "Minu nimi on {$assoc["first_name"]} {$assoc["last_name"]} . Minu e-post on {$assoc["sinu_eposti_aadress"]} . ";
		?>
		
	<h2>Array functions</h2>		
		<?php 
			$numbers_2 = array(8,23,15,42,16,4); 
		?>
		<?php
			echo count($numbers_2);
		?>	
			<br>
		<?php
			echo max($numbers_2);
		?>
			<br>
		<?php
			echo min($numbers_2);
		?>
			<br>
	<pre>
		<?php
			sort($numbers_2);
			print_r($numbers_2);
		?>
	</pre>
			<br>
	<pre>
		<?php
			rsort($numbers_2);
			print_r($numbers_2);
		?>
	</pre>
			<br>
		<?php 
			$num_string = implode(" ja ", $numbers_2)
		?>
		<?php 
			print_r($num_string); 
		?>
	<pre>	
		<?php 
			print_r(explode(" ja ", $num_string)); 
		?>
	</pre>	
		
</body>
</html>