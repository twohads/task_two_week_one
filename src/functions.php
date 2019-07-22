<?php

function task1(array $srtArray, $mode = true)
{
    $res = null;
    for ($i = 0; $i < sizeof($srtArray); $i++) {

        if ($mode) {
            echo $res .= $srtArray[$i];
        } else {
            echo "<p>" . $srtArray[$i] . "</p>";
        }
    }
}

function task2($op, ...$arg)
{
    // Сделал этот пример с прицелом на поддержку старых версий php

    if (!is_string($op)) {
        return 'Первый аргумент должен быть строкой';
        die;
    }

    $res = 0;

    for ($i = 0; $i < sizeof($arg); $i++) {

        if (is_int($arg[$i]) || is_float($i)) {

            if ($op === "+") {
                $res += $arg[$i];
            } elseif ($op === "-") {
                $res -= $arg[$i];
            } elseif ($op === "*") {
                if ($res === 0) {
                    $res = $arg[0];
                } else {
                    $res *= $arg[$i];
                }
            } elseif ($op === "/") {
                if ($res === 0) {
                    $res = $arg[0];
                } elseif ($arg[$i] !== $arg[0] && $arg[$i] === 0) {
                    return 'Делить на 0 нельзя';
                } elseif (sizeof($arg) === 1 && $arg[0] === 0) {
                    // Условие sizeof($arg) === 1 не срабатывает, хотя должен. Подскажите где ошибка?
                    return 'Делить на 0 нельзя';
                } else {
                    $res /= $arg[$i];
                }
            } else {
                return 'Неверный оператор';
            }

        } else {
            return "Аргументы должны быть строкой";
        }
    }


    return $res;
}

function task3(int $rowMake, int $colMake)
{
    echo "<table>";

    for ($row = 1; $row <= $rowMake; $row++) {
        echo "<tr>";

        for ($col = 1; $col <= $colMake; $col++) {

            echo "<td>" . $col * $row . "</td>";

        }

        echo "</tr>";
    };

    echo "</table>";
}

function task4()
{
    $whatTime = mktime(23, 59, null, 12, 31, 2018);
    echo date("d.m.Y H.i", $whatTime) . PHP_EOL;
    $unixTime = "24.02.2016 00:00:00";
    echo strtotime($unixTime);
}

function task5(string $str, $mode = 1)
{
    $getWord = $str;
    if ($mode === 1) {
        return str_replace('К', '', $getWord);
    }
    return str_replace('Две', 'Три', $getWord);
}

function task6(string $text)
{
    $putText = $text;
    file_put_contents('test.txt', $putText);
}