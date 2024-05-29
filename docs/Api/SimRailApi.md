# OpenAPI\Client\SimRailApi

All URIs are relative to https://api.sped-v.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1SimrailServerGet()**](SimRailApi.md#v1SimrailServerGet) | **GET** /v1/simrail/server |  |
| [**v1SimrailServerIdDispatchstationsGet()**](SimRailApi.md#v1SimrailServerIdDispatchstationsGet) | **GET** /v1/simrail/server/{id}/dispatchstations |  |
| [**v1SimrailServerIdDispatchstationsNameGet()**](SimRailApi.md#v1SimrailServerIdDispatchstationsNameGet) | **GET** /v1/simrail/server/{id}/dispatchstations/{name} |  |
| [**v1SimrailServerIdGet()**](SimRailApi.md#v1SimrailServerIdGet) | **GET** /v1/simrail/server/{id} |  |
| [**v1SimrailServerIdTrainsGet()**](SimRailApi.md#v1SimrailServerIdTrainsGet) | **GET** /v1/simrail/server/{id}/trains |  |
| [**v1SimrailServerIdTrainsNumberGet()**](SimRailApi.md#v1SimrailServerIdTrainsNumberGet) | **GET** /v1/simrail/server/{id}/trains/{number} |  |


## `v1SimrailServerGet()`

```php
v1SimrailServerGet(): \OpenAPI\Client\Model\FPHSpedVServerObjectsSimRailSimRailServer[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SimRailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v1SimrailServerGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimRailApi->v1SimrailServerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVServerObjectsSimRailSimRailServer[]**](../Model/FPHSpedVServerObjectsSimRailSimRailServer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SimrailServerIdDispatchstationsGet()`

```php
v1SimrailServerIdDispatchstationsGet($id): \OpenAPI\Client\Model\FPHSpedVServerObjectsSimRailSimRailDispatchStation[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SimRailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->v1SimrailServerIdDispatchstationsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimRailApi->v1SimrailServerIdDispatchstationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVServerObjectsSimRailSimRailDispatchStation[]**](../Model/FPHSpedVServerObjectsSimRailSimRailDispatchStation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SimrailServerIdDispatchstationsNameGet()`

```php
v1SimrailServerIdDispatchstationsNameGet($id, $name): \OpenAPI\Client\Model\FPHSpedVServerObjectsSimRailSimRailDispatchStation
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SimRailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$name = 'name_example'; // string

try {
    $result = $apiInstance->v1SimrailServerIdDispatchstationsNameGet($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimRailApi->v1SimrailServerIdDispatchstationsNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **name** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVServerObjectsSimRailSimRailDispatchStation**](../Model/FPHSpedVServerObjectsSimRailSimRailDispatchStation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SimrailServerIdGet()`

```php
v1SimrailServerIdGet($id): \OpenAPI\Client\Model\FPHSpedVServerObjectsSimRailSimRailServer
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SimRailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->v1SimrailServerIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimRailApi->v1SimrailServerIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVServerObjectsSimRailSimRailServer**](../Model/FPHSpedVServerObjectsSimRailSimRailServer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SimrailServerIdTrainsGet()`

```php
v1SimrailServerIdTrainsGet($id): \OpenAPI\Client\Model\FPHSpedVServerObjectsSimRailSimRailActiveTrain[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SimRailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->v1SimrailServerIdTrainsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimRailApi->v1SimrailServerIdTrainsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVServerObjectsSimRailSimRailActiveTrain[]**](../Model/FPHSpedVServerObjectsSimRailSimRailActiveTrain.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SimrailServerIdTrainsNumberGet()`

```php
v1SimrailServerIdTrainsNumberGet($id, $number): \OpenAPI\Client\Model\FPHSpedVServerObjectsSimRailSimRailActiveTrain
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SimRailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$number = 'number_example'; // string

try {
    $result = $apiInstance->v1SimrailServerIdTrainsNumberGet($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimRailApi->v1SimrailServerIdTrainsNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **number** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVServerObjectsSimRailSimRailActiveTrain**](../Model/FPHSpedVServerObjectsSimRailSimRailActiveTrain.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
