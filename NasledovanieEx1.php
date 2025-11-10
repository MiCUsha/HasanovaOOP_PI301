<?php
class BaseObject {
    protected $x;
    protected $y;
    protected $z;
    public function __construct($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function get_coordinates() {
        return [$this->x, $this->y, $this->z];
    }
}
class Block extends BaseObject {
    public function shatter() {
        $this->x = null;
        $this->y = null;
        $this->z = null;
    }
}
class Entity extends BaseObject {
    public function move($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
}
class Thing extends BaseObject {}
?>