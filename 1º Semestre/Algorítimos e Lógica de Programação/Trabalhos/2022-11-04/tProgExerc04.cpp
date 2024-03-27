#include "stdlib.h"
#include "stdio.h"

/**
 *  Calculando a área do trapézio regular
**/

int  main()
	{
		// define as variaveis
		float als_vh, als_vb, als_vB, als_vArea;
		
		// exibe a mensagem ao usuario do que é preciso
		printf("Para encontrar a area de um trapezio retangular, eh preciso informar \nos valores de base maior (B), de base menor (b) e de altura (h). \n");

		// faz uma pausa para aguardar a leitura do usuário	
		system("pause");

		// exibe a mensagem solicitando o valor	
		printf("Informe o valor da base (B) e pressione <ENTER>: ");

		// grava o valor informado pelo usuario na variável	
		scanf("%f", &als_vB);

		// exibe a mensagem solicitando o valor	
		printf("Informe o valor da base (b) e pressione <ENTER>: ");

		// grava o valor informado pelo usuario na variável	
		scanf("%f", &als_vb);

		// exibe a mensagem solicitando o valor	
		printf("informe o valor da altura (h) e pressione <ENTER>: ");

		// grava o valor informado pelo usuario na variável	
		scanf("%f", &als_vh);

		// executa o calculo da area do trapezio
		als_vArea = ((als_vB + als_vb) * als_vh) / 2;
		
		// exibe o resultado
		printf("A area do trapezio eh: %.2f \n \n \n \n \n", als_vArea);

		// faz uma pausa para aguardar a leitura do usuário	
		system("pause");

		// 
		return 5500;
	}

