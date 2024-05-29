# OpenAPI\Client\MaintenanceApi

All URIs are relative to https://api.sped-v.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1MaintenanceTrailerGet()**](MaintenanceApi.md#v1MaintenanceTrailerGet) | **GET** /v1/maintenance/trailer |  |
| [**v1MaintenanceTruckGet()**](MaintenanceApi.md#v1MaintenanceTruckGet) | **GET** /v1/maintenance/truck |  |


## `v1MaintenanceTrailerGet()`

```php
v1MaintenanceTrailerGet($show_all): \OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorTrailerMaintenance[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$show_all = false; // bool

try {
    $result = $apiInstance->v1MaintenanceTrailerGet($show_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaintenanceApi->v1MaintenanceTrailerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **show_all** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorTrailerMaintenance[]**](../Model/FPHSpedVAPIObjectsKontorTrailerMaintenance.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MaintenanceTruckGet()`

```php
v1MaintenanceTruckGet($show_all): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruckMaintenance[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$show_all = false; // bool

try {
    $result = $apiInstance->v1MaintenanceTruckGet($show_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaintenanceApi->v1MaintenanceTruckGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **show_all** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruckMaintenance[]**](../Model/FPHSpedVAPIObjectsSpeditionsTruckMaintenance.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
