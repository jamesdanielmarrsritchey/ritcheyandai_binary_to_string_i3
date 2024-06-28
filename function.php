<?php
function binaryToString($binaryString, $delimiter = ',') {
    // Replace special delimiter characters with their actual meaning
    if ($delimiter === "\\n") {
        $delimiter = PHP_EOL;
    } elseif ($delimiter === "\\t") {
        $delimiter = "\t";
    }

    // Split the binary string into an array of bytes based on the delimiter
    $binaryArray = explode($delimiter, $binaryString);

    // Initialize the result string
    $resultString = '';

    // Iterate over each binary byte
    foreach ($binaryArray as $binaryByte) {
        // Check if the binary byte is exactly 8 characters long
        if (strlen($binaryByte) != 8) {
            // Return FALSE if any binary byte is not 8 characters long
            return false;
        }

        // Convert the binary byte to a character and append it to the result string
        $resultString .= chr(bindec($binaryByte));
    }

    // Return the result string
    return $resultString;
}
?>