#include <stdio.h>
#include <stdlib.h>
#include <time.h>


int main()
{
    int lado = 10;
    int matriz_a[lado][lado];
    int matriz_b[lado][lado];
    int i, j, valor_pequeno, i_pequeno, j_pequeno;
    
    srand(time(NULL));
    printf("\n matriz original: \n\n");
/**/
    for(i=0; i<lado; i++)
        {
            for(j=0; j<lado; j++)
                {
                    matriz_a[i][j] = rand();
                    matriz_b[i][j] = -1;
                    printf("%5i\t", matriz_a[i][j]);
                }
                
            printf("\n");
        }
/**/
     for(i = 0; i < lado; i++)
        {
            for(j = 0; j < lado; j++)
                {
                    valor_pequeno = matriz_a[i][j];
                    i_pequeno = i;
                    j_pequeno = j;
                    for(int k = i; k < lado; k++)
                        {
                            for(int l = 0; l < lado; l++)
                                {
                                    if(matriz_a[k][l] < valor_pequeno)
                                        {
                                            valor_pequeno = matriz_a[k][l];
                                            i_pequeno = k;
                                            j_pequeno = l;
                                        }
                                }
                        }
                    matriz_b[i][j] = valor_pequeno;
                    matriz_a[i_pequeno][j_pequeno] = matriz_a[i][j];
                }
        }

    printf("\nMatriz ordenada: \n\n");
/**/
    for(i=0; i< lado; i++)
        {
            for(j=0; j<lado; j++)
                {
                    printf("%5i\t", matriz_b[i][j]);
                }

            printf("\n");
        }
/**/
    return 0;
}