# # FPHSpedVAPIObjectsSpeditionsTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**spedition** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedition**](FPHSpedVAPIObjectsSpeditionsSpedition.md) |  |
**id** | **int** |  |
**visible_id** | **string** |  | [readonly]
**is_deductable** | **bool** |  | [readonly]
**user** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser**](FPHSpedVAPIObjectsUsersUser.md) |  |
**maps** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsMap[]**](FPHSpedVAPIObjectsMapsMap.md) |  |
**vis_maps** | **string** |  | [readonly]
**start_city** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCity**](FPHSpedVAPIObjectsMapsCity.md) |  | [readonly]
**dest_city** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCity**](FPHSpedVAPIObjectsMapsCity.md) |  | [readonly]
**start_company** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompany**](FPHSpedVAPIObjectsMapsCompany.md) |  | [readonly]
**dest_company** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsCompany**](FPHSpedVAPIObjectsMapsCompany.md) |  | [readonly]
**freight** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMapsFreight**](FPHSpedVAPIObjectsMapsFreight.md) |  |
**freightweight** | **int** |  |
**vis_freight_weight** | **string** |  | [readonly]
**dmg_report** | **string** |  |
**value** | **float** |  |
**damage** | **float** |  |
**damage_percent** | **float** |  | [readonly]
**vis_damage_percent** | **string** |  | [readonly]
**taxes** | **float** |  |
**maintenance** | **float** |  |
**toll** | **float** |  |
**income** | **float** |  | [readonly]
**state** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsETSTaskState**](FPHSpedVAPIEnumsETSTaskState.md) | 0 &#x3D; InDrive  1 &#x3D; Done  2 &#x3D; Settled  3 &#x3D; Fail  4 &#x3D; AdminCheck  5 &#x3D; Paused  6 &#x3D; Cancelled  7 &#x3D; Invalid  -1 &#x3D; NotAvaliable |
**starttime** | **\DateTime** |  |
**endtime** | **\DateTime** |  |
**needed_time** | **string** |  | [readonly]
**ferry** | **int** |  |
**ferry_km** | **int** |  |
**refuel** | **int** |  |
**boni** | **float** |  |
**currency** | **string** |  |
**currency_symbol** | **string** |  | [readonly]
**truck** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruck**](FPHSpedVAPIObjectsSpeditionsTruck.md) |  |
**truck_type** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTruckType**](FPHSpedVAPIObjectsSpeditionsTruckType.md) |  |
**rented_truck** | **bool** |  | [readonly]
**startkm** | **int** |  |
**endkm** | **int** |  |
**dist_km** | **float** |  | [readonly]
**dist_mi** | **float** |  | [readonly]
**vis_distance** | **string** |  | [readonly]
**eurokm** | **float** |  | [readonly]
**dollarmi** | **float** |  | [readonly]
**vis_euro_km** | **string** |  | [readonly]
**fuel_used_li** | **int** |  | [readonly]
**fuel_used_gal** | **float** |  | [readonly]
**fuel_refuled_li** | **int** |  | [readonly]
**fuel_refuled_gal** | **float** |  | [readonly]
**fuel_avg100_km** | **float** |  | [readonly]
**fuel_avg_mi_gal** | **float** |  | [readonly]
**vis_fuel_efficiency** | **string** |  | [readonly]
**truck_damage** | **float** |  | [readonly]
**max_velocity_kmh** | **int** |  | [readonly]
**max_velocity_mph** | **int** |  | [readonly]
**avg_velocity_kmh** | **int** |  | [readonly]
**avg_velocity_mph** | **int** |  | [readonly]
**dd_cleaned** | **bool** |  |
**cargo_market** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsCargoMarketType**](FPHSpedVAPIEnumsCargoMarketType.md) | 0 &#x3D; CargoMarket  1 &#x3D; QuickJob  2 &#x3D; FreightMarket  3 &#x3D; ExternalContract  4 &#x3D; ExternalMarket  -1 &#x3D; NotSet |
**screenshot_state** | [**\OpenAPI\Client\Model\FPHSpedVAPIEnumsScreenshotState**](FPHSpedVAPIEnumsScreenshotState.md) | 0 &#x3D; None  1 &#x3D; Uploaded  2 &#x3D; Processed  3 &#x3D; Rejected  4 &#x3D; TaskSettled |
**screenshot_checked_by** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser**](FPHSpedVAPIObjectsUsersUser.md) |  |
**screenshot_check_date** | **\DateTime** |  |
**kontor_part** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsKontorJobPart**](FPHSpedVAPIObjectsKontorJobPart.md) |  | [readonly]
**user_set_real_eco** | **bool** |  |
**is_real_scale** | **bool** |  |
**task_positions** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsTaskPosition[]**](FPHSpedVAPIObjectsSpeditionsTaskPosition.md) |  |
**current_convoy_info** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsLiveConvoyInfo**](FPHSpedVAPIObjectsLiveConvoyInfo.md) |  | [readonly]
**meets_spedition_velocity_requirements** | **bool** |  | [readonly]
**is_ok** | **bool** |  | [readonly]
**is_questionable** | **bool** |  | [readonly]
**is_negative** | **bool** |  | [readonly]
**fail** | **float** |  | [readonly]
**screenshot_url** | **string** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
