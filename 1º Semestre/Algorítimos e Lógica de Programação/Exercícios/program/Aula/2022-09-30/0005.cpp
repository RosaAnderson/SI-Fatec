#include "stdio.h"
#include "stdlib.h"

/**
 * Receba 1 caractere. Teste se é maiúscula, minúscula, especial ou número. Não permita inserção de @
**/

int main()
{
	char vChar;

	do
	{
		system("cls");
		printf("Entre com algum caracter: ");
		scanf("%c", &vChar);

        if (vChar == 64)
        {
            printf("\nnao pode ser arroba!\n\n");
            system("pause");
        }
	} 
	while (vChar == 64);
	
	if ((vChar >= 48) && (vChar <= 57))
	{
		printf("\n\nO caracter de entrada eh um numero!");
	}
	else if ((vChar >= 65) && (vChar <= 90))
	{
		printf("\n\nO caracte de entrada eh uma letra maiuscula!");
	}
	else if ((vChar >= 97) && (vChar <= 122))
	{
		printf("\n\nO caracter de entrada eh uma letra minuscula!");
	}
	else /**if (vChar != 64)**/
	{
		printf("\n\nO caracter de entrada eh especial!");
	}

	printf("\n\n\n\n");

	return 5500;
}
