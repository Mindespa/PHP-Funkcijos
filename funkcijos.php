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
echo "<hr>";

// Parašykite funkciją kuri sugeneruotų 10 p tagų su skaičiais juose nuo 1 iki 10
//  ir atvaizduotų naršylkėje.
//  Rezultate HTML’e turi matytis 10 p tagų su skaičiais.

echo "<p>" . "7 Udavinys ". "</p>";


ptag();
function ptag() 
{
    for ($i=1; $i < 10; $i++) { 
        echo "<p> $i </p>";
    }
}
echo "<hr>";

// Sukurkite funkciją kuri priimtų 3 kintamuosius $min, $max ir $length,
// sugeneruotų random masyvą $length ilgio, užpildytų random skaičiais $min $max intervale.

echo "<p>" . "8 Udavinys ". "</p>";

function kintamieji($min,$max,$length)
{
    $arr = [];
    for ($i=0; $i < $length; $i++) { 
    $arr[] = rand($min,$max);
    }
    return $arr;
}

print_r(kintamieji(5,10,7));

echo "<hr>";

// Parašykite funkciją kuri priimtų tekstą kintamąjį
// ir į gražintų “apsuktą” pvz paduodate Naglis, gaunate silgaN.

echo "<p>" . "9 Udavinys ". "</p>";

function namerev($name)
{
    return strrev($name);

}
echo "<h1>" . namerev("Minnado") . "</h1>";
echo "<hr>";



echo "<h2>" . "Sunkesni". "</h2>";

echo "<p>" . "1 Udavinys ". "</p>";

// Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;

function arg($oras)
{
    echo "<h1>" . $oras. "</h1>";
}

arg("Dabar sninga");
echo "<hr>";

// Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą,
//  o antrasis tago numeris (1-6).
//  Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;

echo "<p>" . "2 Udavinys ". "</p>";

function argumentas($oras,$h1)
{
    echo "<h1>" . $oras . $h1 . "</h1>";
}

argumentas("Dabar sninga"," "."tag1");
echo "<hr>";

// Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos 
// (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;

echo "<p>" . "4 Udavinys ". "</p>";




?>
</body>
</html>