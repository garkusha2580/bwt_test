<?php
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$date = date("j.m");
echo <<<html
<div class="container">
    <div class="table-responsive">
    <h2>Погода на сегодня,${date}</h2>
    <table class="table">
        <thead>
            <th>Время суток</th>
            <th>Погода</th>
            <th>Температура</th>
             <th>Давление</th>
            <th>Ветер(м/с)</th>
        </thead>
        <tbody>
html;
for ($i = 0; $i < 4; $i++) {
    echo '<tr>';
    foreach ($_POST["weatherData"][$i] as $v) {

        echo "<td> ${v} </td>";
    }
    echo '</tr>';
}

echo <<<html
            </tbody>
        </table>
    </div>
</div>
html;
