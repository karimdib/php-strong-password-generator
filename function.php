<?php


function psw_generate($num) {
    $letter_lower= 'abcdefghilmnoprstuvz';
    $numbers= '1234567890';
    $letter_uppercase= 'ABCDEFGHIJKLMNOPQRSTUVZ';
  
    return substr(str_shuffle($letter_lower.$numbers.$letter_uppercase), 0, $num);
  }
