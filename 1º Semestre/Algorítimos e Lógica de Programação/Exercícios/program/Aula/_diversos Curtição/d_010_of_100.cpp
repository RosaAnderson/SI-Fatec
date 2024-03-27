#include "stdio.h"
#include "stdlib.h"
#include "locale.h"
#include "time.h"
#include "string.h"

/**
 * Faça um algoritmo que leia a largura e altura de uma parede, calcule e mostre
 * a área a ser pintada e a quantidade de tinta necessária para o serviço, sabendo
 * que cada litro de tinta pinta uma área de 2 metros quadrados.
/**/

int main()
{
    float vH, vB, vT, vA;

    printf("\n\n\nInforme a altura da parede: ");
    scanf("%f",&vH);

    printf("\nInforme a largura da parede: ");
    scanf("%f",&vB);

    vA = vB * vH;

    vT = vA / 2;

    printf("\n\nArea de parede a ser pintada: %.2f m2", vA);
    printf("\n\nQuantidade de tinta que sera usada eh: %.2f L", vT);

    printf("\n\n\n\n");

    system("pause");

    return 5500;
}