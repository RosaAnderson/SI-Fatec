#include "stdio.h"
#include "stdlib.h"
#include "locale.h"
#include "time.h"
#include "string.h"

/**
 * Faça um programa que leia o nome de uma pessoa e mostre uma mensagem de boas vindas para ela:
 *  Ex:
 *     Qual é o seu nome? João da Silva
 *     Olá João da Silva, é um prazer te conhecer!
/**/

int main()
{
    char vNome[50];

    printf("\n\n\nEscreva seu nome por favor e pressione <ENTER>: ");

    scanf("%s", &vNome);

    printf("\n\nOla %s, muito obrigado por digitar seu nome!\n\nPrazer em te conhcer!\n\n");

    system("pause");

    return 5500;
}