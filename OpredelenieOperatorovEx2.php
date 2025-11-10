<?php
class ReversedList implements ArrayAccess, Countable
{
    private $data;
    public function __construct($array)
    {
        $this->data = array_reverse($array);
    }
    public function offsetExists($offset): bool
    {
        return isset($this->data[$offset]);
    }
    public function offsetGet($offset)
    {
        return $this->data[$offset];
    }
    public function offsetSet($offset, $value): void
    {
        $this->data[$offset] = $value;
    }
    public function offsetUnset($offset): void
    {
        unset($this->data[$offset]);
    }
    
    public function count(): int
    {
        return count($this->data);
    }
}
$rl = new ReversedList([10, 20, 30]);
for ($i = 0; $i < count($rl); $i++) {
    echo $rl[$i] . "\n";
}
?>
