<?php
class personarfc {
    private $nombre;
    private $apep;
    private $apem;
    private $fechanac; // AAAA-MM-DD  2000-10-20
    //rfc


    public function __contructor(){
        echo "<h1>generador de rfc</h1>";
    }

    //set get
    public function setnombre($nom){
        $this->nombre=$nom;
    }

    public function getnombre(){
        return $this->nombre;
    }
    //comportamiento 

    //meter datos

    
    public function setdatos($nom, $ap1, $ap2, $nac){
        $this->nombre=$nom;
        $this->apep=$ap1;
        $this->apem=$ap2;
        $this->fechanac=$nac; //AAAA-MM-DD
    }
    //generar el rfc
    public function generarrfc(){
        $a=substr($this->apep,0,2);
        $b=substr($this->apem,0,1);
        $c=substr($this->nombre,0,1);
        //AÑO
        $d=substr($this->fechanac,2,2);
        //mes
        $e=substr($this->fechanac,5,2);
        //dia
        $f=substr($this->fechanac,8,2);
        return strtoupper($a.$b.$c.$d.$e.$f);

    }
}

?>