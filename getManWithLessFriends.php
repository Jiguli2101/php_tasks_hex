<?php

function getManWithLessFriends(array $friends) {
    if (empty($friends)) {
        $lessFriends = null;
    } else {
        $lessFriends = $friends[0];
        foreach ($friends as $friend) {
            if (count($friend['friends']) <= count($lessFriends['friends'])) {
                $lessFriends = $friend;
            }
        }
    }
    return $lessFriends;
}


$users = [
    ['name' => 'Tirion', 'friends' => [
        ['name' => 'Mira', 'gender' => 'female'],
        ['name' => 'Ramsey', 'gender' => 'male']
    ]],
    ['name' => 'Bronn', 'friends' => []],
    ['name' => 'Sam', 'friends' => [
        ['name' => 'Aria', 'gender' => 'female'],
        ['name' => 'Keit', 'gender' => 'female']
    ]],
    ['name' => 'Keit', 'friends' => []],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
];

print_r (getManWithLessFriends($users));
// => ['name' => 'Keit', 'friends' => []];
