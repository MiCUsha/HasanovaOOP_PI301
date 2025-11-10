<?php
class OddEvenSeparator
{
    private $numbers;
    private $evenNumbers;
    private $oddNumbers;
    public function __construct()
    {
        $this->numbers = [];
        $this->evenNumbers = [];
        $this->oddNumbers = [];
    }
    public function add_number($number)
    {
        $this->numbers[] = $number;
        if ($number % 2 == 0) {
            $this->evenNumbers[] = $number;
        } else {
            $this->oddNumbers[] = $number;
        }
    }
    public function even()
    {
        return $this->evenNumbers;
    }
    public function odd()
    {
        return $this->oddNumbers;
    }
}
$separator = new OddEvenSeparator();
$separator->add_number(1);
$separator->add_number(5);
$separator->add_number(6);
$separator->add_number(8);
$separator->add_number(3);
echo implode(' ', $separator->even()) . "\n";
echo implode(' ', $separator->odd()) . "\n";
?>