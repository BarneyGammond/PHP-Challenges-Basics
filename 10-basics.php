<?php

$output = "";

for ($i=1; $i<=15; $i+=1) { 

    for ($j=1; $j<=15 ; $j+=1) { 

        $multiple = $i * $j;

        $output .= "\t" . $multiple;
    
    }

    $output .= "\n";

}

echo $output;