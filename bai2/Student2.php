<?php

class Student2
{
    public $id;
    public $name;
    public $mark;
    public function __construct($id = 'ph00001', $name = 'No Name', $mark = 0)
    {
        $this->id = $id;
        $this->name = $name;
        if ($mark > 100 || $mark < 0) {
            $this->mark = 0;
        } else {
            $this->mark = $mark;
        }
    }

    public function checkMark()
    {
        if ($this->mark > 45) {
            echo "Sinh viên {$this->name} có mã số {$this->id} đã <b>Pass</b> môn<br />";
        } else {
            echo "Sinh viên {$this->name} có mã số {$this->id} đã <b>Fail</b> môn<br />";
        }
    }
}

$student1 = new Student2('ph12345', 'Tiến Nam', 90);
$student2 = new Student2('Ph12346', "Thanh Thanh", 78);
$student3 = new Student2("ph12347", "Tú Tú", 39);
$student4 = new Student2();

$student1->checkMark();
$student2->checkMark();
$student3->checkMark();
$student4->checkMark();
