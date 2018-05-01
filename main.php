<?php

class Book {

	public static $name = 'Mohit';

	public static function author() {
		return "The author name is : ".self::$name;
	}

	public static function getAuthor() {
		echo static::author();
	}

}

class newBook extends Book {

	public static function author() {
		return "The authors name are: ".self::$name. " and Ritvik";
	}

}

Book::getAuthor();
echo "<br/>";
newBook::getAuthor();

//Output : The author name is : Mohit   The authors name are: Mohit and Ritvik
