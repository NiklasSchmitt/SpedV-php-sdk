# OpenAPI\Client\UserApi

All URIs are relative to https://api.sped-v.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1UserGet()**](UserApi.md#v1UserGet) | **GET** /v1/user |  |
| [**v1UserprofilesGet()**](UserApi.md#v1UserprofilesGet) | **GET** /v1/userprofiles |  |
| [**v1UsersGet()**](UserApi.md#v1UsersGet) | **GET** /v1/users |  |
| [**v1UsersUserIdChangelogGet()**](UserApi.md#v1UsersUserIdChangelogGet) | **GET** /v1/users/{userId}/changelog |  |
| [**v1UsersUserIdOmsiTripsGet()**](UserApi.md#v1UsersUserIdOmsiTripsGet) | **GET** /v1/users/{userId}/omsiTrips |  |
| [**v1UsersUserIdProfileGet()**](UserApi.md#v1UsersUserIdProfileGet) | **GET** /v1/users/{userId}/profile |  |
| [**v1UsersUserIdTasksGet()**](UserApi.md#v1UsersUserIdTasksGet) | **GET** /v1/users/{userId}/tasks |  |
| [**v1VacationsGet()**](UserApi.md#v1VacationsGet) | **GET** /v1/vacations |  |


## `v1UserGet()`

```php
v1UserGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersFullUserInfo
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1UserGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UserGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersFullUserInfo**](../Model/FPHSpedVAPIObjectsUsersFullUserInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UserprofilesGet()`

```php
v1UserprofilesGet($ids): \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUserProfile[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(56); // int[]

try {
    $result = $apiInstance->v1UserprofilesGet($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UserprofilesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUserProfile[]**](../Model/FPHSpedVAPIObjectsUsersUserProfile.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersGet()`

```php
v1UsersGet($include_kontor_partnerships, $include_truck_partnerships): \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUserLiteInfo[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_kontor_partnerships = false; // bool
$include_truck_partnerships = false; // bool

try {
    $result = $apiInstance->v1UsersGet($include_kontor_partnerships, $include_truck_partnerships);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include_kontor_partnerships** | **bool**|  | [optional] [default to false] |
| **include_truck_partnerships** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUserLiteInfo[]**](../Model/FPHSpedVAPIObjectsUsersUserLiteInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersUserIdChangelogGet()`

```php
v1UsersUserIdChangelogGet($user_id): \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUserChangeLogEntry[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int

try {
    $result = $apiInstance->v1UsersUserIdChangelogGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersUserIdChangelogGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUserChangeLogEntry[]**](../Model/FPHSpedVAPIObjectsUsersUserChangeLogEntry.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersUserIdOmsiTripsGet()`

```php
v1UsersUserIdOmsiTripsGet($user_id, $start, $end): \OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIDrivenTrip[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->v1UsersUserIdOmsiTripsGet($user_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersUserIdOmsiTripsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**|  | |
| **start** | **\DateTime**|  | [optional] |
| **end** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIDrivenTrip[]**](../Model/FPHSpedVAPIObjectsOMSIDrivenTrip.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersUserIdProfileGet()`

```php
v1UsersUserIdProfileGet($user_id): \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUserProfile
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int

try {
    $result = $apiInstance->v1UsersUserIdProfileGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersUserIdProfileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUserProfile**](../Model/FPHSpedVAPIObjectsUsersUserProfile.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersUserIdTasksGet()`

```php
v1UsersUserIdTasksGet($user_id, $start, $end, $game, $only_current_sped): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsPartialETSTaskInfo[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$game = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum(); // \OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum | 0 = ETS2  1 = ATS  -1 = NotSet
$only_current_sped = false; // bool

try {
    $result = $apiInstance->v1UsersUserIdTasksGet($user_id, $start, $end, $game, $only_current_sped);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersUserIdTasksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**|  | |
| **start** | **\DateTime**|  | [optional] |
| **end** | **\DateTime**|  | [optional] |
| **game** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum**](../Model/.md)| 0 &#x3D; ETS2  1 &#x3D; ATS  -1 &#x3D; NotSet | [optional] |
| **only_current_sped** | **bool**|  | [optional] [default to false] |

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

## `v1VacationsGet()`

```php
v1VacationsGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsVacation[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1VacationsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1VacationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsVacation[]**](../Model/FPHSpedVAPIObjectsSpeditionsVacation.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
