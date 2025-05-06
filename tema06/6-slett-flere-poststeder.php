<?php  /* slett-flere-poststeder */
/*
/*  Programmet lager et skjema for å velge flere poststeder som skal slettes  
/*  Programmet sletter de valgte poststedene
*/
?> 

<script src="funksjoner.js"> </script>

<h3>Slett poststeder</h3>

<form method="post" action="" id="slettPoststedSkjema" name="slettPoststedSkjema" onSubmit="return bekreft()">
  Poststed <br />
  <?php include("dynamiske-funksjoner.php"); sjekkbokserPostnr(); ?> <br/>
  <input type="submit" value="Slett poststed" name="slettPoststedKnapp" id="slettPoststedKnapp" /> 
</form>

<?php
  if (isset($_POST ["slettPoststedKnapp"]))
    {
      @$postnr=$_POST ["postnr"];
      $antall=count($postnr);

      if ($antall==0)
        {
          print ("Ingen poststeder ble valgt <br />");
        }
      else
        {
          include("db-tilkobling.php");  	
          for ($r=0;$r<$antall;$r++)
            {
              $sqlSetning="DELETE FROM poststed WHERE postnr='$postnr[$r]';";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
            }
          print ("De valgte poststedene er n&aring; slettet <br />");
        }
    }
?> 