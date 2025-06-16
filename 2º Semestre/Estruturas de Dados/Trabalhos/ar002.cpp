#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main()
    {
        int i, j, o, p;
        int vMenor, idxi, idxj;
        int vLC = 10;
        int vMata[vLC][vLC];
        int vMatb[vLC][vLC];
    
        srand(time(NULL));

        system("cls");

        printf("\n\n\n Matriz preenchida com numeros gerados pelo rand: \n\n");

        for(i = 0; i < vLC; i++)
            {
                for(j = 0; j < vLC; j++)
                    {
                        vMata[i][j] = rand();
//                        vMatb[i][j] = -1;

                        printf("%6d\t", vMata[i][j]);
                    }
                
                    printf("\n\n");
            }

         for(i = 0; i < vLC; i++)
            {
                idxi = i;

                for(j = 0; j < vLC; j++)
                    {
                        idxj = j;

                        vMenor = vMata[i][j];

                        for(o = i; o < vLC; o++)
                            {
                                for(p = 0; p < vLC; p++)
                                    {
                                        if(vMata[o][p] < vMenor)
                                            {
                                                vMenor = vMata[o][p];
                                                idxi   = o;
                                                idxj   = p;
                                            }
                                    }
                            }

                        vMatb[i][j]       = vMenor;
                        vMata[idxi][idxj] = vMata[i][j];
                    }
            }

        printf("\n\n\n Matriz que recebeu os valores ordenados: \n\n");

        for(i = 0; i < vLC; i++)
            {
                for(j = 0; j < vLC; j++)
                    {
                        printf("%6d\t", vMatb[i][j]);
                    }

                printf("\n\n");
            }

        system("pause");

        return 5500;
    }