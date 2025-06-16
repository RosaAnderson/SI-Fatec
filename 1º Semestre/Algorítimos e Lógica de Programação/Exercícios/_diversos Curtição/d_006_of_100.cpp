#include "stdio.h"
#include "stdlib.h"
#include "locale.h"
#include "time.h"
#include "string.h"

/**
 * Faça um programa que leia um número inteiro e mostre o seu antecessor e seu sucessor.
 *  Ex:
 *     Digite um número: 9
 *     O antecessor de 9 é 8
 *     O sucessor de 9 é 10
/**/

int main()
{
    int vN, vRes;

    printf("\n\n\nInform um numero e pressione <ENTER>: ");
    scanf("%i", &vN);

    vRes = vN - 1;
    printf("\n\nO antecessor de %i eh %i.", vN, vRes);

    vRes = vN + 1;
    printf("\nO sucessor de %i eh %i.\n\n\n\n", vN, vRes);

    system("pause");

    return 5500;
}