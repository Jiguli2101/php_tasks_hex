<?php
function getGirlFriends(array $users)
{
    $girls = [];
    foreach ($users as $user) {
        foreach ($user['friends'] as $friend) {
            if ($friend['gender'] === 'female') {
                $girls[] = $friend['name'];
            }
        }
    }
    return $girls;
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
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
];


getGirlFriends($users);
