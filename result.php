<?php

$a = $_POST['time'] ?? '';
$b = $_POST['sport'] ?? '';
$c = $_POST['travel'] ?? 'no';


function checkTime($a) {
    return match($a) {
        "morning" => "Ти рання людина",
        "day" => "Ти активний вдень",
        "night" => "Ти нічна сова",
        default => "Час не визначено"
    };
}

function checkSport($b) {
    switch ($b) {
        case "no":
            return "Можливо варто більше рухатись";
        case "sometimes":
            return "Непогано, але можна частіше";
        case "often":
            return "Ти ведеш активний спосіб життя";
        default:
            return "Немає інформації про спорт";
    }
}

function checkTravel($c) {
    if ($c == "yes") {
        return "Ти любиш відкривати нові місця";
    } else {
        return "Можливо, варто спробувати подорожі";
    }
}


echo "<h2>Твій результат:</h2>";

echo "<p>" . checkTime($a) . "</p>";
echo "<p>" . checkSport($b) . "</p>";
echo "<p>" . checkTravel($c) . "</p>";

?>