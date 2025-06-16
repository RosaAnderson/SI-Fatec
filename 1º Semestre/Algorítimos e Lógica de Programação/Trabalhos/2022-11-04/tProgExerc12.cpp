#include "stdlib.h"
#include "stdio.h"

/**
 * Exibir na tela os números acrescidos de 2 em 2 dentro da faixa (primeiro e último) estabelecida pelo usuário. Não permita a inserção de 2 números iguais.
**/

int main()
    {
        // define as variaveis
        int als_vI, als_vIni, als_vFin, als_vRes;

        // solicita ao usuario a um numero
        printf("Informe o numero inicial da faixa: ");

        // armazena o valor na variavel
        scanf("%d", &als_vIni);

        // executa o laço até atender os requisitos
        do
        {
            // solicita ao usuario a tabuada que deseja visualizar
            printf("Informe o numero final da faixa: ");

            // armazena o valor na variavel
            scanf("%d", &als_vFin);

            // avisa o usuario que foi informado um numero invalido
            if (als_vIni == als_vFin)
            {
                printf("\nO numero informado nao pode ser igual ao primeiro!\n\n");
            }

            // avisa o usuario que foi informado um numero invalido
            if (als_vIni > als_vFin)
            {
                printf("\nNesse cenario o numero inicial nao pode ser maior que o numero final!\n\n");
            }

        } while ((als_vIni == als_vFin) or (als_vIni > als_vFin));

        // pula algumas linhas depois de mostrar o resultado
        printf("\n \n");

        // executa o laço até completar a tarefa designada seja concluida
        for (als_vI = als_vIni; als_vI <= als_vFin ; als_vI += 2)
        {
            // exibe a linha da tabuada
            printf("%d\t", als_vI);
        }

        // pula algumas linhas depois de mostrar o resultado
        printf("\n \n \n");

		// faz uma pausa para aguardar a leitura do usuário	
		system("pause");

        return 5500;
    }