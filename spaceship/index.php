<?php

define('ENUM_RATINGS', array(
    "Needs more improvement",
    "Failed in Boom.Camp Training",
    "Pass in Boom.Camp and can proceed in Graduation",
));

function compareIfPass(int $newGrade, int $oldGrade){
    switch($newGrade <=> $oldGrade){
        case -1:
            return ENUM_RATINGS['1'];
        case 0:
            return ENUM_RATINGS['0'];
        case 1:
            return ENUM_RATINGS['2'];
        default:
            return null;
    }
}



echo compareIfPass(70,80) . '<br>';
echo compareIfPass(80,90) . '<br>';
echo compareIfPass(90,90) . '<br>';