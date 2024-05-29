# # FPHSpedVAPIObjectsSpeditionsTaskPosition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**timestamp** | **\DateTime** |  |
**change_type** | [**\OpenAPI\Client\Model\FPHSpedVAPITaskPositionType**](FPHSpedVAPITaskPositionType.md) | 0 &#x3D; StateChange  1 &#x3D; RefusedTruckInfo  2 &#x3D; Refueled  3 &#x3D; FerryUsed  -1 &#x3D; NotSet | [readonly]
**changed_by** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser**](FPHSpedVAPIObjectsUsersUser.md) |  |
**refused_truck** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruck**](FPHSpedVAPIObjectsSpeditionsTruck.md) |  |
**state_changed_from** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsETSTaskState**](FPHSpedVAPIEnumsETSTaskState.md) | 0 &#x3D; InDrive  1 &#x3D; Done  2 &#x3D; Settled  3 &#x3D; Fail  4 &#x3D; AdminCheck  5 &#x3D; Paused  6 &#x3D; Cancelled  7 &#x3D; Invalid  -1 &#x3D; NotAvaliable |
**state_change_to** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsETSTaskState**](FPHSpedVAPIEnumsETSTaskState.md) | 0 &#x3D; InDrive  1 &#x3D; Done  2 &#x3D; Settled  3 &#x3D; Fail  4 &#x3D; AdminCheck  5 &#x3D; Paused  6 &#x3D; Cancelled  7 &#x3D; Invalid  -1 &#x3D; NotAvaliable |
**refueled_liter** | **float** |  |
**refueled_sum** | **float** |  |
**used_gas_station** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsGasStation**](FPHSpedVAPIObjectsMapsGasStation.md) |  | [readonly]
**used_ferry** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsFerry**](FPHSpedVAPIObjectsMapsFerry.md) |  | [readonly]
**coordinates** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsTelemetryETSVektor**](FPHSpedVAPIObjectsTelemetryETSVektor.md) |  |
**comment** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
