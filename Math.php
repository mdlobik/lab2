<?php
/**
 * This class provides some crucial math operations for our application.
 *
 * @author		ACME Development
 * @version		1.0
 */

class Math {

	// some useless constants
	public const PI = 3.14;
	public const ZERO = 0;

	/**
	 * Returns the sum of two numbers
	 *
	 * @param float $a
	 * @param float $b
	 * @return float
	 */

	 // this is a function for adding
	public static function add($num1, $num2){
		$sum = $num1 + $num2;
		return $sum;
	}

	// this is a function for sub'ing
	public static funtion subtract($num1, $num2){
		$sum = $num1 - $num2;
		return $sum;
	}
	// this does even less
	public static function doLiterallyNothing($num1, $num2) {
		return "I do literally nothing.";
	}

// this does nothing
	public static function doNothing($num1, $num2) {
	    return "it's ya boi";
    }


		// this is a function for multipling
		public static funtion multiply($num1, $num2){
			$sum = $num1 * $num2;
			return $sum;
		}

		public static function cool($num1, $num2) {
		    return "this is a cool function!";
	    }

        public static function sam($num1, $num2) {
	    return 'sam';
}

public static function bruh($num1) {
	    return 'bruh';
}
}
