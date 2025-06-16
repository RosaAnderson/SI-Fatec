/**
 * 
 * Calculando a área do retângulo
 * 	Conceito: Para encontrar a área de um retângulo, basta multiplicaar a base (b) pela altura (h).
 * 	          A área é sempre calculada em  centímetro quadrado (cm2), metro quadrado (m2) ou
 * 			  quilômmetro  quadrado (Km2). O  perímetro  é calculado em centímetro (cm), metro (m)
 * 			  ou quilômetro (km).
**/

#include "stdlib.h"
#include "stdio.h"

int  main()
{
	// define as variaveis
	float vh, vb, vArea;
	
	// exibe a mensagem ao usuario do que é preciso
	printf("Para encontrar a area de um retangulo, e preciso informar \nos valores de base (b) e de altura (h). \n");

	// faz uma pausa para aguardar a leitura do usuário	
	system("pause");

	// exibe a mensagem solicitando o valor	
	printf("Informe o valor da base (b) e pressione <ENTER>: ");

	// grava o valor informado pelo usuario na variável	
	scanf("%f", &vb);
	
	// exibe a mensagem solicitando o valor	
	printf("informe o valor da altura (h) e pressione <ENTER>: ");

	// grava o valor informado pelo usuario na variável	
	scanf("%f", &vh);

	// executa o calculo da area do triangulo
	vArea = (vh * vb);
	
	// exibe o resultado
	printf("A area do retangulo eh: %f \n \n \n \n \n", vArea);

	// faz uma pausa para aguardar a leitura do usuário	
	system("pause");

	// 	
	return 5500;
}
