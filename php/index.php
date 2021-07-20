<?php
    // header("Content-Type: text/plain"); #This will display data into the text/plain 
    // print "Hell world";
    // to display a json form you have to config the header like so

    // header("Content-Type: application/json");
    // $res = ['response' => 'json format'];
    // print json_encode($res);
    print "Display";
    print "without semicolon if you close your statement <?php?>";
    
    ?>

<?php

function myFunction($a, $b){
    return $a + $b;
}
$run = 'myFunction';
print $run(3, 4);

class myClass{
    public function __construct(){
        $functionName = "Grace";
        $this->$functionName('Hello wolrd');
    }
    private function Grace($string){
        print $string;
    }
}
