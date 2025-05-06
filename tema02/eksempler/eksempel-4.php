<?php     /* Eksempel 4 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Er du student (j/n) ?"
/*      og et svar på spørsmålet "Hvor gammel er du ?"
/*    Programmet sjekker hva som er svart på spørsmålene og skriver ut en passende melding
*/
  $student=$_POST ["student"];
  $alder=$_POST ["alder"]; 
	
  if (!$student or !$alder)  
    {   
      print("Du har ikke svart på begge spørsmålene ");
    }
  else if ($student == "j" and $alder < 20)  
    {   
      print("Du er student og er under 20 år ");
    }
  else if ($student == "j" and $alder >= 20)  
    {   
      print("Du er student og er 20 år eller mer ");
    }
  else if ($student == "n" and $alder < 20)
    {   
      print("Du er ikke student og er under 20 år  ");
    }
  else if ($student == "n" and $alder >= 20)
    {   
      print("Du er ikke student og er 20 år eller mer ");
    }
  else  
    {   
      print("Begge spørsmålene har ikke gyldige svar");
    }
?>