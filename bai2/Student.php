<?php

class Student
{
    public $name = "Tú";
    public $noId = "PH12345";
    public function getInfo()
    {
        echo "Sinh viên tên: {$this->name} có mã số: {$this->noId}<br />";
    }
}

$student = new Student;
// var_dump($student);
$student->name = "Mạnh";
$student->getInfo();
