<?php  /*  Eksempel 3 */
/*
/*    Programmet mottar postnr fra et HTML-skjema 
/*    Programmet sjekker om postnr er korrekt fylt ut
*/
  $postnr=$_POST ["postnr"];

  if (!$postnr)  /* postnr er ikke fylt ut */
    {
      print("Postnr er ikke fylt ut <br />");
    }
  else if (strlen($postnr)!=4)  /* postnr bestĺr ikke av 4 tegn */
    {
          print("Postnr best&aring;r ikke av 4 tegn <br />");
    }
  else if (!ctype_digit($postnr))  /* minst ett av tegnene er ikke et siffer */
    {
       print("Postnr best&aring;r ikke bare av siffre  <br />");
    }
else
	{
		print("Postnr er korrekt fylt ut <br />");
	}

?>  
&oslash;
&aring;
