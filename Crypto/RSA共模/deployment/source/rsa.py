#!/usr/bin/env python3

import gmpy2 as g
from Crypto.Util.number import *
from Crypto.PublicKey import RSA


flag = 'flag{61726f1fbd1272dfa634830d782e277b}'
flaglength = len(flag)
assert flaglength % 2 == 0
n = getPrime(4096)
e1 = getPrime(16)
e2 = getPrime(16)
m = flag
m = bytes_to_long(m.encode())
c1 = pow(m, e1, n)
c2 = pow(m, e2, n)

with open('cipher.txt', 'w') as f:
    f.write('c1 = ' + str(c1) + '\n')
    f.write('c2 = ' + str(c2) + '\n')

pub1 = RSA.construct((n, e1))
pub2 = RSA.construct((n, e2))
with open('pub1.pem', 'wb') as f:
    f.write(pub1.exportKey())
with open('pub2.pem', 'wb') as f:
    f.write(pub2.exportKey())

# print('c1 = ', c1)
# print('c2 = ', c2)
# print(pub1.exportKey())
# print(pub2.exportKey())
