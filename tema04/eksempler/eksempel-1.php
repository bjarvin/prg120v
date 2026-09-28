<?php    /* Eksempel 1 */
/*
/*    Programmet mottar fra et HTML-skjema et fornavn og et etternavn ved POST-metoden
/*    Programmet lager et fullt navn ved bruk av en egendefinert fuksjon 
*/

function fulltNavn($fornavn,$etternavn)   /* funksjonsdefinisjon */
{
  $navn=$fornavn . " " . $etternavn;	/* lokal variabel */
  return $navn; 	
}

  $fornavn=$_POST ["fornavn"];
  $etternavn=$_POST ["etternavn"];  

  $navn=fulltNavn($fornavn,$etternavn);   /* funksjonskall */

  print ("Navnet er $navn");  
?>
