#!/usr/bin/env python3
# coding: utf-8

from binascii import hexlify, unhexlify
import gmpy2

with open('bigger_and_bigger.txt', 'r') as f:
    ff = f.readlines()

n = int(ff[0].split()[2])
e = int(ff[1].split()[2])
c = int(ff[2].split()[2])

ic = gmpy2.iroot(c, e)
if ic[1]:
    print(unhexlify(hex(ic[0])[2:]).decode())
else:
    print('something wrong')
