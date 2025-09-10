<?php  /*  Eksempel 2 */
/*
/*    Programmet mottar klassekode fra et HTML-skjema 
/*    Programmet sjekker om klassekode er korrekt fylt ut
*/
  $klassekode=$_POST ["klassekode"];

  $lovligKlassekode=true;

  if (!$klassekode)  /* klassekode er ikke fylt ut */
    {
      $lovligKlassekode=false;
      print("Klassekode er ikke fylt ut <br />");
    }
  else if (strlen($klassekode)!=3)  /* klassekode består ikke av 3 tegn */
    {
      $lovligKlassekode=false;
      print("Klassekode best&aring;r ikke av 3 tegn <br />");
    }
  else
    {
      $tegn1=$klassekode[0];   /* første tegn i klassekoden  */
      $tegn2=$klassekode[1];   /* andre tegn i klassekoden  */
      $tegn3=$klassekode[2];   /* tredje tegn i klassekoden  */

      if (!ctype_alpha($tegn1))  /* tegn1 er ikke bokstav */ 
        {
          $lovligKlassekode=false;
          print("F&oslash;rste tegn er ikke en bokstav <br />");
        }
		
      if (!ctype_alpha($tegn2))  /* tegn2 er ikke bokstav */
        {
          $lovligKlassekode=false;
          print("Andre tegn er ikke en bokstav <br />");
        }
		
      if (!ctype_digit($tegn3))  /* tegn3 er ikke et siffer */ 
        {
          $lovligKlassekode=false;
          print("Siste tegn er ikke et siffer  <br />");
        }
    }

  if ($lovligKlassekode)  /* klassekode er  korrekt fylt ut */
    {
      print("Klassekode er korrekt fylt ut <br />");
    }

?>

