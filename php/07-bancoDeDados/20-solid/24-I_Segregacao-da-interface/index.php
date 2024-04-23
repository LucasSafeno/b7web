<?php
interface Aves
{
  public function setLocation($lat, $lng);
  public function render();
}

interface AvesQueVoarm extends Aves
{
  public function setAltitude($alt);
}

class Papagaio implements AvesQueVoarm
{
  public function setLocation($lat, $lng)
  {
  }
  public function setAltitude($alt)
  {
  }
  public function render()
  {
  }
}

class Pinguin implements Aves
{
  public function setLocation($lat, $lng)
  {
  }
  public function render()
  {
  }
}
