# OpenAPI\Client\TruckApi

All URIs are relative to https://api.sped-v.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1TrucksGet()**](TruckApi.md#v1TrucksGet) | **GET** /v1/trucks |  |
| [**v1TrucksTruckidStatisticsGet()**](TruckApi.md#v1TrucksTruckidStatisticsGet) | **GET** /v1/trucks/{truckid}/statistics |  |
| [**v1TrucktypesGet()**](TruckApi.md#v1TrucktypesGet) | **GET** /v1/trucktypes |  |


## `v1TrucksGet()`

```php
v1TrucksGet($include_partnerships): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruck[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TruckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_partnerships = false; // bool

try {
    $result = $apiInstance->v1TrucksGet($include_partnerships);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TruckApi->v1TrucksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include_partnerships** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruck[]**](../Model/FPHSpedVAPIObjectsSpeditionsTruck.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TrucksTruckidStatisticsGet()`

```php
v1TrucksTruckidStatisticsGet($truckid, $startdate, $enddate): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruckBranchStatistic
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TruckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$truckid = 56; // int
$startdate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$enddate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->v1TrucksTruckidStatisticsGet($truckid, $startdate, $enddate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TruckApi->v1TrucksTruckidStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **truckid** | **int**|  | |
| **startdate** | **\DateTime**|  | [optional] |
| **enddate** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruckBranchStatistic**](../Model/FPHSpedVAPIObjectsSpeditionsTruckBranchStatistic.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TrucktypesGet()`

```php
v1TrucktypesGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruckType[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TruckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v1TrucktypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TruckApi->v1TrucktypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruckType[]**](../Model/FPHSpedVAPIObjectsSpeditionsTruckType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
