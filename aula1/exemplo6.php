<?php
#for de 1 a 20
for ($i = 0; $i <= 20; $i++){
	echo "contador: $i\n";
}
echo "|n+======== FOR - 1========+\n";
#for de 20 a 0
for ($i = 20; $i >= 0; $i--){
	echo "contador: $i\n";
}
echo "|n+======== FOR - 2========+\n";
#for para todos os elementos de um array

$times = ["corinthians","santos", "sap paulo", "palmeiras"];
for ($i = 0; $i < count($times); $i++) {
	$string = sprintf("%d | %s", ($i+1), $times[$i]);
	echo"$stringf\n"
}