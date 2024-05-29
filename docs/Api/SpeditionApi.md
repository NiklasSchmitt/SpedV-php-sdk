# OpenAPI\Client\SpeditionApi

All URIs are relative to https://api.sped-v.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1SpeditionAccountsGet()**](SpeditionApi.md#v1SpeditionAccountsGet) | **GET** /v1/spedition/accounts |  |
| [**v1SpeditionBoniTypesGet()**](SpeditionApi.md#v1SpeditionBoniTypesGet) | **GET** /v1/spedition/boniTypes |  |
| [**v1SpeditionChangelogGet()**](SpeditionApi.md#v1SpeditionChangelogGet) | **GET** /v1/spedition/changelog |  |
| [**v1SpeditionGet()**](SpeditionApi.md#v1SpeditionGet) | **GET** /v1/spedition |  |
| [**v1SpeditionPartnershipsGet()**](SpeditionApi.md#v1SpeditionPartnershipsGet) | **GET** /v1/spedition/partnerships |  |
| [**v1SpeditionRanksGet()**](SpeditionApi.md#v1SpeditionRanksGet) | **GET** /v1/spedition/ranks |  |
| [**v1SpeditionStatsGet()**](SpeditionApi.md#v1SpeditionStatsGet) | **GET** /v1/spedition/stats |  |
| [**v1SpeditionStatsSystemGet()**](SpeditionApi.md#v1SpeditionStatsSystemGet) | **GET** /v1/spedition/stats/system |  |
| [**v1SpeditionStatsUserGet()**](SpeditionApi.md#v1SpeditionStatsUserGet) | **GET** /v1/spedition/stats/user |  |
| [**v1SpeditionTargetsGet()**](SpeditionApi.md#v1SpeditionTargetsGet) | **GET** /v1/spedition/targets |  |


## `v1SpeditionAccountsGet()`

```php
v1SpeditionAccountsGet($include_partnerships): \OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyBankAccount[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SpeditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_partnerships = false; // bool

try {
    $result = $apiInstance->v1SpeditionAccountsGet($include_partnerships);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeditionApi->v1SpeditionAccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include_partnerships** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyBankAccount[]**](../Model/FPHSpedVAPIObjectsMoneyBankAccount.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SpeditionBoniTypesGet()`

```php
v1SpeditionBoniTypesGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsBoniType[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SpeditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1SpeditionBoniTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeditionApi->v1SpeditionBoniTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsBoniType[]**](../Model/FPHSpedVAPIObjectsSpeditionsBoniType.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SpeditionChangelogGet()`

```php
v1SpeditionChangelogGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedChangeLogEntry[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SpeditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1SpeditionChangelogGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeditionApi->v1SpeditionChangelogGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedChangeLogEntry[]**](../Model/FPHSpedVAPIObjectsSpeditionsSpedChangeLogEntry.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SpeditionGet()`

```php
v1SpeditionGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsFullSpeditionInfo
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SpeditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1SpeditionGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeditionApi->v1SpeditionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsFullSpeditionInfo**](../Model/FPHSpedVAPIObjectsSpeditionsFullSpeditionInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SpeditionPartnershipsGet()`

```php
v1SpeditionPartnershipsGet($only_accepted): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpeditionPartnershipEntry[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SpeditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$only_accepted = true; // bool

try {
    $result = $apiInstance->v1SpeditionPartnershipsGet($only_accepted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeditionApi->v1SpeditionPartnershipsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **only_accepted** | **bool**|  | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpeditionPartnershipEntry[]**](../Model/FPHSpedVAPIObjectsSpeditionsSpeditionPartnershipEntry.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SpeditionRanksGet()`

```php
v1SpeditionRanksGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsRank[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SpeditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1SpeditionRanksGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeditionApi->v1SpeditionRanksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsRank[]**](../Model/FPHSpedVAPIObjectsSpeditionsRank.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SpeditionStatsGet()`

```php
v1SpeditionStatsGet(): \OpenAPI\Client\Model\FPHSpedVAPIServerCommunicationHelperRESTSpedStats
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SpeditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1SpeditionStatsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeditionApi->v1SpeditionStatsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIServerCommunicationHelperRESTSpedStats**](../Model/FPHSpedVAPIServerCommunicationHelperRESTSpedStats.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SpeditionStatsSystemGet()`

```php
v1SpeditionStatsSystemGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsLiveSystemStatistic
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SpeditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1SpeditionStatsSystemGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeditionApi->v1SpeditionStatsSystemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsLiveSystemStatistic**](../Model/FPHSpedVAPIObjectsLiveSystemStatistic.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SpeditionStatsUserGet()`

```php
v1SpeditionStatsUserGet($start, $end): \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUserStatUser[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SpeditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->v1SpeditionStatsUserGet($start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeditionApi->v1SpeditionStatsUserGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **\DateTime**|  | [optional] |
| **end** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUserStatUser[]**](../Model/FPHSpedVAPIObjectsUsersUserStatUser.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SpeditionTargetsGet()`

```php
v1SpeditionTargetsGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedTarget[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SpeditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1SpeditionTargetsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeditionApi->v1SpeditionTargetsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedTarget[]**](../Model/FPHSpedVAPIObjectsSpeditionsSpedTarget.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
