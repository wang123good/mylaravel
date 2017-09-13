<?php
/**
 * Created by PhpStorm.
 * User: 10013463
 * Date: 2017/6/9
 * Time: 15:17
 */
$greet = function ($name) {
    return sprintf("Hello %s\r\n", $name);
};

echo $greet('LaravelAcademy.org');