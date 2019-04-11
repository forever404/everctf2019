#!/usr/bin/env python3
# encoding: utf-8

from binascii import hexlify, unhexlify

n = pow(2, 756839) - 1
e = 23

flag = "flag{cannot_touch_the_ceiling}"

# print(len(n))
fd = int(hexlify(flag.encode()), 16)

c = pow(fd, e, n)

with open('bigger_and_bigger.txt', 'w') as f:
    f.write('n = {0}\ne = {1}\nc = {2}'.format(str(n), str(e), str(c)))
