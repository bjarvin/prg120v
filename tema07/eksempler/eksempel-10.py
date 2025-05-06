emnekode=input("Emnekode: ")

lovligEmnekode=True

if not emnekode: 
  lovligEmnekode=False
  print("Emnekode er ikke fylt ut")
elif len(emnekode)!=7: 
  lovligEmnekode=False
  print("Emnekode består ikke av 7 tegn")
else:
  del1=emnekode[0:3]
  del2=emnekode[3:6]
  del3=emnekode[6:7] 

  if not del1.isalpha():
    lovligEmnekode=False
    print("Tegn 1-3 inneholder ikke bare bokstaver")

  if not del2.isnumeric():
    lovligEmnekode=False
    print("Tegn 4-6 inneholder ikke bare siffre")

  if not del3.isalpha() and not del3.isnumeric():
    lovligEmnekode=False
    print("Det siste tegnet inneholde ikke bokstav eller siffer") 

if lovligEmnekode:  
      print("Emnekode er korrekt fylt ut")

