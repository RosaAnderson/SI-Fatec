<?php

	require_once "c.consulta.php";
	require_once "c.prescricao.php";
	require_once "c.medicamento.php";
	require_once "c.exame.php";
	require_once "c.pessoa.php";
	require_once "c.medico.php";
	require_once "c.paciente.php";
	require_once "c.telefone.php";

	$exam01 = new Exame('Endoscopia', 'beber solução anestésica');

	$doct01 = new Medico('Gastro', 'Dr. Jonas', '000.999.888-21', '14', '99999-6666');

	$pass01 = new Paciente('Deboas', 'Marcia', '888.777.666-90', '14', '99945-4444');

	$cons01 = new Consulta('10/04/2024', '11:30', array($exam01), array($doct01), array($pass01));

	$medi01 = new Medicamento('Coberfresh', 'vermelha', 'miturar com 150ml de água');

	$pres01	= new Prescricao('Tomar vite gotas antes do almoço', $medi01, $cons01);


	echo "<h2> Consulta </h2>";
	echo "Data e Hora: <br>";
	echo $pres01 -> getConsulta() -> getData() . ' às ' . $pres01 -> getConsulta() -> getHora() . "<br>";
	
	echo "<h3> Médico </h3>";
	foreach($pres01 -> getConsulta() -> getMedico() as $md)
	{
		echo "Nome: " . $md -> getNome() . "<br>";
		echo "Esp.: " . $md -> getEspecialidade() . "<br>";
		echo "CPF.: " . $md -> getCPF() . "<br>";
		
		foreach($md -> getTelefone() as $ph)
		{
			echo "Telefone: (" . $ph -> getDDD() . ") " . $ph -> getNumero() . "<br>";
		}
	}

	echo "<h3> Exame </h3>";
	foreach($pres01 -> getConsulta() -> getExame() as $ex)
	{
		echo "Nome: "    . $ex -> getNome() . "<br>";
		echo "Preparo: " . $ex -> getPreparo() . "<br>";
	}

	echo "<h3> Paciente </h3>";
	foreach($pres01 -> getConsulta() -> getPaciente() as $md)
	{
		echo "Nome: "     . $md -> getNome() . "<br>";
		echo "Convênio: " . $md -> getConvenio() . "<br>";
		echo "CPF.: "     . $md -> getCPF() . "<br>";

		foreach($md -> getTelefone() as $ph)
		{
			echo "Telefone: (" . $ph -> getDDD() . ") " . $ph -> getNumero() . "<br>";
		}
	}

	echo "<h3> Prescrição </h3>";
	echo "Nome: " . $pres01 -> getMedicamento() -> getNome() . "<br>";
	echo "Tarja: " . $pres01 -> getMedicamento() -> getTarja() . "<br>";
	echo "Bula: " . $pres01 -> getMedicamento() -> getBula() . "<br><br>";
	echo $pres01 -> getPrescricao();

/*
	echo "<pre>";
		var_dump($pres01);		
	echo "</pre>";
*/
?>