<?php
    function perfectnum($num)
    {
        $divisors = [];

        for ($i = 1; $i < $num; $i++) {
            if ($num % $i == 0) {
                $divisors[] = $i;
            }
        }

        $sum = array_sum($divisors);

        if ($sum == $num) {
            return "yes, this is a perfect number. Proof: " . implode(" + ", $divisors) . " = $num";
        } else {
            return "no, this is not a perfect number. Proof: " . implode(" + ", $divisors) . " != $num";
        }
    }

    function testerfunc() {
        $test = [6, 28, 321, 567];
        foreach ($test as $num) {
            echo perfectnum($num) . "<br>";
        }
    }

    testerfunc();
?>


