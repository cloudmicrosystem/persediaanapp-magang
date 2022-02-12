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

        $this->file = '/database/FileExcel/Barang.xlsx';
        $this->file = '/database/FileExcel/Users.xlsx';
        $this->file = '/database/FileExcel/Category.xlsx';
        $this->file = '/database/FileExcel/Gambar.xlsx';
        // $this->worksheetTableMapping = [
        //     'barang' => 'barang',
        //     'users' => 'users'
        //     ];
        $this->timestamps = new \DateTime;

        parent::run();
    }
}
