<?php
	class Console
	{
		public function __construct(private int $idConsole = 0,
									private string $descritivo = ""){}
		
		public function getIdConsole()
		{
			return $this -> idConsole;
		}

		public function getDescritivo()
		{
			return $this -> descritivo;
		}
	}
?>