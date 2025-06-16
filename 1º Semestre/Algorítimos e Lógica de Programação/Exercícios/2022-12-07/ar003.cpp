#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

/*
    Crie uma matriz matA de L linhas por 4 colunas.
    Receba 3 notas de cada aluno.
    Calculea média e armazene na 4ª coluna.
    L é a quantidade de alunos na turma.
    Exibir a matriz estrutura ao final e apontar o valor da menor média.
*/

int main()
{
    // define a linguagem
    setlocale(LC_ALL, "Portuguese");

    // cria as variaveis
    int   vI_als, vJ_als, vLin_als, vAlu_als;
    float vNot_als, vMed_als, vMen_als;

    do
    {
        // limpa a tela
        system("cls");

        // solicita entrada do usuario
        printf("\nInforme o numero de alunos: ");
        scanf("%d", &vLin_als);

        if (vLin_als < 2)
        {
            // exibe a mensagem
            printf("\tInforme um valor maior que 1!");

            // muda de linha
            printf("\n\n");

            //espera a leitura e ação do usuario
            system("pause");

            // muda de linha
            printf("\n\n");
        }
    } while (vLin_als < 2);

    // cria a matriz
    float vMat_als[vLin_als][4];

    // coleta as notas dos alunos
    for (vI_als = 0; vI_als < vLin_als; vI_als++)
    {
        // muda de linha
        printf("\n");

        // faz um laço para receber as notas do aluno
        for (vJ_als = 0; vJ_als < 3; vJ_als++)
        {
            do
            {
                // pega a nota do aluno
                printf("Informe a nota %d do aluno %d: ", (vJ_als + 1), (vI_als + 1));
                scanf("%f", &vNot_als);

                if ((vNot_als < 0) or (vNot_als > 10))
                {
                    // muda de linha
                    printf("\n\n");

                    // avalia qual mensagem vai exibir
                    if (vNot_als < 0)
                    {
                        printf("\tA nota não pode ser menor que zero!");
                    }
                    else
                    {
                        printf("\tA nota não pode ser maior que dez!");
                    }

                    // muda de linha
                    printf("\n\n");

                    //espera a leitura e ação do usuario
                    system("pause");

                    // muda de linha
                    printf("\n");
                }
            } while ((vNot_als < 0) or (vNot_als > 10));
            
            // insere a nota na matriz
            vMat_als[vI_als][vJ_als] = vNot_als;
        }

        // calcula a media
        vMed_als = (vMat_als[vI_als][0] + vMat_als[vI_als][1] + vMat_als[vI_als][2]) / 3;

        // insere a média na matriz
        vMat_als[vI_als][3] = vMed_als;
    }

    // salva a nota do aluno 1 na variavel como referencia
    vMen_als = vMat_als[0][3];

    // inicializa a variavel
    vAlu_als = 1;

    // executa o laço para verificar qual é a menor nota
    for (vI_als = 0; vI_als < vLin_als; vI_als++)
    {
        // verifica se a nota armazenada é menor que a nota da matriz
        if (vMen_als > vMat_als[vI_als][3])
        {
            // salva a nota na variavel
            vMen_als = vMat_als[vI_als][3];

            // salva o numero do aluno
            vAlu_als = vI_als + 1;
        }
    }

    // monta o cabeçalho da matriz
    printf("\n---------------------------------\n");
    printf("|Not1 \t|Not2 \t|Not3 \t|Méd \t|");
    printf("\n---------------------------------\n");

    // faz um laço para montar a tabela a partir da matriz
    // este 'for' representa as linhas
    for (vI_als = 0; vI_als < vLin_als; vI_als++)
    {
        // decoração para a tabela
        printf("|");
        
        // faz um laço para montar a tabela a partir da matriz
        // este 'for' representa as colunas
        for (vJ_als = 0; vJ_als < 4; vJ_als++)
        {
            // insere o valor da celula formatando para 2 casas depois da virgua
            printf("%.2f\t|", vMat_als[vI_als][vJ_als]);
        }
        // muda de linha
        printf("\n");
    }

    // fecha a tabela
    printf("---------------------------------\n\n");

    // informa qual foi a maior nota e de qual aluno
    printf("\tA maior nota foi %.2f do aluno %d." , vMen_als, vAlu_als);

    // pula linha
    printf("\n\n");

    // finaliza
    return 5500;
}
