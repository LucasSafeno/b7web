<?php
class Calculadora
{
  public int $n = 0;

  public function add($n)
  {
    return $this->n += $n;
  }

  public function sub($n)
  {
    return $this->n -= $n;
  }

  public function multiply($n)
  {
    return $this->n *= $n;
  }

  public function divide($n)
  {
    return $this->n /= $n;
  }

  public function total()
  {
    return $this->n;
  }

  public function clear()
  {
    $this->n = 0;
  }
}
