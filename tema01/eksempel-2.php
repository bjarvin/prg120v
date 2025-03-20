<?php    /* Eksempel 2 */
/*
/*    Programmet mottar 2 tall fra et HTML-skjema ved POST-metoden
/*    Programmet skriver ut de 2 tallene og summen og differansen av/mellom tallene
*/
  $tall1=$_POST ["tall1"];
  $tall2=$_POST ["tall2"];  

  $summen=$tall1 + $tall2;  
  $differansen=$tall1 - $tall2;  
			
  print ("Tall 1 er $tall1 <br />");
  print ("Tall 2 er $tall2 <br />");
  print ("Summen er $summen <br />");
  print ("Differansen er $differansen <br />"); 