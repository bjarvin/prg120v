<?php  /* dynamisk-listeboks */
/*
/*  Programmet lager et skjema med en dynamisk listeboks med postnr og poststed der postnr er verdien
*/
?> 

<h3>Velg poststed</h3>

<form method="post" action="" id="velgPoststedSkjema" name="velgPoststedSkjema">
  Poststed 
  <select name="postnr" id="postnr">
    <option value="">velg postnr</option>
    <?php include("dynamiske-funksjoner.php"); listeboksPostnr(); ?> 
  </select>  <br/>
  <input type="submit" value="Velg poststed" id="velgPoststedKnapp" name="velgPoststedKnapp" /> 
</form>

<?php
  if (isset($_POST ["velgPoststedKnapp"]))
    {
      $postnr=$_POST ["postnr"];
      if (!$postnr)
        {
           print ("Poststed ikke valgt <br />");
        }
      else
        {
           print ("F&oslash;lgende poststed er valgt: $postnr <br />");
        }	
    }
?> 