<?php

// app/Services/GoogleSheetService.php
namespace App\Services;

use Google\Client;
use Google\Service\Sheets;

class GoogleSheetService
{
    protected $client;
    protected $service;
    protected $spreadsheetId;

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setAuthConfig(storage_path('app/private/rare-ethos-466101-m8-d27964180f8e.json'));
        $this->client->addScope([
            Sheets::SPREADSHEETS,
            Sheets::DRIVE,
        ]);

        $this->service = new Sheets($this->client);
        $this->spreadsheetId = '1ShCydMCsP07UVYEJIgLbXuy0uVEVV1Fvq5PjuTCDZ4c';
    }

    public function readSheet($range = 'Sheet1!A1:D10')
    {
        $response = $this->service->spreadsheets_values->get($this->spreadsheetId, $range);
        return $response->getValues();
    }

    public function writeSheet($range, $values)
    {
        $body = new \Google\Service\Sheets\ValueRange([
            'values' => $values
        ]);

        $params = ['valueInputOption' => 'RAW'];
        $this->service->spreadsheets_values->update(
            $this->spreadsheetId,
            $range,
            $body,
            $params
        );
    }
}