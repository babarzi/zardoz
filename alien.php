 @@ -0,0 +1,62 @@
<?php

  class Alien extends Enemigos{

    protected $vida = 200;

    protected $disparo = 'Medio (10)';

    public function getVida(){

      return $this->vida;

    }

    public function setDisparo(){

    return $this->disparo = $disparo;
  }

  public function getDisparo(){

    return $this->disparo;
  }

    protected function disparo(){

        return $this->disparo = 10;
    }
    public function destroy(){

      if ($this->vida <= 0){

        $rta = true;

      }else{

        $rta = false;

      }

      return $rta;
    }


    public function low($health){

      $this->vida = $this->vida - $health;
    }

    function atacar($basic){

       $basic->low($this->disparo());

       $rta=$basic->destroy()? '</br>☠️ Game Over ☠️</br>':'</br> 🏥 Vida restante: '.$basic->getVida().' 🏥</br>';

       return '</br>🎮 '. $basic->getPlayer().' 🎮</br>'.$rta;
    }


 }

?>
