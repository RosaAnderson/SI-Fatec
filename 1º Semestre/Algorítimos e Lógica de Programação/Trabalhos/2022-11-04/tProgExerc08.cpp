#include "stdlib.h"
#include "stdio.h"

/**
 * Exibir os números ímpares de 70 até -12, exceto o 1.
**/

int main()
    {
        // define as variaveis
        int als_vI;

        // realisa uma contagem regressiva
        for (als_vI = 70; als_vI >= (-12); als_vI--)
        {
            // mostra os numeros impares, exceto o 1
            if ((als_vI != 1) and (als_vI % 2 != 0))
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
