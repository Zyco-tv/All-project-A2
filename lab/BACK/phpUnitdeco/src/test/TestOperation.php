<?php

namespace Operation\test;

use PHPUnit\Framework\TestCase;
use \Operation\Classes\Operation;


class OperationTest extends TestCase{
    public function testAddition(){
        $operation = new Operation();
        $result = $operation->addition(1,3);

        $this->assertEquals(4, $result);

    }
    public function testSoustraction(){
        $operation = new Operation();
        $result = $operation->soustraction(2,2);

        $this->assertEquals(0, $result);

    }
    public function testMultiplication(){
        $operation = new Operation();
        $result = $operation->multiplication(2,2);

        $this->assertEquals(4, $result);

    }
    public function testDivision(){
        $operation = new Operation();
        $result = $operation->division(2,2);

        $this->assertEquals(1, $result);

    }
    

}