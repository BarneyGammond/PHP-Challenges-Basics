<?php

$counter = 0;

$total = 0;

for ($i = 1 ; $counter < 117 ; $i += 1) {

    if (($i % 3 === 0) || ($i % 7 === 0)) {

        $total += $i;

        $counter += 1;

        var_dump($total);

    }

}

var_dump($total);

