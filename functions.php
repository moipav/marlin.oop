<?php
function debug($name)
{
    echo '<pre>';
    var_dump($name);
    echo '</pre>';
    die;
}


