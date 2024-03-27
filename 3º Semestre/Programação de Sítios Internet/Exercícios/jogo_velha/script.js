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

