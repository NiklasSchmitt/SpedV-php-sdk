# OpenAPI\Client\TaskApi

All URIs are relative to https://api.sped-v.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1TasksDetailsGet()**](TaskApi.md#v1TasksDetailsGet) | **GET** /v1/tasks/details |  |
| [**v1TasksGet()**](TaskApi.md#v1TasksGet) | **GET** /v1/tasks |  |
| [**v1TasksTaskIdDetailsGet()**](TaskApi.md#v1TasksTaskIdDetailsGet) | **GET** /v1/tasks/{taskId}/details |  |
| [**v1TasksTaskIdDrivedataGet()**](TaskApi.md#v1TasksTaskIdDrivedataGet) | **GET** /v1/tasks/{taskId}/drivedata |  |


## `v1TasksDetailsGet()`

```php
v1TasksDetailsGet($task_ids): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTask[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_ids = array(56); // int[]

try {
    $result = $apiInstance->v1TasksDetailsGet($task_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->v1TasksDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_ids** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTask[]**](../Model/FPHSpedVAPIObjectsSpeditionsTask.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TasksGet()`

```php
v1TasksGet($start, $end, $game, $user_id): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsPartialETSTaskInfo[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$game = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum(); // \OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum | 0 = ETS2  1 = ATS  -1 = NotSet
$user_id = 56; // int

try {
    $result = $apiInstance->v1TasksGet($start, $end, $game, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->v1TasksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **\DateTime**|  | [optional] |
| **end** | **\DateTime**|  | [optional] |
| **game** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum**](../Model/.md)| 0 &#x3D; ETS2  1 &#x3D; ATS  -1 &#x3D; NotSet | [optional] |
| **user_id** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsPartialETSTaskInfo[]**](../Model/FPHSpedVAPIObjectsSpeditionsPartialETSTaskInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TasksTaskIdDetailsGet()`

```php
v1TasksTaskIdDetailsGet($task_id): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTask
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 56; // int

try {
    $result = $apiInstance->v1TasksTaskIdDetailsGet($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->v1TasksTaskIdDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTask**](../Model/FPHSpedVAPIObjectsSpeditionsTask.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TasksTaskIdDrivedataGet()`

```php
v1TasksTaskIdDrivedataGet($task_id): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTaskDriveData[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 56; // int

try {
    $result = $apiInstance->v1TasksTaskIdDrivedataGet($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->v1TasksTaskIdDrivedataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTaskDriveData[]**](../Model/FPHSpedVAPIObjectsSpeditionsTaskDriveData.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
