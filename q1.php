<?php
function process_string($input_str, $n) {

    $processed_words = array();
    
    $words = explode(" ", $input_str);
    
    foreach ($words as $word) {
        $word = str_replace(array('+', '-'), '', $word);
        if (substr($word, 0, 1) === '+') {
            $processed_words[] = $word;
        } elseif (substr($word, 0, 1) === '-') {
            continue;
        } elseif (strlen($word) >= $n) {
            $processed_words[] = $word;
        }
    }
    $processed_str = implode(" ", $processed_words);
    
    return $processed_str;
}
$input_str = "apppple +banana -cherry orange +grape -watermelon";
$n = 6;
$result = process_string($input_str, $n);
echo $result;

?>
