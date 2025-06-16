#include "stdlib.h"
#include "stdio.h"

/**
 * Exibir os números pares de 19 até -34. Use obrigatoriamente o operador resto.
**/

int main()
    {
        // define as variaveis
        int als_vI;

        // realisa uma contagem regressiva
        for (als_vI = 19; als_vI >= (-34); als_vI--)
        {
            // mostra os numeros pares
            if (als_vI % 2 == 0)
            {
                printf("%d\t", als_vI);
            }
        }
         
        // pula algumas linhas depois de mostrar o resultado
        printf("\n \n \n");

		// faz uma pausa para aguardar a leitura do usuário	
		system("pause");

        return 5500;
    }
