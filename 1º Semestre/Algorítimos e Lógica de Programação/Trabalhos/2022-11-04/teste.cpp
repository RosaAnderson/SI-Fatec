#include "stdio.h"

int main()
{
	int aso_num, aso_soma=0, aso_qtd=0;
	char aso_resp;
	float aso_media=0;
	
	do{
		printf("Insira um numero:\t");
		scanf("%d", &aso_num);
		
		//float resto = num %2;
		
		if(aso_num %2 == 0 and aso_num>0)
		{
			aso_soma += aso_num;
			aso_qtd++;
		}
		printf ("Deseja colocar outro numero? S para continuar.");
		scanf(" %c", &aso_resp);
	}while (aso_resp=='s');
	aso_media=aso_soma/aso_qtd;
	printf("sua media foi de: %f", aso_media);
	
	return 777;
}