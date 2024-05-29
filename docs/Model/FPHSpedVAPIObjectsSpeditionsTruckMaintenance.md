# # FPHSpedVAPIObjectsSpeditionsTruckMaintenance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**truck** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruck**](FPHSpedVAPIObjectsSpeditionsTruck.md) |  | [readonly]
**owned_branch** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsOwnedBranch**](FPHSpedVAPIObjectsSpeditionsOwnedBranch.md) |  | [readonly]
**initiated_by_user** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser**](FPHSpedVAPIObjectsUsersUser.md) |  | [readonly]
**maintenance_kind** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsMaintenanceKind**](FPHSpedVAPIEnumsMaintenanceKind.md) | 0 &#x3D; Engine  1 &#x3D; OszilationDamper  2 &#x3D; Stabilizer  3 &#x3D; StoneChip  4 &#x3D; Transmission  5 &#x3D; Wishbone  6 &#x3D; BrakePads  7 &#x3D; BrakeDiscs  8 &#x3D; EngineMaintenance  9 &#x3D; TireChange  10 &#x3D; MainCheck  11 &#x3D; SafetyCheck  12 &#x3D; SaddlePlate  13 &#x3D; AirPressureUnit  14 &#x3D; Alternator  15 &#x3D; BrakeVentil  -1 &#x3D; NotSet | [readonly]
**spare_part_warning_sent** | **bool** |  | [readonly]
**queue_date** | **\DateTime** |  | [readonly]
**start_date** | **\DateTime** |  | [readonly]
**end_date** | **\DateTime** |  | [readonly]
**state** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsMaintenanceState**](FPHSpedVAPIEnumsMaintenanceState.md) | 0 &#x3D; Enqueued  11 &#x3D; InDrive  12 &#x3D; NotInOwnedBranch  13 &#x3D; OtherMaintenanceActive  21 &#x3D; MissingSpareParts  22 &#x3D; NotEnoughMaintenancePlaces  91 &#x3D; Processing  92 &#x3D; ProcessingButDelayed  93 &#x3D; Finished  -1 &#x3D; NotSet | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
