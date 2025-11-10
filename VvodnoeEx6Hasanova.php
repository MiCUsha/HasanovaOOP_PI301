<?php
class MinMaxWordFinder
{
    private $allWords;
    private $wordLengths;
    public function __construct()
    {
        $this->allWords = [];
        $this->wordLengths = [];
    }
    public function add_sentence($sentence)
    {
        $words = preg_split('/\s+/', trim($sentence));
        foreach ($words as $word) {
            if (!empty($word)) {
                $this->allWords[] = $word;
                $length = strlen($word);
                $this->wordLengths[$length][] = $word;
            }
        }
    }
    public function shortest_words()
    {
        if (empty($this->wordLengths)) {
            return [];
        }
        $minLength = min(array_keys($this->wordLengths));
        $shortestWords = $this->wordLengths[$minLength];
        sort($shortestWords);
        return $shortestWords;
    }
    public function longest_words()
    {
        if (empty($this->wordLengths)) {
            return [];
        }
        $maxLength = max(array_keys($this->wordLengths));
        $longestWords = $this->wordLengths[$maxLength];
        $uniqueWords = array_unique($longestWords);
        sort($uniqueWords);
        return array_values($uniqueWords);
    }
}
$finder1 = new MinMaxWordFinder();
$finder1->add_sentence('hello abc world');
$finder1->add_sentence('def asdf qwert');
echo implode(' ', $finder1->shortest_words()) . "\n";
echo implode(' ', $finder1->longest_words()) . "\n\n";
$finder2 = new MinMaxWordFinder();
$finder2->add_sentence('hello');
$finder2->add_sentence('abc');
$finder2->add_sentence('world');
$finder2->add_sentence('def');
$finder2->add_sentence('asdf');
$finder2->add_sentence('qwert');
echo implode(' ', $finder2->shortest_words()) . "\n";
echo implode(' ', $finder2->longest_words()) . "\n";
?>