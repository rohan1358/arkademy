
<?php 
$ukuran=5;
for ($i=0; $i < $ukuran ; $i++) { 
	for ($j=0; $j <= $i ; $j++) { 
		if ($i %2 == 1) {
			echo "$i";
		}
	}
	if ($i %2 == 1) {
		echo "$i";
	}
	echo '<br/>';
}

  ?>

  <?php 
$ukuran=5;
for ($i=0; $i <= $ukuran ; $i++) { 
	for ($k=0; $k <= $ukuran ; $k++) { 
		if ($i %2 == 1) {
			echo "$i";
		}
	}
	echo "<br/>";
	for ($l=0; $l < $ukuran ; $l++) { 
		if ($i %2 == 1) {
			echo "$i";
		}
	}
	echo "<br/>";
}


   ?>