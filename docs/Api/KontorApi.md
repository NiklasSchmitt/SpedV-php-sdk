# OpenAPI\Client\KontorApi

All URIs are relative to https://api.sped-v.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1KontorGameJobsAvailableGet()**](KontorApi.md#v1KontorGameJobsAvailableGet) | **GET** /v1/kontor/{game}/jobs/available |  |
| [**v1KontorGameJobsGet()**](KontorApi.md#v1KontorGameJobsGet) | **GET** /v1/kontor/{game}/jobs |  |
| [**v1KontorGameJobsJobidGet()**](KontorApi.md#v1KontorGameJobsJobidGet) | **GET** /v1/kontor/{game}/jobs/{jobid} |  |
| [**v1KontorGamePartsAvailableGet()**](KontorApi.md#v1KontorGamePartsAvailableGet) | **GET** /v1/kontor/{game}/parts/available |  |
| [**v1KontorGamePartsGet()**](KontorApi.md#v1KontorGamePartsGet) | **GET** /v1/kontor/{game}/parts |  |
| [**v1KontorGamePartsPartidGet()**](KontorApi.md#v1KontorGamePartsPartidGet) | **GET** /v1/kontor/{game}/parts/{partid} |  |
| [**v1KontorGamePartsPartidJobsGet()**](KontorApi.md#v1KontorGamePartsPartidJobsGet) | **GET** /v1/kontor/{game}/parts/{partid}/jobs |  |
| [**v1KontorGameTrailersGet()**](KontorApi.md#v1KontorGameTrailersGet) | **GET** /v1/kontor/{game}/trailers |  |


## `v1KontorGameJobsAvailableGet()`

```php
v1KontorGameJobsAvailableGet($game): \OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJobOffer[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\KontorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$game = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum(); // \OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum | 0 = ETS2  1 = ATS  -1 = NotSet

try {
    $result = $apiInstance->v1KontorGameJobsAvailableGet($game);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KontorApi->v1KontorGameJobsAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **game** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum**](../Model/.md)| 0 &#x3D; ETS2  1 &#x3D; ATS  -1 &#x3D; NotSet | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJobOffer[]**](../Model/FPHSpedVAPIObjectsKontorJobOffer.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1KontorGameJobsGet()`

```php
v1KontorGameJobsGet($game, $show_finished): \OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJob[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\KontorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$game = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum(); // \OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum | 0 = ETS2  1 = ATS  -1 = NotSet
$show_finished = true; // bool

try {
    $result = $apiInstance->v1KontorGameJobsGet($game, $show_finished);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KontorApi->v1KontorGameJobsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **game** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum**](../Model/.md)| 0 &#x3D; ETS2  1 &#x3D; ATS  -1 &#x3D; NotSet | |
| **show_finished** | **bool**|  | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJob[]**](../Model/FPHSpedVAPIObjectsKontorJob.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1KontorGameJobsJobidGet()`

```php
v1KontorGameJobsJobidGet($game, $jobid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJob
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\KontorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$game = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum(); // \OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum | 0 = ETS2  1 = ATS  -1 = NotSet
$jobid = 56; // int

try {
    $result = $apiInstance->v1KontorGameJobsJobidGet($game, $jobid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KontorApi->v1KontorGameJobsJobidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **game** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum**](../Model/.md)| 0 &#x3D; ETS2  1 &#x3D; ATS  -1 &#x3D; NotSet | |
| **jobid** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJob**](../Model/FPHSpedVAPIObjectsKontorJob.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1KontorGamePartsAvailableGet()`

```php
v1KontorGamePartsAvailableGet($game, $include_partnerships): \OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJobPart[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\KontorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$game = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum(); // \OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum | 0 = ETS2  1 = ATS  -1 = NotSet
$include_partnerships = false; // bool

try {
    $result = $apiInstance->v1KontorGamePartsAvailableGet($game, $include_partnerships);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KontorApi->v1KontorGamePartsAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **game** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum**](../Model/.md)| 0 &#x3D; ETS2  1 &#x3D; ATS  -1 &#x3D; NotSet | |
| **include_partnerships** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJobPart[]**](../Model/FPHSpedVAPIObjectsKontorJobPart.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1KontorGamePartsGet()`

```php
v1KontorGamePartsGet($game, $show_finished, $include_partnerships): \OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJobPart[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\KontorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$game = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum(); // \OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum | 0 = ETS2  1 = ATS  -1 = NotSet
$show_finished = true; // bool
$include_partnerships = false; // bool

try {
    $result = $apiInstance->v1KontorGamePartsGet($game, $show_finished, $include_partnerships);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KontorApi->v1KontorGamePartsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **game** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum**](../Model/.md)| 0 &#x3D; ETS2  1 &#x3D; ATS  -1 &#x3D; NotSet | |
| **show_finished** | **bool**|  | [optional] [default to true] |
| **include_partnerships** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJobPart[]**](../Model/FPHSpedVAPIObjectsKontorJobPart.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1KontorGamePartsPartidGet()`

```php
v1KontorGamePartsPartidGet($game, $partid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJobPart
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\KontorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$game = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum(); // \OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum | 0 = ETS2  1 = ATS  -1 = NotSet
$partid = 56; // int

try {
    $result = $apiInstance->v1KontorGamePartsPartidGet($game, $partid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KontorApi->v1KontorGamePartsPartidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **game** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum**](../Model/.md)| 0 &#x3D; ETS2  1 &#x3D; ATS  -1 &#x3D; NotSet | |
| **partid** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJobPart**](../Model/FPHSpedVAPIObjectsKontorJobPart.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1KontorGamePartsPartidJobsGet()`

```php
v1KontorGamePartsPartidJobsGet($game, $partid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJob[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\KontorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$game = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum(); // \OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum | 0 = ETS2  1 = ATS  -1 = NotSet
$partid = 56; // int

try {
    $result = $apiInstance->v1KontorGamePartsPartidJobsGet($game, $partid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KontorApi->v1KontorGamePartsPartidJobsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **game** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum**](../Model/.md)| 0 &#x3D; ETS2  1 &#x3D; ATS  -1 &#x3D; NotSet | |
| **partid** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJob[]**](../Model/FPHSpedVAPIObjectsKontorJob.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1KontorGameTrailersGet()`

```php
v1KontorGameTrailersGet($game, $include_partnerships): \OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorTrailer[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\KontorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$game = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum(); // \OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum | 0 = ETS2  1 = ATS  -1 = NotSet
$include_partnerships = false; // bool

try {
    $result = $apiInstance->v1KontorGameTrailersGet($game, $include_partnerships);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KontorApi->v1KontorGameTrailersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **game** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum**](../Model/.md)| 0 &#x3D; ETS2  1 &#x3D; ATS  -1 &#x3D; NotSet | |
| **include_partnerships** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorTrailer[]**](../Model/FPHSpedVAPIObjectsKontorTrailer.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
