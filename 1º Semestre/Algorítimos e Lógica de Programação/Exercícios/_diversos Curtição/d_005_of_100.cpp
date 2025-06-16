#include "stdio.h"
#include "stdlib.h"
#include "locale.h"
#include "time.h"
#include "string.h"

/**
 * Faça um programa que leia as duas notas de um aluno em uma matéria e mostre na tela a sua média na disciplina.
 *  Ex:
 *     Nota 1: 4.5
 *     Nota 2: 8.5
 *     A média entre 4.5 e 8.5 é igual a 6.5
/**/

int main()
{
    float vN01, vN02, vMedia;

    printf("\n\n\nEntre com a primeira nota e pressione <ENTER>: ");
    scanf("%f", &vN01);

    printf("\nEntre com a segunda nota e pressione <ENTER>: ");
    scanf("%f", &vN02);

    vMedia = (vN01 + vN02) /2;

    printf("\n\nA media entre as notas %.1f e %.1f eh igual a %.1f.\n\n\n\n", vN01, vN02, vMedia);

    system("pause");

    return 5500;
}