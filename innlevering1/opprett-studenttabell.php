<?php  /* opprett studenttabell */

$host = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_DATABASE');

$db=mysqli_connect($host,$username,$password,$database) or die ("ikke kontakt med database-server");

$sqlSetning="CREATE TABLE IF NOT EXISTS student (brukernavn CHAR(7) NOT NULL, fornavn VARCHAR(50) NOT NULL, etternavn VARCHAR(50) NOT NULL, klassekode CHAR(5) NOT NULL, PRIMARY KEY (brukernavn), FOREIGN KEY (klassekode) REFERENCES klasse (klassekode));";
   
mysqli_query($db,$sqlSetning) or die("ikke mulig  opprette tabell");
  
print("Studenttabell opprettet (hvis den ikke var opprettet tidligere)");

?>
 
