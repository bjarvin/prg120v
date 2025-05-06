<?php  /*  Eksempel 5 */
/*
/*    Programmet mottar emnekode fra et HTML-skjema 
/*    Programmet sjekker om emnekode er korrekt fylt ut
*/
  $emnekode=$_POST ["emnekode"];

  $lovligEmnekode=true;

  if (!$emnekode)  /* emnekode er ikke fylt ut */
    {
      $lovligEmnekode=false;
      print("Emnekode er ikke fylt ut <br />");
    }
  else if (strlen($emnekode)!=7)  /* emnekode består ikke av 7 tegn */
    {
      $lovligEmnekode=false;
      print("Emnekode bestå ikke av 7 tegn <br />");
    }
  else 
    {
      $del1=substr($emnekode,0,3);   /* henter ut de 3 første tegnene */
      $del2=substr($emnekode,3,3);   /* henter ut de 3 neste tegnene */
      $del3=substr($emnekode,6,1);   /* henter ut det siste tegnet */

      if(!ctype_alpha($del1))  /* de 3 første tegnene inneholde ikke bare bokstaver */
        {
          $lovligEmnekode=false;
          print("Tegn 1-3 inneholder ikke bare bokstaver <br />");
        }

      if(!ctype_digit($del2))  /* de 3 neste tegnene inneholde ikke bare siffre */
        {
          $lovligEmnekode=false;
          print("Tegn 4-6 inneholder ikke bare siffre <br />");
        }
	 
      if(!ctype_alpha($del3) && !ctype_digit($del3))  /* det siste tegnet inneholde ikke bokstav eller siffer */
        {
          $lovligEmnekode=false;
          print("Det siste tegnet inneholde ikke bokstav eller siffer <br />");
        }
	  
    }

  if ($lovligEmnekode)  /* emnekode er korrekt fylt ut */
    {
      print ("Emnekode er korrekt fylt ut <br />");    
    }
?>