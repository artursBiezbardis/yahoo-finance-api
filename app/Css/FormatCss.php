<?php


namespace App\Css;


class FormatCss
{
static function negativeAndPositiveValueColor($value):string
{
    if($value<0){
        return '#FF0000';
    }else{
        return '#00FF00';

    }
}
}