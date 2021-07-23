<?php

    setcookie('var1', 'value', time() + 3600);
    echo $_COOKIE['var1'];
    // to destroy a cookie to do like so
    setcookie('var', '', time() -1);
    var_dump($_COOKIE['var']);