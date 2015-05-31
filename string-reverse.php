<?php

// Samples

echo reverse( 'm' ) . PHP_EOL;
echo reverse( 'my' ) . PHP_EOL;
echo reverse( 'my string' ) . PHP_EOL;
echo reverse( '' ) . PHP_EOL;
echo reverse( 'abcde' ) . PHP_EOL;
echo reverse( 'aabb' ) . PHP_EOL;
echo reverse( 'aaabbb' ) . PHP_EOL;
echo reverse( 'aaaabbbb' ) . PHP_EOL;

function reverse( $string )
{

    $length = strlen( $string );

    // No need to reverse an empty string or a string with just a single
    // character.

    if ( $length <= 1 ) {

        return $string;

    }

    // Start from the beginning and swap the characters around the middle.

    for( $g = 0; $g < ( $length / 2 ); $g++ ) {

        $swap                 = $string[$g];
        $string[$g]           = $string[$length - $g];
        $string[$length - $g] = $swap;

    }

    return $string;

}
