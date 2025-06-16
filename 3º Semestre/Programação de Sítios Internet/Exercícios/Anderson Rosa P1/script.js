var seg = 59; // mudar para 59 antes de entregar
var min = 4; //mudar para 4 antes de entregar
var cron = 0;

var respGab = ['mejor', 'duda', 'corazón', 'magia', 'momento', 'desperté'];

function time()
{
	if(cron == 0)
	{
		cron = setInterval(
				function()
				{
					document.getElementById("tempo").innerHTML = min + ":" + ("00" + seg).slice(-2);

					if (seg == 0)
					{
						if ((min == 0) && (seg == 0))
						{
							document.getElementsByTagName('button')[0].style.display = 'none';
							stop();
							alert('Seu tempo acabou!');
						};

						seg = 59;

						min--;
					};

					seg--;
				}, 1000);
	};
}

function stop()
{
	clearInterval(cron);
	cron = 0;	
}

function verificar()
{
	stop();

//	document.getElementsByTagName('button')[0].style.display = 'none';
	document.querySelector('button').style.display = 'none';

	var respostas = document.getElementsByName('resp');

	for (i=0; i<respostas.length; i++)
	{

		if (respGab[i] != respostas[i].value)
		{
			document.getElementsByName('resp')[i].style.borderColor = 'red';
		}
		else
		{
			document.getElementsByName('resp')[i].style.borderColor = 'blue';
		};
	};
}