<?php

class klasse
{
  
  // Her opretter vi en offentlig variabel \
  public $variabel = "Jeg er en offentlig variabel, det at jeg er offentlig betyder at man kan tilgå mig udenfor min klasse";
  
  // Her opretter vi en privat variabel, der tilføjes så "_p" da vi lige ovenover oprettede en variabel med navnet "variabel" \\
  private $variabel_p = "Jeg er en privat variabel og kan kun tilgåes indenfor klassen jeg er i";
  
  
  
  // Her kommer metoderne som man kalder funktioner i en klasse \\

  // Dette er konstruktøreren, denne bliver automatisk kladt når man initialiserer klassen \\
  public function __construct() // Den kan også indholde parametre
  {
   // Koden den eventuelt skal udføre skal stå her \\
  }
  
  // Dette er de-konstruktøreren, denne bliver automatisk kladt når php er færdig med at beregne \\
  public function __destruct() // Den kan også indholde parametre
  {
   // Koden den eventuelt skal udføre skal stå her \\
  }
  
  // De overstående metoder er det som hedder magiske metoder og dem kan man ikke køre når man har lyst, de kører automatisk \\
  
  
  // Dette er de metoder som man selv laver og som man kan køre når man har lyst \\
  
  // Dette er metoden der gør at vi kan tilgå dataen i den private variabel vi oprettede "variabel_p" \\
  public function getVariabelP()
  {
  	return $this->variabel_p;
  }
  
  // Dette er en metode der gør at vi kan tilgå dataen i den offentlige variabel vi oprettede "variabel", det er som et alternativ, og ogå hvis den data eventuelt skal formateres på en bestemt måde \\
  public function getVariabel()
  {
  	return $this->variabel;
  }
  
}


// For at bruge klassen \\


// Hvor der skal udføres noget automatisk når klassen indlæses (hvis man skal bruge konstruktøreren) \\
$klasse = new klasse($parameter);


// Hvor klassen bare skal indlæses, eksempelvis hvis man ikke har lavet eller vil bruge konstruktøreren) \\
$klasse = new klasse();


// For at udskrive indholdet af en offentlig variabel \\
// NB: Læg mærke til at variablen ikke har "$" foran "variabel" \\
echo $klasse->variabel;


// En alternativ måde at udskrive indholdet af en offentlig variabel \\
// NB: Læg mærke til at det her er en offentlig metode der bliver kaldt der giver os indholdet af den offentlige variabel. I metoden kan man have defineret en formatering af det som man modtager når man kalder metoden \\
echo $klasse->getVariabel();


// For at udskrive indholdet af den private variabel (variabel_p) \\
// NB: Den private variabel er privat og kan kun tilgåes i klassen, derfor må vi kalde den offentlige metode der blev lavet til at give os værdien af den private variabel \\
echo $klasse->getVariabelP();

?>
