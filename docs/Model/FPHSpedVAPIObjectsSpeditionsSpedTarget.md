# # FPHSpedVAPIObjectsSpeditionsSpedTarget

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**comment** | **string** |  | [readonly]
**moneyamount** | **int** |  | [readonly]
**amount** | **float** |  | [readonly]
**start_date** | **\DateTime** |  | [readonly]
**done_date** | **\DateTime** |  | [readonly]
**bonus** | **int** |  | [readonly]
**bonus_sum** | **float** |  | [readonly]
**users** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedTargetUser[]**](FPHSpedVAPIObjectsSpeditionsSpedTargetUser.md) |  | [readonly]
**ignored_users** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser[]**](FPHSpedVAPIObjectsUsersUser.md) |  | [readonly]
**type** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsSpedTargetType**](FPHSpedVAPIEnumsSpedTargetType.md) | 0 &#x3D; Value  1 &#x3D; Distance  2 &#x3D; WeightDistance | [readonly]
**kontor_handling** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsSpedTargetKontorHandling**](FPHSpedVAPIEnumsSpedTargetKontorHandling.md) | 0 &#x3D; AllTasks  1 &#x3D; OnlyKontorTasks  2 &#x3D; NoKontorTasks | [readonly]
**omsi_handling** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsSpedTargetOMSIHandling**](FPHSpedVAPIEnumsSpedTargetOMSIHandling.md) | 0 &#x3D; AllTasks  1 &#x3D; OnlyOMSITasks  2 &#x3D; NoOMSITasks | [readonly]
**alrreached** | **int** |  | [readonly]
**amount_reached_sum** | **float** |  | [readonly]
**reached** | **bool** |  | [readonly]
**is_reached** | **bool** |  | [readonly]
**is_active** | **bool** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
