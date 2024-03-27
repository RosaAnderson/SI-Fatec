#include "stdlib.h"
#include "stdio.h"

/**
 * Receba a média final (MF) de n alunos da sala e exiba a quantidade de reprovados com nota 6,0 ou superior.
**/

int main()
    {
        // define as variaveis
        float als_vMedia;
        int als_vRep = 0, als_vApr = 0, als_v6 = 0;

        do
        {
            // solicita uma entrada do usuario
            printf("informe a media do aluno ou digite zero pra sair: ");
            scanf("%f", &als_vMedia);

            // verifica se o numero não é zero
            if (als_vMedia != 0)
            {
                if (als_vMedia < 6)
                {
                    // incremente a variavel
                    als_vRep ++;
                }
                else if (als_vMedia > 6)
                {
                    // incremente a variavel
                    als_vApr ++;
                }
                else
                {
                    // incremente a variavel
                    als_v6 ++;
                }
            }
        } 
        while (als_vMedia != 0);

        // mostra o resultado
        printf("\n\n%d alunos repovados\n\n%d alunos no limite\n\n%d alunos apovados\n\n", als_vRep, als_v6, als_vApr);

        // pula algumas linhas depois de mostrar o resultado
        printf("\n\n");

		// faz uma pausa para aguardar a leitura do usuário	
		system("pause");

        return 5500;
    }
