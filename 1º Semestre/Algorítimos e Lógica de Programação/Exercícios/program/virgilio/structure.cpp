#include "stdio.h"

int main()
    {
        int vnum01, vnum02, vresult;

    	// exibe a mensagem solicitando o valor	
    	printf("Informe o valor do primeiro numero e pressione <ENTER>: ");

    	// grava o valor informado pelo usuario na variável	
    	scanf("%d", &vnum01);
	
    	// exibe a mensagem solicitando o valor	
    	printf("informe o valor do segundo numero e pressione <ENTER>: ");

	    // grava o valor informado pelo usuario na variável	
	    scanf("%d", &vnum02);

	    // executa o calculo da area do triangulo
	     vresult = (vnum01 + vnum02);
	
	    // exibe o resultado
	    printf("O resultado da soma eh: %d \n \n \n \n \n", vresult);

        return 5500;
    }
