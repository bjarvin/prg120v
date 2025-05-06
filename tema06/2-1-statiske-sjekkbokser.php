<?php  /* statiske-sjekkbokser */
/*
/*  Programmet lager et skjema med statiske sjekkbokser for aviser 
*/
?> 

<h3>Velg aviser</h3>

<form method="post" action="" id="velgAvisSkjema" name="velgAvisSkjema">
  Avis <br />
  <input type ="checkbox" id="avis" name="avis[]" value="aftenposten" />aftenposten <br />
  <input type ="checkbox" id="avis" name="avis[]" value="dagbladet" />dagbladet <br />
  <input type ="checkbox" id="avis" name="avis[]" value="e24" />e24 <br />
  <input type ="checkbox" id="avis" name="avis[]" value="vg" />vg <br />
  <input type="submit" value="Velg aviser" id="velgAviserKnapp" name="velgAviserKnapp" /> 
</form>

<?php
  if (isset($_POST ["velgAviserKnapp"]))
    {
      if (!isset($_POST ["avis"]))
        {
          print ("Ingen aviser er valgt <br />");
        }
      else
        {
          print ("F&oslash;lgende aviser er valgt: <br />");
		  
		  $avis=$_POST ["avis"];
          $antall=count($avis);
          for ($r=0;$r<$antall;$r++)
            {
              print("$avis[$r] <br />");
            }
        }
    }
?>  