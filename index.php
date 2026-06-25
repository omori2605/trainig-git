<?php

$records = [
    [
        'date' => '2026/06/25',
        'title' => 'foreachの練習',
        'time' => 1,
        'memo' => '配列をforeachで表示する練習',
    ],
    [
        'date' => '2026/06/26',
        'title' => 'if文の復習',
        'time' => 2,
        'memo' => '条件分岐の書き方を確認',
    ],
    [
        'date' => '2026/06/27',
        'title' => '配列の練習',
        'time' => 1.5,
        'memo' => '連想配列の取り出しを練習',
    ],
];

$totalTime = 0;

foreach ($records as $record) {
    $totalTime += $record['time'];

    echo $record['date'] . '<br>';
    echo $record['title'] . '<br>';
    echo $record['time'] . '時間<br>';
    echo $record['memo'] . '<br>';
    echo '<hr>';
}

echo '合計学習時間：' . $totalTime . '時間';