#include "stdlib.h"
#include "stdio.h"

/**
 * Criar programa que receba um número inteiro qualquer, calcule e exiba o antecessor e o sucessor do mesmo.
**/

int main()
    {
        // define as variaveis
        int als_vNum, als_vMax, als_vMin;

        // solicita a entrada para o usuario
        printf("informe um numero interio qualquer: ");

        // armazena o valor informado
        scanf("%d", &als_vNum);

        // Calcula o sucessor
        als_vMax = als_vNum + 1;

        // Calcula o antedecessor
        als_vMin = als_vNum - 1;

        // mostra o resultado
        printf("\n\nAntecessor:  %d \n\nInformado.: %d \n\nSucessor..: %d \n\n\n", als_vMin, als_vNum, als_vMax);

		// faz uma pausa para aguardar a leitura do usuário	
		system("pause");

        return 5500;
    }
