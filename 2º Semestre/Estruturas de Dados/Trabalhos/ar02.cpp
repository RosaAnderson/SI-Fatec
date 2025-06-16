#include <stdio.h>
#include <stdlib.h>
#include <time.h>


int main()
    {
        int vLC = 10; // define o tamanho da variavel
        int vMata[vLC][vLC]; // define o tamanho da matriz L x C
        int vMatb[vLC][vLC]; // define o tamanho da matriz L x C
        int i, j, vMenor = 0, i_pequeno, j_pequeno;

        int vSeq[100]; 
    
        srand(time(NULL));

        system("cls");

        printf("\n Matriz gerada a partir do rand: \n\n");

        for(i = 0; i < vLC; i++)
            {
                for(j = 0; j < vLC; j++)
                    {
                        vMata[i][j] = rand();
                        printf("%5i\t", vMata[i][j]);
                    }
                
                printf("\n");
            }

     for(i = 0; i < vLC; i++)
        {
            for(j = 0; j < vLC; j++)
                {
                    if((vMata[i][j] < vMenor) and ())
                    {
                        vMenor = vMata[i][j];
                    }

                    vSeq[i * (j + 1)] = vMata[i][j];
                }
        }

    printf("\nMatriz ordenada: \n\n");

    for(i = 0; i < vLC; i++)
        {
            for(j = 0; j < vLC; j++)
                {
                    printf("%5i\t", vMatb[i][j]);
                }

            printf("\n");
        }










        return 5500;
    }