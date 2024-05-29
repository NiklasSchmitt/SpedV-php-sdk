# # FPHSpedVAPIObjectsSimRailSimRailActiveTrainData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**train_name** | **string** |  | [readonly]
**train_number** | **string** |  | [readonly]
**train_number_international** | **string** |  | [readonly]
**train_length** | **int** |  | [readonly]
**train_weight** | **int** |  | [readonly]
**continues_as** | **string** |  | [readonly]
**server_data** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSimRailSimRailServerInfo**](FPHSpedVAPIObjectsSimRailSimRailServerInfo.md) |  | [readonly]
**id** | **string** |  | [readonly]
**start_station** | **string** |  | [readonly]
**end_station** | **string** |  | [readonly]
**vehicles** | **string[]** |  | [readonly]
**control_type** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSimRailSimRailTrainControlType**](FPHSpedVAPIObjectsSimRailSimRailTrainControlType.md) | 0 &#x3D; Ghost  1 &#x3D; Bot  2 &#x3D; Player | [readonly]
**controlled_by_steam_id** | **int** |  | [readonly]
**latitude** | **float** |  | [readonly]
**longitude** | **float** |  | [readonly]
**velocity** | **float** |  | [readonly]
**next_signal** | **string** |  | [readonly]
**distance_to_next_signal** | **float** |  | [readonly]
**signal_in_front_speed** | **int** |  | [readonly]
**api_timetable_index** | **int** |  | [readonly]
**last_real_timetable_index** | **int** |  | [readonly]
**current_position_type** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSimRailSimRailTrainPositionType**](FPHSpedVAPIObjectsSimRailSimRailTrainPositionType.md) | 0 &#x3D; InStation  1 &#x3D; BetweenStations  2 &#x3D; ApproachingStation | [readonly]
**timetable** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSimRailSimRailTrainLiveTimetableEntry[]**](FPHSpedVAPIObjectsSimRailSimRailTrainLiveTimetableEntry.md) |  | [readonly]
**current_timetable_index** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
