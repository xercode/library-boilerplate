<?php

namespace xeBook\LibraryBoilerplate\Tests;

use PHPUnit\Framework\TestCase;
use xeBook\LibraryBoilerplate\Dummy;

final class DummyTest extends TestCase
{
    public function test_dummy_method()
    {
        $dummy = new Dummy();
        $this->assertFalse($dummy->dummyMethod([]));
    }
}
