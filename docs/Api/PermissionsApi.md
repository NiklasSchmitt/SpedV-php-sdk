# OpenAPI\Client\PermissionsApi

All URIs are relative to https://api.sped-v.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1PermissionsGet()**](PermissionsApi.md#v1PermissionsGet) | **GET** /v1/permissions |  |


## `v1PermissionsGet()`

```php
v1PermissionsGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsPermission[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1PermissionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->v1PermissionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsPermission[]**](../Model/FPHSpedVAPIObjectsSpeditionsPermission.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
