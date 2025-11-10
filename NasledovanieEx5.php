<?php
class Animal {
    public function breathe() {}
    public function eat() {}
}
class Fish extends Animal {
    public function swim() {}
}
class Bird extends Animal {
    public function lay_eggs() {}
}
class FlyingBird extends Bird {
    public function fly() {}
}
?>