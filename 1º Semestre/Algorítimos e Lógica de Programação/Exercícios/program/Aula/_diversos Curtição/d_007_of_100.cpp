#include "stdio.h"
#include "stdlib.h"
#include "locale.h"
#include "time.h"
#include "string.h"

/**
 * Crie um algoritmo que leia um número real e mostre na tela o seu dobro e a sua terça parte.
 *  Ex:
 *     Digite um número: 3.5
 *     O dobro de 3.5 é 7.0
 *     A terça parte de 3.5 é 1.16666
/**/

int main()
{
    float vN, vRes;

    printf("\n\n\nInform um numero e pressione <ENTER>: ");
    scanf("%f", &vN);

    vRes = vN * 2;
    printf("\n\nO o dobro de %f eh %f.", vN, vRes);

    vRes = vN / 3;
    printf("\nA terca de %f eh %f.\n\n\n\n", vN, vRes);

    system("pause");

    return 5500;
}