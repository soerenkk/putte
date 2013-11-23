<?php

// Her er et eksempel på brugen af PHP's print_r funktion \\

// Her sætter vi variablen "$test" til at vøre et array \\
$test = array("Index1", "Index2", "Index3", "Index4", "Index5", "Index6");

// Her bruger vi PHP's print_r funktion til at udskrive alle værdier på det som man leverer til funktionen \\
print_r($test);

?>

// Det ovenstående vil give det følgende output på skærmen \\

Array ( [0] => Index1 [1] => Index2 [2] => Index3 [3] => Index4 [4] => Index5 [5] => Index6 )


// Som du kan se er det 1 lang tekst streng som ikke er så nem at aflæse. Der findes dog en løsning på dette \\
// En sådan løsning kunne være et besværlig script, men den nemme er at bruge HTML-tag'et "<pre>", som sådan her \\


<?php

// Her er et eksempel på brugen af PHP's print_r funktion \\

// Her sætter vi variablen "$test" til at vøre et array \\
$test = array("Index1", "Index2", "Index3", "Index4", "Index5", "Index6");

// Her bruger vi PHP's print_r funktion til at udskrive alle værdier på det som man leverer til funktionen \\
echo "<pre>";
print_r($test);
echo "</pre>";

?>

// Det ovenstående vil give det følgende output på skærmen \\

Array
(
    [0] => Index1
    [1] => Index2
    [2] => Index3
    [3] => Index4
    [4] => Index5
    [5] => Index6
)
