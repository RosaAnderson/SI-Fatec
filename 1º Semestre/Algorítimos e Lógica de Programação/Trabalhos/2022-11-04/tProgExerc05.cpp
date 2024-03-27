#include "stdlib.h"
#include "stdio.h"

/**
 *  Converter Graus Célsius em Fahrenheit (F = (C x 1.8) + 32)
**/

int  main()
	{
		// define as variaveis
		float als_vGc, als_vGf;
		
		// exibe a mensagem solicitando o valor	
		printf("Informe o valor da da temperatura em Graus Celcius pressione <ENTER>: ");

		// grava o valor informado pelo usuario na variável	
		scanf("%f", &als_vGc);

		// executa o calculo
		als_vGf = (als_vGc * 1.8) + 32;
		
		// exibe o resultado
		printf("A temperatura correspondente em Fahrenheit eh: %.2f \n \n \n \n \n", als_vGf);

		// faz uma pausa para aguardar a leitura do usuário	
		system("pause");

		// 
		return 5500;
	}

