#include<stdio.h>
#include<string.h>
#include<stdlib.h>
#include<malloc.h>

char a[10] = "/bin/zsh";

void _start_(){
    system("no");
}

void f(char * input){
    int m=4;
    for(int a = 1;a<10;a++){
        
    }
    char buffer[32];
    char buffer1[32];
    for(int i = 0;i<10;i++){
        int *b = malloc(sizeof(int));
    }
    switch(m){
        case 1: 
            1==1;
            break;
        case 2: 
            printf("%d",m);
            break;
        case 3:
            break;
        case 4:
            m = 2;
            break;
    }
    strcpy(buffer,input);
    puts(buffer);
}

int main(int argc,char *argv[]){
    printf("好玩的刚刚开始\n");
    char a = ':';
    char b = ')';
    printf("\nlibc time!!  %c%c  dyf的最爱\n",a,b);
    f(argv[1]);
    return 0;
}
