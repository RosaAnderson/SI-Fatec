function cEnergia()
{
	/*
	Desenvolva um script para calcular a conta de energia
	elétrica de uma casa. O valor de cada KWH é 1.5. Quando
	a casa é de uma aposentada, a conta tem um desconto de 15%.
	*/
	
	// valores costantes do sistema
	const vKWH  = 1.5;
	const vDesc = 15;
	
	// pega o valor dos elementos
	var vConsumo = document.getElementById("vtConsumo").value;
	var vCliente = document.getElementById("vtCliente").checked;
	
	// calcula o consumo
	var vValor = vKWH * vConsumo;
	
	// verifica se o cliente é aposentado
	if (vCliente)
	{
		vValor = vValor - ((vValor * vDesc) / 100);
	}
		
	// exibe o resultado
	alert("O valor a pagar pelo consumo é: R$ " + vValor);
	
	document.getElementById("txt").innerHTML = "algo";
}

function rVelocidade()
{
	/*
	Desenvolva um script que pergunte ao usuário com qual velocidade
	ele costuma dirigir seu carro e, imprima na tela, a resposta que
	o guarda de trânsito lhe daria, conforme as seguintes velocidades
	
	Superior a 150 km/h			Você está preste a causar um grande problema!
	Superior a 120 km/h			Você está preste a causa um problema!
	Superior a 80 km/h			Cuidado para ultrapassar o limite de velocidade!
	Superior a 45 km/h			Continue assim, devagar e sempre
	Inferior ou igual a 45 km/h	Você é uma tartaruga
	*/	

	// constantes de mensagens
	const msg45  = "Você é uma tartaruga";
	const msg46  = "Continue assim, devagar e sempre";
	const msg81  = "Cuidado para não ultrapassar o limite de velocidade!";
	const msg121 = "Você está preste a causa um problema!";
	const msg151 = "Você está preste a causar um grande problema!";

	// pega o valor dos elementos
	var vVelocidade = document.getElementById("vtVeloc").value;

	// valida a velocidade e exibe aa mensagem
	if (vVelocidade <= 45)
	{
		result = msg45;
	}
	else if ((vVelocidade > 45) && (vVelocidade <= 80))
	{
		result = msg46;
	}
	else if ((vVelocidade > 80) && (vVelocidade <= 120))
	{
		result = msg81;
	}
	else if ((vVelocidade > 120) && (vVelocidade <= 150))
	{
		result = msg121;
	}
	else if (vVelocidade > 150)
	{
		result = msg151;
	}

	//exibe o alerta
	alert(result);
}

function mLucro()
{
	/*
	Um comerciante está necessitando saber qual é o
	lucro de cada mercadoria vendida em sua loja.
	Para isso, está necessitando de um programa que
	permite informar o valor de custo e de venda de
	um produto, e mostrar uma mensagem considerando
	a tabela a seguir
	
	Inferior a 10%	“Baixo Lucro”
	Entre 10% e 20%	“Lucro Médio”
	Acima de 20%	“Lucro Alto”
	*/
	
	// constantes de mensagens
	const msg10 = "Baixo Lucro";
	const msg15 = "Lucro Médio";
	const msg20 = "Lucro Alto";
	
	// pega o valor dos elementos
	var vCusto = document.getElementById("vtCusto").value;
	var vVenda = document.getElementById("vtVenda").value;
	
	// calcula o valor do lucro
	vLucro = vVenda - vCusto;
	
	// calcula a porcentagem de lucro
	pLucro = (vLucro / vVenda) * 100;
	
	// valida a lucro e exibe as mensagens
	if (pLucro < 10)
	{
		result = msg10;
	}
	else if ((pLucro >= 10) && (pLucro <= 20))
	{
		result = msg15;
	}
	else if (pLucro > 20)
	{
		result = msg20;
	}

	// exibe o alerta
	alert("(" + pLucro + "%) - " + result);
}

function vVenda()
{
	/*
	O mesmo comerciante do exercício anterior está necessitado
	também de um programa que permite entrar com o valor de
	custo de um produto e calcular o valor de venda. O valor
	de venda é calculado com base no tipo de produto, que é
	informado pelo usuário. A tabela abaixo mostra os tipos
	de produtos e as porcentagens aplicadas
	
	Tipo de Produto		Aumento
		A					35%
		B					25%
		C					20%
		D					15%
	*/

	// constantes
	const vA = (35/100);
	const vB = (25/100);
	const vC = (20/100);
	const vD = (15/100);
	
	// pega o valor dos elementos
	var vProd = document.getElementById("vtProd").value;
	var vCust = document.getElementById("vtCust").value;
	
	// verifica qual opção foi selecionada
	if (vProd == "A")
	{
		result = vCust * vA;
	}
	else if (vProd == "B")
	{
		result = vCust * vB;
	}
	else if (vProd == "C")
	{
		result = vCust * vC;
	}
	else if (vProd == "D")
	{
		result = vCust * vD;
	}
	
	// define o valor final
	result = (parseFloat(vCust) + parseFloat(result));

	//exibe o alerta
	alert("O valor de venda do produto (" + vProd + ") é R$ " + result);
}

function mAluno()
{
	/*
	Faça um script  que receba 4 notas. Calcular a média e
	com base nela mostra em um alert a média e a situação
	do aluno
	
	Média maior ou igual a 6,0                    – Aprovado;
	Média Maior ou igual a 3,0 e menor do que 6,0 – Exame;
	Média menor do que     3,0                    – Reprovado.
	*/
	
	// define as constantes
	const nN = 4;
	const Ap = 6;
	const Rp = 3;
	const vAp = "Aprovado";
	const vEx = "Exame";
	const vRe = "Reprovado";

	// pega o valor dos elementos
	var vAluno = document.getElementById("vnAluno").value;
	var vNota1 = document.getElementById("vn1").value;
	var vNota2 = document.getElementById("vn2").value;
	var vNota3 = document.getElementById("vn3").value;
	var vNota4 = document.getElementById("vn4").value;

	// calcula a media do aluno
	var vNotaF = (parseFloat(vNota1) +
	              parseFloat(vNota2) +
				  parseFloat(vNota3) +
				  parseFloat(vNota4)) / nN;

	// verifica qual a media do aluno
	if (vNotaF < Rp)
	{
		result = vRe;
	}
	else if ((vNotaF >= Rp) && (vNotaF < Ap))
	{
		result = vEx;
	}
	else if (vNotaF > Ap)
	{
		result = vAp;
	}
	
	// se um nome foi preenchido exibe uma mensagem diferenciada
	if (vAluno != "")
	{
		result = "O aluno " + vAluno + " está " + result;
	}

	// exibe o alerta
	alert(result);
}

function nMaior()
{
	/*
	Dado três números digitados pelo usuário, e todos
	diferentes, mostre o maior e o menor número
	*/
	
	
	// exibe o alerta
	alert(result);
}

function nPrimo()
{
	/*
	Desenvolva um script para determinar se um valor
	inteiro fornecido pelo usuário é ou não primo
	*/
	
	
	// exibe o alerta
	alert(result);
}

function mCorporal()
{
	/*
	Faça um script que chame uma função que recebe a altura(H)
	e o sexo de uma pessoa, calcule e imprima o seu peso ideal,
	utilizando as seguintes fórmulas:
		• para homens: (72.7 * H) - 58
		• para mulheres: (62.1 * H) – 44.7
	*/
	
	
	// exibe o alerta
	alert(result);
	
	document.getElementById("").innerHTML = "algo";
}

function fCNPJ()
{
	vCNPJ = document.getElementById("cnpj").value;
	
	Result = vCNPJ.substring(0, 2);
	Result += '.' + vCNPJ.substring(2, 5);
	Result += '.' + vCNPJ.substring(5, 8);
	Result += '/' + vCNPJ.substring(8, 12);
	Result += '-' + vCNPJ.substring(12, 14);

	document.getElementById("fCNPJ").innerHTML = "CNPJ: " + Result;
}

function Crypto()
{
	vfStr = document.getElementById("cnpj").value;

	var symbol = [];

    symbol[1] = 'ABCDEFGHIJLMNOPQRSTUVXZYWK ~!@#$%^&*()\|Ã';
    symbol[2] = 'ÂÀ©çêùÿ5Üø£úñÑªº¿®¬¼ëèïÙýÄÅÉæÆôöò»Øû×ƒÁ"Ê';
    symbol[3] = 'abcdefghijlmnopqrstuvxzywk1234567890.:ã_';
    symbol[4] = 'àåíóÇüé¾¶§÷ÎÏ-+ÌÓß¸°¨·¹³²Õµþîì¡«½áâä.¢ã_';

	Result = " ";

	for (var i = 0; i < (vfStr.length); i++)
	{
		Result = vfStr.substring(i, 1);
		Result = symbol[1].indexOf(vfStr.substring(i, 1));
		
		Result = symbol[2].substring(symbol[1].indexOf(vfStr.substring(i, 1)), (symbol[1].indexOf(vfStr.substring(i, 1)) + 1));
        Result = symbol[1].substring(symbol[2].indexOf(vfStr.substring(i, 1)), (symbol[2].indexOf(vfStr.substring(i, 1)) + 1));
		Result = symbol[4].substring(symbol[3].indexOf(vfStr.substring(i, 1)), (symbol[3].indexOf(vfStr.substring(i, 1)) + 1));
		Result = symbol[3].substring(symbol[4].indexOf(vfStr.substring(i, 1)), (symbol[4].indexOf(vfStr.substring(i, 1)) + 1));
		
             if (symbol[1].indexOf(vfStr.substring(i, 1)) > 0)
		{
            Result += symbol[2].substring(symbol[1].indexOf(vfStr.substring(i, 1)), (symbol[1].indexOf(vfStr.substring(i, 1)) + 1));
//			          symbol[2].substring(vfStr.indexOf(vfStr.substring(i, 1), symbol[1]), 1);
		}
        else if (symbol[2].indexOf(vfStr.substring(i, 1)) > 0)
		{
            Result += symbol[1].substring(symbol[2].indexOf(vfStr.substring(i, 1)), (symbol[2].indexOf(vfStr.substring(i, 1)) + 1));
//			          symbol[1].substring(vfStr.indexOf(vfStr.substring(i, 1), symbol[2]), 1);
		}
        else if (symbol[3].indexOf(vfStr.substring(i, 1)) > 0)
		{
            Result += symbol[4].substring(symbol[3].indexOf(vfStr.substring(i, 1)), (symbol[3].indexOf(vfStr.substring(i, 1)) + 1));
//			          symbol[4].substring(vfStr.indexOf(vfStr.substring(i, 1), symbol[3]), 1);
		}
        else if (symbol[4].indexOf(vfStr.substring(i, 1)) > 0)
		{
            Result += symbol[3].substring(symbol[4].indexOf(vfStr.substring(i, 1)), (symbol[4].indexOf(vfStr.substring(i, 1)) + 1));
//			          symbol[3].substring(vfStr.indexof(vfStr.substring(i, 1), symbol[4]), 1);
		}
	}
	document.getElementById("fcode").innerHTML = "Código de Validação: " + Result;	
	
//#############################################################################
	oIndexOf   = symbol[3].indexOf("3");
	oSubstring = symbol[4].substring(27, 28);
	newC       = ""; //symbol[4].substring(1, vfStr.indexOf(vfStr.substring(1, 28), symbol[1]))
//#############################################################################
	document.getElementById("ucode").innerHTML = oIndexOf + " | " + oSubstring + "<br>" + newC;



	
//#############################################################################
//#############################################################################
/**
    for i := 1 to Length(Trim(vfStr)) do
    begin
        if Pos(Copy(vfStr, i, 1), symbol[1]) > 0 then
            Result := Result + Copy(symbol[2], Pos(Copy(vfStr, i, 1), symbol[1]), 1)

        else if Pos(Copy(vfStr, i, 1), symbol[2]) > 0 then
            Result := Result + Copy(symbol[1], Pos(Copy(vfStr, i, 1), symbol[2]), 1)

        else if Pos(Copy(vfStr, i, 1), symbol[3]) > 0 then
            Result := Result + Copy(symbol[4], Pos(Copy(vfStr, i, 1), symbol[3]), 1)

        else if Pos(Copy(vfStr, i, 1), symbol[4]) > 0 then
            Result := Result + Copy(symbol[3], Pos(Copy(vfStr, i, 1), symbol[4]), 1);
    end;
*/
//#############################################################################
//#############################################################################
}





//#############################################################################
//#############################################################################
//#############################################################################
//#############################################################################
//#############################################################################
//#############################################################################
//#############################################################################
//#############################################################################


// Define uma função chamada isPrime que verifica se um número é primo ou não
function isPrime(number) {
    // Verifica se o número é menor ou igual a 1, que não é primo
    if (number <= 1) {
        return false;
    }

    // Verifica se o número é 2 ou 3, que são primos
    if (number <= 3) {
        return true;
    }

    // Verifica se o número é divisível por 2 ou por 3, que não são primos
    if (number % 2 === 0 || number % 3 === 0) {
        return false;
    }

    // Utiliza o método do Crivo de Eratóstenes para verificar divisibilidade por números maiores que 3
    for (let i = 5; i * i <= number; i += 6) {
        if (number % i === 0 || number % (i + 2) === 0) {
            return false;
        }
    }

    // Se nenhum critério de divisibilidade for atendido, o número é considerado primo
    return true;
}

// Número que será testado para verificar se é primo ou não
const numberToCheck = 29;

// Chama a função isPrime com o número especificado e imprime o resultado
if (isPrime(numberToCheck)) {
    console.log(`${numberToCheck} é primo.`);
} else {
    console.log(`${numberToCheck} não é primo.`);
}


