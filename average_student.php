<?php
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кирилов Кирилл' => 3,
        'Степанов Степан' => 2,
        'Петров Петр' => 3,
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Андреев Андрей' => 3,
        'Сидоров Сидор' => 2,
    ]
];

$groupPerformance = [];
foreach ($students as $groupName => $group) {
    $total = 0;
    foreach ($group as $studentName => $grade) {
        $total += $grade;
    }
    $groupPerformance[$groupName] = $total / count($group);
}

$bestGroup = array_keys($groupPerformance, max($groupPerformance))[0];

echo "Группа с лучшей успеваемостью: $bestGroup".PHP_EOL;

$expulsionList = [];
foreach ($students as $groupName => $group) {
    $badStudents = [];
    foreach ($group as $studentName => $grade) {
        if ($grade < 3) {
            $badStudents[] = $studentName;
        }
    }
    if (!empty($badStudents)) {
        $expulsionList[$groupName] = $badStudents;
    }
}

if(count($expulsionList)>0){
    echo "Список на отчисление:";
    print_r($expulsionList);
}else{
    echo "Студентов на отчисление в группах нет";
}