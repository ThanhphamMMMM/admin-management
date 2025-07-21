<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
     * Hàm này trả về tập hợp dữ liệu (collection) để ghi ra file Excel.
     */
    public function collection()
    {
        return User::all();
    }
}
