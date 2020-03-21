x = open("text.txt", "r", encoding="utf-8").read()
b = list(x)
list = ["b", "c", "ç", "d" ,"f" , "g", "ğ", "h", "j", "k", "l", "m", "n", "p", "r", "s", "ş", "t", "v", "y", "z"]
li = ["ß", "C", "Ç", "D" ,"F", "G", "Ğ", "H", "J", "K", "L", "M", "N", "P", "R", "$", "$", "T", "V", "Y", "Z"]
f = int(0)
for el in b:
	if el in list:
		c = list.index(el)
		b[f] = li[c]
  
	f += 1

z = ''.join(map(str,b))

y = open("output.txt", "w", encoding="utf-8")
y.write("[YENİ]\n"+z+"\n\n[ESKİ]\n"+x)