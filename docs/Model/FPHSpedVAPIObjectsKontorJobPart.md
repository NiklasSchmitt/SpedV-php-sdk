# # FPHSpedVAPIObjectsKontorJobPart

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**spedition** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedition**](FPHSpedVAPIObjectsSpeditionsSpedition.md) |  | [readonly]
**source** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity**](FPHSpedVAPIObjectsMapsCompanyCity.md) |  | [readonly]
**destination** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity**](FPHSpedVAPIObjectsMapsCompanyCity.md) |  | [readonly]
**driver** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser**](FPHSpedVAPIObjectsUsersUser.md) |  | [readonly]
**offer_user** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser**](FPHSpedVAPIObjectsUsersUser.md) |  | [readonly]
**offer_display** | **string** |  | [readonly]
**value** | **int** |  | [readonly]
**vis_value** | **string** |  | [readonly]
**state** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsJobPartState**](FPHSpedVAPIEnumsJobPartState.md) | 0 &#x3D; WaitingDriver  1 &#x3D; WaitingPrecondition  2 &#x3D; WaitingDrive  3 &#x3D; InDrive  4 &#x3D; Finished  -1 &#x3D; NotAvaliable | [readonly]
**is_ready** | **bool** |  | [readonly]
**trailer** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorLightTrailer**](FPHSpedVAPIObjectsKontorLightTrailer.md) |  | [readonly]
**weight** | **int** |  | [readonly]
**vis_weight** | **string** |  | [readonly]
**public_state** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsJobPublicState**](FPHSpedVAPIEnumsJobPublicState.md) | 0 &#x3D; Assigned  1 &#x3D; Intern  2 &#x3D; Extern  -1 &#x3D; NotAvailable | [readonly]
**distance** | **int** |  | [readonly]
**vis_distance** | **string** |  | [readonly]
**expiration_date** | **\DateTime** |  | [readonly]
**current_convoy_info** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsLiveConvoyInfo**](FPHSpedVAPIObjectsLiveConvoyInfo.md) |  | [readonly]
**is_real_eco** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
