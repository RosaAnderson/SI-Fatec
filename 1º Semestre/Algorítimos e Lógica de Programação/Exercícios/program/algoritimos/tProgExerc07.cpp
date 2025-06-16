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
	float  vNota, vMedia = 0;
	int vTaluno, vI = 0;

	// limpa a tela
	system("cls");
	
	// exibe a mensagem solicitando o valor	
	printf("\n\n\nInforme o numero de alunos que terao as\nnotas calculadas e pressione <ENTER>: ");

	// grava o valor informado pelo usuario na variável	
	scanf("%i", &vTaluno);
	
	// limpa a tela
	system("cls");

//	for (contador = 0; contador < 10; contador = contador+1)
	for (vI = 0; vI < vTaluno; vI = vI + 1)
	{
		// exibe a mensagem solicitando o valor	
		printf("\n\n\nCalculando a nota de %i alunos.\n\n", vTaluno);

		// exibe a mensagem solicitando o valor	
		printf("Informe o valor da %ia. nota e pressione <ENTER>: ", vI + 1);

		// grava o valor informado pelo usuario na variável	
		scanf("%f", &vNota);

		// executa o calculo da area do triangulo
		 vMedia = (vMedia + vNota);

		// limpa a tela
		system("cls");
	}

	// calcula a media final
	vMedia = vMedia / vTaluno;

	// exibe o resultado
	printf("\n\n\nA media dos %i alunos eh: %f \n \n \n \n \n", vTaluno, vMedia);

	// faz uma pausa para aguardar a leitura do usuário	
	system("pause");

	// 	
	return 5500;
}
