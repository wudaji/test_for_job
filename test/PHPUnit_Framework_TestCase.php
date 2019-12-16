<?php
namespace PHPUnit_Framework_TestCase;
abstract class PHPUnit_Framework_TestCase 
{
    public $greeter;
  
    public function __construct()
    {
        $this->setUp();
    }

    abstract function setUp();

    abstract function test_Instance();

    abstract function test_getGreeting();

    public function assertEquals($greeter,$class_name)
    {
        if($greeter != $class_name)
        {
            return "test_Instance is fail";
        } 
        else 
        {
            return "test_Instance is success";
        }
    }

    public function assertTrue($bool)
    {
       if(!$bool)
       {
           return "test_getGreeting is fail";
       }
       else
       {
           return "test_getGreeting is success";
       }
    }

}