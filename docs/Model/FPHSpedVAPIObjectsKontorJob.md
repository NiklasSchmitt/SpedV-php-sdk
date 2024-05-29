# # FPHSpedVAPIObjectsKontorJob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**source** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity**](FPHSpedVAPIObjectsMapsCompanyCity.md) |  | [readonly]
**destination** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompanyCity**](FPHSpedVAPIObjectsMapsCompanyCity.md) |  | [readonly]
**weight** | **int** |  | [readonly]
**vis_weight** | **string** |  | [readonly]
**spedition** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedition**](FPHSpedVAPIObjectsSpeditionsSpedition.md) |  | [readonly]
**freight** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorFreight**](FPHSpedVAPIObjectsKontorFreight.md) |  | [readonly]
**value** | **int** |  | [readonly]
**accepted_by** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser**](FPHSpedVAPIObjectsUsersUser.md) |  | [readonly]
**comment** | **string** |  | [readonly]
**vis_value** | **string** |  | [readonly]
**job_parts** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJobPartLoaded[]**](FPHSpedVAPIObjectsKontorJobPartLoaded.md) |  | [readonly]
**state** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsJobOfferState**](FPHSpedVAPIEnumsJobOfferState.md) | 0 &#x3D; WaitingSpedition  1 &#x3D; WaitingDrive  2 &#x3D; InDrive  3 &#x3D; Finished  -1 &#x3D; NotAvaliable | [readonly]
**expiration_date** | **\DateTime** |  | [readonly]
**distance** | **int** |  | [readonly]
**vis_distance** | **string** |  | [readonly]
**is_real_eco** | **bool** |  | [readonly]
**complete_scheduled** | **bool** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
