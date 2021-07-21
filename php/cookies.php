<?php

    // setcookie('var', 'value', time() + 3600);
    // echo $_COOKIE['var'];
    // to destroy a cookie to do like so
    setcookie('var', '', time() -1);
    var_dump($_COOKIE['var']);