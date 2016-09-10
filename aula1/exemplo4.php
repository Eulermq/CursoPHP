<?php
#lacos de repeticao

$num = 0;

while ($num <= 100){
	echo "\rApagando os arquivos do seu computador: $num%";
	sleep(1);
	$num += 10;
}
echo "\n;D";