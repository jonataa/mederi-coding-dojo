<?php

namespace App;

class BuracoLetras
{

  protected static $mapper = [
    0 => ['C', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'S', 'T', 'U', 'V', 'Y', 'W', 'X', 'Z'],
    1 => ['A', 'D', 'O', 'P', 'Q', 'R'],
    2 => ['B'],
  ];

  public function count($str)
  {
    $str   = strtoupper($str);
    $count = 0;

    for ($i = 0; $i < strlen($str); $i++)      
      foreach (self::$mapper as $qtd => $letras)
        $count += $this->exists($str[$i], $letras) ? $qtd : 0;

    return $count;
  }  

  public function exists($letra, $letras)
  {
    return in_array($letra, $letras) !== false;
  }

}