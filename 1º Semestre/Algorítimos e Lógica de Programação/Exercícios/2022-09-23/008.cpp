#include "stdlib.h"
#include "stdio.h"

/**
 * Receba 3 numeros e indique quao o maior deles
/**/

int main()
{
    int vN1, vN2, vN3, vResult = 0;

    system("cls");
    printf("\n\n\nInforme o primeiro numero: ");
    scanf("%d", &vN1);

    system("cls");
    printf("\n\n\nInforme o segundo numero: ");
    scanf("%d", &vN2);

    system("cls");
    printf("\n\n\nInforme o terceiro numero: ");
    scanf("%d", &vN3);

    if ((vN1 > vN2) and (vN1 > vN3))
    {
        vResult = vN1;
    }
    else if ((vN2 > vN1) and (vN2 > vN3))
    {
        vResult = vN2;
    }
    else if ((vN3 > vN1) and (vN3 > vN2))
    {
        vResult = vN3;
    }
    else
    {
        vResult = 0;
    }

    if (vResult > 0)
    {
        printf("\n\n\nO numero %i eh o maior dos tres informados!\n\n\n", vResult);
    }
    else
    {
        printf("\n\n\nOs tres numeros informados sao iguais!\n\n\n");
    }

    return 5500;
}