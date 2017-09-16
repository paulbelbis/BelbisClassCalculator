<?php
class MyCalculator {
private $x;
private $y;

function __construct($x,$y){
    $this->x = $x;
    $this->y = $y;
}

public function addition() {
    return $this->x + $this->y;
}
public function subtraction() {
    return $this->x - $this->y;
}
public function multiplication() {
    return $this->x * $this->y;
}
public function division() {
    return $this->y / $this->y;
}
}
$mycalc = new MyCalculator(12, 6); 
echo $mycalc-> addition()."\n"; 
echo $mycalc-> multiplication()."\n";
echo $mycalc-> subtraction()."\n"; 
echo $mycalc-> division()."\n"; 
?>