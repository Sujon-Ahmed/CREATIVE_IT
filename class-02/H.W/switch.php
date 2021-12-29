<?php
// TODO -> Check $letter = vowel or constant
// type your letter
$letter = 'A';
// convert characters to uppercase
$convert_uppercase = strtoupper($letter);
$emoji_vowel = "😀";
$emoji_constant = "😕";
// switch statement for check vowel characters
switch($convert_uppercase) {
    case 'A':
        echo "A is Vowel $emoji_vowel";
        break;
    case 'E':
        echo "E is Vowel $emoji_vowel";
        break;
    case 'I':
        echo "I is Vowel $emoji_vowel";
        break;
    case 'O':
        echo "O is Vowel $emoji_vowel";
        break;
    case 'U':
        echo "U is Vowel $emoji_vowel";
        break;
    default:
        echo "$convert_uppercase is Constant $emoji_constant";
        break;
}


