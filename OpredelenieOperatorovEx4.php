<?php
class Date
{
    private $month;
    private $day;
    public function __construct($month, $day) {
        $this->month = $month;
        $this->day = $day;
    }
    public function __invoke($other) {
        $days1 = $this->toDays();
        $days2 = $other->toDays();
        return $days1 - $days2;
    }
    private function toDays() {
        $monthDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        $days = 0;
        for ($i = 0; $i < $this->month - 1; $i++) {
            $days += $monthDays[$i];
        }
        return $days + $this->day;
    }
}
$jan5 = new Date(1, 5);
$jan1 = new Date(1, 1);
echo ($jan5)($jan1) . "\n";
echo ($jan1)($jan5) . "\n";
echo ($jan1)($jan1) . "\n";
echo ($jan5)($jan5) . "\n";
?>