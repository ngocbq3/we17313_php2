<?php

namespace App;

class ClassC implements InterfaceModel
{
    public function show()
    {
        echo "<br />Hiển thị bài viết";
    }
    public function insert($name)
    {
        echo "<br />Thêm mới bài viết $name thành công";
    }
}
