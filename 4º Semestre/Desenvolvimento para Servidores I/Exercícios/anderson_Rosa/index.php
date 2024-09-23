<?php

	require_once "c.cursos.php";
	require_once "c.endereco.php";
	require_once "c.pessoa.php";
	require_once "c.aluno.php";
	require_once "c.professor.php";
	require_once "c.matricula.php";

#	$exam01 = new Exame('Endoscopia', 'beber solução anestésica');

#	$doct01 = new Medico('Gastro', 'Dr. Jonas', '000.999.888-21', '14', '99999-6666');

#	$pass01 = new Paciente('Deboas', 'Marcia', '888.777.666-90', '14', '99945-4444');

	$pro01 = new Professor('022831001-070', 'PhD. em Redes', 'Rogerio Sant', '333.555.111-90',
							'Rua Feitas da Costa', '107', 'Jardim Novo', '15.008-765', 'Brusque', 'RO');
#				$carteiraProfissional, $titulacao, $nome, $cpf, $logradouro, $numero, $bairro, $cep, $cidade,	$uf

	$alu01 = new Aluno('0200222831001', 'Rogerio Sant', '666.333.555-11',
						'Rua Inacio de Feitas', '1087', 'Centro', '11.098-765', 'Fiji', 'MJ');
#						$ra, $nome,	$cpf, $logradouro, $numero, $bairro, $cep, $cidade,	$uf

	$cur01 = new Cursos(944, 'Sistemas para Internet', 3674.93, array($alu01), array($pro01));
#					$idCurso, $nome, $preco, $aluno, $professor

	$mat01	= new Matricula('25/07/2022', $cur01);


	echo "<h2> Matricula </h2>";
	echo "Data: " . $mat01 -> getDataMatricula() . "<br>";	

	
	echo "<h3> Curso </h3>";	
		echo "Código: "		. $mat01 -> getCurso() -> getIdCurso()	. "<br>";
		echo "Nome: "		. $mat01 -> getCurso() -> getNome()		. "<br>";
		echo "Preço: R$ "	. $mat01 -> getCurso() -> getPreco()	. "<br>";

	echo "<h3> Professor </h3>";
		foreach($mat01 -> getCurso() -> getProfessor() as $pro)
		{
			echo "Carterira Profissional: "	. $pro -> getCarteiraProfissional() . "<br>";
			echo "Titulação: "				. $pro -> getTitulacao()			. "<br>";
			echo "Nome: "					. $pro -> getNome()					. "<br>";
			echo "CPF: "					. $pro -> getCPF()					. "<br>";
			
			echo "<h4> Endereço </h4>";
				foreach($pro -> getEndereco() as $endp)
				{
					echo "Logradouro: "	. $endp -> getLogradouro()	. "<br>";
					echo "Número: "		. $endp -> getNumero()		. "<br>";
					echo "Bairro: "		. $endp -> getBairro()		. "<br>";
					echo "CEP: "		. $endp -> getCEP()			. "<br>";
					echo "Cidade: "		. $endp -> getCidade()		. "<br>";
					echo "UF: "			. $endp -> getUF()			. "<br>";
				}
	}

	echo "<h3> Aluno </h3>";
	foreach($mat01 -> getCurso() -> getAluno() as $alu)
	{
		echo "RA: "		. $alu -> getRA()	. "<br>";
		echo "Nome: "	. $alu -> getNome()	. "<br>";
		echo "CPF: "	. $alu -> getCPF()	. "<br>";
		
		echo "<h4> Endereço </h4>";
			foreach($pro -> getEndereco() as $enda)
			{
				echo "Logradouro: "		. $enda -> getLogradouro()	. "<br>";
				echo "Número: "			. $enda -> getNumero()		. "<br>";
				echo "Bairro: "			. $enda -> getBairro()		. "<br>";
				echo "CEP: "			. $enda -> getCEP()			. "<br>";
				echo "Cidade: "			. $enda -> getCidade()		. "<br>";
				echo "UF: "				. $enda -> getUF()			. "<br>";
			}
	}


/*
	echo "<pre>";
		var_dump($pres01);		
	echo "</pre>";
*/
?>