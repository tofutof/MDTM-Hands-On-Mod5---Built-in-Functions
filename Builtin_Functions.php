<?php
$caseString = "HOLY ANGEL UNIVERSITY";
$nameString = "RAIROLF RABANG";
$customString = "DWEB is the BEST!  ";
$replaceString = "I love DWEB <3";

// Changing the Case of Characters
$lowercase   = strtolower($caseString);
$uppercase   = strtoupper($caseString);
$capitalize  = ucwords(strtolower($caseString));

// Counting Characters and Words
$charCount   = strlen($nameString);
$wordCount   = str_word_count($nameString);

// Removing and Replacing Characters
$ltrimmed    = ltrim($customString);
$rtrimmed    = rtrim($customString);
$trimmed     = trim($customString);
$strReplace  = str_replace("DWEB", "Php", $replaceString);
$strIReplace = str_ireplace("dweb", "Php", $replaceString);
$strRepeat   = str_repeat("DWEB ", 3);

// Other Built-in Functions
$stringLength      = strlen($caseString);
$stringPosition    = strpos($replaceString, "DWEB");
$stringSubstring   = substr($caseString, 0, 10);
$stringReverse     = strrev($caseString);
$stringShuffle     = str_shuffle($caseString);
$stringCompare     = strcmp("PHP", "php");
$stringPad         = str_pad("PHP", 10, "-", STR_PAD_BOTH);
$stringExplode     = implode(", ", explode(" ", $caseString));
$stringHash        = md5($caseString);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Built-in Functions</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>

<?php
include 'Extra/header.php';
?>

<div class="container">
    <h1>PHP Built-in Functions</h1>

    <table>
        <tr>
            <th>Category</th>
            <th>Syntax</th>
            <th>Result</th>
        </tr>

        <!-- Changing the Case of Characters -->
        <tr class="section"><td colspan="3">Changing the Case of Characters</td></tr>
        <tr><td>Lowercase</td><td>strtolower()</td><td><?= $lowercase ?></td></tr>
        <tr><td>Uppercase</td><td>strtoupper()</td><td><?= $uppercase ?></td></tr>
        <tr><td>Capitalize</td><td>ucwords()</td><td><?= $capitalize ?></td></tr>

        <!-- Counting Characters and Words -->
        <tr class="section"><td colspan="3">Counting Characters and Words</td></tr>
        <tr><td>Number of Characters</td><td>strlen()</td><td><?= $charCount ?></td></tr>
        <tr><td>Number of Words</td><td>str_word_count()</td><td><?= $wordCount ?></td></tr>

        <!-- Removing and Replacing Characters -->
        <tr class="section"><td colspan="3">Removing and Replacing Characters</td></tr>
        <tr><td>
Remove whitespaces from left</td><td>ltrim()</td><td><?= $ltrimmed ?></td></tr>
        <tr><td>Remove whitespaces from right</td><td>rtrim()</td><td><?= $rtrimmed ?></td></tr>
        <tr><td>Remove whitespace from left and right.</td><td>trim()</td><td><?= $trimmed ?></td></tr>
        <tr><td>String replace</td><td>str_replace()</td><td><?= $strReplace ?></td></tr>
        <tr><td>String ireplace</td><td>str_ireplace()</td><td><?= $strIReplace ?></td></tr>
        <tr><td>String Repeat</td><td>str_repeat()</td><td><?= $strRepeat ?></td></tr>

        <!-- Other Built-in Functions -->
        <tr class="section"><td colspan="3">Advanced & Useful Functions</td></tr>
        <tr><td>Length</td><td>strlen()</td><td><?= $stringLength ?></td></tr>
        <tr><td>Position</td><td>strpos()</td><td><?= $stringPosition ?></td></tr>
        <tr><td>Substring</td><td>substr()</td><td><?= $stringSubstring ?></td></tr>
        <tr><td>Reverse</td><td>strrev()</td><td><?= $stringReverse ?></td></tr>
        <tr><td>Shuffle</td><td>str_shuffle()</td><td><?= $stringShuffle ?></td></tr>
        <tr><td>Compare</td><td>strcmp()</td><td><?= $stringCompare ?></td></tr>
        <tr><td>Padding</td><td>str_pad()</td><td><?= $stringPad ?></td></tr>
        <tr><td>Explode</td><td>explode()</td><td><?= $stringExplode ?></td></tr>
        <tr><td>Hash</td><td>md5()</td><td><?= $stringHash ?></td></tr>
    </table>
</div>

<?php
include 'Extra/footer.php';
?>

</body>
</html>