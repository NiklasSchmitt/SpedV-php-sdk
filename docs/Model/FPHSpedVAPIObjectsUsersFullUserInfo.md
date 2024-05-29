# # FPHSpedVAPIObjectsUsersFullUserInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**steam_id** | **int** |  | [readonly]
**auth_code** | **string** |  | [readonly]
**plus_until** | **\DateTime** |  | [readonly]
**plus_active** | **bool** |  | [readonly]
**banned_till** | **\DateTime** |  | [readonly]
**is_banned** | **bool** |  | [readonly]
**banned_reason** | **string** |  | [readonly]
**e_mail** | **string** |  | [readonly]
**real_name** | **string** |  | [readonly]
**about_me** | **string** |  | [readonly]
**birthday** | **\DateTime** |  | [readonly]
**steam_img_url** | **string** |  | [readonly]
**residence** | **string** |  | [readonly]
**user_name** | **string** |  | [readonly]
**kontor_activated** | **bool** |  | [readonly]
**changelog_visible** | **bool** |  | [readonly]
**deletion_frist** | **int** |  | [readonly]
**tfa_activated** | **bool** |  | [readonly]
**is_alpha_tester** | **bool** |  | [readonly]
**is_trusted_user** | **bool** |  | [readonly]
**system_admin_permissions** | [**\OpenAPI\Client\Model\FPHSpedVAPIAdminPermissionEnum**](FPHSpedVAPIAdminPermissionEnum.md) | 0 &#x3D; None  1 &#x3D; SeeLiveData  2 &#x3D; HandleScreenshots  4 &#x3D; HandleTaskCheck  8 &#x3D; TicketSystem  16 &#x3D; ViewData  32 &#x3D; ChangeData  64 &#x3D; BanUser  128 &#x3D; MapImport  256 &#x3D; KontorManagement  512 &#x3D; IsManagement | [readonly]
**system_admin_rank_name** | **string** |  | [readonly]
**twitch_name** | **string** |  | [readonly]
**twitch_id** | **int** |  | [readonly]
**discord_uid** | **int** |  | [readonly]
**spedition** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedition**](FPHSpedVAPIObjectsSpeditionsSpedition.md) |  | [readonly]
**rank** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsRank**](FPHSpedVAPIObjectsSpeditionsRank.md) |  | [readonly]
**achievements** | **object** |  | [readonly]
**in_sped** | **bool** |  | [readonly]
**format_name** | **string** |  | [readonly]
**last_task_time** | **\DateTime** |  | [readonly]
**is_in_cooldown** | **bool** |  | [readonly]
**main_bank_account** | [**\OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyLiteBankAccount**](FPHSpedVAPIObjectsMoneyLiteBankAccount.md) |  | [readonly]
**spedition_join_date** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
