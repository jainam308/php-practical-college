<?php
echo "<h1>Doshi yug (216090307028)</h1>";
	// Define an   of Morse code mappings
	$morseCode = array(
		'A' => '.-', 'B' => '-...', 'C' => '-.-.', 'D' => '-..', 'E' => '.', 'F' => '..-.', 'G' => '--.', 'H' => '....',
		'I' => '..', 'J' => '.---', 'K' => '-.-', 'L' => '.-..', 'M' => '--', 'N' => '-.', 'O' => '---', 'P' => '.--.',
		'Q' => '--.-', 'R' => '.-.', 'S' => '...', 'T' => '-', 'U' => '..-', 'V' => '...-', 'W' => '.--', 'X' => '-..-',
		'Y' => '-.--', 'Z' => '--..', '0' => '-----', '1' => '.----', '2' => '..---', '3' => '...--', '4' => '....-',
		'5' => '.....', '6' => '-....', '7' => '--...', '8' => '---..', '9' => '----.'
	);

	// Define a sample message
	$message = "HELLO World";

	// Convert the message to uppercase and split it into an array of characters
	$characters = str_split(strtoupper($message));

	// Initialize a variable to hold the encoded message
	$encodedMessage = "";

	// Loop through the characters in the message
	foreach ($characters as $char) {

		// If the character is a space, add a space to the encoded message
		if ($char === " ") {
			$encodedMessage .= " ";
		} else {
			// Otherwise, look up the Morse code mapping for the character and add it to the encoded message
			$encodedMessage .= $morseCode[$char] . " ";
		}
	}

	// Display the encoded message
	echo "The encoded message is: " . $encodedMessage;
?>