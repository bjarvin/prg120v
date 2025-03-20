<!DOCTYPE html>
<html>
<head>
  <title>Eksempel 2</title>
</head>
<body>
  <h3>Eksempel 2</h3>
    
  <form method="post" action="" id="eksempel2" name="eksempel2">
    Hva er 3 ganger 3 ? <input type="text" id="svar" name="svar" required  /> <br />
    <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
    <input type="reset" value="Nullstill" name="nullstill" id="nullstill" /> <br />
  </form>
</body>
</html>

<?php     /* Eksempel 2 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Hva er 3 ganger 3 ?"
/*    Programmet sjekker om svaret er riktig og skriver ut en melding ang. svaret 
/*    Meldingen skrives ut på samme side som HTML-skjemaet er
*/
  if (isset($_POST ["fortsett"])) 
    {
      $svar=$_POST ["svar"];
	
      if ($svar == 9)  
        {
          print("Riktig. 3 ganger 3 er 9 ");
        }
      else 
        {
          print("Feil. 3 ganger 3 er ikke  $svar. 3 ganger 3 er 9 ");
        }
    }
?>