# OpenAPI\Client\MapsApi

All URIs are relative to https://api.sped-v.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1CompaniesCompidBranchesGet()**](MapsApi.md#v1CompaniesCompidBranchesGet) | **GET** /v1/companies/{compid}/branches |  |
| [**v1CompaniesCompidGet()**](MapsApi.md#v1CompaniesCompidGet) | **GET** /v1/companies/{compid} |  |
| [**v1CompaniesGet()**](MapsApi.md#v1CompaniesGet) | **GET** /v1/companies |  |
| [**v1CompanycategoriesCompidGet()**](MapsApi.md#v1CompanycategoriesCompidGet) | **GET** /v1/companycategories/{compid} |  |
| [**v1CompanycategoriesGet()**](MapsApi.md#v1CompanycategoriesGet) | **GET** /v1/companycategories |  |
| [**v1CountriesGet()**](MapsApi.md#v1CountriesGet) | **GET** /v1/countries |  |
| [**v1MapsGet()**](MapsApi.md#v1MapsGet) | **GET** /v1/maps |  |
| [**v1MapsMapIdCitiesGet()**](MapsApi.md#v1MapsMapIdCitiesGet) | **GET** /v1/maps/{mapId}/cities |  |
| [**v1MapsMapIdCompanycitiesGet()**](MapsApi.md#v1MapsMapIdCompanycitiesGet) | **GET** /v1/maps/{mapId}/companycities |  |


## `v1CompaniesCompidBranchesGet()`

```php
v1CompaniesCompidBranchesGet($compid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$compid = 56; // int

try {
    $result = $apiInstance->v1CompaniesCompidBranchesGet($compid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapsApi->v1CompaniesCompidBranchesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **compid** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity[]**](../Model/FPHSpedVAPIObjectsMapsCompanyCity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1CompaniesCompidGet()`

```php
v1CompaniesCompidGet($compid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompany
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$compid = 56; // int

try {
    $result = $apiInstance->v1CompaniesCompidGet($compid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapsApi->v1CompaniesCompidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **compid** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompany**](../Model/FPHSpedVAPIObjectsMapsCompany.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1CompaniesGet()`

```php
v1CompaniesGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompany[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v1CompaniesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapsApi->v1CompaniesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompany[]**](../Model/FPHSpedVAPIObjectsMapsCompany.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1CompanycategoriesCompidGet()`

```php
v1CompanycategoriesCompidGet($compid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCategory
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$compid = 56; // int

try {
    $result = $apiInstance->v1CompanycategoriesCompidGet($compid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapsApi->v1CompanycategoriesCompidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **compid** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCategory**](../Model/FPHSpedVAPIObjectsMapsCompanyCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1CompanycategoriesGet()`

```php
v1CompanycategoriesGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCategory[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v1CompanycategoriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapsApi->v1CompanycategoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCategory[]**](../Model/FPHSpedVAPIObjectsMapsCompanyCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1CountriesGet()`

```php
v1CountriesGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCountry[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v1CountriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapsApi->v1CountriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCountry[]**](../Model/FPHSpedVAPIObjectsMapsCountry.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MapsGet()`

```php
v1MapsGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsMap[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v1MapsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapsApi->v1MapsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsMap[]**](../Model/FPHSpedVAPIObjectsMapsMap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MapsMapIdCitiesGet()`

```php
v1MapsMapIdCitiesGet($map_id): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCity[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$map_id = 56; // int

try {
    $result = $apiInstance->v1MapsMapIdCitiesGet($map_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapsApi->v1MapsMapIdCitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **map_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCity[]**](../Model/FPHSpedVAPIObjectsMapsCity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MapsMapIdCompanycitiesGet()`

```php
v1MapsMapIdCompanycitiesGet($map_id): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MapsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$map_id = 56; // int

try {
    $result = $apiInstance->v1MapsMapIdCompanycitiesGet($map_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapsApi->v1MapsMapIdCompanycitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **map_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity[]**](../Model/FPHSpedVAPIObjectsMapsCompanyCity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
