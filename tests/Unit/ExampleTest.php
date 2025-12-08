<?php

namespace Tests\Unit;

use App\Http\Controllers\OperationsController;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example 1.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_int_addition_result(): void
    {
        $controller = new OperationsController;

        $this->assertIsInt($controller->addition(5, 6));

        $this->assertNotNull($controller->addition(5, 6));

        $this->assertGreaterThan(5, $controller->addition(5, 6));
    }

    /**
     * Función de Mónica, calcular el IMC.
     */
    public function test_calcularIMC(): void
    {
        $controller = new OperationsController();

        $resultado = $controller->calcularIMC(62, 1.65);

        $this->assertEquals(22.86, $resultado['El IMC es: ']);
        $this->assertEquals('Normal', $resultado['Corresponde a la categoria:']);
    }
}
