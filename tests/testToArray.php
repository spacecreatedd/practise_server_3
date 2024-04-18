<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class testToArray extends TestCase
{
    protected $collection;

    protected function setUp(): void
    {
        $this->collection = new Collect([1, 2, 3, 4, 5]);
    }

    public function testToArray()
    {
        $array = $this->collection->toArray();
        $expected = [1, 2, 3, 4, 5];
        $this->assertEquals($expected, $array);

        $emptyCollection = new Collect();
        $emptyArray = $emptyCollection->toArray();
        $this->assertEquals([], $emptyArray);
    }
}