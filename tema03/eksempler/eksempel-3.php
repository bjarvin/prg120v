<?php     /* Eksempel 3 */
/*
/*    Programmet legger inn 3 navn i et array
/*    Programmet skriver ut de 3 navnene
*/
  $navn=array("Geir","Marius","Tove");  

  print("Det første navnet er $navn[0]<br/>");

  print("Alle navnene er <br/> ");

  for ($nr=0;$nr<count($navn);$nr++)
    {
      print("$navn[$nr] <br/>");   
    }
?>