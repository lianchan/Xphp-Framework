<?php

function post($name, $default = false, $fitt = false)
{
    if (isset($_POST[$name])) {
        if ($fitt) {
            switch ($fitt) {
                case 'int':
                    if (is_numeric($_POST[$name])) {
                        return $_POST[$name];
                    } else {
                        return $default;
                    }
                    break;
                default:
                    ;
            }
        } else {
            return $_POST[$name];
        }
    } else {
        return $default;
    }
}

function get($name, $default = false, $fitt = false)
{
    if (isset($_GET[$name])) {
        if ($fitt) {
            switch ($fitt) {
                case 'int':
                    if (is_numeric($_GET[$name])) {
                        return $_GET[$name];
                    } else {
                        return $default;
                    }
                    break;
                default:
                    ;
            }
        } else {
            return $_GET[$name];
        }
    } else {
        return $default;
    }
}

function xdump(...$argument): array
{
    var_dump($argument);
    exit(0);
}