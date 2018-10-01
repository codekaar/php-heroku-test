<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function test_name()
    {
        $sample = new Sample();
        $this->assertEquals('name', $sample->getName());
    }
}
