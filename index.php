<?php

function Greetings($hour = 00.00) {
    if ($hour >= 05.00 && $hour < 12.00) {
        return('Good Morning');
    }
    if ($hour >= 12.00 && $hour < 17.00) {
        return('Good Afternoon');
    }
    if ($hour >= 17.00 && $hour < 20.00) {
        return('Good Evening');
    }
    if ($hour >= 20.00 && $hour < 05.00) {
        return('Good Night');
    }
}

print '<p>' . Greetings(23.00) . '</p>';
?>