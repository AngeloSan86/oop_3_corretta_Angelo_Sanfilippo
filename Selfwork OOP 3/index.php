<?php

/*crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste semplici regole:

le classi non devono avere attributi;
ogni classe avra' un metodo specifico protected per stampare la sua specializzazione;
non puoi realizzare metodi definiti public per stampare il risultato;
l’unico metodo public ammesso e' il costrutture.

Il risultato atteso sara':

$magikarp = new Fish();
//Nel terminale visaulizzerete:
Sono un animale Vertebrato
Sono un animale a Sangue Freddo
Splash!
*/


class Vertebrates
{
  public function __construct(){

    $this->printVertebrate();

  } 

  protected function printVertebrate(){

    echo "Sono un animale Vertebrato\n";

  }
}

class WarmBlooded extends Vertebrates{

  public function __construct(){

    parent::__construct();
    $this->printWarmBlooded();

  } 

  protected function printWarmBlooded(){

    echo "Sono un animale a Sangue Caldo\n";

  }

} 

class ColdBlooded extends Vertebrates{

  public function __construct(){

    parent::__construct();
    $this->printColdBlooded();

  } 

  protected function printColdBlooded(){

    echo "Sono un animale a Sangue Freddo\n";

  }

} 

class Mammals extends WarmBlooded{

  public function __construct(){

    parent::__construct();
    $this->printMammals();

  } 

  protected function printMammals(){

    echo "Roaaarr!!!";

  }


}

class Birds extends WarmBlooded{

  public function __construct(){

    parent::__construct();
    $this->printBirds();

  } 

  protected function printBirds(){

    echo "Cip-Cip!!!";

  }

}

class Fish extends ColdBlooded{

  public function __construct(){

    parent::__construct();
    $this->printFish();

  } 

  protected function printFish(){

    echo "Splash!";

  }

}

class Reptiles extends ColdBlooded{

  public function __construct(){

    parent::__construct();
    $this->printReptiles();


  } 

  protected function printReptiles(){

    echo "Ssshhhh!";

  }

}

class Amphibians extends ColdBlooded{

  public function __construct(){

    parent::__construct();
    $this->printAmphibians();

  } 

  protected function printAmphibians(){

    echo "Cra-Cra!";

  }


}



$magikarp = new Fish();

?>