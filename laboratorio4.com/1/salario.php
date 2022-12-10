<<?php
    class salario{
        public $hrt;
        public $pph;
        public $sb;
        public $desc;
        public $sn;


        public function get_hrt(){

            return $this->hrt;

        }

        public function get_pph(){


            return $this->pph;
        }


        public function sethorast($horast){
            $this->horast=$horast;
        }

        public function setpph($pph){
            $this->pph=$pph;
        }

        public function resultado(){
            $this->sb = $this->pph*$this->horast;
            $this->ds = 0.2 * $this->sb;
            $this->sn = $this->sb - $this->desc;
            return $this->sn;
        }


}
?>