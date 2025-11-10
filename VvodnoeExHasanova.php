<?php

class LittleBell {
    public function sound() {
        echo "ding";
    }
}

$bell = new LittleBell();
$bell->sound();

?>