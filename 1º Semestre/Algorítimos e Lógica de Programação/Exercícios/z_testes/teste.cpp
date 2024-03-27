#include "stdio.h"

int main() 
{
	int rlf_l;
  float rlf_nota, rlf_total,rlf_media;
  int rlf_i,rlf_j;


printf("quantos alunos terao as medias calculadas:\n ");
	scanf("%d", &rlf_l);

	float rlf_notas[rlf_l][4];

	      for(int rlf_i=0; rlf_i<rlf_l; rlf_i++) 
         {
		    for(int rlf_j=0; rlf_j<4; rlf_j++) 
         {
			if(rlf_j != 3) 
         {
	printf("qual a nota %d do aluno %d: ", rlf_j+1, rlf_i+1);
	scanf("%f", &rlf_notas[rlf_i][rlf_j]);
				rlf_total =rlf_total + rlf_notas[rlf_i][rlf_j];
         }
           else 
           {
				rlf_media = rlf_total / 3;
				rlf_notas[rlf_i][rlf_j] = rlf_media;
				rlf_total = 0;
			}
		}
	}
	     for(int rlf_i=0; rlf_i<rlf_l; rlf_i++)
{
	printf("aluno %d\t", rlf_i+1);
		   for(int rlf_j=0; rlf_j<4; rlf_j++) 
{
	printf("%0.2f ", rlf_notas[rlf_i][rlf_j]);
	}
		printf("media das notas:\n");
	}
	return 0;
}