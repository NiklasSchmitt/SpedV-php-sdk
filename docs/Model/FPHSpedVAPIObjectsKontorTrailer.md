# # FPHSpedVAPIObjectsKontorTrailer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**spedition** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedition**](FPHSpedVAPIObjectsSpeditionsSpedition.md) |  | [readonly]
**last_location** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity**](FPHSpedVAPIObjectsMapsCompanyCity.md) |  | [readonly]
**act_location** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity**](FPHSpedVAPIObjectsMapsCompanyCity.md) |  | [readonly]
**game** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsGameEnum**](FPHSpedVAPIEnumsGameEnum.md) | 0 &#x3D; ETS2  1 &#x3D; ATS  -1 &#x3D; NotSet | [readonly]
**license_plate** | **string** |  | [readonly]
**comment** | **string** |  | [readonly]
**category** | **string** |  | [readonly]
**skin** | **string** |  | [readonly]
**trailer_type** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsKontorTrailerType**](FPHSpedVAPIEnumsKontorTrailerType.md) | 0 &#x3D; StandardTrailer  1 &#x3D; DoubleTrailer  2 &#x3D; BDoubleTrailer  3 &#x3D; TripleTrailer  4 &#x3D; ShortTrailer  -1 &#x3D; NotSet | [readonly]
**default_driver** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser**](FPHSpedVAPIObjectsUsersUser.md) |  | [readonly]
**assigned_scheduler** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser**](FPHSpedVAPIObjectsUsersUser.md) |  | [readonly]
**trailer_available** | **\DateTime** |  | [readonly]
**next_main_inspection** | **\DateTime** |  | [readonly]
**next_safety_check** | **\DateTime** |  | [readonly]
**next_tire_change** | **int** |  | [readonly]
**next_brake_pads_change** | **int** |  | [readonly]
**next_brake_disc_change** | **int** |  | [readonly]
**has_oszilation_damper_defect** | **bool** |  | [readonly]
**has_brake_ventil_defect** | **bool** |  | [readonly]
**needed_maintenance_jobs** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorNeededTrailerMaintenance[]**](FPHSpedVAPIObjectsKontorNeededTrailerMaintenance.md) |  | [readonly]
**km** | **int** |  | [readonly]
**max_weight** | **int** |  | [readonly]
**is_planned** | **bool** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
