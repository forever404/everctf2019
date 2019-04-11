#include <stdio.h>
#include <string.h>
#include <unistd.h>
#include <stdlib.h>

char *shell = "/bin/sh";

void grant() {
    system("Good job");
}

void f() {
    char buffer[16];
    gets(buffer);
    if(buffer != "dyf"){
        puts("\nYou are sb!\n");
    }
    else{
        puts("\nWow dyf is cool\n");
    }
}
int main(){
    printf("I just love GaoDengShuXue\n");
    printf("\nBut I have something to tell you\n");
    printf("\nI want *** to be my boyfriend,do you know who is he?\n");
    
    f();
    return 0;
}
