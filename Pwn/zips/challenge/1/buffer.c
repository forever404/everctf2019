#include<stdio.h>
#include<stdlib.h>

void f1(){
    system("/bin/bash");
}

void f2(){
    char buffer[32];
    char rubbish[] = "dyf's PE grade is 58 !!!!!! WTF";
    printf("%s\n",rubbish);
    printf("\nQAQ\n");
    printf("\nDo you have something to say?\n");
    gets(buffer);
    return;
}

int main(){
    f2();
    return 0;
}
