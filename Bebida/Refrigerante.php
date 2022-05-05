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

        /*abstract function mostrarBebida()
        {

        }
        */
        abstract function verificarPreco($preco)
        {
            if($preco < 5)
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