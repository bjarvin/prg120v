


def fulltNavn(fornavn,etternavn):

  navn=fornavn + " " + etternavn
  return navn 	

fornavn=input("Fornavn: ")
etternavn=input("Etternavn:")

navn=fulltNavn(fornavn,etternavn)

print ("Navnet er " , navn)