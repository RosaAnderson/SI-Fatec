/*
*/
#include "stdio.h"
#include "stdlib.h"

void matrix_reloaded(int vN, int vM, int vX) {

    int** matrix = (int**) malloc(vN * sizeof(int*));

    for (int i = 0; i < vN; i++) {

        matrix[i] = (int*) malloc(vM * sizeof(int));
        
        for (int j = 0; j < vM; j++) {
            matrix[i][j] = vX;
        }
    }

    for (int i = 0; i < vN; i++) {
        for (int j = 0; j < vM; j++) {
            printf("%d ", matrix[i][j]);
        }
        
        printf("\n");
    }

    for (int i = 0; i < vN; i++) {
        free(matrix[i]);
    }
    free(matrix);
}

void matrix_revolution(int vL, int vC, int vY, int vZ) 
{
    int matrix[vL][vC];

    for (int i = 0; i < vL; i++) {
        for (int j = 0; j < vC; j++) {
        
            matrix[i][j] = vY + i + j;
        
            if (matrix[i][j] % 2 != 0) {
                matrix[i][j] = vZ;
            }
        }
    }

    printf("Result:\n");

    for (int i = 0; i < vL; i++) {
        for (int j = 0; j < vC; j++) {
            printf("%d ", matrix[i][j]);
        }
        printf("\n");
    }
}