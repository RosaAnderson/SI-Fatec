#include "stdio.h"
#include "stdlib.h"

/**
 * Receber uma letra do usuário, detecte se é maiúscula ou minúscula, altere seu caso e exiba. Não permita inserção de especiais ou números. Crie o fluxograma também.
**/

int main()
	{
		char als_vChar, als_vCase;

		do
		{
			system("cls");
			printf("Entre com algum caracter: ");
			scanf("%c", &als_vChar);

			if ((als_vChar < 65) or (als_vChar > 90) and ((als_vChar < 96) or (als_vChar > 122)))
			{
				printf("\ncaracter não permitido!\n\n");
				system("pause");
			}
		} 
		while ((als_vChar < 65) or (als_vChar > 90) and ((als_vChar < 96) or (als_vChar > 122)));
		
		if (als_vChar > 96)
		{
			als_vCase = als_vChar - 32;
			printf("\n\nO caracter de entrada eh %c", als_vChar);
			printf("\n\nO caracter de saida eh %c", als_vCase);
		}
		else if (als_vChar < 91)
		{
			als_vCase = als_vChar + 32;
			printf("\n\nO caracter de entrada eh %c", als_vChar);
			printf("\n\nO caracter de saida eh %c", als_vCase);
		}

		printf("\n\n\n\n");

		return 5500;
	}