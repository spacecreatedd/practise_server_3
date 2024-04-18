<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class TestFirst extends TestCase
{
    protected $collection;

    protected function setUp(): void
    {
        $this->collection = new Collect([1, 2, 3, 4, 5]);
    }

    public function testFirst()
    {
        $value = $this->collection->first();
        $this->assertEquals(1, $value);
    }
}