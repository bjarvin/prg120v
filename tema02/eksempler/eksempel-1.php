<?php     /* Eksempel 1 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Hva er 3 ganger 3 ?"
/*    Programmet sjekker om svaret er riktig og skriver ut en melding ang. svaret 
*/
  $svar=$_POST ["svar"];
	
  if ($svar == 9)  
    {
      print("Riktig. 3 ganger 3 er 9 ");
    }
  else  
    {
      print("Feil. 3 ganger 3 er ikke  $svar. 3 ganger 3 er 9 ");
    }
?>