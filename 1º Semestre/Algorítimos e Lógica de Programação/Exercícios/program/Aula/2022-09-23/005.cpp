#include "stdio.h"

/**
 * receba um ano e responda se ele é bissexto ou não
**/

int main()
{
    int vAno;
    
    printf("Informe o ano: ");

    scanf("%i", &vAno);

    if ((vAno % 4 == 0 and vAno % 400 > 0) or vAno % 400 == 0)
    {
        printf("O ano %i eh bissexto", vAno);
    }
    else
    {
        printf("O ano %i nao eh bissexto", vAno);
    }

    return 5500;
}