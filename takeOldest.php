<?php
$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
];

function takeOldest($users, $num = 1)
{
    function birth($user1, $user2)
    {
        $date_1 = strtotime($user1['birthday']);
        $date_2 = strtotime($user2['birthday']);
        return $date_1 - $date_2;
    }
    usort($users, 'birth');
    return array_slice($users, 0, $num);
}
print_r(takeOldest($users, 3));