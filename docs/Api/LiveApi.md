# OpenAPI\Client\LiveApi

All URIs are relative to https://api.sped-v.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1LiveOnlineuserGet()**](LiveApi.md#v1LiveOnlineuserGet) | **GET** /v1/live/onlineuser |  |
| [**v1LiveOnlineusersGet()**](LiveApi.md#v1LiveOnlineusersGet) | **GET** /v1/live/onlineusers |  |
| [**v1LivePositionsGet()**](LiveApi.md#v1LivePositionsGet) | **GET** /v1/live/positions |  |


## `v1LiveOnlineuserGet()`

```php
v1LiveOnlineuserGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsLiveConvoyInfo
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1LiveOnlineuserGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->v1LiveOnlineuserGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsLiveConvoyInfo**](../Model/FPHSpedVAPIObjectsLiveConvoyInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1LiveOnlineusersGet()`

```php
v1LiveOnlineusersGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsLiveConvoyInfo[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1LiveOnlineusersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->v1LiveOnlineusersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsLiveConvoyInfo[]**](../Model/FPHSpedVAPIObjectsLiveConvoyInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1LivePositionsGet()`

```php
v1LivePositionsGet($sped_id, $include_single_player): \OpenAPI\Client\Model\FPHSpedVAPIServerCommunicationHelperRESTUserPosition[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sped_id = 56; // int
$include_single_player = false; // bool

try {
    $result = $apiInstance->v1LivePositionsGet($sped_id, $include_single_player);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->v1LivePositionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sped_id** | **int**|  | [optional] |
| **include_single_player** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIServerCommunicationHelperRESTUserPosition[]**](../Model/FPHSpedVAPIServerCommunicationHelperRESTUserPosition.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
