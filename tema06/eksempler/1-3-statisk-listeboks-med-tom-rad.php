<?php  /* statisk-listeboks */
/*
/*  Programmet lager et skjema med en statisk listeboks med ukedag der første rad er tom
*/
?> 

<h3>Velg ukedag</h3>

<form method="post" action="" id="velgUkedagSkjema" name="velgUkedagSkjema">
  Ukedag
  <select name="ukedag" id="ukedag">
    <option value="">velg ukedag</option>
    <option value="mandag">mandag</option>
    <option value="tirsdag">tirsdag</option>
    <option value="onsdag">onsdag</option>
    <option value="torsdag">torsdag</option>
    <option value="fredag">fredag</option>
  </select>  <br />
  <input type="submit" value="Velg ukedag" id="velgUkedagKnapp" name="velgUkedagKnapp" /> 
</form>

<?php
  if (isset($_POST ["velgUkedagKnapp"]))
    {
      $ukedag=$_POST ["ukedag"];
      if (!$ukedag)
        {
          print ("Ukedag ikke valgt <br />");
        }
      else
        {
          print ("F&oslash;lgende ukedag er valgt: $ukedag <br />");
        }	
    }
?> 

