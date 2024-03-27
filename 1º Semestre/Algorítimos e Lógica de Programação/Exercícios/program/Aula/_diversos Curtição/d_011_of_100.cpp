#include "stdio.h"
#include "stdlib.h"
#include "locale.h"
#include "time.h"
#include "string.h"
#include "math.h"

/**
 * Desenvolva uma lógica que leia os valores de A, B e C de uma equação do
 * segundo grau e mostre o valor de Delta.
/**/

int main()
{
    setlocale(LC_ALL, "portuguese");

	// define as variaveis
	float vA, vB, vC, vD, vx1, vx2;
	
	// exibe a mensagem solicitando o valor	
	printf("\n\n\nInforme o valor de 'a' e pressione <ENTER>: ");

	// grava o valor informado pelo usuario na variável	
	scanf("%f", &vA);
	
	// exibe a mensagem solicitando o valor	
	printf("informe o valor de 'b' e pressione <ENTER>: ");

	// grava o valor informado pelo usuario na variável	
	scanf("%f", &vB);

	// exibe a mensagem solicitando o valor	
	printf("informe o valor de 'c' e pressione <ENTER>: ");

	// grava o valor informado pelo usuario na variável	
	scanf("%f", &vC);

    printf("\n\n");

	// executa o calculo da area do triangulo
	vD = ((vB) * (vB)) - (4 * (vA) * (vC));

    // mostra o valor do delta
    printf("Valor de delta: %f \n \n", vD);

/**
    if (vD < 0)
    {
        printf("Delta sem Solucao \n \n \n \n \n");
    }
    else
    {
        vx1 = (-(vB) + sqrt(vD)) / (2 * (vA));

        vx2 = (-(vB) - sqrt(vD)) / (2 * (vA));

    	// exibe o resultado
    	printf("Valor de delta: %f \n \n", vD);

    	printf("Valor de x': %f \n \n", vx1);

	    printf("Valor de x'': %f \n \n \n \n \n", vx2);
    }
/**/

	// faz uma pausa para aguardar a leitura do usuário	
	system("pause");

     return 5500;
}