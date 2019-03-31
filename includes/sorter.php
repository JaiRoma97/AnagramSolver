<?php
//Sorts characters
class Sorter
{
    public function sortAnagram($word)
    {
        //Creates a character array with the word, sorts it alphabetically, joins the characters into
        //a word and returns the the result
        $splitWord = str_split($word);
        sort($splitWord);
        return trim(implode($splitWord), '\' ');
    }
}
