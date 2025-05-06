<?php     /* Eksempel 5 */
/*
/*    Programmet deler opp en tekststreng ved bruk av oppdelingsfunksjonen explode
*/
  $tekst="Geir Bjarvin Universitetslektor USN";
  
  $del=explode (" " , $tekst);     
  $fornavn=$del[0];     
  $etternavn=$del[1];    
  $yrke=$del[2];    
  $arbeidssted=$del[3];     

  print ("Hele tekststrengen er: $tekst <br /> <br />");
  print ("Fornavn er:  $fornavn <br />");
  print ("Etternavn er:  $etternavn <br />");
  print ("Yrke er er:  $yrke <br />");
  print ("Arbeidssted er:  $arbeidssted <br />");
?>