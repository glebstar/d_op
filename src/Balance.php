<?php

namespace Src;

class Balance
{
    /**
     * Списывает баланс
     *
     * @param string $currentBalance
     * @param string $writeOffAmount
     * @param int $precision
     * @return string
     */
    public function writeOff(string $currentBalance, string $writeOffAmount, int $precision = 8): string
    {
        return $this->getRounded($currentBalance - $writeOffAmount, $precision);
    }

    /**
     * Зачисляет баланс
     *
     * @param string $currentBalance
     * @param string $credit
     * @param int $precision
     * @return string
     */
    public function credit(string $currentBalance, string $credit, int $precision = 8): string
    {
        return $this->getRounded($currentBalance + $credit, $precision);
    }

    /**
     * Дополняет число нулями
     *
     * @param string $newBalance
     * @param int $precision
     * @return string
     */
    private function getRounded(string $newBalance, int $precision): string
    {
        preg_match('/^(\d+)(\.)/', $newBalance, $matches);

        return str_pad($newBalance, ($precision + strlen($matches[0])), "0", STR_PAD_RIGHT);
    }
}
