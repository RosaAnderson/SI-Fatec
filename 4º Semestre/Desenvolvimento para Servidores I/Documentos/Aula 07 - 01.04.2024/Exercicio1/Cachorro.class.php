<?php
	class Cachorro
	{
		public function __construct(private string $nome="",  private string $cor = "", private string $raca = "", private string $dataNascimento = "", private $proprietario = null){}
		
		public function getNome()
		{
			return $this->nome;
		}

		public function getCor()
		{
			return $this->cor;
		}
		public function getRaca()
		{
			return $this->raca;
		}

		public function getDataNascimento()
		{
			return $this->dataNascimento;
		}
		
		public function getProprietario()
		{
			return $this->proprietario;
		}
		public function setNome($nome)
		{
			$this->nome = $nome;
		}

		public function setCor($cor)
		{
			$this->cor = $cor;
		}
		public function setRaca($raca)
		{
			$this->raca = $raca;
		}

		public function setDataNascimento($data)
		{
			$this->dataNascimento = $data;
		}
		
		public function setProprietario($proprietario)
		{
			$this->proprietario = $proprietario;
		}
		
	}//fim da classe
?>