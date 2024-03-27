/*
Criar programa com funções próprias que crie uma matriz L*C e seja preenchida com (Y+i+j). Os valores ímpares da matriz serão alterados por Z. A função não deve ter retorno, mas L, C, Y e Z são parâmetros de entrada definidos pelo usuário.
*/
#include "stdar.h"

int main() {


    int vL, vC, vY, vZ;
    
    printf("\n Informe o numero de linhas: ");
    scanf("%d", &vL);
    
    printf("\n Informe o numero de colunas: ");
    scanf("%d", &vC);
    
    printf("\n informe um numero para calcular os valores da matrix: ");
    scanf("%d", &vY);
    
    printf("\n informe o valor de substituicao: ");
    scanf("%d", &vZ);
    
    matrix_revolution(vL, vC, vY, vZ);

    return 01;
}


