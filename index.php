<?php
$character = '?';
function nextChar ($char) {
    $nextCharacter = 'undefined';
    $charAsc = ord($char);
    if ($charAsc > 96  and $charAsc < 122) 
    {
        $nextCharacter = chr($charAsc + 1);
    }
    elseif ($charAsc == 122)
    {
        $nextCharacter = chr($charAsc - 25);
    }
    if ($charAsc > 64  and $charAsc < 90) 
    {
        $nextCharacter = chr($charAsc + 1);
    }
    elseif ($charAsc == 90)
    {
        $nextCharacter = chr($charAsc - 25);
    }
    echo 'The Output : '.$nextCharacter.'<br>';
}


nextChar($character);


$input =  'www.example.com/public_html/index.php';
function fileName($string) {
    $extens = explode('/', $string);
    echo 'The Output: '.$extens[count($extens) - 1];
}
fileName($input);



?>