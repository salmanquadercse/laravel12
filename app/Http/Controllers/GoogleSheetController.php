<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleSheetService;

class GoogleSheetController extends Controller
{
    public function read(GoogleSheetService $sheet)
    {
        $data = $sheet->readSheet(); // Get values from Google Sheets
        return view('sheets.index', compact('data'));
    }
    public function write(Request $request, GoogleSheetService $sheet)
    {
        $data = array(
            ['SL', 'Name', 'Email', 'Phone', 'Address', 'City', 'State', 'Zip'],
            [
                1,
                $request->input('name'),
                $request->input('email'),
                $request->input('phone'),
                $request->input('address'),
                $request->input('city'),
                $request->input('state'),
                $request->input('zip')
            ],
            [
                2,
                $request->input('name'),
                $request->input('email'),
                $request->input('phone'),
                $request->input('address'),
                $request->input('city'),
                $request->input('state'),
                $request->input('zip')
            ]
        );
        $sheet->writeSheet('Sheet1!A2', $data);
        return redirect()->back()->with('success', 'Data written successfully to Google Sheet!');
    }
}
