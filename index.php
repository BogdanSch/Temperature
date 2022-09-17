<?php
$temperature = rand(-30, 30);

if ($temperature < 0){
    echo "<span style=\"color: blue\">$temperature «Мороз!»</span>";
}
elseif($temperature == 0) {
    echo "<span style=\"color: black\">$temperature «Не мороз и не тепло…»</span>";
}
else{
    echo "<span style=\"color: red\">$temperature «Тепло!»</span>";
}