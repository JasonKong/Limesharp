<?php

/**
 * Limesharp Developer Test
 *
 * Author: Jason Kong
 *
 * Class LimesharpTask
 */
class LimesharpTask {

    /**
     * Task1:
     * repeat multiple times (default 3 times) the contents of an array
     *
     * Example:
     *     input : [1,2,3]
     *     output: [1,2,3,1,2,3,1,2,3]
     *
     * @param array $arr
     * @param int $repeat_times
     * @return array
     */
    public static function repeat(array $arr, $repeat_times = 3) {
        $result = [];

        for($i = 0; $i < $repeat_times; $i++) {
            $result = array_merge($result, $arr);
        }

        return $result;
    }

    /**
     * Task2
     * format string with the restriction below
     * no vowels, lowercase except the first letter
     *
     * Example:
     *     input : 'liMeSHArp DeveLoper TEST'
     *     output: 'Lmshrp dvlpr tst'
     *
     * @param $str
     * @return string
     */
    public static function reformat($str) {

        $vowels = ['a', 'e', 'i', 'o', 'u'];

        $converted_str = ucfirst(str_replace($vowels, '', strtolower($str)));

        return $converted_str;
    }

    /**
     * Task3(optional)
     * get the next binary number
     * restriction:
     *      without using any built in functions, only a for loop
     *
     * @param string a string of binary number
     * @return string the next binary number of the input
     */
    public static function next_binary_number1($arr) {

        $length = count($arr);

        if ($length < 1) return 'Invalid binary number';

        for ($i = $length - 1; $i >= 0; $i--) {

            if ($arr[$i] !== 0 && $arr[$i] !== 1) return 'Invalid binary number';

            // if '0' is encountered, convert it to '1' and then break
            if ($arr[$i] === 0) {
                $arr[$i] = 1;
                break;
            } else {
                // else convert '1' to '0'
                $arr[$i] = 0;
            }
        }

        // if there is no '0' is encountered, add the carry 1 to the top of $arr
        if ($i < 0) {
            array_unshift($arr, 1);
        }

        return $arr;
    }

    public static function next_binary_number2($str) {

        $length = strlen($str);

        if ($length < 1) return 'Invalid binary number';

        for ($i = $length - 1; $i >= 0; $i--) {

            if ($str[$i] !== '0' && $str[$i] !== '1') return 'Invalid binary number';

            // if '0' is encountered, convert it to '1' and then break
            if ($str[$i] === '0') {
                $str[$i] = '1';
                break;
            } else {
                // else convert '1' to '0'
                $str[$i] = '0';
            }
        }

        // if there is no '0' is encountered, add the carry '1' to the front of $str
        if ($i < 0) {
            $str = 1 . $str;
        }

        return $str;
    }
}
