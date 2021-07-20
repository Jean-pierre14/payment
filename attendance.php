<?php

$t = 'code';
$test = filter_var($t, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);

print "Output ". $test;

function f(&$s){
    $st = "world";
}
$s1 = "Hello";
echo $s1;
f($s1);
echo $s1;

echo "___________________________________________";
$people = array(
    array("Steven", 22, 18),
    array("Bob", 15,13)
);
for($row = 0; $row < 2; $row++){
    echo "<ul>";
    for($col = 0; $col < 3; $col++){
        echo "<li>". $people[$row][$col]. "<li>";
    }
    echo "</ul>";
}

$a = "";
if($a){
    print "All";
}else{
    print "some";
}