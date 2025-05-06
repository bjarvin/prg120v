<?php     /* Eksempel 4 */
/*
/*    Programmet legger inn antall dager i hver måned i et array
/*    Programmet skriver ut antall dager i hver måned
*/
  $antallDager=array(1=>31,28,31,30,31,30,31,31,30,31,30,31);

  print("Antall dager i september er $antallDager[9] <br/><br/>");

  for ($mnd=1;$mnd<=12;$mnd++)
    {
      print("Antall dager i m&aring;ned $mnd er $antallDager[$mnd] <br/>"); 
    }
?>