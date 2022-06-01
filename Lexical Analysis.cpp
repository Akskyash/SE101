#include<stdio.h>
#include<ctype.h>
#include<string.h>

void lex()
{
    int i,j,k;
    int ic=0, cc=0, oc=0;

    char b[30], op[30], id[30], num[30];

    printf("Enter string expression : ");
    scanf("%s",&b);

    for(i=0;i<strlen(b);i++)
        {
            if(isspace(b[i]))
            {
                continue;
                }
                else if(isalpha(b[i])){
                        id[ic] =b[i];
                ic++;
                }
                else if(isdigit(b[i])){
                        k=(b[i]-'0');
                i=i+1;
                while(isdigit(b[i])){
                        k=k*10 + (b[i]-'0');
                i++;
                }
                i=i-1;
                num[cc]=k;
                cc++;
                }
                else{
                        if(b[i]=='*'){
                            op[oc]='*';
                oc++;
                }
                else if(b[i]=='-'){
                        op[oc]='-';
                oc++;
                }
                else if(b[i]=='+'){
                        op[oc]='+';
                oc++;
                }
                else if(b[i]=='='){
                        op[oc]='=';
                oc++;
                }
                else if(b[i]=='/'){
                        op[oc]='/';
                oc++;
                }
                else if(b[i]=='>'){
                        op[oc]='>';
                oc++;
                }
                else if(b[i]=='<'){
                        op[oc]='<';
                oc++;
                }
                else if(b[i]=='%'){
                        op[oc]='%';
                oc++;
                }
                else if(b[i]=='^'){
                        op[oc]='^';
                oc++;
    }

  }

}
printf(" ID : ");
for(j=0;j<ic;j++){
        printf("%c ",id[j]);
     }
        printf("\n Numbers : ");
for(j=0;j<cc;j++){
        printf("%d ",num[j]);
     }
        printf("\n Operators : ");
for(j=0;j<oc;j++){
        printf("%c ",op[j]);
    }
}

int main()
{
    lex();
    return(0);
}

