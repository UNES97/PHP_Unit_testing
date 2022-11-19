<?php
namespace App\Unit;
use App\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase {
    public function testIfIncreaseQuantityWorks()
    {
        $p = new Product('Mac Book' , '15');
        $p->increaseQuantity(2);
        $this->assertEquals(17 , $p->getQuantity());
    }

    public function testIfQuantityZeroOrLess() 
    {
        $p = new Product('Mac Book' , '15');
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Quantity Can not be 0 or less!');
        $p->increaseQuantity(0);
    }

    public function testDecraseQuantityWorks()
    {
        $p = new Product('DELL' , '5');
        $p->decreaseQuantity(2);
        $this->assertEquals(3 , $p->getQuantity());
    }

    /* TDD Test Driven Developement : Test Driven Development (TDD) is a programming practice that instructs developers to write new code only if an automated test has failed. */
    /* Test Only One Test -filter testFunctionName */
    public function testIfQuantityLessThanZeroMakeItZero()
    {
        $p = new Product('DELL' , '5');
        $p->decreaseQuantity(6);
        $this->assertEquals(0 , $p->getQuantity());
    }
}