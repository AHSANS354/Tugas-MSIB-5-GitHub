<?php

//contoh looping increment bilangan 1 sampai 10
echo'---------Bilangan 1 sampai 10---------';
for($x = 1; $x <= 10; $x++){
    echo "<br>Bilangan : $x";
}

echo '<br>-------Bilangan 10 sampai 1-------';

for($y=10; $y >=1; $y--){
    echo"<br>Bilangan : $y ";
}

echo'<br>--------Bilangan berulang while-------';
$j=1;
while ($j<=5) {
    echo'<br> Bilangan :'.$j;
    $j++;
}
?>