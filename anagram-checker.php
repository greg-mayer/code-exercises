<?php

// Sample

echo isAnagram( 'parliament', 'partial men' ) ? 'true' : 'false';

function isAnagram( $source_word, $candidate_word )
{

    if ( empty( $source_word ) ) {

        throw new Exception( 'Source word is missing.' );

    }

    // We don't care about spaces, numbers, or punctuation, so we strip it out of
    // both the source and the candidate.

    $source_word    = preg_replace( "/[^a-z]/", "", strtolower( $source_word ) );
    $candidate_word = preg_replace( "/[^a-z]/", "", strtolower( $candidate_word ) );

    // If the scrubbed words are not the same length, then they cannot be
    // anagrams.

    if ( strlen( $source_word ) != strlen( $candidate_word ) ) {

       return false;

   }

   $character_counts = [];

   // Track the number of characters in each string.  Counts for characters found in the
   // $source_word increment, while characters found in the $candidate_word decrement.

   // Once a character count hits zero, then the entry gets removed.  We then count the
   // remaining references at the end and if they're zero, then all letters from the
   // source are used in the candidate.

   for( $g = 0; $g < strlen( $source_word ); $g++ ) {

       $character_counts[ $source_word[ $g ] ]    = isset( $character_counts[ $source_word[ $g ] ] ) ? $character_counts[ $source_word[ $g ] ] + 1 : 1;
       $character_counts[ $candidate_word[ $g ] ] = isset( $character_counts[ $candidate_word[ $g ] ] ) ? $character_counts[ $candidate_word[ $g ] ] - 1 : -1;

       if ( $character_counts[ $source_word[ $g ] ] == 0 ) {

           unset( $character_counts[ $source_word[ $g ] ] );

       }

       if ( $character_counts[ $candidate_word[ $g ] ] == 0 ) {

           unset( $character_counts[ $candidate_word[ $g ] ] );

       }

   }

   return empty( $character_counts ) ? true : false;

}
