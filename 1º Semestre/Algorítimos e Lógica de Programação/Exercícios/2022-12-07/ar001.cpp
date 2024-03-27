#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

/*
    Criar um programa com menu contendo 5 opções de cálculo:
    área do quadrado
    área do retângulo
    área do trapézio retangular
    área do círculo
    sair
    
    Usuário define no inícios quantas área serão calculadas.
    Não permita divisão por ZERO.
    
    Use somente floats para os cálculos.
    
    Usuário fornece os valores necessários para cada cálculo.
*/

int main()
{
    // define a linguagem
    setlocale(LC_ALL, "Portuguese");

    // declarando as variaveis
    int   vLoop_als = 1, vSel_als, vQtd_als = 0;
    float vB_als, vb_als, vA_als, vArea_als;
    float vPi_als = 3.1415;

    // limpa a tela
    system("cls");

    // executa o laço enquanto o usuario não excolher 'sair'
    while (vLoop_als == 1)
    {
        // limpa a tela
        system("cls");

        // titulo do programa
        printf("\n....:::: MENU DE OPÇÕES ::::....\n");
        printf("\nCalculando de áreas\n\n");

        // exibe as opções
        printf("\t1 - Área do quadrado\n");
        printf("\t2 - Área do retângulo\n");
        printf("\t3 - Área do trapézio retangular\n");
        printf("\t4 - Área do círculo\n");
        printf("\t5 - Sair\n");

        // solicitação de entrada ao usuario
        printf("\nInforme segundo o menu acima, a operação deseja realizar: ");
        scanf("%d", &vSel_als);

        // seletor da funcao
        switch (vSel_als)
        {
            case 1: // calculo do quadrado
                // Informa o usuario
                printf("\n\tVocê optou por calcular a área do quadrado!\n\n");

                // solicita os dados ao usuario
                printf("\tInforme quantas áreas deseja calcular: ");
                scanf("%d", &vQtd_als);

                while (vQtd_als > 0)
                {
                    // Informa o usuario
                    printf("\tA área do quadrado é Base x Altura, ou Lado x Lado\n");
                    printf("\te para isso requer um valor de entrada.\n\n");

                    // valida a entrada
                    do
                    {
                        // solicita os dados ao usuario
                        printf("\tInforme o valor do Lado: ");
                        scanf("%f", &vB_als);

                        if (vB_als < 1)
                        {
                            // exibe a mensagem
                            printf("\tA entrada pode ser menor que 1!");

                            // muda de linha
                            printf("\n\n");

                            //espera a leitura e ação do usuario
                            system("pause");

                            // muda de linha
                            printf("\n\n");
                        }
                    } while (vB_als < 1);

                    // calcula a area
                    vArea_als = vB_als * vB_als;

                    // exibe o resultado
                    printf("\n\tA área do quadrado é: %.2f (unidade de medida a sua escolha)\n\n", vArea_als);

                    // espera a ação do usuario
                    system("pause");

                    // faz a contagem de vezes
                    vQtd_als--;
                }
            break;
                
            case 2: // calculo do retangulo
                // Informa o usuario
                printf("\n\tVocê optou por calcular a área do retêngulo!\n\n");
                // solicita os dados ao usuario
                printf("\tInforme quantas áreas deseja calcular: ");
                scanf("%d", &vQtd_als);

                while (vQtd_als > 0)
                {
                    // Informa o usuario
                    printf("\tA área do retânglo é Base x Altura, ou Lado x Lado\n");
                    printf("\te para isso requer dois valores de entrada.\n\n");

                    // valida a entrada
                    do
                    {
                        // solicita os dados ao usuario
                        printf("\tInforme o valor da Base: ");
                        scanf("%f", &vB_als);
                        printf("\tInforme o valor da Altura: ");
                        scanf("%f", &vA_als);

                        if ((vB_als < 1) or (vA_als < 1))
                        {
                            // exibe a mensagem
                            printf("\tA entrada pode ser menor que 1!");

                            // muda de linha
                            printf("\n\n");

                            //espera a leitura e ação do usuario
                            system("pause");

                            // muda de linha
                            printf("\n\n");
                        }
                    } while ((vB_als < 1) or (vA_als < 1));

                    // calcula a area
                    vArea_als = vB_als * vA_als;

                    // exibe o resultado
                    printf("\n\tA área do retêngulo é: %.2f (unidade de medida a sua escolha)\n\n", vArea_als);

                    // espera a ação do usuario
                    system("pause");

                    // faz a contagem de vezes
                    vQtd_als--;
                }
            break;

            case 3: // calculo do trapezio
                // Informa o usuario
                printf("\n\tVocê optou por calcular a área do trapézio!\n\n");
                // solicita os dados ao usuario
                printf("\tInforme quantas áreas deseja calcular: ");
                scanf("%d", &vQtd_als);

                while (vQtd_als > 0)
                {
                    // Informa o usuario
                    printf("\tA área do trapezio retangular, é ((Base maior + Base menor) * Altura) / 2 \n\n");
                    printf("\te para isso requer três valores de entrada.\n\n");

                    // valida a entrada 
                    do
                    {
                        // solicita os dados ao usuario
                        printf("\tInforme o valor da Base Maior: ");
                        scanf("%f", &vB_als);
                        printf("\tInforme o valor da Base Menor: ");
                        scanf("%f", &vb_als);
                        printf("\tInforme o valor da Altura: ");
                        scanf("%f", &vA_als);

                        if ((vB_als < 1) or (vb_als < 1) or (vA_als < 1))
                        {
                            // exibe a mensagem
                            printf("\tNenhuma entrada pode ser menor que 1!");

                            // muda de linha
                            printf("\n\n");

                            //espera a leitura e ação do usuario
                            system("pause");

                            // muda de linha
                            printf("\n\n");
                        }
                    } while ((vB_als < 1) or (vb_als < 1) or (vA_als < 1));

                    // calcula a area
                    vArea_als = ((vB_als + vb_als) * vA_als) / 2;
                                
                    // exibe o resultado
                    printf("\n\tA área do retêngulo é: %.2f (unidade de medida a sua escolha)\n\n", vArea_als);

                    // espera a ação do usuario
                    system("pause");

                    // faz a contagem de vezes
                    vQtd_als--;
                }
            break;

            case 4: // calculo do circulo
                // Informa o usuario
                printf("\n\tVocê optou por calcular a área do círculo!\n\n");
                // solicita os dados ao usuario
                printf("\tInforme quantas áreas deseja calcular: ");
                scanf("%d", &vQtd_als);

                while (vQtd_als > 0)
                {
                    // Informa o usuario
                    printf("\tA área do círculo é o valor de Pi (3,14) x o quadrado do raio\n");
                    printf("\te para isso requer um valor de entrada.\n\n");

                    // valida a entrada
                    do
                    {
                        // solicita os dados ao usuario
                        printf("\tInforme o valor do raio: ");
                        scanf("%f", &vA_als);

                        if (vA_als < 1)
                        {
                            // exibe a mensagem
                            printf("\tA entrada pode ser menor que 1!");

                            // muda de linha
                            printf("\n\n");

                            //espera a leitura e ação do usuario
                            system("pause");

                            // muda de linha
                            printf("\n\n");
                        }
                    } while (vA_als < 1);

                    // calcula a area
                    vArea_als = vPi_als * (vA_als * vA_als);

                    // exibe o resultado
                    printf("\n\tA área do quadrado é: %.2f (unidade de medida a sua escolha)\n\n", vArea_als);

                    // espera a ação do usuario
                    system("pause");

                    // faz a contagem de vezes
                    vQtd_als--;
                }
            break;

            case 5:
                // define o valor de saida
                vLoop_als = 0;

                // exibe a mensagem ao usuario
                printf("\n\n\n");
                printf("\tVocê optou por sair!\n");
                printf("\tCalculadora encerrada.\n\n");

                // espera a ação do usuario
                system("pause");
            break;

            default:
                // exibe a mensagem
                printf("\nOpção invalida!\n\n");
                            
                // espera a ação do usuario
                system("pause");
            break;
        }
    }

    // finaliza
    return 5500;
}
