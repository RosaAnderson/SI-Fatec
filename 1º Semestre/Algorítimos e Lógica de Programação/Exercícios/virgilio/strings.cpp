#include "stdio.h"

int main()
{
    char s1[25], s2[25];
    
    printf(" Digite a primeira string: ");
    gets(s1);         /* Le string 1*/

    printf("\n Digite a segunda string: ");
    gets(s2);         /* Le string 2*/

    printf("\n\n As strings lidas sao:\n %s \n %s", s1, s2); /* Imprime as strings*/
    
    printf("\n\n A segunda letra da primeira string e': %c", s1[1]);
    
    printf("\n A segunda letra da segunda string e': %c ", s2[1]);


    return 5500;
}