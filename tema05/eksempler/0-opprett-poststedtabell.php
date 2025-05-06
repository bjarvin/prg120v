<?php  /* vis-alle-poststeder */
/*
/*  Programmet skriver ut alle registrerte poststeder
*/  

include("db-tilkobling.php");  /* tilkobling til database-serveren utf�rt og valg av database foretatt */


  $sqlSetning="CREATE TABLE IF NOT EXISTS poststed (postnr CHAR(4) NOT NULL, poststed VARCHAR(30) NOT NULL, PRIMARY KEY (postnr));";
   
  $sqlResultat=mysqli_query($db,$sqlSetning) or die("ikke mulig  opprette tabell");
    /* SQL-setning sendt til database-serveren */
 
  print("Poststedtabell opprettet (hvis den ikke var opprettet tidligere)");
?>
 