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

        $this->file = '/database/FileExcel/DataSeeder.xlsx';
        $this->worksheetTableMapping = [
            'barang' => 'barang',
            'users' => 'users'
            ];
        $this->timestamps = new \DateTime;

        parent::run();
    }
}
