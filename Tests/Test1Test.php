<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Razvan\App;

class Test1Test extends TestCase {
    public function test()
    {
        $app = new App();
        $this->assertEquals(1, $app->init());
    }
}