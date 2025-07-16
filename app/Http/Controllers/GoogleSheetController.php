<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleSheetService;

class GoogleSheetController extends Controller
{
    public function read(GoogleSheetService $sheet)
    {
        $data = $sheet->readSheet(); // Get values from Google Sheets
        return view('sheet.index', compact('data'));
    }

    public function write(GoogleSheetService $sheet)
    {
        $sheet->writeSheet('Sheet1!A2', [
            ['Name', 'Email'],
            ['John Doe', 'john@example.com'],
        ]);
        return 'Data written successfully';
    }
}
