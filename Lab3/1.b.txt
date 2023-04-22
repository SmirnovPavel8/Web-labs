<?php
$string = "a1b2c3";

$regexp = "/[0-9]{1,}/";

function power($matches)
{
    return ($matches[0] ** 3);
}

echo preg_replace_callback($regexp, "power", $string);

?>