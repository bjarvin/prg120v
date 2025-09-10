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
      print("Du har ikke svart på begge sp&oslash;rsm&aring;lene ");
    }
  else if ($student == "j" and $alder < 20)  
    {   
      print("Du er student og er under 20 &aring;r ");
    }
  else if ($student == "j" and $alder >= 20)  
    {   
      print("Du er student og er 20 &aring;r eller mer ");
    }
  else if ($student == "n" and $alder < 20)
    {   
      print("Du er ikke student og er under 20 &aring;r  ");
    }
  else if ($student == "n" and $alder >= 20)
    {   
      print("Du er ikke student og er 20 &aring;r eller mer ");
    }
  else  
    {   
      print("Begge sp&oslash;rsm&aring;lene har ikke gyldige svar");
    }

?>


