#include "stdio.h"
#include "stdlib.h"
#include "locale.h"
#include "time.h"
#include "string.h"

/**
 * Desenvolva um programa que leia uma distância em metros e mostre os valores relativos em outras medidas.
 *  Ex:
 *     Digite uma distância em metros: 185.72
 *     A distância de 85.7m corresponde a:
 *     0.18572Km               1857.2dm
 *     1.8572Hm               18572.0cm
 *     18.572Dam             185720.0mm
/**/

int main()
{
    float vMt;
    float vDam, vHm, vKm;
    float vDm, vCm, vMm;

    printf("\n\n\nInforme uma distancia em metros e pressione <ENTER>: ");

    scanf("%f", &vMt);

    vKm  = vMt / 1000;
    vHm  = vMt / 100;
    vDam = vMt / 10;
    vDm  = vMt * 10;
    vCm  = vMt * 100;
    vMm  = vMt * 1000;

    printf("\n\nA distancia informada convertida em kilometrs eh %.2f", vKm);
    printf("\n\nA distancia informada convertida em hectometro eh %.2f", vHm);
    printf("\n\nA distancia informada convertida em decametro eh %.2f", vDam);

    printf("\n\nA distancia foi informada em metros %.2f", vMt);

    printf("\n\nA distancia informada convertida em decimetros eh %.2f", vDm);
    printf("\n\nA distancia informada convertida em centimetors eh %.2f", vCm);
    printf("\n\nA distancia informada convertida em milimetros eh %.2f", vMm);

    printf("\n\n\n\n");

    system("pause");

    return 5500;
}