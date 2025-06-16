#include "stdio.h"

/**
 * receber 1 numero e responda se ele é par ou impar
**/

int main()
{
    int vA;

    printf("informe o primeiro numro: ");

    scanf("%i", &vA);

    if (vA % 2 == 0)
    {
        printf("O primeiro numero (%i) eh par", vA);
    }
    else
    {
        printf("O primeiro numero (%f) eh impar", vA);
    }

    return 5500;
}