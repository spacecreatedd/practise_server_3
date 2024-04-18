<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class CollectTest extends TestCase
{
    protected $collection;

    protected function setUp(): void
    {
        $this->collection = new Collect([1, 2, 3, 4, 5]);
    }

    public function testOnly()
    {
        $collection = new Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        
        $only = $collection->only('a')->toArray();
        $expected = ['a' => 1];
        $this->assertEquals($expected, $only);

        $only = $collection->only(['a', 'c'])->toArray();
        $expected = ['a' => 1, 'c' => 3];
        $this->assertEquals($expected, $only);
    }

    public function testFirst()
    {
        $value = $this->collection->first();
        $this->assertEquals(1, $value);
    }

    public function testCount()
    {
        $count = $this->collection->count();
        $this->assertEquals(5, $count);

        $emptyCollection = new Collect();
        $emptyCount = $emptyCollection->count();
        $this->assertEquals(0, $emptyCount);
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