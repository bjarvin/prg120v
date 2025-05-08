<?php  /* opprett klassetabell */

$host = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_DATABASE');

$db=mysqli_connect($host,$username,$password,$database) or die ("ikke kontakt med database-server");

$sqlSetning="CREATE TABLE IF NOT EXISTS klasse (klassekode CHAR(5) NOT NULL, klasssenavn VARCHAR(50) NOT NULL, studiumkode VARCHAR(50) NOT NULL, PRIMARY KEY (klassekode));";
   
mysqli_query($db,$sqlSetning) or die("ikke mulig  opprette tabell");
  
print("Klassetabell opprettet (hvis den ikke var opprettet tidligere)");

?>
 
