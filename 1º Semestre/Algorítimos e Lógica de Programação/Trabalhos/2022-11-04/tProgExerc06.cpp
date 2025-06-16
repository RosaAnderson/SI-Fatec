#include "stdlib.h"
#include "stdio.h"

/**
 * Calcule o IMC de uma pessoa e classifique-a (5 categorias)
**/

int main()
    {
        // define as variaveis
        float als_vIMC, als_vPeso, als_vAltura;
        char als_vSexo;

        // solicita a entrada para o usuario
        printf("informe a altura o individuo em cm: ");

        // armazena o valor informado
        scanf("%f", &als_vAltura);

        // solicita a entrada para o usuario
        printf("informe o peso do individuo em kg: ");

        // armazena o valor informado
        scanf("%f", &als_vPeso);
        
        // solicita a entrada para o usuario
        printf("informe M se voce nasceu mulher ou H se voce nasceu homem: ");

        // armazena o valor informado
        scanf("%s", &als_vSexo);

        // transforma a altura em metros
        als_vAltura = als_vAltura / 100;

        // faz o calculo do IMC
        als_vIMC = (als_vPeso / (als_vAltura * als_vAltura));

        // verifica se é mulher
        if ((als_vSexo == 'M') or (als_vSexo == 'm'))
        {
            // vefica o resultado do IMC e mostra a mensagem de acordo com o encontrado
            if (als_vIMC < 15)
            {
                printf("O IMC eh %.2f e esta muito abaixo do indicado!", als_vIMC);
            }
            else if (als_vIMC > 15 and als_vIMC < 19)
            {
                printf("O IMC eh %.2f e esta abaixo do indicado!", als_vIMC);
            }
            else if (als_vIMC > 19 and als_vIMC < 23)
            {
                printf("O IMC eh %.2f e esta dentro do indicado!", als_vIMC);
            }
            else if (als_vIMC > 23 and als_vIMC < 27)
            {
                printf("O IMC eh %.2f e esta acima do indicado!", als_vIMC);
            }
            else
            {
                printf("O IMC eh %.2f e esta muito acima do indicado!", als_vIMC);
            }
        }
        // verifica se e homem
        else if ((als_vSexo == 'H') or (als_vSexo == 'h'))
        {
            // vefica o resultado do IMC e mostra a mensagem de acordo com o encontrado
            if (als_vIMC < 17)
            {
                printf("O IMC eh %.2f e esta muito abaixo do indicado!", als_vIMC);
            }
            else if (als_vIMC > 17 and als_vIMC < 21)
            {
                printf("O IMC eh %.2f e esta abaixo do indicado!", als_vIMC);
            }
            else if (als_vIMC > 21 and als_vIMC < 25)
            {
                printf("O IMC eh %.2f e esta dentro do indicado!", als_vIMC);
            }
            else if (als_vIMC > 25 and als_vIMC < 29)
            {
                printf("O IMC eh %.2f e esta acima do indicado!", als_vIMC);
            }
            else
            {
                printf("O IMC eh %.2f e esta muito acima do indicado!", als_vIMC);
            }
        }
        else
        {
            // mostra uma mensagem caso a informação homem ou mulher não tenha sido inserida corretamente
            printf("\n\nA resposta para a ultima questao (M ou H) nao foi satisfatoria!");
        }

        // pula algumas linhas depois de mostrar o resultado
        printf("\n \n \n");

		// faz uma pausa para aguardar a leitura do usuário	
		system("pause");

        return 5500;
    }
