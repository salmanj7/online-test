<?php
function compressString($str) {
    $base_word = '';
    $count = 0;
    $char = '';
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $char) {
            $count++;
        } else {
            if ($count > 0) {
                $base_word .= $char . $count;
            }
            $char = $str[$i];
            $count = 1;
        }
    }
    $base_word .= $char . $count;
    if (strlen($base_word) < strlen($str)) {
        return $base_word;
    } else {
        return $str; 
    }
}

// Test the function
$input = 'aabcccccaaa';
$output = compressString($input);
echo $output; // Output: a2b1c5a3
?>
