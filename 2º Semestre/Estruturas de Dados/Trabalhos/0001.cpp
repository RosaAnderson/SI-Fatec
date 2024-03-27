/*
Criar programa com funções próprias que crie uma matriz N*M e seja preenchida com X. A matriz deve ser exibida dentro da função. A função não deve ter retorno, mas N, M e X são parâmetros de entrada.
*/
#include "stdar.h"

int main() {
    
    int vN, vM, vX;

    printf("\n Informe o numero de linhas: ");
    scanf("%d", &vN);

    printf("\n Informe o numero de colunas: ");
    scanf("%d", &vM);

    printf("\n informe o numero que sera exibido: ");
    scanf("%d", &vX);

    matrix_reloaded(vN, vM, vX);

    return 01;
}
