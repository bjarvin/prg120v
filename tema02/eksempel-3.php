<?php     /* Eksempel 3 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Er du student (j/n) ?"
/*    Programmet sjekker om det er svart j eller n på spørsmålet og skriver ut en passende melding
*/
  $svar=$_POST ["svar"];
	
  if (!$svar)  
    {
      print("Du har ikke svart på spørsmålet om du er student ");
    }
  else if ($svar == "j")  
    {
      print("Du har svart j på spørsmålet om du er student ");
    }
  else if ($svar == "n") 
    {
      print("Du har svart n på spørsmålet om du er student ");
    }
  else  
    {
      print("Du har ikke svart j eller n på spørsmålet om du er student ");
    }
?>