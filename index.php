<?php
class QuadraticEquation
{
  private $a;
  private $b;
  private $c;

  public function __construct($a, $b, $c)
  {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
  }

  public function getA()
  {
    return $this->a;
  }

  public function getB()
  {
    return $this->b;
  }

  public function getC()
  {
    return $this->c;
  }

  public function getDiscriminant()
  {
    return pow($this->b, 2) - 4 * $this->a * $this->c;
  }

  public function getRoot1()
  {
    return (-$this->b + pow($this->getDiscriminant(), 0.5)) / (2 * $this->a);
  }

  public function getRoot2()
  {
    return (-$this->b - pow($this->getDiscriminant(), 0.5)) / (2 * $this->a);
  }
}

$quadratic = new QuadraticEquation(2, 3, 4);
$discriminant = $quadratic->getDiscriminant();

if ($discriminant > 0) {
  echo $quadratic->getRoot1() . " and " . $quadratic->getRoot2();
} elseif ($discriminant == 0) {
  echo $quadratic->getRoot1();
} else {
  echo "The equation has no roots.";
}
