#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

/*
    Criar um vetor de n posições e preencher com -1.
    Alterar o valor de uma posição do vetor.
    Usuário indica a posiçãoa ser alterada e o novo valor.
*/

int main()
{
    // define a linguagem
    setlocale(LC_ALL, "Portuguese");

    // limpa a tela
    system("cls");

    // variavel de tamanho do vetor
    int vPos_als, vVal_als, vI_als, vTam_als = 0;
        
    // solicita o tamanho do vetor
    printf("\nInforme o tamanho do vetor: ");
    scanf("%d", &vTam_als);

    // pula linha
    printf("\n\n");

    // define o vetor com o valor informado
    int vVetor_als[vTam_als];

    // preenche a vetor
    for (vI_als = 0; vI_als < vTam_als; vI_als++)
    {
        // insere o valor na posição correspondente
        vVetor_als[vI_als] = -1;
    }
        
    // laço para exibir a vetor
    for (vI_als = 0; vI_als < vTam_als; vI_als++)
    {
        // insere a linha
        printf("%d\t", vVetor_als[vI_als]);
    }

    // solicita os dados para o usuario
    printf("\n\nInforme a posição no vetor: ");
    scanf("%d", &vPos_als);
    printf("Informe o valor a ser inserido: ");
    scanf("%d", &vVal_als);

    // pula linha
    printf("\n");

    // insere o valor na posição correspondente
    vVetor_als[vPos_als] = vVal_als - 1;

    // exibe a vetor
    for (vI_als = 0; vI_als < vTam_als; vI_als++)
    {
        // insere a linha
        printf("%d\t", vVetor_als[vI_als]);
    }

    // finalzia
    return 5500;
}