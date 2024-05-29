# OpenAPI\Client\BankAccountApi

All URIs are relative to https://api.sped-v.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1BankaccountsAccountIdGet()**](BankAccountApi.md#v1BankaccountsAccountIdGet) | **GET** /v1/bankaccounts/{accountId} |  |
| [**v1BankaccountsAccountIdTransfersDailyGet()**](BankAccountApi.md#v1BankaccountsAccountIdTransfersDailyGet) | **GET** /v1/bankaccounts/{accountId}/transfers/daily |  |
| [**v1BankaccountsAccountIdTransfersGet()**](BankAccountApi.md#v1BankaccountsAccountIdTransfersGet) | **GET** /v1/bankaccounts/{accountId}/transfers |  |
| [**v1BankaccountsAccountIdTransfersSummaryGet()**](BankAccountApi.md#v1BankaccountsAccountIdTransfersSummaryGet) | **GET** /v1/bankaccounts/{accountId}/transfers/summary |  |
| [**v1BankaccountsGet()**](BankAccountApi.md#v1BankaccountsGet) | **GET** /v1/bankaccounts |  |
| [**v1BankaccountsIbanGet()**](BankAccountApi.md#v1BankaccountsIbanGet) | **GET** /v1/bankaccounts/{iban} |  |


## `v1BankaccountsAccountIdGet()`

```php
v1BankaccountsAccountIdGet($account_id): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyLiteBankAccount[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int

try {
    $result = $apiInstance->v1BankaccountsAccountIdGet($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->v1BankaccountsAccountIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyLiteBankAccount[]**](../Model/FPHSpedVAPIObjectsMoneyLiteBankAccount.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1BankaccountsAccountIdTransfersDailyGet()`

```php
v1BankaccountsAccountIdTransfersDailyGet($account_id, $start_date, $end_date): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyMoneyTransferDay[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->v1BankaccountsAccountIdTransfersDailyGet($account_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->v1BankaccountsAccountIdTransfersDailyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**|  | |
| **start_date** | **\DateTime**|  | [optional] |
| **end_date** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyMoneyTransferDay[]**](../Model/FPHSpedVAPIObjectsMoneyMoneyTransferDay.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1BankaccountsAccountIdTransfersGet()`

```php
v1BankaccountsAccountIdTransfersGet($account_id, $start_date): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyMoneyTransfer[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->v1BankaccountsAccountIdTransfersGet($account_id, $start_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->v1BankaccountsAccountIdTransfersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**|  | |
| **start_date** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyMoneyTransfer[]**](../Model/FPHSpedVAPIObjectsMoneyMoneyTransfer.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1BankaccountsAccountIdTransfersSummaryGet()`

```php
v1BankaccountsAccountIdTransfersSummaryGet($account_id, $start_date, $end_date): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyMoneyEURData[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->v1BankaccountsAccountIdTransfersSummaryGet($account_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->v1BankaccountsAccountIdTransfersSummaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**|  | |
| **start_date** | **\DateTime**|  | [optional] |
| **end_date** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyMoneyEURData[]**](../Model/FPHSpedVAPIObjectsMoneyMoneyEURData.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1BankaccountsGet()`

```php
v1BankaccountsGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyBankAccount[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1BankaccountsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->v1BankaccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyBankAccount[]**](../Model/FPHSpedVAPIObjectsMoneyBankAccount.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1BankaccountsIbanGet()`

```php
v1BankaccountsIbanGet($iban): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyLiteBankAccount[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$iban = 'iban_example'; // string

try {
    $result = $apiInstance->v1BankaccountsIbanGet($iban);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->v1BankaccountsIbanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **iban** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyLiteBankAccount[]**](../Model/FPHSpedVAPIObjectsMoneyLiteBankAccount.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
