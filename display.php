<?php
// initialize variables
// set to empty string
$numbers = "";
// get minimum number
$userMin = intval($_POST["min"]);
// get maximum number
$userMax = intval($_POST["max"]);

// if the users min is greater than the max, or they are equal, tell them to change it as it does not make sense
if ($userMin > $userMax)
{
    $numbers = "Your minimum should not be greater than your maximum, please change this!";
}
else if ($userMin == $userMax && $userMin % 2 != 0)
{
    // if the users min is equal to max and the number is odd, tell them to fix it
    $numbers = "Your minimum should not be equal to your maximum, please change this!";
}

// while the users min is less than or equal to the max, and if the number is odd, add 1 to it
while ($userMin <= $userMax)
{
    if ($userMin % 2 != 0)
    {
        // increment the counter by 1
        $userMin++;
    }
    // break the loop
    
    {
        break;
    }
}

// use a while loop to display the numbers from 0 up to the user number
while ($userMin <= $userMax)
{
    // build the string of numbers with a line break each time
    $numbers = $numbers . $userMin . "<br>";
    // increment the counter by 2
    $userMin += 2;
}

// display even numbers between min adn max
echo $numbers;

?>
