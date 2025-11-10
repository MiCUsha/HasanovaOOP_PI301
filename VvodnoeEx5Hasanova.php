<?php
class BigBell {
    private $is_ding;
    
    public function __construct() {
        $this->is_ding = true;
    }
    public function sound() {
        if ($this->is_ding) {
            echo "ding\n";
        } else {
            echo "dong\n";
        }
        $this->is_ding = !$this->is_ding;
    }
}
$bell = new BigBell();
$bell->sound();
$bell->sound();
$bell->sound();
?>