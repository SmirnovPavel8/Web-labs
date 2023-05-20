<?php


function redirectToHome():void{
    header('Location: laba4_1.php');

    exit();
}

if (false === isset($_POST['Email'], $_POST['Title'], $_POST['Description'])){
  
    redirectToHome();
}

$category = $_POST['Category'];
$title = $_POST['Title'];
$description = $_POST['Description'];
$email = $_POST['Email'];





require __DIR__ . '/vendor/autoload.php';



$client = new Google_Client();
$client->setApplicationName('G');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);

$super =1;
$range = "A:D";
$data = [
    [
        $category,
$title ,
$description,
$email
    ]
];

$values = new Google_Service_Sheets_ValueRange([
    'values' => $data
]);

$options = [
    'valueInputOption' => 'RAW'
];

$spreadsheetId = '';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
foreach($response as $v){
    $super++;
}
$range = "A{$super}:D{$super}";

$service->spreadsheets_values->update($spreadsheetId, $range, $values, $options);

$response = $service->spreadsheets_values->get($spreadsheetId, $range);

redirectToHome();
