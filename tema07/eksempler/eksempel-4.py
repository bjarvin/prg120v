
svar=input("Er du student (j/n): ")

if not svar:  
  print("Du har ikke svart på spørsmålet om du er student")
elif svar == "j":  
  print("Du har svart j på spørsmålet om du er student")
elif svar == "n":  
  print("Du har svart n på spørsmålet om du er student")
else:  
  print("Du har ikke svart j eller n på spørsmålet om du er student")

