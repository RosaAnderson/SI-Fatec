#include "stdio.h"
#include "stdlib.h"

/**
 * Receba n votos de 4 candidatos diferentes e indique o mais votado. Use “s” para continuar inserindo votos .
**/

int main()
{
    int vCand01 = 0, vCand02 = 0, vCand03 = 0, vCand04 = 0, vQtd = 1;
    int vQtd01 = 0 , vQtd02 = 0 , vQtd03 = 0 , vQtd04 = 0;
	char vResp;

    do
    {
        system("cls");

        printf("\n\n\nEleicao 2022 - Contagem de votos!\n\n\n");
        printf("                              ***   ATENCAO   ***\nInforme 1 (um) para o candidato que foi votado e 0 (zero) para o que nao foi votado");

// George Boole
// Alan Turing
// Charles Babbage
// Ada Lovelace

        printf("\n\n\n.: Cedula :. %d\n", vQtd);

		do
		{
	        printf("\nGeorge Boole: ");
        	scanf("%d", &vCand01);

			if ((vCand01 != 0) and (vCand01 != 1))
			{
				printf("Valor errado!!\n");
			}
		}
		while ((vCand01 != 0) and (vCand01 != 1));

		do
		{
	        printf("\nAda Lovelace: ");
        	scanf("%d", &vCand02);

			if ((vCand02 != 0) and (vCand02 != 1))
			{
				printf("Valor errado!!\n");
			}
		}
		while ((vCand02 != 0) and (vCand02 != 1));

		do
		{
	        printf("\nAlan Turing: ");
        	scanf("%d", &vCand03);

			if ((vCand03 != 0) and (vCand03 != 1))
			{
				printf("Valor errado!!\n");
			}
		}
		while ((vCand03 != 0) and (vCand03 != 1));

		do
		{
	        printf("\nCharles Babbage: ");
        	scanf("%d", &vCand04);

			if ((vCand04 != 0) and (vCand04 != 1))
			{
				printf("Valor errado!!\n");
			}
		}
		while ((vCand04 != 0) and (vCand04 != 1));

		vQtd01 = vQtd01 + vCand01;
		vQtd02 = vQtd02 + vCand02;
		vQtd03 = vQtd03 + vCand03;
		vQtd04 = vQtd04 + vCand04;

        vQtd++;

        printf("\n\nDeseja informar mais uma cedula? (s/n)");
        scanf("%s", &vResp);

    } 
    while ((vResp == 83) or (vResp == 115));

//	vMedia = vMedia / vQtd;

//	printf("A media das notas dos alunos eh: %.2f\n\n\n");

	return 5500;
}
