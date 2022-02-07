<?php

namespace Database\Seeders;

// use Illuminate\Database\Seeder;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class ExcelSeeder extends SpreadsheetSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->file = '/database/FileExcel/DataSeed.xlsx';
        $this->worksheetTableMapping = [
            'jabatan' => 'jabatan',
            'barang' => 'barang'
            ];
        $this->timestamps = new \DateTime;

        parent::run();
    }
}
