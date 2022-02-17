<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;

trait ManageMigrationRecords
{

    public function insertRecords($table, $data)
    {
        return DB::table($table)->insert($data);
    }

    public function deleteRecordsByInfinative($table, $infinative)
    {
        return DB::table($table)->where('infinative', '=', $infinative)->delete();
    }
}
