<?php
/**
 * @author Kovács László
 *
 * Array usage practice
 */

const DATA = [
    'lastnames' => [
        'Major',
        'Riz',
        'Kard',
        'Pum',
        'Víz',
        'Kandisz',
        'Patta',
        'Para',
        'Pop',
        'Remek',
        'Ének',
        'Szalmon',
        'Ultra',
        'Dil',
        'Git',
        'Har',
        'Külö',
        'Harm',
        'Zsíros B.',
        'Virra',
        'Kasza',
        'Budipa',
        'Bekre',
        'Fejet',
        'Minden',
        'Bármi',
        'Lapos',
        'Bor',
        'Mikorka',
        'Szikla',
        'Fekete',
        'Rabsz',
        'Kalim',
        'Békés',
        'Szenyo',
    ],
    'firstnames' => [
        'men' => ['Ottó', 'Pál', 'Elek', 'Simon', 'Ödön', 'Kálmán', 'Áron', 'Elemér', 'Szilárd', 'Csaba'],
        'women' => ['Anna', 'Virág', 'Nóra', 'Zita', 'Ella', 'Viola', 'Emma', 'Áron', 'Mónika', 'Dóra', 'Blanka',
            'Piroska', 'Lenke', 'Mercédesz', 'Olga', 'Rita',]
    ],
    'classes' => [
        '11a', '11b', '11c', '12a', '12b', '12c',
    ],
    'subjects' => ['math', 'history', 'biology', 'chemistry', 'physics', 'informatics', 'alchemy', 'astrology', ],
];

function getStudent() : array
{
    $lastnames = DATA["lastnames"];
    $lastname = $lastnames[array_rand($lastnames)];

    $firstnames = DATA["firstnames"];
    $gender = rand(0, 1);
    if($gender == 0)
    {
        $firstnameList = $firstnames['women'];
        $firstname = $firstnameList[array_rand($firstnameList)];
    }
    else
    {
        $firstnameList = $firstnames['men'];
        $firstname = $firstnameList[array_rand($firstnameList)];
    }

    $classes = DATA["classes"];
    $class = $classes[array_rand($classes)];

    $subjects = DATA["subjects"];
    $subject = $subjects[array_rand($subjects)];

    $student = [
        'lastname' => [$lastname],
        'firstname' => [$firstname],
        'class' => [$class],
        'subjects' => [$subject],
        'gender' => [$gender]
    ];
    return $student;
}

function getStudents() : array
{
    $students = [];
    $n = rand(10,15);
    for($i = 0; $i < $n; $i++)
    {
        $student = getStudent();
        array_push($students,$student);
    }

    return $students;
}
?>