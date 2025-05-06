<?php  /* endre-poststed */
/*
/*  Programmet lager et skjema for å velge et poststed som skal endres  
/*  Programmet endrer det valgte poststedet
*/
?> 

<h3>Endre poststed</h3>

<form method="post" action="" id="finnPoststedSkjema" name="finnPoststedSkjema">
  Postnr <input type="text" id="postnr" name="postnr" required /> <br/>
  Poststed (ny verdi)<input type="text" id="poststed" name="poststed" required /> <br/>
  <input type="submit"  value="Endre poststed" name="endrePoststedKnapp" id="endrePoststedKnapp"> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php
  if (isset($_POST ["endrePoststedKnapp"]))
    {	
      $postnr=$_POST ["postnr"];
      $poststed=$_POST ["poststed"];
	  
	  if (!$postnr)
        {
          print ("Postnr m&aring; fylles ut");
        }
      else
        {
          include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */

          $sqlSetning="SELECT * FROM poststed WHERE postnr='$postnr';";
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
          $antallRader=mysqli_num_rows($sqlResultat); 

          if ($antallRader==0)  /* poststedet er ikke registrert */
            {
              print ("Poststedet finnes ikke");
            }
          else
            {	  	  
              $sqlSetning="UPDATE poststed SET poststed='$poststed' WHERE postnr='$postnr';";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; endre data i databasen");
                /* SQL-setning sendt til database-serveren */
			
              print ("Poststedet med postnr $postnr er n&aring; endret<br />");
            }
        }
    }
?> 