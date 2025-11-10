<?php
class Button {
    private $count;
    public function __construct() {
        $this->count = 0;}
    public function click() {
        $this->count++;}
    public function click_count() {
        return $this->count;}
    public function reset() {
        $this->count = 0;}
}
$button = new Button();
$button->click();
$button->click();
echo $button->click_count() . "\n";
$button->click();
echo $button->click_count() . "\n";
?>