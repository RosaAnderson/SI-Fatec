var seg = 0;
var min = 0;
var hor = 0;
var cron = 0;

function start()
{
	if(cron == 0)
	{
		cron = setInterval(
				function()
				{
					document.getElementById("crono").innerHTML = ("00" + hor).slice(-2) +
																  ":" +
																("00" + min).slice(-2) +
																 ":" + 
																("00" + seg).slice(-2);

					seg++;

					if (min == 60)
					{
						min = 0;
						hor++;
					};

					if (seg == 60)
					{
						seg = 0;
						min++;
					};

				}, 1000);
	};
}

function stop()
{
	clearInterval(cron);
	cron = 0;	
}

function rest()
{
	window.location.reload();
}
