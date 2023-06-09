<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsvUploadController extends Controller
{
    public function importCSV()
    {
        $file = public_path('path-to-your-csv-file.csv');
        $spreadsheetId = 'your-spreadsheet-id';
        $sheetName = 'Sheet1';

        $data = $this->parseCSV($file);

        echo '<pre>';
        print_r($data);
        die;

        GoogleSheet::write($spreadsheetId, $sheetName, $data);

        return 'CSV imported successfully.';
    }

    private function parseCSV($file)
    {
        $data = [];
        if (($handle = fopen($file, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, ',')) !== false) {
                $data[] = $row;
            }
            fclose($handle);
        }
        return $data;
    }
}
