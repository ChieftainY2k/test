<?php
/**
 * test the Json service
 */


use PHPUnit_Framework_TestCase as TestCase;

class MyTest extends TestCase
{

    /**
     * setup object
     */
    protected function setUp()
    {

    }

    /**
     * my fake test
     *
     */
    public function testSomething()
    {
        //$this->assertEmpty(true);
        $this->assertTrue(true);
    }


    /**
     * my fake test that fails
     *
     */
    public function testSomethingThatFails()
    {
        $this->assertTrue(true);
    }


}