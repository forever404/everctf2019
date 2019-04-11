#!/usr/bin/env python3

import gmpy2 as g
from Crypto.PublicKey import RSA
from Crypto.Util.number import *

pub1 = RSA.importKey(open('pub1.pem').read())
pub2 = RSA.importKey(open('pub2.pem').read())
assert pub1.n == pub2.n
n = pub1.n
e1 = pub1.e
e2 = pub2.e
assert g.gcd(e1, e2) == 1

with open('cipher.txt') as f:
    ff = f.readlines()
    c1 = int(ff[0].split()[2])
    c2 = int(ff[1].split()[2])
    # print(c1, c2)

one, s1, s2 = g.gcdext(e1, e2)

if s1 < 0:
    s1 = -s1
    c1 = g.invert(c1, n)
elif s2 < 0:
    s2 = -s2
    c2 = g.invert(c2, n)

m = (c1**s1) * (c2**s2) % n

print(long_to_bytes(m).decode())
