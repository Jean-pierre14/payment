<?php
    $var = "Outside var";
    function test(){
        $varIn = "Local";
        var_dump($varIn);
        var_dump($GLOBALS['var']);
    }
    test();
    var_dump($var);
    var_dump($varIn);

    function test2(){
        global $var; # to create a global variable you need to declare it first
        $var = "Hello mind";
    }
    test2();
    print $var;
?>