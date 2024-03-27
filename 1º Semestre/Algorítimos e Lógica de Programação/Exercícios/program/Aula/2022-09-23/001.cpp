#include "stdio.h"

/**
 * receber 2 numeros e exiba se são iguais ou não
**/

int main()
{
    float vA, vB;

    printf("informe o primeiro numro: ");

    scanf("%f", &vA);

    printf("informe o segundo numro: ");

    scanf("%f", &vB);

    if (vA == vB)
    {
        printf("O primeiro numero (%.2f) eh igual do segundo (%.2f)", vA, vB);
    }
    else
    {
        printf("O primeiro numero (%.2f) eh diferente do segundo (%.2f)", vA, vB);
    }

    return 5500;
}