<?php

echo "Hello World!";

/**
* Class Initial in project
*/
class HelloWorld extends BaseClass
{	
	function __construct(argument)
	{
		echo argument;
	}
}

new HelloWorld("Hello World");
