<?php
    $var = "Outside var";
    function test(){
        $varIn = "Local";
        var_dump($varIn);
        var_dump($GLOBALS['var']);
    }
    test();
    var_dump($varIn);
    var_dump($var);
?>