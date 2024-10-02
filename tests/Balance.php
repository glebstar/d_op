<?php

namespace Tests;

use Src\Balance as SrcBalance;
use PHPUnit\Framework\TestCase;

class Balance extends TestCase
{
    public function testBalance(): void
    {
        $balance = new SrcBalance;

        // списание баланса
        $this->assertTrue($balance->writeOff('10.52000000', '5.31000000') === '5.21000000');
        $this->assertTrue($balance->writeOff('23232323.2323', '1212.12') === '23231111.11230000');

        // зачисление баланса
        $this->assertTrue($balance->credit('5.31000000', '5.21000000') === '10.52000000');
        $this->assertTrue($balance->credit('56565656.45454500', '2323.12000000') === '56567979.57454500');
    }
}
