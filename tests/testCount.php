<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class testCount extends TestCase
{
    protected $collection;

    protected function setUp(): void
    {
        $this->collection = new Collect([1, 2, 3, 4, 5]);
    }

    
    public function testCount()
    {
        $count = $this->collection->count();
        $this->assertEquals(5, $count);

        $emptyCollection = new Collect();
        $emptyCount = $emptyCollection->count();
        $this->assertEquals(0, $emptyCount);
    }
}