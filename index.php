<?php
$grade = "Apple";

switch ($grade) {
    case "A":
        echo "You Did Great!";
        break;
    case "B":
        echo "You Did Good!";
        break;
    case "C":
        echo "You Did Okay!";
        break;
    case "D":
        echo "You Did Poorly!";
        break;
    case "D":
        echo "you failed...";
        break;
    default:
        echo "Invalid Grade";
}
