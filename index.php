<?php

/**
* Class Initial in project
*/
class HelloWorld
{	
	function __construct($argument)
	{
		$this->show($argument);
	}
	
	function show($message){
		if(empty($message)){
			echo "Mensagem Padrão!";	
		}
		echo $message;
	}
}

new HelloWorld("Hello World");

