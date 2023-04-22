<?php

$string = "'ahb acb aeb aeeb adcb axeb";

$regexp = "/a..b/";

$matches = array();

preg_match_all($regexp, $string, $matches);

foreach($matches[0] as $word)
{
    echo $word, " ";
}
?>