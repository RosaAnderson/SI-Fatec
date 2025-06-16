#include "stdlib.h"
#include "stdio.h"

/**
 * Receba n números e pare (break) a execução quando um valor menor que -12 for digitado.
**/

int main()
    {
        // define as variaveis
        int als_vNum;

        // executa o laço
        while(true)
        {
            // solicita entrada numerica para o usuario
            printf("informe um numero: ");
            scanf("%i", &als_vNum);

            // se a entrada for menor que -12 encerra o while
            if (als_vNum < (-12))
            {
                break;
            }
        }
		// faz uma pausa para aguardar a leitura do usuário	
		system("pause");

        return 5500;
    }
