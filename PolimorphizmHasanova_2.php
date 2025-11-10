<?php
class LeftParagraph {
    private $width;
    private $current_line;
    public function __construct($width) {
        $this->width = $width;
        $this->current_line = '';
    }
    public function add_word($word) {
        if ($this->current_line === '') {
            $this->current_line = $word;
        } 
        elseif (strlen($this->current_line) + 1 + strlen($word) <= $this->width) {
            $this->current_line .= ' ' . $word;
        } 
        else {
            echo $this->current_line . "\n";
            $this->current_line = $word;
        }
    }
    public function end() {
        if ($this->current_line !== '') {
            echo $this->current_line . "\n";
            $this->current_line = '';
        }
    }
}
class RightParagraph {
    private $width;
    private $current_line;
    public function __construct($width) {
        $this->width = $width;
        $this->current_line = '';
    }
    public function add_word($word) {
        if ($this->current_line === '') {
            $this->current_line = $word;
        } 
        elseif (strlen($this->current_line) + 1 + strlen($word) <= $this->width) {
            $this->current_line .= ' ' . $word;
        } 
        else {
            echo str_pad($this->current_line, $this->width, ' ', STR_PAD_LEFT) . "\n";
            $this->current_line = $word;
        }
    }
    public function end() {
        if ($this->current_line !== '') {
            echo str_pad($this->current_line, $this->width, ' ', STR_PAD_LEFT) . "\n";
            $this->current_line = '';
        }
    }
}
$lp = new LeftParagraph(8);
$lp->add_word('abc');
$lp->add_word('defg');
$lp->add_word('hi');
$lp->add_word('jklmnopq');
$lp->add_word('r');
$lp->add_word('stuv');
$lp->end();
echo "\n";
$rp = new RightParagraph(8);
$rp->add_word('abc');
$rp->add_word('defg');
$rp->add_word('hi');
$rp->add_word('jklmnopq');
$rp->add_word('r');
$rp->add_word('stuv');
$rp->end();
?>