#include "stdlib.h"
#include "stdio.h"

/**
 * Calcule a média de n números inseridos pelo usuário.
**/

int main()
    {
        // define as variaveis
        float als_vNum, als_vMedia, als_vSoma = 0;
        int als_vQtd=0;

        do
        {
            // solicita uma entrada do usuario
            printf("informe um valor ou digite zero pra sair: ");
            scanf("%f", &als_vNum);

            // verifica se o numero não é zero
            if (als_vNum != 0)
            {
                // realiza a soma
                als_vSoma = als_vSoma + als_vNum;

                // incremente a variavel
                als_vQtd++;
            }
        } 
        while (als_vNum != 0);

        // calcula a media
        als_vMedia = als_vSoma / als_vQtd;

        // mostra a media
        printf("A media dos valores informados eh: %.2f", als_vMedia);

        // pula algumas linhas depois de mostrar o resultado
        printf("\n \n \n");

		// faz uma pausa para aguardar a leitura do usuário	
		system("pause");

        return 5500;
    }
