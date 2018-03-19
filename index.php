<?php

/**
* Class Initial in project
*/
class HelloWorld
{	
	function __construct($argument)
	{
		return $argument;
	}
}

$helloWorld = new HelloWorld("Hello World");
echo $helloWorld;
