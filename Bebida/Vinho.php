<?php
    require_once 'Bebida.php';

    class Vinho extends Bebida
    {
        private $safra;
        private $tipo;

        public function getSafra()
        {
            return $this->safra;
        }

        public function setSafra($safra)
        {
            $this->safra = $safra;
        }

        public function getTipo()
        {
            return $this->tipo;
        }

        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }

        abstract function mostrarBebida()
        {
            $informacoes = $this->nome + "<br/>" + "<br/>" + $this->preco +
            "<br/>" + "<br/>" + $this->safra + "<br/>" + "<br/>" + $this->tipo;
            return $informacoes;
        }

        abstract function verificarPreco($preco)
        {
            if($preco < 25)
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