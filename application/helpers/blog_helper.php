<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
# truncates a string to a certain char length, stopping on a word if not specified otherwise.

function intro($string, $length, $stopanywhere=false) {

    if (strlen($string) > $length) {
        //limit hit!
        $string = substr($string,0,($length -3));
        if ($stopanywhere) {
            //stop anywhere
            $string .= '...';
        } else{
            //stop on a word.
            $string = substr($string,0,strrpos($string,' ')).'...';
        }
    }
    return $string;
}
