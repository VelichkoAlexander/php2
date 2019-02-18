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
/**
 * Description.
 *
 * @param array $strings array of string
 * @param bool  $glue    check for returning
 *
 * @return string
 */
function task1($strings, $glue = false)
{
    $row = [];
    if (!empty($strings)) {
        foreach ($strings as $string) {
            $row[] = '<p>' . $string . '</p>';
        }
    }
    if ($glue) {
        return implode(' ', $row);
    } else {
        echo implode('', $row);
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
    $valid_operator = ['+', '-', '/', '*'];
    $operator = array_shift($numbers);
    if ($operator && in_array($operator, $valid_operator)) {
        $row = implode($operator, $numbers);
        $answer = eval("return $row;");
        echo $row.'='. $answer;
    } else {
        echo 'Первым аргументом обязательно должна быть строка,
         обозначающая арифметическое действие!';
    }
}
/**
 * Description.
 *
 * @param number $number        Number for col
 * @param number $multiplicator Number for row
 *
 * @return void
 */
function task3($number, $multiplicator)
{
    if (!is_float($number) && !is_float($multiplicator)) {
        echo "<table border =\"1\" style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<td></td>";
        for ($col = 1; $col <= $number; $col++) {
            echo "<td>$col</td>";
        }
        echo "</tr>";
        for ($row = 1; $row <= $multiplicator; $row++) {
            echo "<tr>";
            echo "<td>$row</td>";
            for ($col = 1; $col <= $number; $col++) {
                $value_of_cell = $col * $row;
                echo "<td>$value_of_cell</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo 'Введите целые числа';
    }
}
/**
 * Description.
 *
 * @return void
 */
function task4()
{
    echo 'Текущаяя дата: ' . date('d.m.Y G:i') . '<br>';
    echo '24.02.2016 00:00:00 unixtime :  ' .
        mktime('00', '00', '00', '02', '24', '2016');
}
/**
 * Description.
 *
 * @return void
 */
function task5()
{
    $first_row = 'Карл у Клары украл Кораллы';
    $second_row = 'Две бутылки лимонада';
    echo str_replace('К', '', $first_row).'<br>';
    echo str_replace('Две', 'Три', $second_row).'<br>';
}
/**
 * Description.
 *
 * @return void
 */
function task6()
{
    $new_file = fopen("test.txt", "w");
    $file_content = 'Hello again!';
    fwrite($new_file, $file_content);
    fclose($new_file);
    getFileContetn('test.txt');
}
/**
 * Description.
 *
 * @param string $file_name File name for open
 *
 * @return void
 */
function getFileContetn($file_name)
{
    if ($file_content = file_get_contents($file_name)) {
        echo $file_content;
    } else {
        echo 'Введите имя существующего файла.';
    }
}