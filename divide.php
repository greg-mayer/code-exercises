<?php

const MAX_INT = -1;

echo divide( 100, 25 ) . PHP_EOL;
echo divide( 25, 5 ) . PHP_EOL;
echo divide( 24, 6 ) . PHP_EOL;
echo divide( 24, 8 ) . PHP_EOL;
echo divide( 24, 4 ) . PHP_EOL;
echo divide( 24, 3 ) . PHP_EOL;
echo divide( 144, 12 ) . PHP_EOL;
echo divide( 1000, 10 ) . PHP_EOL;
echo divide( 8, 3 ) . PHP_EOL;
echo divide( 8, 0 ) . PHP_EOL;

function divide( $dividend, $divisor )
{

    if ( $divisor <= 0 ) {

        return MAX_INT;

    }

    $count       = 0;
    $accumulator = 0;

    while( $accumulator < $dividend ) {

        $count++;
        $accumulator += $divisor;

    }

    return $accumulator <= $dividend ? $count : MAX_INT;

}
