#include "stdlib.h"
#include "stdio.h"

/**
 * Exibir a tabuada do 8 de forma organizada com multiplicação de 0 a 10.
**/

int main()
    {
        // define as variaveis
        int als_vI, als_vRes;

        for (als_vI = 0; als_vI <= 10 ; als_vI++)
        {
            // calcula o valor
            als_vRes = als_vI * 8;

            // mostra a linha da tabuada
            printf("8 x %d = %d \n", als_vI, als_vRes);
        }

        // pula algumas linhas depois de mostrar o resultado
        printf("\n \n \n");

		// faz uma pausa para aguardar a leitura do usuário	
		system("pause");

        return 5500;
    }
