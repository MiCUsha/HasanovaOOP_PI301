<?php
class LivingBeing {
    protected $name;
    public function __construct($name = "") {
        $this->name = $name;
    }
    public function get_name() {
        return $this->name;
    }
}
class Acellularia extends LivingBeing {
    public function __construct($name = "") {
        parent::__construct($name);
    }
}
class Cellularia extends LivingBeing {
    public function __construct($name = "") {
        parent::__construct($name);
    }
}
class Prokaryota extends Cellularia {
    public function __construct($name = "") {
        parent::__construct($name);
    }
}
class Eukaryota extends Cellularia {
    public function __construct($name = "") {
        parent::__construct($name);
    }
}
class Unicellularia extends Eukaryota {
    public function __construct($name = "") {
        parent::__construct($name);
    }
}
class Fungi extends Eukaryota {
    public function __construct($name = "") {
        parent::__construct($name);
    }
}
class Plantae extends Eukaryota {
    public function __construct($name = "") {
        parent::__construct($name);
    }
}
class Animalia extends Eukaryota {
    public function __construct($name = "") {
        parent::__construct($name);
    }
}

$virus = new Acellularia("Virus");
$bacteria = new Prokaryota("Bacteria");
$amoeba = new Unicellularia("Amoeba");
$mushroom = new Fungi("Mushroom");
$oak = new Plantae("Oak");
$human = new Animalia("Human");

echo $virus->get_name() . " belongs to Acellularia\n";
echo $bacteria->get_name() . " belongs to Prokaryota\n";
echo $amoeba->get_name() . " belongs to Unicellularia\n";
echo $mushroom->get_name() . " belongs to Fungi\n";
echo $oak->get_name() . " belongs to Plantae\n";
echo $human->get_name() . " belongs to Animalia\n";
?>