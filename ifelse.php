<?php

$country = "usa";
$age = 19;

if ($country == "usa")
{
    $legal = 21;
}
else
{
    $legal= 18;    
}



if ($age > $legal)
{ 
    echo "you can drink ";
}
else
{
    echo "you can't drink";
}