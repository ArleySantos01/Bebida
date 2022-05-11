<?php
	require_once 'Bebida.php';

	class Refrigerante extends Bebida
	{
		private $retornavel;

		public function getRetornavel()
		{
			return $this->retornavel;
		}

		public function setRetornavel($retornavel)
		{
			$this->retornavel = $retornavel;
		}

		public function mostrarBebida()
		{
			$informacoes = $this->nome + "<br/>" + "<br/>" + $this->preco 
			+ "<br/>" + "<br/>" + $this->safra + "<br/>" + "<br/>" + $this->tipo;
			return $informacoes;			
		}

		public function verificarPreco($preco)
		{
			if ($preco < 5)
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