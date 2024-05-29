# OpenAPI\Client\BranchApi

All URIs are relative to https://api.sped-v.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1OwnedbranchesBranchidGet()**](BranchApi.md#v1OwnedbranchesBranchidGet) | **GET** /v1/ownedbranches/{branchid} |  |
| [**v1OwnedbranchesBranchidStatisticsGet()**](BranchApi.md#v1OwnedbranchesBranchidStatisticsGet) | **GET** /v1/ownedbranches/{branchid}/statistics |  |
| [**v1OwnedbranchesGet()**](BranchApi.md#v1OwnedbranchesGet) | **GET** /v1/ownedbranches |  |
| [**v1SparepartsGet()**](BranchApi.md#v1SparepartsGet) | **GET** /v1/spareparts |  |
| [**v1SparepartsSparepartidGet()**](BranchApi.md#v1SparepartsSparepartidGet) | **GET** /v1/spareparts/{sparepartid} |  |
| [**v1SparepartsSparepartidProvidersGet()**](BranchApi.md#v1SparepartsSparepartidProvidersGet) | **GET** /v1/spareparts/{sparepartid}/providers |  |


## `v1OwnedbranchesBranchidGet()`

```php
v1OwnedbranchesBranchidGet($branchid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruckBranchStatistic
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BranchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$branchid = 56; // int

try {
    $result = $apiInstance->v1OwnedbranchesBranchidGet($branchid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchApi->v1OwnedbranchesBranchidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **branchid** | **int**|  | |

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

## `v1OwnedbranchesBranchidStatisticsGet()`

```php
v1OwnedbranchesBranchidStatisticsGet($branchid, $startdate, $enddate): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruckBranchStatistic
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BranchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$branchid = 56; // int
$startdate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$enddate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->v1OwnedbranchesBranchidStatisticsGet($branchid, $startdate, $enddate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchApi->v1OwnedbranchesBranchidStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **branchid** | **int**|  | |
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

## `v1OwnedbranchesGet()`

```php
v1OwnedbranchesGet($include_partnerships): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsOwnedBranch[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BranchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_partnerships = false; // bool

try {
    $result = $apiInstance->v1OwnedbranchesGet($include_partnerships);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchApi->v1OwnedbranchesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include_partnerships** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsOwnedBranch[]**](../Model/FPHSpedVAPIObjectsSpeditionsOwnedBranch.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SparepartsGet()`

```php
v1SparepartsGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSparePart
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BranchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1SparepartsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchApi->v1SparepartsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSparePart**](../Model/FPHSpedVAPIObjectsSpeditionsSparePart.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SparepartsSparepartidGet()`

```php
v1SparepartsSparepartidGet($sparepartid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSparePart
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BranchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sparepartid = 56; // int

try {
    $result = $apiInstance->v1SparepartsSparepartidGet($sparepartid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchApi->v1SparepartsSparepartidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sparepartid** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSparePart**](../Model/FPHSpedVAPIObjectsSpeditionsSparePart.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SparepartsSparepartidProvidersGet()`

```php
v1SparepartsSparepartidProvidersGet($sparepartid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSparePart
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BranchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sparepartid = 56; // int

try {
    $result = $apiInstance->v1SparepartsSparepartidProvidersGet($sparepartid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchApi->v1SparepartsSparepartidProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sparepartid** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSparePart**](../Model/FPHSpedVAPIObjectsSpeditionsSparePart.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
