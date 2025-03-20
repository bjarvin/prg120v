<?php    /* Eksempel 3 */
/*
/*    Programmet mottar 2 tall fra et HTML-skjema ved POST-metoden
/*    Programmet skriver ut de 2 tallene og summen og differansen av/mellom tallene
*/
  $tall1=$_POST ["tall1"];
  $tall2=$_POST ["tall2"];  /* variable gitt verdier fra feltene i HTML-skjemaet */
	
  $sum=$tall1 + $tall2   /* beregning av summen utført  */
  $differanse=$tall1 - $tall2;  /* beregning av differansen utført  */
			
  print ("Tall 1 er $tall1 <br />");
  print ("Tall 2 er $tall2 <br />");
  print ("<br />");
  print ("Summen er $sum <br />");
  print ("Differansen er $differanse <br />");  /* resultater skrevet ut  */
?>