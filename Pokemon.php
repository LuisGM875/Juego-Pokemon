<?php
global $name, $tipo1, $tipo2, $nivel,$ataque_hada,$ataque_hielo, $ataque_fantasma, $ataque_electrico, $ataque_fuego, $ataque_dragon, $ataque_bicho, $ataque_agua, $ataque_acero, $ataque_lucha, $ataque_normal, $ataque_planta, $ataque_psiquico, $ataque_roca, $ataque_siniestro, $ataque_tierra, $ataque_veneno, $ataque_volador,$pokemoneslucha;
require 'Juego.php';
class Pokemon
{
    private $nombres;
    private $tipo1;
    private $tipo2;
    private $vida;
    private $nivel;
    private $ataque1;
    private $ataque2;



    public function Object($nombres, $tipo1, $tipo2, $vida, $nivel,$ataque1,$ataque2)
    {
        $this->nombres = $nombres;
        $this->tipo1= $tipo1;
        $this->tipo2 = $tipo2;
        $this->vida = $vida;
        $this->nivel = $nivel;
        $this->ataque1 = $ataque1;
        $this->ataque2 = $ataque2;
    }

    public function getNombre()
    {
        return $this->nombres;
    }

    public function setNombre($nombres)
    {
        $this->nombres = $nombres;
    }

    public function getTipo1()
    {
        return $this->tipo1;
    }

    public function setTipo1($tipo1)
    {
        $this->tipo1 = $tipo1;
    }

    public function getTipo2()
    {
        return $this->tipo2;
    }

    public function setTipo2($tipo2)
    {
        $this->tipo2 = $tipo2;
    }

    public function getVida()
    {
        return $this->vida;
    }

    public function setVida($vida)
    {
        $this->vida = $vida;
    }

    public function getDano()
    {
        return $this->dano;
    }

    public function setDano($dano)
    {
        $this->dano = $dano;
    }

    public function getNivel()
    {
        return $this->nivel;
    }

    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    public function getAtaque1()
    {
        return $this->ataque1;
    }

    public function setAtaque1($ataque1)
    {
        $this->ataque1 = $ataque1;
    }

    public function getAtaque2()
    {
        return $this->ataque2;
    }

    public function setAtaque2($ataque2)
    {
        $this->ataque2 = $ataque2;
    }


    public function generarlevel($nivel){
        $nivel = rand(1,50);
        return $nivel;
    }


    function obtenervida($nivel, $total,$vida){
        $total = 20;
        $vida = ((int)$nivel * 100) / $total;
        return $vida;
    }
    function generarnum($name){
        $num_alea = rand(0,sizeof($name)-1);
        return $num_alea;
    }

    function generar($name,$tipo1,$tipo2,$total){
        $num_alea = $this->generarnum($name);
        global $nivel, $vida,$ataque1,$atack_hada,$ataque_hielo, $ataque_fantasma, $ataque_electrico, $ataque_fuego, $ataque_dragon, $ataque_bicho, $ataque_agua, $ataque_acero, $ataque_lucha, $ataque_normal, $ataque_planta, $ataque_psiquico, $ataque_roca, $ataque_siniestro, $ataque_tierra, $ataque_veneno, $ataque_volador;
        $nombres=$name[$num_alea];
        $this->setNombre($nombres);
        $tipo1=$tipo1[$num_alea];
        $this->setTipo1($tipo1);
        $tipo2=$tipo2[$num_alea];
        $this->setTipo2($tipo2);
        $nivel= $this->generarlevel($nivel);
        $this->setNivel($nivel);
        $vida = $this->obtenervida($nivel, $total,$vida);
        $this->setVida($vida);
        $ataque1 = $this->ataques1($atack_hada,$ataque_hielo, $ataque_fantasma, $ataque_electrico, $ataque_fuego, $ataque_dragon, $ataque_bicho, $ataque_agua, $ataque_acero, $ataque_lucha, $ataque_normal, $ataque_planta, $ataque_psiquico, $ataque_roca, $ataque_siniestro, $ataque_tierra, $ataque_veneno, $ataque_volador,$ataque1);
        $this->setAtaque1($ataque1);
        $ataque2 = $this->ataques2($atack_hada,$ataque_hielo, $ataque_fantasma, $ataque_electrico, $ataque_fuego, $ataque_dragon, $ataque_bicho, $ataque_agua, $ataque_acero, $ataque_lucha, $ataque_normal, $ataque_planta, $ataque_psiquico, $ataque_roca, $ataque_siniestro, $ataque_tierra, $ataque_veneno, $ataque_volador,$ataque1);
        $this->setAtaque2($ataque2);
        $this->datos($nombres, $tipo1, $tipo2, $nivel, $vida,$ataque1);
    }
    public function datos()
    {
        if($this->getTipo1()==$this->getTipo2()){
            print_r("\n Pokemon: ".$this->getNombre()." \n Estadisticas:\n Tipo: ".$this->getTipo1()."\n");
        }else if($this->getTipo1() !=$this->getTipo2()){
            print_r("\n Pokemon: ".$this->getNombre()." \n Estadisticas:\n Tipo: ".$this->getTipo1()." y ".$this->getTipo2()."\n");
        }else{
            print_r("No tiene tipo");
        }
        print_r(" Nivel: ".$this->getNivel()." \n");
        print_r(" PS: ".$this->getVida()."\n");
        print_r(" Ataque 1: ".$this->getAtaque1()."\n");
        print_r(" Ataque 2: ".$this->getAtaque2()."\n");
    }

    public function ataques1($atack_hada,$ataque_hielo, $ataque_fantasma, $ataque_electrico, $ataque_fuego, $ataque_dragon, $ataque_bicho, $ataque_agua, $ataque_acero, $ataque_lucha, $ataque_normal, $ataque_planta, $ataque_psiquico, $ataque_roca, $ataque_siniestro, $ataque_tierra, $ataque_veneno, $ataque_volador){
        if ($this->getTipo1()=="Hielo"){
            $num_ataque1 = rand(0,sizeof($ataque_hielo)-1);
            $ataque1=($ataque_hielo[$num_ataque1]);
        }else if($this->getTipo1()=="Hada"){
            $num_ataque1 = rand(0,sizeof($atack_hada)-1);
            $ataque1=($atack_hada[$num_ataque1]);
        }else if($this->getTipo1()=="Fuego"){
            $num_ataque1 = rand(0,sizeof($ataque_fuego)-1);
            $ataque1=($ataque_fuego[$num_ataque1]);
        }else if($this->getTipo1()=="Fantasma"){
            $num_ataque1 = rand(0,sizeof($ataque_fantasma)-1);
            $ataque1=($ataque_fantasma[$num_ataque1]);
        }else if($this->getTipo1()=="Eléctrico"){
            $num_ataque1 = rand(0,sizeof($ataque_electrico)-1);
            $ataque1=($ataque_electrico[$num_ataque1]);
        }else if($this->getTipo1()=="Dragón"){
            $num_ataque1 = rand(0,sizeof($ataque_dragon)-1);
            $ataque1=($ataque_dragon[$num_ataque1]);
        }else if($this->getTipo1()=="Bicho"){
            $num_ataque1 = rand(0,sizeof($ataque_bicho)-1);
            $ataque1=($ataque_bicho[$num_ataque1]);
        }else if($this->getTipo1()=="Agua"){
            $num_ataque1 = rand(0,sizeof($ataque_agua)-1);
            $ataque1=($ataque_agua[$num_ataque1]);
        }else if($this->getTipo1()=="Acero"){
            $num_ataque1 = rand(0,sizeof($ataque_acero)-1);
            $ataque1=($ataque_acero[$num_ataque1]);
        }else if($this->getTipo1()=="Lucha"){
            $num_ataque1 = rand(0,sizeof($ataque_lucha)-1);
            $ataque1=($ataque_lucha[$num_ataque1]);
        }else if($this->getTipo1()=="Normal"){
            $num_ataque1 = rand(0,sizeof($ataque_normal)-1);
            $ataque1=($ataque_normal[$num_ataque1]);
        }else if($this->getTipo1()=="Planta"){
            $num_ataque1 = rand(0,sizeof($ataque_planta)-1);
            $ataque1=($ataque_planta[$num_ataque1]);
        }else if($this->getTipo1()=="Psíquico"){
            $num_ataque1 = rand(0,sizeof($ataque_psiquico)-1);
            $ataque1=($ataque_psiquico[$num_ataque1]);
        }else if($this->getTipo1()=="Roca"){
            $num_ataque1 = rand(0,sizeof($ataque_roca)-1);
            $ataque1=($ataque_roca[$num_ataque1]);
        }else if($this->getTipo1()=="Siniestro"){
            $num_ataque1 = rand(0,sizeof($ataque_siniestro)-1);
            $ataque1=($ataque_siniestro[$num_ataque1]);
        }else if($this->getTipo1()=="Tierra"){
            $num_ataque1 = rand(0,sizeof($ataque_tierra)-1);
            $ataque1=($ataque_tierra[$num_ataque1]);
        }else if($this->getTipo1()=="Veneno"){
            $num_ataque1 = rand(0,sizeof($ataque_veneno)-1);
            $ataque1=($ataque_veneno[$num_ataque1]);
        }else if($this->getTipo1()=="Volador"){
            $num_ataque1 = rand(0,sizeof($ataque_volador)-1);
            $ataque1=($ataque_volador[$num_ataque1]);
        }
        return $ataque1;
    }
    public function ataques2($atack_hada,$ataque_hielo, $ataque_fantasma, $ataque_electrico, $ataque_fuego, $ataque_dragon, $ataque_bicho, $ataque_agua, $ataque_acero, $ataque_lucha, $ataque_normal, $ataque_planta, $ataque_psiquico, $ataque_roca, $ataque_siniestro, $ataque_tierra, $ataque_veneno, $ataque_volador){
        if ($this->getTipo2()=="Hielo"){
            $num_ataque1 = rand(0,sizeof($ataque_hielo)-1);
            $ataque2=($ataque_hielo[$num_ataque1]);
        }else if($this->getTipo2()=="Hada"){
            $num_ataque1 = rand(0,sizeof($atack_hada)-1);
            $ataque2=($atack_hada[$num_ataque1]);
        }else if($this->getTipo2()=="Fuego"){
            $num_ataque1 = rand(0,sizeof($ataque_fuego)-1);
            $ataque2=($ataque_fuego[$num_ataque1]);
        }else if($this->getTipo2()=="Fantasma"){
            $num_ataque1 = rand(0,sizeof($ataque_fantasma)-1);
            $ataque2=($ataque_fantasma[$num_ataque1]);
        }else if($this->getTipo2()=="Eléctrico"){
            $num_ataque1 = rand(0,sizeof($ataque_electrico)-1);
            $ataque2=($ataque_electrico[$num_ataque1]);
        }else if($this->getTipo2()=="Dragón"){
            $num_ataque1 = rand(0,sizeof($ataque_dragon)-1);
            $ataque2=($ataque_dragon[$num_ataque1]);
        }else if($this->getTipo2()=="Bicho"){
            $num_ataque1 = rand(0,sizeof($ataque_bicho)-1);
            $ataque2=($ataque_bicho[$num_ataque1]);
        }else if($this->getTipo2()=="Agua"){
            $num_ataque1 = rand(0,sizeof($ataque_agua)-1);
            $ataque2=($ataque_agua[$num_ataque1]);
        }else if($this->getTipo2()=="Acero"){
            $num_ataque1 = rand(0,sizeof($ataque_acero)-1);
            $ataque2=($ataque_acero[$num_ataque1]);
        }else if($this->getTipo2()=="Lucha"){
            $num_ataque1 = rand(0,sizeof($ataque_lucha)-1);
            $ataque2=($ataque_lucha[$num_ataque1]);
        }else if($this->getTipo2()=="Normal"){
            $num_ataque1 = rand(0,sizeof($ataque_normal)-1);
            $ataque2=($ataque_normal[$num_ataque1]);
        }else if($this->getTipo2()=="Planta"){
            $num_ataque1 = rand(0,sizeof($ataque_planta)-1);
            $ataque2=($ataque_planta[$num_ataque1]);
        }else if($this->getTipo2()=="Psíquico"){
            $num_ataque1 = rand(0,sizeof($ataque_psiquico)-1);
            $ataque2=($ataque_psiquico[$num_ataque1]);
        }else if($this->getTipo2()=="Roca"){
            $num_ataque1 = rand(0,sizeof($ataque_roca)-1);
            $ataque2=($ataque_roca[$num_ataque1]);
        }else if($this->getTipo2()=="Siniestro"){
            $num_ataque1 = rand(0,sizeof($ataque_siniestro)-1);
            $ataque2=($ataque_siniestro[$num_ataque1]);
        }else if($this->getTipo2()=="Tierra"){
            $num_ataque1 = rand(0,sizeof($ataque_tierra)-1);
            $ataque2=($ataque_tierra[$num_ataque1]);
        }else if($this->getTipo2()=="Veneno"){
            $num_ataque1 = rand(0,sizeof($ataque_veneno)-1);
            $ataque2=($ataque_veneno[$num_ataque1]);
        }else if($this->getTipo2()=="Volador"){
            $num_ataque1 = rand(0,sizeof($ataque_volador)-1);
            $ataque2=($ataque_volador[$num_ataque1]);
        }
        return $ataque2;
    }
    public function estado() {
        return $this->vida >= 0;
    }

    public function recibirDano($dano) {
        $this->vida -= $dano;
    }

    public function atacar($oponente) {
        global $num_ataque;
        print_r("\n".$this->getNombre(). " ataca a " . $oponente->getNombre());
        $dano= rand(7,15);
        $oponente->recibirDano($dano);
        $num_ataque= rand(1,2);
        print_r("\n".$oponente->getNombre(). $this->mostrarataque($num_ataque) ." recibe " . $dano . " puntos de daño le quedan ".$oponente->getVida()." de vida\n");
        if (!$oponente->estado()) {
            print_r("\n =============================\n  ".$oponente->getNombre() . " ha sido derrotado\n ============================\n");
        }
    }

    public function mostrarataque($num_ataque){
        if($num_ataque==1){
            print_r(" con ".$this->getAtaque1());
        }else if($num_ataque==2){
            print_r(" con ".$this->getAtaque2());
        }
    }

    public function atacar2($arreglo){
        $maximo=sizeof($arreglo);
        print_r("\n        -*- Bienvenido al coliseo pokemon -*- \n     ===========================================\n -Los pokemones que luchen se atacan a la vez, algunos pokemones realizan varios ataques al mismo enemigo. \n -Pueden ocurrir ataques en grupo.\n");
        print_r("\n -*- Comienza el combate -*-\n     *Musica de combate*\n\n");
        while($maximo>1){
                $index = array_rand($arreglo);
                $pos = array_rand($arreglo);
                if($index!==$pos && $index<$maximo && $pos<$maximo){
                    $arreglo[$index]->atacar($arreglo[$pos]);
                    $arreglo[$pos]->atacar($arreglo[$index]);
                    if (!$arreglo[$pos]->estado()) {
                        unset($arreglo[$pos]);
                        $arreglo=array_values($arreglo);
                        $maximo=sizeof($arreglo);
                    }
                }else{
                    //print_r("\n".$arreglo[$index]->getNombre()." a intentado atacar a otro pero no lo logro\n");
                }
            //parar cuando el tamaño del arreglo se de uno

        }
        print_r("\n ============================ \n     ¡Ganador ".$arreglo[0]->getNombre()."! \n ============================ \n Fue el ultimo en quedar en pie \n   ¡Felicidades ".$arreglo[0]->getNombre()."!\n");
    }
}