<?php
    class ScrabbleGenerator
    {
        function calculateScore($user_word) {

            $masterKey = array(1 => ['A', 'E', 'I', 'O', 'U', 'L', 'N', 'R', 'S', 'T'],
                               2 => ['D', 'G'],
                               3 => ['B', 'C', 'M', 'P'],
                               4 => ['F', 'H', 'V', 'W', 'Y'],
                               5 => ['K'],
                               8 => ['J', 'X'],
                               10 => ['Q', 'Z']);

            $calculatedScore = 0;


            //format user input before calculations
            $user_word = strtoupper($user_word);
            $user_letters = str_split($user_word);

            foreach($user_letters as $user_letter) {
                foreach($masterKey as $score => $letter_values)
                    if (in_array($user_letter, $letter_values)) {
                        $calculatedScore = $calculatedScore + $score;
                    } 
            }
            return $calculatedScore;
        }
    }
?>
