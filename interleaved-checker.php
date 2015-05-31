<?php

echo isInterleaved( 'aabcc', 'dbbca', 'aadbbcbcac' ) ? 'true' : 'false';
echo isInterleaved( 'aabcc', 'dbbca', 'aadbbbaccc' ) ? 'true' : 'false';
echo isInterleaved( 'ac', 'bd', 'abcd' ) ? 'true' : 'false';
echo isInterleaved( 'bd', 'ac', 'abcd' ) ? 'true' : 'false';
echo isInterleaved( 'bde', 'ac', 'abcde' ) ? 'true' : 'false';
echo isInterleaved( 'bde', 'ac', 'abcdef' ) ? 'true' : 'false';

function isInterleaved( $s1, $s2, $s3 )
{

    $s1_position = 0;
    $s2_position = 0;

    for( $g = 0; $g < strlen( $s3 ); $g++ ) {

        if ( ( $s2_position < strlen( $s2 ) ) && ( $s3[$g] == $s2[$s2_position] ) ) {

            $s2_position++;

        } elseif( ( $s1_position < strlen( $s1 ) ) && ( $s3[$g] == $s1[$s1_position] ) ) {

            $s1_position++;

        } else {

            return false;

        }

    }

    if ( $s1_position == strlen( $s1 ) && $s2_position == strlen( $s2 ) ) {

        return true;

    }

    return false;

}
