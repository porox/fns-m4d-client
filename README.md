#  Клиент для проверки машиночитаемых доверенностей (МЧД) в распределенном реестре ФНС России (m4d.nalog.gov.ru).
[![Latest Stable Version](https://img.shields.io/packagist/v/porox/fns-m4d-client.svg)](https://packagist.org/packages/porox/fns-m4d-client)
[![Total Downloads](https://img.shields.io/packagist/dt/porox/dfns-m4d-client.svg)](https://packagist.org/packages/porox/fns-m4d-client)
[![Downloads Month](https://img.shields.io/packagist/dm/porox/fns-m4d-client.svg)](https://packagist.org/packages/porox/fns-m4d-client)
```php
<?php
include 'vendor/autoload.php';

$guzzle = new \GuzzleHttp\Client(['timeout' => 30, 'connect_timeout' => 60]);

$client = new \Porox\FNSM4D\Client\FNSM4DClient($guzzle);
//Уникальный номер доверенности
$poaNumber = '';
//ИНН доверителя
$orgInn = '';
//ИНН представителя
$personInn = '';
try {
    //Проверка статуса доверенности
    $public = $client->checkM4D($poaNumber);
    //Получение полных сведений о доверенности
    $private = $client->getM4DFullInfo($poaNumber, $orgInn, $personInn);
    //Получение pdf файла доверенности
    $pdfStream = $client->getM4DPDF($poaNumber, $orgInn, $personInn);
    file_put_contents($poaNumber . '.pdf', $pdfStream);
    //Получение zip архива доверенности
    $zipStream = $client->getM4DZip($poaNumber, $orgInn, $personInn);
    file_put_contents($poaNumber . '.zip', $zipStream);
} catch (\Porox\FNSM4D\Client\Exception\FNSMchdExceptionInterface $exception) {
    //
}
```