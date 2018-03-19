<?php

/**
* Class Initial in project
*/
class HelloWorld
{	
	function __construct($argument)
	{
		return $this->test(); 
	}

	function test(){
		return "ABCD";
	}
}

$helloWorld = new HelloWorld("Hello World");
echo $helloWorld;
