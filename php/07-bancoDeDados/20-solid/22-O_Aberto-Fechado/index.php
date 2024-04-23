<?php
interface Remuneravel
{
  public function remuneracao();
}
class ContratoClt implements Remuneravel
{
  public function remuneracao()
  {
  }
} // ContratoClt
class Estagio implements Remuneravel
{
  public function remuneracao()
  {
  }
} // Estagio

class ContratoPj implements Remuneravel
{
  public function remuneracao()
  {
  }
} // ContratoPj

class ContratoInternacional implements Remuneravel
{
  public function remuneracao()
  {
  }
} // ContratoInternacional

class FolhaDePagamento
{
  public function calcular(Remuneravel $funcionario)
  {
    $salario = 0;

    if ($funcionario instanceof ContratoClt) {
      return $funcionario->remuneracao();
    }
  }
} // FolhaDePagamento
