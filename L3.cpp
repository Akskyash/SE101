#include<stdio.h>
#include<string.h>

int main()
{
    char s1[100], s2[100];

    printf("First name: ");
    gets(s1);

    printf("and Last name: ");
    gets(s2);


    strcat(s1, " ");
    strcat(s1, s2);

    printf("Full name: %s",s1,s2);

    return 0;
}
