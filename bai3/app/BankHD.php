<?php

namespace App;

class BankHD extends BankModel
{
    public const PI = 3.14;
    public static $name = "BankHD";

    public function tranfer($money)
    {
        echo "<br />Bạn vừa chuyển $money thành công!";
    }

    public function withdrawals($money)
    {
        echo "<br /> Bạn vừa rút $money từ cây ATM ABC12345 thành công";
    }
}
