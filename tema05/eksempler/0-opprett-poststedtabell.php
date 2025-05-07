<?php  /* opprett poststedtabell */

include("db-tilkobling.php"); 

$sqlSetning="CREATE TABLE IF NOT EXISTS poststed (postnr CHAR(4) NOT NULL, poststed VARCHAR(30) NOT NULL, PRIMARY KEY (postnr));";
   
mysqli_query($db,$sqlSetning) or die("ikke mulig  opprette tabell");
  /* SQL-setning sendt til database-serveren */
 
print("Poststedtabell opprettet (hvis den ikke var opprettet tidligere)");
?>
 
