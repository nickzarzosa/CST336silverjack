<?php


function generateRandomSuit()
{        
    $suit = rand(1,4);
    switch ($suit)
    {
        case 1:$folder = "hearts/";
        break;
        case 2:$folder = "clubs/";
        break;
        case 3:$folder ="diamonds/";
        break;
        case 4:$folder = "spades/";
        break;
    }
    
    return $folder;
}
//card number
function generateRandomNumber()
{
    $number = rand(1,13);
        
    return $number;
}
function reloadgame()
{
    location.reload();
}

?>