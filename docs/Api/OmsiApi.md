# OpenAPI\Client\OmsiApi

All URIs are relative to https://api.sped-v.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1OmsiDriventripsGet()**](OmsiApi.md#v1OmsiDriventripsGet) | **GET** /v1/omsi/driventrips |  |
| [**v1OmsiMapsGet()**](OmsiApi.md#v1OmsiMapsGet) | **GET** /v1/omsi/maps |  |
| [**v1OmsiMapsMapidBusstopsGet()**](OmsiApi.md#v1OmsiMapsMapidBusstopsGet) | **GET** /v1/omsi/maps/{mapid}/busstops |  |
| [**v1OmsiMapsMapidDestinationsGet()**](OmsiApi.md#v1OmsiMapsMapidDestinationsGet) | **GET** /v1/omsi/maps/{mapid}/destinations |  |
| [**v1OmsiMapsMapidGet()**](OmsiApi.md#v1OmsiMapsMapidGet) | **GET** /v1/omsi/maps/{mapid} |  |
| [**v1OmsiMapsMapidStationlinksGet()**](OmsiApi.md#v1OmsiMapsMapidStationlinksGet) | **GET** /v1/omsi/maps/{mapid}/stationlinks |  |
| [**v1OmsiMapsMapidToursGet()**](OmsiApi.md#v1OmsiMapsMapidToursGet) | **GET** /v1/omsi/maps/{mapid}/tours |  |
| [**v1OmsiMapsMapidToursTouridGet()**](OmsiApi.md#v1OmsiMapsMapidToursTouridGet) | **GET** /v1/omsi/maps/{mapid}/tours/{tourid} |  |
| [**v1OmsiMapsMapidToursTouridTripsGet()**](OmsiApi.md#v1OmsiMapsMapidToursTouridTripsGet) | **GET** /v1/omsi/maps/{mapid}/tours/{tourid}/trips |  |
| [**v1OmsiMapsMapidTourtripsDateGet()**](OmsiApi.md#v1OmsiMapsMapidTourtripsDateGet) | **GET** /v1/omsi/maps/{mapid}/tourtrips/{date} |  |
| [**v1OmsiMapsMapidTripsGet()**](OmsiApi.md#v1OmsiMapsMapidTripsGet) | **GET** /v1/omsi/maps/{mapid}/trips |  |


## `v1OmsiDriventripsGet()`

```php
v1OmsiDriventripsGet($start, $end): \OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIDrivenTrip[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OmsiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->v1OmsiDriventripsGet($start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmsiApi->v1OmsiDriventripsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `v1OmsiMapsGet()`

```php
v1OmsiMapsGet(): \OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIMap[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OmsiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v1OmsiMapsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmsiApi->v1OmsiMapsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIMap[]**](../Model/FPHSpedVAPIObjectsOMSIMap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OmsiMapsMapidBusstopsGet()`

```php
v1OmsiMapsMapidBusstopsGet($mapid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIBusStop[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OmsiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mapid = 56; // int

try {
    $result = $apiInstance->v1OmsiMapsMapidBusstopsGet($mapid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmsiApi->v1OmsiMapsMapidBusstopsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mapid** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIBusStop[]**](../Model/FPHSpedVAPIObjectsOMSIBusStop.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OmsiMapsMapidDestinationsGet()`

```php
v1OmsiMapsMapidDestinationsGet($mapid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIDestination[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OmsiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mapid = 56; // int

try {
    $result = $apiInstance->v1OmsiMapsMapidDestinationsGet($mapid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmsiApi->v1OmsiMapsMapidDestinationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mapid** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIDestination[]**](../Model/FPHSpedVAPIObjectsOMSIDestination.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OmsiMapsMapidGet()`

```php
v1OmsiMapsMapidGet($mapid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIMap
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OmsiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mapid = 56; // int

try {
    $result = $apiInstance->v1OmsiMapsMapidGet($mapid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmsiApi->v1OmsiMapsMapidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mapid** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIMap**](../Model/FPHSpedVAPIObjectsOMSIMap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OmsiMapsMapidStationlinksGet()`

```php
v1OmsiMapsMapidStationlinksGet($mapid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIStationLink[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OmsiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mapid = 56; // int

try {
    $result = $apiInstance->v1OmsiMapsMapidStationlinksGet($mapid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmsiApi->v1OmsiMapsMapidStationlinksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mapid** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSIStationLink[]**](../Model/FPHSpedVAPIObjectsOMSIStationLink.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OmsiMapsMapidToursGet()`

```php
v1OmsiMapsMapidToursGet($mapid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSITour[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OmsiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mapid = 56; // int

try {
    $result = $apiInstance->v1OmsiMapsMapidToursGet($mapid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmsiApi->v1OmsiMapsMapidToursGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mapid** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSITour[]**](../Model/FPHSpedVAPIObjectsOMSITour.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OmsiMapsMapidToursTouridGet()`

```php
v1OmsiMapsMapidToursTouridGet($mapid, $tourid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSITour
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OmsiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mapid = 56; // int
$tourid = 56; // int

try {
    $result = $apiInstance->v1OmsiMapsMapidToursTouridGet($mapid, $tourid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmsiApi->v1OmsiMapsMapidToursTouridGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mapid** | **int**|  | |
| **tourid** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSITour**](../Model/FPHSpedVAPIObjectsOMSITour.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OmsiMapsMapidToursTouridTripsGet()`

```php
v1OmsiMapsMapidToursTouridTripsGet($mapid, $tourid, $base_date): \OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSITourTrip[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OmsiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mapid = 56; // int
$tourid = 56; // int
$base_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->v1OmsiMapsMapidToursTouridTripsGet($mapid, $tourid, $base_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmsiApi->v1OmsiMapsMapidToursTouridTripsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mapid** | **int**|  | |
| **tourid** | **int**|  | |
| **base_date** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSITourTrip[]**](../Model/FPHSpedVAPIObjectsOMSITourTrip.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OmsiMapsMapidTourtripsDateGet()`

```php
v1OmsiMapsMapidTourtripsDateGet($mapid, $date, $timediff): \OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSITour[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OmsiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mapid = 56; // int
$date = 'date_example'; // string
$timediff = 2; // int

try {
    $result = $apiInstance->v1OmsiMapsMapidTourtripsDateGet($mapid, $date, $timediff);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmsiApi->v1OmsiMapsMapidTourtripsDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mapid** | **int**|  | |
| **date** | **string**|  | |
| **timediff** | **int**|  | [optional] [default to 2] |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSITour[]**](../Model/FPHSpedVAPIObjectsOMSITour.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OmsiMapsMapidTripsGet()`

```php
v1OmsiMapsMapidTripsGet($mapid): \OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSITourTrip[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OmsiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mapid = 56; // int

try {
    $result = $apiInstance->v1OmsiMapsMapidTripsGet($mapid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmsiApi->v1OmsiMapsMapidTripsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mapid** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\FPHSpedVAPIObjectsOMSITourTrip[]**](../Model/FPHSpedVAPIObjectsOMSITourTrip.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
