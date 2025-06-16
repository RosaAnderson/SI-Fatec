#include "stdlib.h"
#include "stdio.h"

/**
 * Calcule a média de P1 e P2 dos N alunos da sala enquanto desejar.
**/

int main()
    {
        // define as variaveis
        float als_vP1, als_vP2, als_vMedia;

        do
        {
            // solicita uma entrada do usuario
            printf("informe um valor ou digite zero pra sair: ");
            scanf("%f", &als_vP1);

            // solicita uma entrada do usuario
            printf("informe um valor ou digite zero pra sair: ");
            scanf("%f", &als_vP2);

            // verifica se o numero não é zero
            if ((als_vP1 != 0) or (als_vP2 != 0))
            {
                // calcula a media
                als_vMedia = (als_vP1 + als_vP2) / 2;

                // mostra a media do aluno
                printf("\nA media do aluno eh: %.2f\n\n", als_vMedia);
            }
        } 
        while ((als_vP1 != 0) or (als_vP2 != 0));

        // pula algumas linhas depois de mostrar o resultado
        printf("\n \n \n");

		// faz uma pausa para aguardar a leitura do usuário	
		system("pause");

        return 5500;
    }
