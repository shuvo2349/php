<?php
//phpinfo();
// Declariation of a class:
class User{
			var $name = "FTFL";
			var $email = "";
			
			function getName(){
				return "FTFL2";
			}
}
 $user = new User();
//Instentiate a object from a class

//var_dump($user);
echo $user->name;
echo $user->getName();


