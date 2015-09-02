<?php

class Fibonacci {

    private $allowed_start = array(0, 1);

    public function sequence($start, $end) {
        if (in_array($start, $this->allowed_start)) {
            $second = 1;
            $seq = array();
            $seq[] = $start;
            $seq[] = $second;
            $nth = 0;
            while ($nth <= $end) {
                $nth = count($seq);
                $n1 = $nth - 1;
                $n2 = $nth - 2;
                $next = $seq[$n1] + $seq[$n2];
                $seq[] = $next;
            }
            $final = implode(', ', $seq);
        } else {
            $final = 'Sequence must start with 1 or 0';
        }
        return $final;
    }
}

$fib = new Fibonacci;
$sequence = $fib->sequence(1, 5);
print($sequence);
