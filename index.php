<?php
$date = date("");
//$date = "Wednesday";

switch ($date) {
    case "Monday":
        echo "I hate mondays";
        break;
    case "Tuesday":
        echo "Tuesdays are okay.";
        break;
    case "Wednesday":
        echo "It's wednesday my dudes";
        break;
    case "Thursday":
        echo "Thorsday";
        break;
    case "Friday":
        echo "Friyay";
        break;
    default:
        echo "Invalid Day";
}
