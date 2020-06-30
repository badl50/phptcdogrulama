$client = new SoapClient("https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL");
try {
    $result = $client->TCKimlikNoDogrula([
        'TCKimlikNo' => '5555555555',
        'Ad' => 'TAYFUN',
        'Soyad' => 'ERBİLEN',
        'DogumYili' => '1993'
    ]);
    if ($result->TCKimlikNoDogrulaResult) {
        echo 'T.C. Kimlik No Doğru';
    } else {
        echo 'T.C. Kimlik No Hatalı';
    }
} catch (Exception $e) {
    echo $e->faultstring;
}