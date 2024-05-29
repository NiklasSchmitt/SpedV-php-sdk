# # FPHSpedVAPIObjectsKontorNeededTrailerMaintenance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsMaintenanceKind**](FPHSpedVAPIEnumsMaintenanceKind.md) | 0 &#x3D; Engine  1 &#x3D; OszilationDamper  2 &#x3D; Stabilizer  3 &#x3D; StoneChip  4 &#x3D; Transmission  5 &#x3D; Wishbone  6 &#x3D; BrakePads  7 &#x3D; BrakeDiscs  8 &#x3D; EngineMaintenance  9 &#x3D; TireChange  10 &#x3D; MainCheck  11 &#x3D; SafetyCheck  12 &#x3D; SaddlePlate  13 &#x3D; AirPressureUnit  14 &#x3D; Alternator  15 &#x3D; BrakeVentil  -1 &#x3D; NotSet | [readonly]
**external_time** | **string** |  | [readonly]
**internal_time** | **string** |  | [readonly]
**external_cost** | **int** |  | [readonly]
**internal_cost** | **int** |  | [readonly]
**needed_immediately** | **bool** |  | [readonly]
**needed_till_km** | **int** |  | [readonly]
**needed_till_date** | **\DateTime** |  | [readonly]
**repeat_time_span** | **string** |  | [readonly]
**repeat_km** | **int** |  | [readonly]
**current_km** | **int** |  | [readonly]
**game** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum**](FPHSpedVAPIEnumsGameEnum.md) | 0 &#x3D; ETS2  1 &#x3D; ATS  -1 &#x3D; NotSet | [readonly]
**km_since_last** | **int** |  | [readonly]
**time_since_last** | **string** |  | [readonly]
**visible_remaining** | **string** |  | [readonly]
**repeat_span** | **float** |  | [readonly]
**span_since_last** | **float** |  | [readonly]
**is_needed** | **bool** |  | [readonly]
**is_overdue** | **bool** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
