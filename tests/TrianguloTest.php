<?php


namespace Ejemplo;

use PHPUnit\Framework\TestCase;

class TrianguloTest extends TestCase {


  public function testArea() {
    $triangulo = new Triangulo(4, 11);
    $this->assertEquals($triangulo->area(), 11);

  }

}
