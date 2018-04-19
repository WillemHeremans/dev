<?php

class RPN
{
    public static $pattern;
    
    public static function Calculate($pattern)
    {
        
        self::$pattern = $pattern;
        $numbers = array();
        $pattern_array = explode(' ', str_replace("  ", " ", trim(self::$pattern)));
        $acceptable_operators = array("+", "-", "/", "*", "sqrt");
        $calculationResult='';
        if (count($pattern_array) == 1)
            return 'RPN::Calculate() requires more than 2 characters.';
        elseif ( !in_array(end($pattern_array), $acceptable_operators) )
            return 'RPN::Calculate() requires the last character to be an operator';
        foreach ($pattern_array as $value) {
            if (is_numeric($value)) {
                $numbers[] = $value;
            } elseif (in_array($value, $acceptable_operators)) {
                $first_number = array_pop($numbers);
                $second_number = array_pop($numbers);
                switch ($value) {
                    case '+':
                        $calculationResult = $second_number + $first_number;
                        break;
                    case '-':
                        $calculationResult = $second_number - $first_number;
                        break;
                    case '/':
                        $calculationResult = $second_number / $first_number;
                        break;
                    case '*':
                        $calculationResult = $second_number * $first_number;
                        break;
                    case 'sqrt':
                        $calculationResult = sqrt($calculationResult);
                        break;
                }
                array_push($numbers, $calculationResult);
            } else {
                return 'RPN::Calculate() found an invalid character of '.$value . '. This character is not allowed.';
            }
        }
        return $calculationResult;
    }
}


?>
