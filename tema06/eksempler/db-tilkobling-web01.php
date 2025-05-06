<?php  /* db-tilkobling */
/*
/*  Programmet foretar tilkobling til database-server og valg av database
*/
$host="localhost";
$username="gb";
$password="fOw6jz/H";
$database="gb"; /* verdier satt for vert, bruker, passord og database for tilkobling til databaseserver */

 $db=mysqli_connect($host,$username,$password,$database) or die ("ikke kontakt med database-server");
    /* tilkobling til database-serveren utført */
 







