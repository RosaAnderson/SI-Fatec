#include "stdio.h"
#include "stdlib.h"

/**
 * Receba 1 número e exiba se é par ou ímpar. Não permita inserção de 0.
**/

int main()
{
    int vNum;

    do
    {
        system("cls");
        printf("imforme um numero diferente de zero: ");
        scanf("%i", &vNum);

        if (vNum == 0)
        {
            printf("\nnao pode ser zero!\n\n");
            system("pause");
        }
    } 
    while (vNum == 0);

    if (vNum % 2 != 0)
    {
        printf("O numero digitado eh impar!");
    }
    else
    {
        printf("O numero digitado eh par!");
    }

    printf("\n\n");
	
	return 5500;
}