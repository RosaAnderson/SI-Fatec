#include "stdio.h"
#include "stdlib.h"
#include "locale.h"
#include "time.h"
#include "string.h"

/**
 * Desenvolva um algoritmo que leia dois números inteiros e mostre o somatório entre eles.
 *  Ex:
 *     Digite um valor: 8
 *     Digite outro valor: 5
 *     A soma entre 8 e 5 é igual a 13.
/**/

int main()
{
    float vN01, vN02, vResult;

    printf("\n\n\nEntre com o primeiro valor e pressione <ENTER>: ");
    scanf("%f", &vN01);

    printf("\nEntre com o segundo valor e pressione <ENTER>: ");
    scanf("%f", &vN02);

    vResult = vN01 + vN02;

    printf("\n\n\nA soma entre %.2f e %.2f eh igual a %.2f.\n\n\n\n", vN01, vN02, vResult);

    system("pause");

    return 5500;
}