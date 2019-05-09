<?php

/**
 * Array problem 3
 * 
 * Suppose your training class has multiple students with an ID. Now, show the Name and ID of girls only from the students. 
 * Used array-functions:
 * -- array_column()
 * -- array_filter()
 * -- array_diff_key()
 */

class Training {

    public $id;
    public $name;
    public $sex;

    public function __construct($a, $b, $c) {
        $this->id = $a;
        $this->name = $b;
        $this->sex = $c;
    }

}

$students = [
    new Training('BT1', 'Rodela', 'girl'),
    new Training('BT13', 'Sohel', 'boy'),
    new Training('BT25', 'Jayan', 'boy'),
    new Training('BT10', 'Mina', 'girl'),
    new Training('BT6', 'Karim', 'boy'),
    new Training('BT2', 'Lalu', 'boy'),
];

$resName = array_column($students, 'name', 'id');
$resSex = array_column($students, 'sex', 'id');

$tempArr = array_filter($resSex, function($val) {
    return $val != 'girl';
});

$onlyGirls = array_diff_key($resName, $tempArr);

echo '<pre>';
print_r($onlyGirls);
