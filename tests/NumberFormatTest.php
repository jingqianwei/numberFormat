<?php


/**
 * Created by PhpStorm.
 * User: chinwe.jing
 * Date: 2019/10/8
 * Time: 15:10
 */


use PHPUnit\Framework\TestCase;

class NumberFormatTest extends TestCase
{
    public function testNumber()
    {
        $num = 10240000;
        $this->assertEquals('9.8 MB', \numberFormat\NumberFormat::byteFormat($num));
    }
}