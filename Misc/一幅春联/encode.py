import base64
flag=b'everctf{b4Se_1s_s0_4M4z1n9}'
f=0
for i in range(0,3):
	f=f+1
	flag=base64.b32encode(flag)
	flag=base64.b64encode(flag)
	flag=base64.b16encode(flag)
doc = open('out.txt','w')
print(flag,file=doc)
doc.close()
print(f)

for i in range(0,3):
	flag=base64.b16decode(flag)
	flag=base64.b64decode(flag)
	flag=base64.b32decode(flag)
print(flag)