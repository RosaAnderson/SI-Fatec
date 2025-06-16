#include "stdlib.h"
#include "stdio.h"

/**
 * Exibir a tabuada do N escolhida pelo usuário de forma organizada com multiplicação de 0 a 10. Não permita N menor que 1 ou maior 10.
**/

int main()
    {
        // define as variaveis
        int als_vI, als_vTab, als_vRes;

        // executa o laço até atender os requisitos
        do
        {
            // solicita ao usuario a tabuada que deseja visualizar
            printf("Informe qual tabuada deseja visualizar: ");

            // armazena o valor na variavel
            scanf("%d", &als_vTab);

            // avisa o usuario que foi informado um numero invalido
            if ((als_vTab < 1) or (als_vTab > 10))
            {
                printf("\nO numero informado nao eh permitido!\n\n");
            }

        } while ((als_vTab < 1) or (als_vTab >10));

        // executa o laço até completar a tarefa designada
        for (als_vI = 0; als_vI <= 10 ; als_vI++)
        {
            // faz o calculo com os valores
            als_vRes = als_vI * als_vTab;

            // exibe a linha da tabuada
            printf("\n%d x %d = %d",als_vTab, als_vI, als_vRes);
        }

        // pula algumas linhas depois de mostrar o resultado
        printf("\n \n \n");

		// faz uma pausa para aguardar a leitura do usuário	
		system("pause");

        return 5500;
    }
