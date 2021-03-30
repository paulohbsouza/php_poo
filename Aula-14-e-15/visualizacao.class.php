<?php

    require_once 'video.class.php';
    require_once 'gafanhoto.class.php';

    class Visualizacao {

        private $espectador;
        private $filme;

        public function __construct($espectador, $filme) {
            $this->espectador = $espectador;
            $this->filme = $filme;
        }

        public function getEspectador() {
            return $this->espectador;
        }
        public function getFilme() {
            return $this->filme;
        }
        public function setEspectador($esp) {
            $this->espectador = $esp;
        }
        public function setFilme($fil) {
            $this->filme = $fil;
        }

    }


?>