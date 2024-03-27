#include "stdlib.h"
#include "stdio.h"

/**
 * Calcule a soma dos n números pares inseridos pelo usuário.
**/

int main()
    {
        // define as variaveis
        int als_vNum, als_vSoma=0;

        do
        {
            // solicita uma entrada do usuario
            printf("informe um valor ou digite zero pra sair: ");
            scanf("%d", &als_vNum);

            // verifica se o numero não é par
            if (als_vNum % 2 == 0)
            {
                // calcula a media
                als_vSoma = als_vSoma + als_vNum;
            }
            else
            {
                // mostra a media do aluno
                printf("\nso serao aceitos numeros pares e maior que zero!\n\n");
            }
        } 
        while (als_vNum != 0);

        // mostra a media
        printf("A soma dos valores informados eh: %d", als_vSoma);

        // pula algumas linhas depois de mostrar o resultado
        printf("\n \n \n");

		// faz uma pausa para aguardar a leitura do usuário	
		system("pause");

        return 5500;
    }
