<?php
include("inc_header.php");
?>
<?php
// [START sheets_quickstart]
require __DIR__ . '/vendor/autoload.php';
$client = new Google_Client();
$client->setApplicationName('Google Sheets API PHP Quickstart');
$client->setScopes('https://www.googleapis.com/auth/spreadsheets');
$client->setAuthConfig('credentials.json');
$client->setAccessType('offline');
$client->setPrompt('select_account consent');
$service = new Google_Service_Sheets($client);
$spreadsheetId = '1INX0MwbyzO4cto9muFgJYoJK_bUXuMyhA5mE0tj2fSs';
$range = 'BIG!A:F';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();
print_r($values)
?>
<?php
include("inc_footer.php");
?>