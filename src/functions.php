<?php


function task1($array, $mark=false)
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