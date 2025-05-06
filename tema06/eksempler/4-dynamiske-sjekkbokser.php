<?php  /* dynamiske-sjekkbokser */
/*
/*  Programmet lager et skjema med dynamiske sjekkbokser med postnr og poststed der postnr er verdien
*/
?> 

<h3>Velg poststed</h3>

<form method="post" action="" id="velgPoststedSkjema" name="velgPoststedSkjema">
  Poststed <br />
  <?php include("dynamiske-funksjoner.php"); sjekkbokserPostnr(); ?>  <br/>
  <input type="submit" value="Velg poststed" id="velgPoststedKnapp" name="velgPoststedKnapp" /> 
</form>

  
<?php
  if (isset($_POST ["velgPoststedKnapp"]))
    {
      if (!isset($_POST ["postnr"]))
        {
          print ("Ingen poststeder er valgt <br />");
        }
      else
        {
          print ("F&oslash;lgende poststeder er valgt: <br />");
		  
		  $postnr=$_POST ["postnr"];
          $antall=count($postnr);
          for ($r=0;$r<$antall;$r++)
            {
              print("$postnr[$r] <br />");
            }
        }
    }
?>  