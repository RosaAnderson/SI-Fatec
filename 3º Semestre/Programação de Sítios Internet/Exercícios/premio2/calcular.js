function calcular() 
{
    var premio = document.getElementById("premio").value;
    var p1 = parseInt(document.getElementById("p1").value);
    var p2 = parseInt(document.getElementById("p2").value);
    var p3 = parseInt(document.getElementById("p3").value);

    //PROCESSAMENTO

    var r1 = premio * p1 / (p1 + p2 + p3);
    var r2 = premio * p2 / (p1 + p2 + p3);
    var r3 = premio * p3 / (p1 + p2 + p3);

    //SAIDAS

    //alert(r1 + '\n' + r2);
    //alert(r2);
    //alert(r3);
	
	result = "O primeiro colocado ganhou R$ " + r1 + 
	         "<br>" + 
	         "O segundo colocado ganhou R$ "  + r2 + 
			 "<br>" + 
			 "O terceiro colocado ganhou R$ " + r3;
}