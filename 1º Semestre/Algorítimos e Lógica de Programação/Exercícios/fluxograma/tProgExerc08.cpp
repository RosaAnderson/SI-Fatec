/**
 * 
 * Calculando média
 * 	Conceito: Para calcular a média deve-se fornecer um número N de notas,
 *  somar N e dividir pera quantidade de N notas.
**/

#include "stdlib.h"
#include "stdio.h"

int  main()
{
	// define as variaveis
	float vN1, vN2, vMedia;
	
	// exibe a mensagem solicitando o valor	
	printf("Informe a primeira nota do aluno e pressione <ENTER>: ");

	// grava o valor informado pelo usuario na variável	
	scanf("%f", &vN1);
	
	// exibe a mensagem solicitando o valor	
	printf("informe a seguda nota do aluno e pressione <ENTER>: ");

	// grava o valor informado pelo usuario na variável	
	scanf("%f", &vN2);

	// executa o calculo da area do triangulo
	vMedia = ((vN1 + vN2) / 2);
	
	// exibe o resultado
	printf("A media do aluno eh: %f \n \n \n \n \n", vMedia);

	// faz uma pausa para aguardar a leitura do usuário	
	system("pause");

	// 	
	return 5500;
}
