<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class testOnly extends TestCase
{
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
}