#include "stdio.h"

/**
 * Receba n números e pare (break) a execução quando um valor maior que 30 for digitado
**/

int main()
{
	int valores[10];//vetor com capacidade para armazenar 10 elementos
	int i;
  
	//Entrada de dados
	//A princípio loop está feito para repetir 10 vezes
	for(i = 0; i < 10; i++)
	{
		printf("Entre com o %do valor: ",i );
    	scanf("%d",&valores[i]);
    
    	if (i == 3) //forçando a saída interrompendo o loop
    	{
      		printf("Saida do break interrompendo o comando for\n");
      		break;//força a saída imediata do loop
    	}
  	}
	
	return 5500;
}
