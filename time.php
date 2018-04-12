<!DOCTYPE html>
<html>
    <head>
        <title>hotel.ng digital clock</title>
        <link rel="stylesheet" href="time.css"/>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Righteous"/>
    </head>
    <body>
        <p id="displayName">Intern: bethel_codes</p>
        <p id="title">Hotel.ng 4.0</p>
        <?php
        $timestamp = time();
        $date = strftime("%d/%m/%y", $timestamp);
        $day_of_month = date('j', $timestamp);
        $day_of_week = date('D', $timestamp);
        $month = date('F', $timestamp);
        $year = date('Y', $timestamp);
        $dateTime = date('H:i', $timestamp);
        echo "<p id=\"time\">{$dateTime}</p>";
        echo "<p id=\"date\">{$day_of_week}. {$day_of_month}</p>";
        echo "<p id=\"monthYear\">{$month} {$year}</p>"; 
        ?>

        <p id="foot">Unleashing innovations</p>
    </body>
</html>