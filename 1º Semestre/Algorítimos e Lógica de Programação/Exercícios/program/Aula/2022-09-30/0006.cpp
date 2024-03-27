#include "stdio.h"
#include "stdlib.h"

/**
 * Receba um ano e responda se é bissexto ou não (múltiplos de 4). Não permita inserção de número negativo
 **/

int main()
{
    int vAno;
    
	do
	{
		system("cls");

	    printf("\n\n\n");
	    printf("Informe o ano: ");

    	scanf("%i", &vAno);

		if (vAno <= 0)
		{
			printf("\nAno invalido!\n\n");
			system("pause");
		}
	}
	while (vAno <= 0);

    if ((vAno % 4 == 0 and vAno % 400 > 0) or vAno % 400 == 0)
    {
        printf("O ano %i eh bissexto", vAno);
    }
    else
    {
        printf("O ano %i nao eh bissexto", vAno);
    }

    printf("\n\n\n");

	return 5500;
}
