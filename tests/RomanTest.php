<?php

namespace Tests;

use MichaelKing0\RomanNumerals\Roman;

class RomanTest extends \PHPUnit_Framework_TestCase
{
    public function testGetGroup()
    {
        $this->assertEquals('IV', (new Roman('I'))->getGroup('IV'));
        $this->assertEquals('V', (new Roman('I'))->getGroup('VI'));
        $this->assertEquals('_C_M', (new Roman('I'))->getGroup('_C_MXI'));
        $this->assertEquals('_D_C_C_C_X_C_V', (new Roman('I'))->getGroup('_D_C_C_C_X_C_VM_VCMXCIX'));
    }

    public function testParse()
    {
        $this->assertEquals(1, (new Roman('I'))->parse()->getDecimal());
        $this->assertEquals(4, (new Roman('IV'))->parse()->getDecimal());
        $this->assertEquals(20, (new Roman('XX'))->parse()->getDecimal());
        $this->assertEquals(1991, (new Roman('MCMXCI'))->parse()->getDecimal());
        $this->assertEquals(899999, (new Roman('_D_C_C_C_X_C_VM_VCMXCIX'))->parse()->getDecimal());
    }
}