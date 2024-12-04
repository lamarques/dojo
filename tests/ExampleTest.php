<?php

namespace Dojo\Tests;

use Dojo\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testSum()
    {
        $example = new Example();
        $this->assertEquals(5, $example->sum(2, 3));
    }
}
