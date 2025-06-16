#include "stdio.h"
#include "stdlib.h"
#include "locale.h"
#include "time.h"
#include "string.h"

/**
 * Faça um algoritmo que leia quanto dinheiro uma pessoa tem na carteira (em R$)
 * e mostre quantos dólares ela pode comprar. Considere US$1,00 = R$3,45.
/**/

int main()
{
    float vRs, vS = 3.45;

    printf("\n\n\nInforme um valor em R$ para conversao em dolar: ");
    scanf("%f", &vRs);

    vS = vRs / vS;

    printf("\n\nO valor informado convertido em dolar eh: $ %.2f\n\n\n\n", vS);

    system("pause");

    return 5500;
}