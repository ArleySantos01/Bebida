<?php
	require_once 'Bebida.php';

	class Suco extends Bebida
	{
		private $sabor;

		public function getSabor()
		{
			return $this->sabor;
		}

		public function setSabor($sabor)
		{
			$this->sabor = $sabor;
		}

		public function mostrarBebida()
		{
			$informacoes = $this->nome + "<br/>" + "<br/>" + $this->preco 
			+ "<br/>" + "<br/>" + $this->safra + "<br/>" + "<br/>" + $this->tipo;
			return $informacoes;			
		}

		public function verificarPreco($preco)
		{
			if (preco < 2.5)
			{
				return 0;
			}

			else
			{
				return 1;
			}
		}
	}
?>