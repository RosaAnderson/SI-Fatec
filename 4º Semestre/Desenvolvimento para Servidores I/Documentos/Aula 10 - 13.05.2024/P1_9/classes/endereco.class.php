<?php
	class Endereco
	{
		
		function __construct(private string $logradouro = "", private string $numero = "", private string $bairro = "", private string $cep = "", private string $cidade = "", private string $uf = ""){}
		
		function getLogradouro()
		{
			return $this->logradouro;
		}
		function getNumero()
		{
			return $this->numero;
		}
        function getBairro()
		{
			return $this->bairro;
		}
		function getCep()
		{
			return $this->cep;
		}
        function getCidade()
		{
			return $this->cidade;
		}
		function getUf()
		{
			return $this->uf;
		}
		
		function setLogradouro($logradouro)
		{
			$this->logradouro = $logradouro;
		}
		function setNumero($numero)
		{
			$this->numero = $numero;
		}
        function setBairro($bairro)
		{
			$this->bairro = $bairro;
		}
		function setCep($cep)
		{
			$this->cep = $cep;
		}
        function setCidade($cidade)
		{
			$this->cidade = $cidade;
		}
		function setUf($uf)
		{
			$this->uf = $uf;
		}
	}
?>