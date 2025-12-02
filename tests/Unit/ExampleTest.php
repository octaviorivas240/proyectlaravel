<?php

namespace Tests\Unit;

use App\Http\Controllers\OperationsController;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_int_addition_result(): void
    {
        $controller = new OperationsController;

        $this->assertIsInt($controller->addition(a: 5, b: 6));
        $this->assertNotNull($controller->addition(a: 5, b: 6));

        $this->assertGreaterThan(minimum: 5, $controller->addition(a: 5, b: 6));
    }
}
