<?php

Function FunctionName($arg1,$arg2,$arg3)
{
    $body= [$arg1,$arg2,$arg3];
    return $body;

}

function optionArgs($arg1,$arg2= true, $arg3 = null)
{
    $body= [$arg1,$arg2,$arg3];
    return $body;

}

function calcInc(){

    global $weight;
    global $height;
    return $weight /($height * $height);
}

function payTotal($price){

    static $total;
    $total +=$price;
    return"<p> Total a pagar é Rs" . number_format($total , "2",",",".");
}

function myTeam(){

    $teamNames = func_get_args();
    $teamCount= func_num_args();
    return ["member"=> $teamNames, "count" =>$teamCount];

}