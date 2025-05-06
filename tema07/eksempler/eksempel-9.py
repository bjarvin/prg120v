
postnr=input("Postnr: ")

if not postnr: 
  print("Postnr er ikke fylt ut")
elif len(postnr)!=4: 
  print("Postnr består ikke av 4 tegn")
elif not postnr.isnumeric(): 
  print("Postnr består ikke bare av siffre ")
else:
  print("Postnr er korrekt fylt ut")
