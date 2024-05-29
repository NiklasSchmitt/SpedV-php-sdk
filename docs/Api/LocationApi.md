# OpenAPI\Client\LocationApi

All URIs are relative to https://api.sped-v.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1LocationQueryGet()**](LocationApi.md#v1LocationQueryGet) | **GET** /v1/location/{query} |  |
| [**v1LocationRealrouteStartCityIdDestinationCityIdGet()**](LocationApi.md#v1LocationRealrouteStartCityIdDestinationCityIdGet) | **GET** /v1/location/realroute/{startCityId}/{destinationCityId} |  |
| [**v1LocationScsmapDistanceStartBranchIdDestinationBranchIdGet()**](LocationApi.md#v1LocationScsmapDistanceStartBranchIdDestinationBranchIdGet) | **GET** /v1/location/scsmap/distance/{startBranchId}/{destinationBranchId} |  |


## `v1LocationQueryGet()`

```php
v1LocationQueryGet($query): \OpenAPI\Client\Model\BingMapsRESTToolkitLocation
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query = 'query_example'; // string

try {
    $result = $apiInstance->v1LocationQueryGet($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->v1LocationQueryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\BingMapsRESTToolkitLocation**](../Model/BingMapsRESTToolkitLocation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1LocationRealrouteStartCityIdDestinationCityIdGet()`

```php
v1LocationRealrouteStartCityIdDestinationCityIdGet($start_city_id, $destination_city_id): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsRealRoute
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_city_id = 56; // int
$destination_city_id = 56; // int

try {
    $result = $apiInstance->v1LocationRealrouteStartCityIdDestinationCityIdGet($start_city_id, $destination_city_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->v1LocationRealrouteStartCityIdDestinationCityIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_city_id** | **int**|  | |
| **destination_city_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsRealRoute**](../Model/FPHSpedVAPIObjectsMapsRealRoute.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1LocationScsmapDistanceStartBranchIdDestinationBranchIdGet()`

```php
v1LocationScsmapDistanceStartBranchIdDestinationBranchIdGet($start_branch_id, $destination_branch_id): \OpenAPI\Client\Model\FPHSpedVAPIObjectsLiveSGMDistance
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_branch_id = 56; // int
$destination_branch_id = 56; // int

try {
    $result = $apiInstance->v1LocationScsmapDistanceStartBranchIdDestinationBranchIdGet($start_branch_id, $destination_branch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->v1LocationScsmapDistanceStartBranchIdDestinationBranchIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_branch_id** | **int**|  | |
| **destination_branch_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsLiveSGMDistance**](../Model/FPHSpedVAPIObjectsLiveSGMDistance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
