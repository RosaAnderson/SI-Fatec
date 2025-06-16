
var	click     = 1;
var jogadas   = 0;
var points_g1 = 0;
var points_g2 = 0;

var imgOne    = "";
var idxOne    = 0;

var imgPath   = "";
var idxPath   = "";
var imgClick  = "";

var playAgain = false;

function check(image, idx)
{
	// pega o caminho completo da imagem e salva na variavel
	imgPath = document.getElementsByTagName("img")[idx].src;
	
	// fatia o texto na posição especificada e salva no vetor
	idxPath = imgPath.split("/");
	
	// pega o nome da imagem armazenada na posição 'X' do vetor
	imgClick = idxPath[idxPath.length - 1];

	// mosta a imagem especificafa
	document.getElementsByTagName("img")[idx].src = "img/" + image;

	// verifica se a imagem clicada é as costas da carta
	if (imgClick == "back.jpg")
//	if (idxOne != idx)
	{	
		// verifica se foi o primeiro click do jogador
		if (click == 1)
		{
			// 
			imgOne = image;
			
			// 
			idxOne = idx;
			
			// 
			click = 2;
		}
		else
		// verifica se foi o segundo click do jogador
		if (click == 2)
		{
			// 
			click   = 1;
			
			// 
			jogadas ++;
			
			// 
			if (imgOne == image)
			{

				// verifica se o jogador vai jogar novamente
				if (playAgain)
				{
					jogadas --;
				}

				// 
				if (jogadas%2 != 0)
				{
					// 
					points_g1 ++;
					
					// 
					playAgain = true;
				}
				else
				{
					// 
					points_g2 ++;
					
					// 
					playAgain = true;
				}
				
				// 
				document.getElementById("result").innerHTML = "<h3>Jogador 1 [" + points_g1 + " x " + points_g2 + "] Jogador 2</h3>";
			}
			else
			{
				// 
				setTimeout(
					function()
					{
						// 
						document.getElementsByTagName("img")[idxOne].src = "img/back.jpg";
						document.getElementsByTagName("img")[idx].src    = "img/back.jpg";
					}, 1500);

				// 
				playAgain = false;
			}
		}
	}
}	




/*

$(function()
{
	var turn = 1;
	var winner = "";

	function casasIguais(a, b, c)
	{
		var boxA = $("#box" + a);
		var boxB = $("#box" + b);
		var boxC = $("#box" + c);

		var bgA = $("#box" + a).css("background-image");
		var bgB = $("#box" + b).css("background-image");
		var bgC = $("#box" + c).css("background-image");
	
		if ((bgA == bgB) && (bgB == bgC) && (bgA != "none" && bgA != ""))
		{
			if (bgA.indexOf("1.jpg") >= 0)
				winner = "1";
			else
				winner = "2";

			return true;
		}
		else
		{
			return false;
		}
	}

	function verificarFimDeJogo()
	{
		if (casasIguais(1, 2, 3) ||
				casasIguais(4, 5, 6) ||
					casasIguais(7, 8, 9) ||
						casasIguais(1, 4, 7) ||
							casasIguais(2, 5, 8) ||
								casasIguais(3, 6, 9) ||
									casasIguais(1, 5, 9) ||
										casasIguais(3, 5, 7))
		{
			$("#resultado").html("<h1>O jogador " + winner + " venceu! </h1>");
			$(".box").off("click");
		}
	}

	$(".box").click(function()
	{
		var bg = $(this).css("background-image");
		if (bg == "none" || bg == "")
		{           
			var fig = "url(" + turn.toString() + ".jpg)";
			$(this).css("background", fig);
			turn = (turn == 1? 2:1);  
			verificarFimDeJogo();
		}
	});
});

*/