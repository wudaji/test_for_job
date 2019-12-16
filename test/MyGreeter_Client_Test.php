<?php
require_once "./PHPUnit_Framework_TestCase.php";
require_once "./MyGreeter/Client.php";
class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase\PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function test_Instance()
    {
        echo $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        echo $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }
}

$test = new MyGreeter_Client_Test();
$test->test_getGreeting();
echo "</br>";
$test->test_Instance();
echo "</br>";
echo $test->greeter->getGreeting();