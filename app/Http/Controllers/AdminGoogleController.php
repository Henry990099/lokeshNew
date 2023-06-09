<?php

namespace App\Http\Controllers;

use Revolution\Google\Sheets\Facades\Sheets;
use Google_Service_Sheets_ValueRange;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Google_Service_Sheets;
use League\Csv\Reader;
use Google_Client;


class AdminGoogleController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }
    public function inventory(Request $request)
    {

        $spreadsheetId = env('SHEET2_SPREADSHEET_ID');
        $sheetId = env('SHEET2_SHEET_ID');
        $data = $request->all();

        $file = $request->file('csv');

     
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D6')->update([[$data['setup']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D8')->update([[$data['qcinspector']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D10')->update([[$data['toolingcost']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D12')->update([[$data['rejectionrate'].'%']]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D16')->update([[$data['qctime1']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D17')->update([[$data['qctime2']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D18')->update([[$data['qctime3']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D19')->update([[$data['qctime4']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D23')->update([[$data['setuptime1']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D24')->update([[$data['setuptime2']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D25')->update([[$data['setuptime3']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D26')->update([[$data['setuptime4']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D28')->update([[$data['aqllevel']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D34')->update([[$data['leadtime1']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D35')->update([[$data['leadtime2']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D36')->update([[$data['leadtime3']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D37')->update([[$data['leadtime4']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D41')->update([[$data['qty1']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D42')->update([[$data['qty2']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D43')->update([[$data['qty3']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D52')->update([[$data['mtrl'].'$']]);

        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D54')->update([[$data['overhead'].'%']]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D56')->update([[$data['overall'].'%']]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D58')->update([[$data['discount'].'%']]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('C62')->update([[$data['m1sealsize']]]);

        $m1cost = $data['m1cost'] = '$' . $data['m1cost'];
        $m2cost = $data['m2cost'] = '$' . $data['m2cost'];
        $m3cost = $data['m3cost'] = '$' . $data['m3cost'];
        $m4cost = $data['m4cost'] = '$' . $data['m4cost'];

        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D62')->update([[$m1cost]]);
        
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('C63')->update([[$data['m2sealsize']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D63')->update([[$m2cost]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('C64')->update([[$data['m3sealsize']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D64')->update([[$m3cost]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('C65')->update([[$data['m4sealsize']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D65')->update([[$m4cost]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D67')->update([[$data['maxorderqty']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D69')->update([[$data['customrank']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D71')->update([[$data['custom']]]);
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Admin')->range('D73')->update([[$data['bandsaw']]]);

        // Read the CSV file
        $csv = Reader::createFromPath($file->getPathname());
        $csv->setHeaderOffset(0);
        $records = [];
        foreach ($csv->getRecords() as $record) {
            $records[] = $record;
        }
        
        $valueRange = new Google_Service_Sheets_ValueRange([
            'values' => $records,
        ]);
        
        $count = count($valueRange);
        $sheets = Sheets::spreadsheet($spreadsheetId)
        ->sheet('Billet Inventory')
        ->range('A2:C'.$count+100)
        ->clear();

        $row = 2;
        foreach($valueRange['values'] as $key=>$value)
        {
            Sheets::spreadsheet('1-BlhxacoLVD3H7N_X3lnx_927rh92etX8VQUmOHJYFs')->sheet('Billet Inventory')->range('A'.$row)->update([[$value['Item']]]);
            Sheets::spreadsheet('1-BlhxacoLVD3H7N_X3lnx_927rh92etX8VQUmOHJYFs')->sheet('Billet Inventory')->range('B'.$row)->update([[$value['Description']]]);
            Sheets::spreadsheet('1-BlhxacoLVD3H7N_X3lnx_927rh92etX8VQUmOHJYFs')->sheet('Billet Inventory')->range('C'.$row++)->update([[$value['Quantity On Hand']]]);
        }


    }
}
