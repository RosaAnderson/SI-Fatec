#include "stdio.h"

/**
 * receber 1 numero e responda se ele é positivo ou negativo
**/

int main()
{
    float vA;

    printf("informe um numero: ");

    scanf("%f", &vA);

    if (vA > 0)
    {
        printf("O numero (%.2f) eh positivo", vA);
    }
    else if (vA == 0)
    {
        printf("O numero (%.0f) eh neutro", vA);
    }
    else
    {
        printf("o numero (%.2f) eh negativo", vA);
    }

    return 5500;
}