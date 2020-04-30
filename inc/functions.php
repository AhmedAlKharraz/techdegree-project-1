<?php
/*
// I want to show the two way that I learned of creating multidimensional array

$quotes [] = ["quote" => "Looking at beauty in the world, is the first step of purifying the mind.",
    "source" => "Amit Ray",
    "citation" => "Meditation: Insights and Inspirations",
    "year" => "2010"];

$quotes [] = ["quote" => "Everything's going to be okay', because that's what I wanted him to say and it's what he wanted to say and that's what you do when the curtain is falling — you give the line that the audience wants to hear.",
    "source" => "Rick Yancy"];

$quotes [] = ["quote" => "Throw your dreams into space like a kite, and you do not know what it will bring back, a new life, a new friend, a new love, a new country.",
    "source" => "Anais Nin"];

$quotes [] = ["quote" => "Sometimes you have to do something ugly so that something beautiful can grow.",
    "source" => "Cedric Nye",
    "citation" => "Jango's Anthem",
    "year" => "2013"];

$quotes [] = ["quote" => "The scariest moment is always just before you start.",
    "source" => "Stephen King"];

$quotes [] = ["quote" => "No tears in the writer, no tears in the reader. No surprise in the writer, no surprise in the reader.",
    "source" => "Robert Frost"];
*/

$quotes = array(

    array("quote" => "Looking at beauty in the world, is the first step of purifying the mind.",
    "source" => "Amit Ray",
    "citation" => "Meditation: Insights and Inspirations",
    "year" => "2010"),

    array("quote" => "Everything's going to be okay', because that's what I wanted him to say and it's what he wanted to say and that's what you do when the curtain is falling — you give the line that the audience wants to hear.",
    "source" => "Rick Yancy"),

    array("quote" => "Throw your dreams into space like a kite, and you do not know what it will bring back, a new life, a new friend, a new love, a new country.",
    "source" => "Anais Nin"),

    array("quote" => "Sometimes you have to do something ugly so that something beautiful can grow.",
    "source" => "Cedric Nye",
    "citation" => "Jango's Anthem",
    "year" => "2013"),

    array("quote" => "The scariest moment is always just before you start.",
    "source" => "Stephen King"),

    array("quote" => "No tears in the writer, no tears in the reader. No surprise in the writer, no surprise in the reader.",
    "source" => "Robert Frost"),
);

/* This function is generating random quote from quotes array, 
this functions passing two arguments
$arr for the array
*/

function getRandomQuote($arr){

    $value = $arr[array_rand($arr)];
    return $value;
    
}


// This function will check the keys inside the quotes array if they exist it will echo it out
function printQuote($quoteArry){

    $getRandArray = getRandomQuote($quoteArry);

    $quote = $getRandArray['quote'];
    $source = $getRandArray['source'];
    $citation = $getRandArray['citation'];
    $year = $getRandArray['year'];

    
    if (isset($citation) && isset($year)){
        echo "<p class='quote'>" . $quote .  "</p>";
        echo "<p class='source'>" . $source . "<span class='citation'>" . $citation . "</span><span class='year'>" . $year . "</span></p>";
    } else if (isset($citation)){
        echo "<p class='quote'>" . $quote .  "</p>";
        echo "<p class='source'>" . $source . "<span class='citation'>" . $citation . "</span></p>";
    } else if (isset($year)){
        echo "<p class='quote'>" . $quote .  "</p>";
        echo "<p class='source'>" . $source . "<span class='year'>" . $year . "</span></p>";
    } else {
        echo "<p class='quote'>" . $quote .  "</p>";
        echo "<p class='source'>" . $source . "</p>";
    }
    
    //This code refresh the page ater 5 seconds
    header("Refresh:5");


}




?>