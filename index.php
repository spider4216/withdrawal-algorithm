<?php

$income = $argv[1];
$canceled = $argv[2];
$withdrawal = $argv[3];

echo "Income: $income\n";
echo "Canceled: $canceled\n";
echo "Withdrawal $withdrawal\n\n";
echo "Balance " . $income + $canceled . "\n\n";

$x = $canceled - $withdrawal;

if ($x > 0) {
    echo "whole manual withdrawal with $withdrawal\n";
} else {
    $x = -$x;

    if ($x <= $income) {
	echo "withdrawal manual with " . $withdrawal - $x . "\n";

	if ($x > 0) {
	    echo "withdrawal api with $x\n";
	}
    } else {
        echo "not enough money in balance\n";
    }
}

echo "\nBalance " . ($income + $canceled) - ($withdrawal - $x) - $x  . "\n\n";
