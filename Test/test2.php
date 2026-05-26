<?php

class Calculator
{
    public $result = 0;
    private $history = [];

    public function add(int $num)
    {
        $this->history[] = $this->result;
        $this->result += $num;
        return $this;
    }
    public function sub(int $num)
    {
        $this->history[] = $this->result;
        $this->result -= $num;
        return $this;
    }
    public function div(int $num)
    {
        if ($num === 0) {
            throw new Exception("Упс! На ноль делить нельзя!");
        }
        $this->history[] = $this->result;
        $this->result /= $num;
        return $this;
    }
    public function rollback()
    {
        if (empty($this->history)) {
            throw new Exception("Некуда откатываться!");
        }
        $this->result = array_pop($this->history);
        return $this;
    }
}

$calc = new Calculator;

echo $calc->add(10)->sub(3)->div(1)->rollback()->result;
