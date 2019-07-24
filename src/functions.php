<?php

function task1(array $srtArray, $mode = true)
{
    for ($i = 0; $i < sizeof($srtArray); $i++) {

        if ($mode) {
            echo $srtArray[$i];
        } else {
            echo "<p>" . $srtArray[$i] . "</p>";
        }
    }
}

function task2($op, ...$arg)
{
    // Сделал этот пример с прицелом на поддержку старых версий php.

    if (!is_string($op)) {
        return 'Первый аргумент должен быть строкой';
        die;
    }

    $res = 0;

    for ($i = 0; $i < sizeof($arg); $i++) {

        if (!is_int($arg[$i]) && !is_float($arg[$i])) {
            return "Аргументы должны быть числом";
        } elseif ($op === "/" && $arg[$i] === 0) {
            return 'Делить на 0 нельзя';
        }

        if ($op === "+") {
            //  echo $res . "   ";
            $res += $arg[$i];
        } elseif ($op === "-") {
            if($res === 0){
                $res = $arg[$i];
            }else {
                $res -= $arg[$i];
            }
            // echo $res . "   ";
        } elseif ($op === "*") {
            if($res === 0){
                $res = $arg[$i];
            }else {
                $res *= $arg[$i];
            }
        } elseif ($op === "/") {
            if($res === 0){
                $res = $arg[$i];
            }else {
                $res /= $arg[$i];
            }
        } else {
            return 'Неверный оператор';
        }
    }


    return $res;
}

function task3(int $rowMake, int $colMake)
{
    if ($rowMake && $colMake <= 0) {
        echo "<table>";

        for ($row = 1; $row <= $rowMake; $row++) {
            echo "<tr>";

            for ($col = 1; $col <= $colMake; $col++) {

                echo "<td>" . $col * $row . "</td>";

            }

            echo "</tr>";
        };

        echo "</table>";
    } else {
        return print_r('Аргументы не могут быть 0 или отрицательным числом');
    }

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
    file_put_contents('test.txt', $text);
}