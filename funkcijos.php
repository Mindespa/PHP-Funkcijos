<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php


        // <!-- "Sukurkite funkciją kuri priimtų du kintamuosius,
        //  juos sudaugintų ir atvaizduotų rezultatą naršyklėje. -->


        echo "<p>" . "1 Udavinys ". "</p>";

        
function printnum($a,$b)
{
   echo "<h1>". $a * $b ."</h1>";
}        
printnum(5,5);

echo "<hr>";


// Sukurkite funkciją kuri priimtų vieną kintamąjį,vardą. 
// Ir atvaizduotų rezultatą naršyklėje:“labas “ ir tą paduotą vardą.

echo "<p>" . "2 Udavinys ". "</p>";

function name($vardas) 
{
   echo "<h1>". "Labas " . $vardas . "</h1>";

}
name("Vera");
echo "<hr>";


// Sukurkite funkciją  kuri priimtų vieną kintamąjį, tekstą.
//  Ir atvaizduotų rezultatą naršyklėje: kiek simbolių yra tame tekste.

echo "<p>" . "3 Udavinys ". "</p>";


function text ($words)
{
    echo "<h1>". strlen($words) . "</h1>";
}
text("Kaip tu jautiesi");
echo "<hr>";

// Sukurkite funkciją kuri priimtų 2 kintamuosius tekstus,
//  vardą, pavardę ir atspausdintų inicialus.
//  T.y vardo ir pavardės pirmąsias raides DIDŽIOSIOMIS raidėmis.

echo "<p>" . "4 Udavinys ". "</p>";

function initials($name,$surname)
{
   
//    substr(ucfirst($name), 0,1)
    
    // ,$surname) . substr(0,1) . 

    echo "<h1>". strtoupper(substr($name,0,1)) . (substr($surname,0,1)) . "</h1>";
}
initials("Minnado","Mindaugas");
echo "<hr>";

// Parašykite funkciją kuri sugeneruotų 3 random skaičius 0 ir 5 intervale 
// ir atvaizduotų naršyklėje vienoje eilutėje atskirtus kableliais. 
// Po paskutinio skaičiaus kablelio neturi būti.

echo "<p>" . "5 Udavinys ". "</p>";


numbers();

function numbers(){
    $txt = "";
    for ($i=0; $i < 3; $i++) { 
        $txt .= rand(0,5). ",";
    }
   $txt = substr($txt,0,-1);

    echo "<h1>" . $txt . "</h1>";
}


;
?>
</body>
</html>