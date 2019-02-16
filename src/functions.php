<?php
/**
 * Generic_Sniffs_Methods_OpeningMethodBraceBsdAllmanSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Alexander Velichko <alvi@mail.ua>
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   CVS: $Id: OpeningFunctionBraceBsdAllmanSniff.php,v 1.8
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */


CONST TEST_CONSTANTA = 'asd';
$user_name = 'Igor';

/**
 * Description.
 *
 * @param array $array array of string
 * @param bool  $mark  check for returning
 *
 * @return string
 */
function task1($array, $mark = false)
{
    if (!empty($array)) {
        $string = '';
        foreach ($array as $item) {
            $string .= '<p>' . $item . '</p>';
        }
        if ($mark) {
            return $string;
        }
        echo $string;
    }
}

/**
 * Description.
 *
 * @return void
 */
function task2()
{
    $numbers = func_get_args();
    $firstString = array_shift($numbers);
    if ($firstString) {
        switch ($firstString) {
        case '+':
            echo array_reduce(
                $numbers, function ($carry, $item) {
                    $carry += $item;
                    return $carry;
                }
            );
            break;
        case '-':
            echo array_reduce(
                $numbers, function ($carry, $item) {
                        $carry -= $item;
                        return $carry;
                }
            );
            break;
        default:
            echo 'Неверные параметры!';
            break;
        }

    }
}
