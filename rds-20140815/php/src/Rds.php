<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Rds\V20140815\Models\AddTagsToResourceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\AddTagsToResourceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\AllocateInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\AllocateInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\AllocateReadWriteSplittingConnectionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\AllocateReadWriteSplittingConnectionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CalculateDBInstanceWeightRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CalculateDBInstanceWeightResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CancelImportRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CancelImportResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckAccountNameAvailableRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckAccountNameAvailableResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckCreateDdrDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckCreateDdrDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckDBNameAvailableRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckDBNameAvailableResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckInstanceExistRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckInstanceExistResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckRecoveryConditionsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CheckRecoveryConditionsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ClearDedicatedHostRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ClearDedicatedHostResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CloneDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CloneDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CloneParameterGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CloneParameterGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CopyDatabaseBetweenInstancesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CopyDatabaseBetweenInstancesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CopyDatabaseRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CopyDatabaseResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateBackupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateBackupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDatabaseRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDatabaseResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDdrInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDdrInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostUserRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostUserResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDiagnosticReportRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDiagnosticReportResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateMigrateTaskForSQLServerRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateMigrateTaskForSQLServerResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateMigrateTaskRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateMigrateTaskResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateOnlineDatabaseTaskRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateOnlineDatabaseTaskResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateParameterGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateParameterGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateReadOnlyDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateReadOnlyDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateTempDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateTempDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupFileRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupFileResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDatabaseRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDatabaseResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDedicatedHostAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDedicatedHostAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDedicatedHostGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDedicatedHostGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteParameterGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteParameterGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescibeImportsFromDatabaseRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescibeImportsFromDatabaseResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeActionEventPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeActionEventPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableCrossRegionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableCrossRegionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostClassesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostClassesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostZonesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostZonesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableRecoveryTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableRecoveryTimeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupDatabaseRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupDatabaseResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupTasksRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupTasksResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBinlogFilesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBinlogFilesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCharacterSetNameRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCharacterSetNameResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCollationTimeZonesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCollationTimeZonesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossBackupMetaListRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossBackupMetaListResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionLogBackupFilesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionLogBackupFilesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceByTagsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceByTagsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIPArrayListRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIPArrayListResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIpHostnameRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIpHostnameResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceMonitorRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceMonitorResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceProxyConfigurationRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceProxyConfigurationResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesAsCsvRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesAsCsvResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByExpireTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByExpireTimeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByPerformanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByPerformanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesForCloneRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesForCloneResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesOverviewRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesOverviewResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceSSLRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceSSLResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceTDERequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceTDEResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyPerformanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyPerformanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostAttributeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostAttributeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostImageCategoriesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostImageCategoriesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDetachedBackupsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDetachedBackupsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDiagnosticReportListRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDiagnosticReportListResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDTCSecurityIpHostsForSQLServerRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDTCSecurityIpHostsForSQLServerResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeErrorLogsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeErrorLogsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHASwitchConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHASwitchConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceAutoRenewalAttributeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceAutoRenewalAttributeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceCrossBackupPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceCrossBackupPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceKeywordsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceKeywordsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLocalAvailableRecoveryTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLocalAvailableRecoveryTimeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLogBackupFilesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLogBackupFilesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTaskByIdRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTaskByIdResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksForSQLServerRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksForSQLServerResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyParameterLogRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyParameterLogResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeNextEventForSignRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeNextEventForSignResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsForSQLServerRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsForSQLServerResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterTemplatesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterTemplatesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeResourceUsageRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeResourceUsageResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSecurityGroupConfigurationRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSecurityGroupConfigurationResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSignedEventActionsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSignedEventActionsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLCollectorPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLCollectorPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLCollectorRetentionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLCollectorRetentionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogFilesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogFilesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogRecordsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogRecordsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLReportsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLReportsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DestroyDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DestroyDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DropDedicatedHostUserRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DropDedicatedHostUserResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\EvaluateDedicatedHostInstanceResourceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\EvaluateDedicatedHostInstanceResourceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\GrantAccountPrivilegeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\GrantAccountPrivilegeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\GrantOperatorPermissionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\GrantOperatorPermissionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ImportDatabaseBetweenInstancesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ImportDatabaseBetweenInstancesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\LockAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\LockAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\MigrateDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\MigrateDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\MigrateSecurityIPModeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\MigrateSecurityIPModeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\MigrateToOtherZoneRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\MigrateToOtherZoneResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyActionEventPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyActionEventPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyActionEventVerifyPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyActionEventVerifyPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyCollationTimeZoneRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyCollationTimeZoneResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBDescriptionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBDescriptionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceAutoUpgradeMinorVersionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceAutoUpgradeMinorVersionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceConnectionModeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceConnectionModeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceConnectionStringRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceConnectionStringResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceDescriptionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceDescriptionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceHAConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceHAConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceMaintainTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceMaintainTimeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceMonitorRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceMonitorResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceNetworkExpireTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceNetworkExpireTimeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceNetworkTypeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceNetworkTypeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstancePayTypeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstancePayTypeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceProxyConfigurationRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceProxyConfigurationResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceSpecRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceSpecResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceSSLRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceSSLResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceTDERequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceTDEResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyEndpointAddressRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyEndpointAddressResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyEndpointRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyEndpointResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostAttributeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostAttributeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostGroupAttributeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostGroupAttributeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostUserRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostUserResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDTCSecurityIpHostsForSQLServerRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDTCSecurityIpHostsForSQLServerResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyHASwitchConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyHASwitchConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyInstanceAutoRenewalAttributeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyInstanceAutoRenewalAttributeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyInstanceCrossBackupPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyInstanceCrossBackupPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyParameterGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyParameterGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyParameterRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyParameterResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyReadonlyInstanceDelayReplicationTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyReadonlyInstanceDelayReplicationTimeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyReadWriteSplittingConnectionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyReadWriteSplittingConnectionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyResourceGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyResourceGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySecurityGroupConfigurationRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySecurityGroupConfigurationResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySecurityIpsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySQLCollectorPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySQLCollectorPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySQLCollectorRetentionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySQLCollectorRetentionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\PurgeDBInstanceLogRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\PurgeDBInstanceLogResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RebuildDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RebuildDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RecoveryDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RecoveryDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReleaseInstanceConnectionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReleaseInstanceConnectionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReleaseInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReleaseInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReleaseReadWriteSplittingConnectionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReleaseReadWriteSplittingConnectionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RemoveTagsFromResourceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RemoveTagsFromResourceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReplaceDedicatedHostRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReplaceDedicatedHostResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ResetAccountForPGRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ResetAccountForPGResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ResetAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ResetAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestartDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestartDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestartDedicatedHostRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestartDedicatedHostResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestoreDdrTableRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestoreDdrTableResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestoreTableRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestoreTableResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RevokeAccountPrivilegeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RevokeAccountPrivilegeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RevokeOperatorPermissionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RevokeOperatorPermissionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\SignEventActionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\SignEventActionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\StartDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\StartDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\StopDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\StopDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\SwitchDBInstanceHARequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\SwitchDBInstanceHAResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\SwitchDBInstanceNetTypeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\SwitchDBInstanceNetTypeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\SwitchDBInstanceVpcRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\SwitchDBInstanceVpcResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\TerminateMigrateTaskRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\TerminateMigrateTaskResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UnlockAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UnlockAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceEngineVersionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceEngineVersionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceKernelVersionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceKernelVersionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBProxyInstanceKernelVersionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBProxyInstanceKernelVersionResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Rds extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'rds.aliyuncs.com',
            'cn-beijing'                  => 'rds.aliyuncs.com',
            'cn-hangzhou'                 => 'rds.aliyuncs.com',
            'cn-shanghai'                 => 'rds.aliyuncs.com',
            'cn-shenzhen'                 => 'rds.aliyuncs.com',
            'cn-hongkong'                 => 'rds.aliyuncs.com',
            'ap-southeast-1'              => 'rds.aliyuncs.com',
            'us-west-1'                   => 'rds.aliyuncs.com',
            'us-east-1'                   => 'rds.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'rds.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'rds.aliyuncs.com',
            'cn-north-2-gov-1'            => 'rds.aliyuncs.com',
            'ap-northeast-2-pop'          => 'rds.ap-northeast-1.aliyuncs.com',
            'cn-beijing-finance-1'        => 'rds.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'rds.aliyuncs.com',
            'cn-beijing-gov-1'            => 'rds.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'rds.aliyuncs.com',
            'cn-edge-1'                   => 'rds.aliyuncs.com',
            'cn-fujian'                   => 'rds.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'rds.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'rds.aliyuncs.com',
            'cn-hangzhou-finance'         => 'rds.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'rds.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'rds.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'rds.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'rds.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'rds.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'rds.aliyuncs.com',
            'cn-qingdao-nebula'           => 'rds.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'rds.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'rds.aliyuncs.com',
            'cn-shanghai-inner'           => 'rds.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'rds.aliyuncs.com',
            'cn-shenzhen-inner'           => 'rds.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'rds.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'rds.aliyuncs.com',
            'cn-wuhan'                    => 'rds.aliyuncs.com',
            'cn-yushanfang'               => 'rds.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'rds.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'rds.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'rds.aliyuncs.com',
            'eu-west-1-oxs'               => 'rds.ap-northeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'rds.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('rds', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDedicatedHostImageCategoriesResponse
     */
    public function describeDedicatedHostImageCategoriesWithOptions(DescribeDedicatedHostImageCategoriesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDedicatedHostImageCategoriesResponse::fromMap($this->doRequest('DescribeDedicatedHostImageCategories', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDedicatedHostImageCategoriesResponse
     */
    public function describeDedicatedHostImageCategories(DescribeDedicatedHostImageCategoriesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostImageCategoriesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCrossBackupMetaListResponse
     */
    public function describeCrossBackupMetaListWithOptions(DescribeCrossBackupMetaListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeCrossBackupMetaListResponse::fromMap($this->doRequest('DescribeCrossBackupMetaList', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCrossBackupMetaListResponse
     */
    public function describeCrossBackupMetaList(DescribeCrossBackupMetaListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrossBackupMetaListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RestoreDdrTableResponse
     */
    public function restoreDdrTableWithOptions(RestoreDdrTableRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RestoreDdrTableResponse::fromMap($this->doRequest('RestoreDdrTable', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RestoreDdrTableResponse
     */
    public function restoreDdrTable(RestoreDdrTableRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreDdrTableWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBProxyEndpointAddressResponse
     */
    public function modifyDBProxyEndpointAddressWithOptions(ModifyDBProxyEndpointAddressRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBProxyEndpointAddressResponse::fromMap($this->doRequest('ModifyDBProxyEndpointAddress', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBProxyEndpointAddressResponse
     */
    public function modifyDBProxyEndpointAddress(ModifyDBProxyEndpointAddressRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBProxyEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return TerminateMigrateTaskResponse
     */
    public function terminateMigrateTaskWithOptions(TerminateMigrateTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return TerminateMigrateTaskResponse::fromMap($this->doRequest('TerminateMigrateTask', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return TerminateMigrateTaskResponse
     */
    public function terminateMigrateTask(TerminateMigrateTaskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateMigrateTaskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLocalAvailableRecoveryTimeResponse
     */
    public function describeLocalAvailableRecoveryTimeWithOptions(DescribeLocalAvailableRecoveryTimeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeLocalAvailableRecoveryTimeResponse::fromMap($this->doRequest('DescribeLocalAvailableRecoveryTime', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLocalAvailableRecoveryTimeResponse
     */
    public function describeLocalAvailableRecoveryTime(DescribeLocalAvailableRecoveryTimeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLocalAvailableRecoveryTimeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAvailableZonesResponse
     */
    public function describeAvailableZonesWithOptions(DescribeAvailableZonesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAvailableZonesResponse::fromMap($this->doRequest('DescribeAvailableZones', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAvailableZonesResponse
     */
    public function describeAvailableZones(DescribeAvailableZonesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableZonesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAvailableClassesResponse
     */
    public function describeAvailableClassesWithOptions(DescribeAvailableClassesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAvailableClassesResponse::fromMap($this->doRequest('DescribeAvailableClasses', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAvailableClassesResponse
     */
    public function describeAvailableClasses(DescribeAvailableClassesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableClassesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateDedicatedHostAccountResponse
     */
    public function createDedicatedHostAccountWithOptions(CreateDedicatedHostAccountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateDedicatedHostAccountResponse::fromMap($this->doRequest('CreateDedicatedHostAccount', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateDedicatedHostAccountResponse
     */
    public function createDedicatedHostAccount(CreateDedicatedHostAccountRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostAccountWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDedicatedHostAccountResponse
     */
    public function deleteDedicatedHostAccountWithOptions(DeleteDedicatedHostAccountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteDedicatedHostAccountResponse::fromMap($this->doRequest('DeleteDedicatedHostAccount', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDedicatedHostAccountResponse
     */
    public function deleteDedicatedHostAccount(DeleteDedicatedHostAccountRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDedicatedHostAccountWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostAccountResponse
     */
    public function modifyDedicatedHostAccountWithOptions(ModifyDedicatedHostAccountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDedicatedHostAccountResponse::fromMap($this->doRequest('ModifyDedicatedHostAccount', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostAccountResponse
     */
    public function modifyDedicatedHostAccount(ModifyDedicatedHostAccountRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAccountWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateDedicatedHostUserResponse
     */
    public function createDedicatedHostUserWithOptions(CreateDedicatedHostUserRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateDedicatedHostUserResponse::fromMap($this->doRequest('CreateDedicatedHostUser', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateDedicatedHostUserResponse
     */
    public function createDedicatedHostUser(CreateDedicatedHostUserRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostUserWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostUserResponse
     */
    public function modifyDedicatedHostUserWithOptions(ModifyDedicatedHostUserRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDedicatedHostUserResponse::fromMap($this->doRequest('ModifyDedicatedHostUser', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostUserResponse
     */
    public function modifyDedicatedHostUser(ModifyDedicatedHostUserRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostUserWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DropDedicatedHostUserResponse
     */
    public function dropDedicatedHostUserWithOptions(DropDedicatedHostUserRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DropDedicatedHostUserResponse::fromMap($this->doRequest('DropDedicatedHostUser', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DropDedicatedHostUserResponse
     */
    public function dropDedicatedHostUser(DropDedicatedHostUserRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropDedicatedHostUserWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpgradeDBProxyInstanceKernelVersionResponse
     */
    public function upgradeDBProxyInstanceKernelVersionWithOptions(UpgradeDBProxyInstanceKernelVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpgradeDBProxyInstanceKernelVersionResponse::fromMap($this->doRequest('UpgradeDBProxyInstanceKernelVersion', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpgradeDBProxyInstanceKernelVersionResponse
     */
    public function upgradeDBProxyInstanceKernelVersion(UpgradeDBProxyInstanceKernelVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBProxyInstanceKernelVersionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StopDBInstanceResponse
     */
    public function stopDBInstanceWithOptions(StopDBInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StopDBInstanceResponse::fromMap($this->doRequest('StopDBInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StopDBInstanceResponse
     */
    public function stopDBInstance(StopDBInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StartDBInstanceResponse
     */
    public function startDBInstanceWithOptions(StartDBInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StartDBInstanceResponse::fromMap($this->doRequest('StartDBInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StartDBInstanceResponse
     */
    public function startDBInstance(StartDBInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSignedEventActionsResponse
     */
    public function describeSignedEventActionsWithOptions(DescribeSignedEventActionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSignedEventActionsResponse::fromMap($this->doRequest('DescribeSignedEventActions', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSignedEventActionsResponse
     */
    public function describeSignedEventActions(DescribeSignedEventActionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSignedEventActionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SignEventActionResponse
     */
    public function signEventActionWithOptions(SignEventActionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SignEventActionResponse::fromMap($this->doRequest('SignEventAction', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SignEventActionResponse
     */
    public function signEventAction(SignEventActionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->signEventActionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeNextEventForSignResponse
     */
    public function describeNextEventForSignWithOptions(DescribeNextEventForSignRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeNextEventForSignResponse::fromMap($this->doRequest('DescribeNextEventForSign', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeNextEventForSignResponse
     */
    public function describeNextEventForSign(DescribeNextEventForSignRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNextEventForSignWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyActionEventVerifyPolicyResponse
     */
    public function modifyActionEventVerifyPolicyWithOptions(ModifyActionEventVerifyPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyActionEventVerifyPolicyResponse::fromMap($this->doRequest('ModifyActionEventVerifyPolicy', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyActionEventVerifyPolicyResponse
     */
    public function modifyActionEventVerifyPolicy(ModifyActionEventVerifyPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActionEventVerifyPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstancesOverviewResponse
     */
    public function describeDBInstancesOverviewWithOptions(DescribeDBInstancesOverviewRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstancesOverviewResponse::fromMap($this->doRequest('DescribeDBInstancesOverview', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstancesOverviewResponse
     */
    public function describeDBInstancesOverview(DescribeDBInstancesOverviewRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesOverviewWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMigrateTaskByIdResponse
     */
    public function describeMigrateTaskByIdWithOptions(DescribeMigrateTaskByIdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMigrateTaskByIdResponse::fromMap($this->doRequest('DescribeMigrateTaskById', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMigrateTaskByIdResponse
     */
    public function describeMigrateTaskById(DescribeMigrateTaskByIdRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrateTaskByIdWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteBackupFileResponse
     */
    public function deleteBackupFileWithOptions(DeleteBackupFileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteBackupFileResponse::fromMap($this->doRequest('DeleteBackupFile', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteBackupFileResponse
     */
    public function deleteBackupFile(DeleteBackupFileRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupFileWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDetachedBackupsResponse
     */
    public function describeDetachedBackupsWithOptions(DescribeDetachedBackupsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDetachedBackupsResponse::fromMap($this->doRequest('DescribeDetachedBackups', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDetachedBackupsResponse
     */
    public function describeDetachedBackups(DescribeDetachedBackupsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDetachedBackupsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EvaluateDedicatedHostInstanceResourceResponse
     */
    public function evaluateDedicatedHostInstanceResourceWithOptions(EvaluateDedicatedHostInstanceResourceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EvaluateDedicatedHostInstanceResourceResponse::fromMap($this->doRequest('EvaluateDedicatedHostInstanceResource', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EvaluateDedicatedHostInstanceResourceResponse
     */
    public function evaluateDedicatedHostInstanceResource(EvaluateDedicatedHostInstanceResourceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluateDedicatedHostInstanceResourceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAvailableDedicatedHostClassesResponse
     */
    public function describeAvailableDedicatedHostClassesWithOptions(DescribeAvailableDedicatedHostClassesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAvailableDedicatedHostClassesResponse::fromMap($this->doRequest('DescribeAvailableDedicatedHostClasses', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAvailableDedicatedHostClassesResponse
     */
    public function describeAvailableDedicatedHostClasses(DescribeAvailableDedicatedHostClassesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableDedicatedHostClassesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAvailableDedicatedHostZonesResponse
     */
    public function describeAvailableDedicatedHostZonesWithOptions(DescribeAvailableDedicatedHostZonesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAvailableDedicatedHostZonesResponse::fromMap($this->doRequest('DescribeAvailableDedicatedHostZones', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAvailableDedicatedHostZonesResponse
     */
    public function describeAvailableDedicatedHostZones(DescribeAvailableDedicatedHostZonesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableDedicatedHostZonesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ReleaseInstanceConnectionResponse
     */
    public function releaseInstanceConnectionWithOptions(ReleaseInstanceConnectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ReleaseInstanceConnectionResponse::fromMap($this->doRequest('ReleaseInstanceConnection', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ReleaseInstanceConnectionResponse
     */
    public function releaseInstanceConnection(ReleaseInstanceConnectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceConnectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UnlockAccountResponse
     */
    public function unlockAccountWithOptions(UnlockAccountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UnlockAccountResponse::fromMap($this->doRequest('UnlockAccount', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UnlockAccountResponse
     */
    public function unlockAccount(UnlockAccountRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockAccountWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return LockAccountResponse
     */
    public function lockAccountWithOptions(LockAccountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return LockAccountResponse::fromMap($this->doRequest('LockAccount', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return LockAccountResponse
     */
    public function lockAccount(LockAccountRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockAccountWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions(ListTagResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListTagResourcesResponse::fromMap($this->doRequest('ListTagResources', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources(ListTagResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions(TagResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return TagResourcesResponse::fromMap($this->doRequest('TagResources', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return TagResourcesResponse
     */
    public function tagResources(TagResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions(UntagResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UntagResourcesResponse::fromMap($this->doRequest('UntagResources', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UntagResourcesResponse
     */
    public function untagResources(UntagResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDedicatedHostGroupsResponse
     */
    public function describeDedicatedHostGroupsWithOptions(DescribeDedicatedHostGroupsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDedicatedHostGroupsResponse::fromMap($this->doRequest('DescribeDedicatedHostGroups', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDedicatedHostGroupsResponse
     */
    public function describeDedicatedHostGroups(DescribeDedicatedHostGroupsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostGroupsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateDedicatedHostGroupResponse
     */
    public function createDedicatedHostGroupWithOptions(CreateDedicatedHostGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateDedicatedHostGroupResponse::fromMap($this->doRequest('CreateDedicatedHostGroup', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateDedicatedHostGroupResponse
     */
    public function createDedicatedHostGroup(CreateDedicatedHostGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDedicatedHostGroupResponse
     */
    public function deleteDedicatedHostGroupWithOptions(DeleteDedicatedHostGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteDedicatedHostGroupResponse::fromMap($this->doRequest('DeleteDedicatedHostGroup', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDedicatedHostGroupResponse
     */
    public function deleteDedicatedHostGroup(DeleteDedicatedHostGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDedicatedHostGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostGroupAttributeResponse
     */
    public function modifyDedicatedHostGroupAttributeWithOptions(ModifyDedicatedHostGroupAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDedicatedHostGroupAttributeResponse::fromMap($this->doRequest('ModifyDedicatedHostGroupAttribute', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostGroupAttributeResponse
     */
    public function modifyDedicatedHostGroupAttribute(ModifyDedicatedHostGroupAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RestartDedicatedHostResponse
     */
    public function restartDedicatedHostWithOptions(RestartDedicatedHostRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RestartDedicatedHostResponse::fromMap($this->doRequest('RestartDedicatedHost', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RestartDedicatedHostResponse
     */
    public function restartDedicatedHost(RestartDedicatedHostRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ReplaceDedicatedHostResponse
     */
    public function replaceDedicatedHostWithOptions(ReplaceDedicatedHostRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ReplaceDedicatedHostResponse::fromMap($this->doRequest('ReplaceDedicatedHost', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ReplaceDedicatedHostResponse
     */
    public function replaceDedicatedHost(ReplaceDedicatedHostRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHostsWithOptions(DescribeDedicatedHostsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDedicatedHostsResponse::fromMap($this->doRequest('DescribeDedicatedHosts', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHosts(DescribeDedicatedHostsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDedicatedHostAttributeResponse
     */
    public function describeDedicatedHostAttributeWithOptions(DescribeDedicatedHostAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDedicatedHostAttributeResponse::fromMap($this->doRequest('DescribeDedicatedHostAttribute', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDedicatedHostAttributeResponse
     */
    public function describeDedicatedHostAttribute(DescribeDedicatedHostAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ClearDedicatedHostResponse
     */
    public function clearDedicatedHostWithOptions(ClearDedicatedHostRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ClearDedicatedHostResponse::fromMap($this->doRequest('ClearDedicatedHost', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ClearDedicatedHostResponse
     */
    public function clearDedicatedHost(ClearDedicatedHostRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostAttributeResponse
     */
    public function modifyDedicatedHostAttributeWithOptions(ModifyDedicatedHostAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDedicatedHostAttributeResponse::fromMap($this->doRequest('ModifyDedicatedHostAttribute', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDedicatedHostAttributeResponse
     */
    public function modifyDedicatedHostAttribute(ModifyDedicatedHostAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return MigrateDBInstanceResponse
     */
    public function migrateDBInstanceWithOptions(MigrateDBInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return MigrateDBInstanceResponse::fromMap($this->doRequest('MigrateDBInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return MigrateDBInstanceResponse
     */
    public function migrateDBInstance(MigrateDBInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateDedicatedHostResponse
     */
    public function createDedicatedHostWithOptions(CreateDedicatedHostRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateDedicatedHostResponse::fromMap($this->doRequest('CreateDedicatedHost', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateDedicatedHostResponse
     */
    public function createDedicatedHost(CreateDedicatedHostRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RebuildDBInstanceResponse
     */
    public function rebuildDBInstanceWithOptions(RebuildDBInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RebuildDBInstanceResponse::fromMap($this->doRequest('RebuildDBInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RebuildDBInstanceResponse
     */
    public function rebuildDBInstance(RebuildDBInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebuildDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBProxyEndpointResponse
     */
    public function describeDBProxyEndpointWithOptions(DescribeDBProxyEndpointRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBProxyEndpointResponse::fromMap($this->doRequest('DescribeDBProxyEndpoint', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBProxyEndpointResponse
     */
    public function describeDBProxyEndpoint(DescribeDBProxyEndpointRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBProxyEndpointWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBProxyPerformanceResponse
     */
    public function describeDBProxyPerformanceWithOptions(DescribeDBProxyPerformanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBProxyPerformanceResponse::fromMap($this->doRequest('DescribeDBProxyPerformance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBProxyPerformanceResponse
     */
    public function describeDBProxyPerformance(DescribeDBProxyPerformanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBProxyPerformanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBProxyResponse
     */
    public function describeDBProxyWithOptions(DescribeDBProxyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBProxyResponse::fromMap($this->doRequest('DescribeDBProxy', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBProxyResponse
     */
    public function describeDBProxy(DescribeDBProxyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBProxyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBProxyEndpointResponse
     */
    public function modifyDBProxyEndpointWithOptions(ModifyDBProxyEndpointRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBProxyEndpointResponse::fromMap($this->doRequest('ModifyDBProxyEndpoint', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBProxyEndpointResponse
     */
    public function modifyDBProxyEndpoint(ModifyDBProxyEndpointRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBProxyEndpointWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBProxyInstanceResponse
     */
    public function modifyDBProxyInstanceWithOptions(ModifyDBProxyInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBProxyInstanceResponse::fromMap($this->doRequest('ModifyDBProxyInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBProxyInstanceResponse
     */
    public function modifyDBProxyInstance(ModifyDBProxyInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBProxyInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBProxyResponse
     */
    public function modifyDBProxyWithOptions(ModifyDBProxyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBProxyResponse::fromMap($this->doRequest('ModifyDBProxy', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBProxyResponse
     */
    public function modifyDBProxy(ModifyDBProxyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBProxyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyHASwitchConfigResponse
     */
    public function modifyHASwitchConfigWithOptions(ModifyHASwitchConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyHASwitchConfigResponse::fromMap($this->doRequest('ModifyHASwitchConfig', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyHASwitchConfigResponse
     */
    public function modifyHASwitchConfig(ModifyHASwitchConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHASwitchConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeHASwitchConfigResponse
     */
    public function describeHASwitchConfigWithOptions(DescribeHASwitchConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeHASwitchConfigResponse::fromMap($this->doRequest('DescribeHASwitchConfig', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeHASwitchConfigResponse
     */
    public function describeHASwitchConfig(DescribeHASwitchConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHASwitchConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyActionEventPolicyResponse
     */
    public function modifyActionEventPolicyWithOptions(ModifyActionEventPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyActionEventPolicyResponse::fromMap($this->doRequest('ModifyActionEventPolicy', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyActionEventPolicyResponse
     */
    public function modifyActionEventPolicy(ModifyActionEventPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActionEventPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeActionEventPolicyResponse
     */
    public function describeActionEventPolicyWithOptions(DescribeActionEventPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeActionEventPolicyResponse::fromMap($this->doRequest('DescribeActionEventPolicy', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeActionEventPolicyResponse
     */
    public function describeActionEventPolicy(DescribeActionEventPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActionEventPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeEventsResponse
     */
    public function describeEventsWithOptions(DescribeEventsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeEventsResponse::fromMap($this->doRequest('DescribeEvents', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeEventsResponse
     */
    public function describeEvents(DescribeEventsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstancesForCloneResponse
     */
    public function describeDBInstancesForCloneWithOptions(DescribeDBInstancesForCloneRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstancesForCloneResponse::fromMap($this->doRequest('DescribeDBInstancesForClone', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstancesForCloneResponse
     */
    public function describeDBInstancesForClone(DescribeDBInstancesForCloneRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesForCloneWithOptions($request, $runtime);
    }

    /**
     * DescribeDTCSecurityIpHostsForSQLServer 调用DescribeDTCSecurityIpHostsForSQLServer接口查询RDS实例的分布式事务白名单信息。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeDTCSecurityIpHostsForSQLServer
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxx
     *   * &RegionId=cn-hangzhou
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 关于分布式事务白名单请参见[设置分布式事务白名单](~~124321~~)。
     *   * 仅适用于如下版本实例：
     *   * * SQL Server 2012/2016企业版高可用版
     *   * * SQL Server 2012/2016标准版.
     *
     * @throws \Exception
     *
     * @return DescribeDTCSecurityIpHostsForSQLServerResponse
     */
    public function describeDTCSecurityIpHostsForSQLServerWithOptions(DescribeDTCSecurityIpHostsForSQLServerRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDTCSecurityIpHostsForSQLServerResponse::fromMap($this->doRequest('DescribeDTCSecurityIpHostsForSQLServer', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * DescribeDTCSecurityIpHostsForSQLServer 调用DescribeDTCSecurityIpHostsForSQLServer接口查询RDS实例的分布式事务白名单信息。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeDTCSecurityIpHostsForSQLServer
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxx
     *   * &RegionId=cn-hangzhou
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 关于分布式事务白名单请参见[设置分布式事务白名单](~~124321~~)。
     *   * 仅适用于如下版本实例：
     *   * * SQL Server 2012/2016企业版高可用版
     *   * * SQL Server 2012/2016标准版.
     *
     * @throws \Exception
     *
     * @return DescribeDTCSecurityIpHostsForSQLServerResponse
     */
    public function describeDTCSecurityIpHostsForSQLServer(DescribeDTCSecurityIpHostsForSQLServerRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDTCSecurityIpHostsForSQLServerWithOptions($request, $runtime);
    }

    /**
     * ModifyDTCSecurityIpHostsForSQLServer 调用ModifyDTCSecurityIpHostsForSQLServer接口设置分布式事务白名单。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=ModifyDTCSecurityIpHostsForSQLServer
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxx
     *   * &RegionId=cn-hangzhou
     *   * &SecurityIpHosts=192.168.1.100,k3ecstest
     *   * &WhiteListGroupName=test1
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 分布式事务白名单可以让ECS实例和RDS实例之间支持分布式事务。详情请参见[设置分布式事务白名单](~~124321~~)。
     *   * 仅适用于如下版本实例：
     *   * * SQL Server 2012/2016企业版高可用版
     *   * * SQL Server 2012/2016标准版.
     *
     * @throws \Exception
     *
     * @return ModifyDTCSecurityIpHostsForSQLServerResponse
     */
    public function modifyDTCSecurityIpHostsForSQLServerWithOptions(ModifyDTCSecurityIpHostsForSQLServerRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDTCSecurityIpHostsForSQLServerResponse::fromMap($this->doRequest('ModifyDTCSecurityIpHostsForSQLServer', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * ModifyDTCSecurityIpHostsForSQLServer 调用ModifyDTCSecurityIpHostsForSQLServer接口设置分布式事务白名单。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=ModifyDTCSecurityIpHostsForSQLServer
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxx
     *   * &RegionId=cn-hangzhou
     *   * &SecurityIpHosts=192.168.1.100,k3ecstest
     *   * &WhiteListGroupName=test1
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 分布式事务白名单可以让ECS实例和RDS实例之间支持分布式事务。详情请参见[设置分布式事务白名单](~~124321~~)。
     *   * 仅适用于如下版本实例：
     *   * * SQL Server 2012/2016企业版高可用版
     *   * * SQL Server 2012/2016标准版.
     *
     * @throws \Exception
     *
     * @return ModifyDTCSecurityIpHostsForSQLServerResponse
     */
    public function modifyDTCSecurityIpHostsForSQLServer(ModifyDTCSecurityIpHostsForSQLServerRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDTCSecurityIpHostsForSQLServerWithOptions($request, $runtime);
    }

    /**
     * DescribeDBInstanceIpHostname 调用DescribeDBInstanceIpHostname接口查询RDS实例的底层ECS实例的hostname。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeDBInstanceIpHostname
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxx
     *   * &RegionId=cn-hangzhou
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * RDS实例是基于ECS实例搭建的，本接口用于[设置分布式事务白名单](~~124321~~)时查询RDS实例的底层ECS实例的hostname。
     *   * 仅适用于如下版本实例：
     *   * * SQL Server 2012/2016企业版高可用版
     *   * * SQL Server 2012/2016标准版.
     *
     * @throws \Exception
     *
     * @return DescribeDBInstanceIpHostnameResponse
     */
    public function describeDBInstanceIpHostnameWithOptions(DescribeDBInstanceIpHostnameRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstanceIpHostnameResponse::fromMap($this->doRequest('DescribeDBInstanceIpHostname', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * DescribeDBInstanceIpHostname 调用DescribeDBInstanceIpHostname接口查询RDS实例的底层ECS实例的hostname。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeDBInstanceIpHostname
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxx
     *   * &RegionId=cn-hangzhou
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * RDS实例是基于ECS实例搭建的，本接口用于[设置分布式事务白名单](~~124321~~)时查询RDS实例的底层ECS实例的hostname。
     *   * 仅适用于如下版本实例：
     *   * * SQL Server 2012/2016企业版高可用版
     *   * * SQL Server 2012/2016标准版.
     *
     * @throws \Exception
     *
     * @return DescribeDBInstanceIpHostnameResponse
     */
    public function describeDBInstanceIpHostname(DescribeDBInstanceIpHostnameRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceIpHostnameWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceAutoUpgradeMinorVersionResponse
     */
    public function modifyDBInstanceAutoUpgradeMinorVersionWithOptions(ModifyDBInstanceAutoUpgradeMinorVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceAutoUpgradeMinorVersionResponse::fromMap($this->doRequest('ModifyDBInstanceAutoUpgradeMinorVersion', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceAutoUpgradeMinorVersionResponse
     */
    public function modifyDBInstanceAutoUpgradeMinorVersion(ModifyDBInstanceAutoUpgradeMinorVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceAutoUpgradeMinorVersionWithOptions($request, $runtime);
    }

    /**
     * DescribeAvailableCrossRegion 调用DescribeAvailableCrossRegion接口查询所选地域当前可以进行跨地域备份的目的地域。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableCrossRegion
     *   * &RegionId=cn-hangzhou
     *   * &<公共请求参数>
     *   * ```
     *   * description:.
     *
     * @throws \Exception
     *
     * @return DescribeAvailableCrossRegionResponse
     */
    public function describeAvailableCrossRegionWithOptions(DescribeAvailableCrossRegionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAvailableCrossRegionResponse::fromMap($this->doRequest('DescribeAvailableCrossRegion', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * DescribeAvailableCrossRegion 调用DescribeAvailableCrossRegion接口查询所选地域当前可以进行跨地域备份的目的地域。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableCrossRegion
     *   * &RegionId=cn-hangzhou
     *   * &<公共请求参数>
     *   * ```
     *   * description:.
     *
     * @throws \Exception
     *
     * @return DescribeAvailableCrossRegionResponse
     */
    public function describeAvailableCrossRegion(DescribeAvailableCrossRegionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableCrossRegionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CheckCreateDdrDBInstanceResponse
     */
    public function checkCreateDdrDBInstanceWithOptions(CheckCreateDdrDBInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CheckCreateDdrDBInstanceResponse::fromMap($this->doRequest('CheckCreateDdrDBInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CheckCreateDdrDBInstanceResponse
     */
    public function checkCreateDdrDBInstance(CheckCreateDdrDBInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCreateDdrDBInstanceWithOptions($request, $runtime);
    }

    /**
     * DescribeAvailableRecoveryTime 调用DescribeAvailableRecoveryTime接口查询某跨地域备份文件可恢复哪个时间段的数据。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableRecoveryTime
     *   * &CrossBackupId=14377
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 查看普通备份文件可恢复哪个时间段的数据请参见[DescribeBackups](~~26273~~)。
     *   * 仅适用于如下实例：
     *   * * MySQL 5.7高可用本地SSD盘版
     *   * * MySQL 5.6.
     *
     * @throws \Exception
     *
     * @return DescribeAvailableRecoveryTimeResponse
     */
    public function describeAvailableRecoveryTimeWithOptions(DescribeAvailableRecoveryTimeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAvailableRecoveryTimeResponse::fromMap($this->doRequest('DescribeAvailableRecoveryTime', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * DescribeAvailableRecoveryTime 调用DescribeAvailableRecoveryTime接口查询某跨地域备份文件可恢复哪个时间段的数据。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableRecoveryTime
     *   * &CrossBackupId=14377
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 查看普通备份文件可恢复哪个时间段的数据请参见[DescribeBackups](~~26273~~)。
     *   * 仅适用于如下实例：
     *   * * MySQL 5.7高可用本地SSD盘版
     *   * * MySQL 5.6.
     *
     * @throws \Exception
     *
     * @return DescribeAvailableRecoveryTimeResponse
     */
    public function describeAvailableRecoveryTime(DescribeAvailableRecoveryTimeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableRecoveryTimeWithOptions($request, $runtime);
    }

    /**
     * DescribeCrossRegionLogBackupFiles 调用DescribeCrossRegionLogBackupFiles接口查看跨地域日志备份文件列表。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionLogBackupFiles
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
     *   * &StartTime=2019-05-30T12:10Z
     *   * &EndTime=2019-06-15T12:10Z
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 查看数据备份文件请参见[DescribeCrossRegionBackups](~~121733~~)。
     *   * 仅适用于如下实例：
     *   * * MySQL 5.7高可用本地SSD盘版
     *   * * MySQL 5.6.
     *
     * @throws \Exception
     *
     * @return DescribeCrossRegionLogBackupFilesResponse
     */
    public function describeCrossRegionLogBackupFilesWithOptions(DescribeCrossRegionLogBackupFilesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeCrossRegionLogBackupFilesResponse::fromMap($this->doRequest('DescribeCrossRegionLogBackupFiles', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * DescribeCrossRegionLogBackupFiles 调用DescribeCrossRegionLogBackupFiles接口查看跨地域日志备份文件列表。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionLogBackupFiles
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
     *   * &StartTime=2019-05-30T12:10Z
     *   * &EndTime=2019-06-15T12:10Z
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 查看数据备份文件请参见[DescribeCrossRegionBackups](~~121733~~)。
     *   * 仅适用于如下实例：
     *   * * MySQL 5.7高可用本地SSD盘版
     *   * * MySQL 5.6.
     *
     * @throws \Exception
     *
     * @return DescribeCrossRegionLogBackupFilesResponse
     */
    public function describeCrossRegionLogBackupFiles(DescribeCrossRegionLogBackupFilesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrossRegionLogBackupFilesWithOptions($request, $runtime);
    }

    /**
     * ModifyInstanceCrossBackupPolicy 调用ModifyInstanceCrossBackupPolicy接口修改RDS跨地域备份设置。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=ModifyInstanceCrossBackupPolicy
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
     *   * &RegionId=cn-hangzhou
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 仅适用于如下实例：
     *   * * MySQL 5.7高可用本地SSD盘版
     *   * * MySQL 5.6.
     *
     * @throws \Exception
     *
     * @return ModifyInstanceCrossBackupPolicyResponse
     */
    public function modifyInstanceCrossBackupPolicyWithOptions(ModifyInstanceCrossBackupPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceCrossBackupPolicyResponse::fromMap($this->doRequest('ModifyInstanceCrossBackupPolicy', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * ModifyInstanceCrossBackupPolicy 调用ModifyInstanceCrossBackupPolicy接口修改RDS跨地域备份设置。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=ModifyInstanceCrossBackupPolicy
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
     *   * &RegionId=cn-hangzhou
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 仅适用于如下实例：
     *   * * MySQL 5.7高可用本地SSD盘版
     *   * * MySQL 5.6.
     *
     * @throws \Exception
     *
     * @return ModifyInstanceCrossBackupPolicyResponse
     */
    public function modifyInstanceCrossBackupPolicy(ModifyInstanceCrossBackupPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceCrossBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * CreateDdrInstance 调用CreateDdrInstance接口跨地域恢复数据到新实例。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action==CreateDdrInstance
     *   * &RegionId=cn-hangzhou
     *   * &Engine=MySQL
     *   * &EngineVersion=5.6
     *   * &DBInstanceClass=rds.mysql.s1.small
     *   * &DBInstanceStorage=20
     *   * &DBInstanceNetType=Intranet
     *   * &PayType=Prepaid
     *   * &RestoreType=0
     *   * &SecurityIPList=127.0.0.1
     *   * &BackupSetId=14358
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 恢复前可以调用[CheckCreateDdrDBInstance](~~121721~~)接口预检查某RDS实例是否可以用跨地域备份集进行跨地域恢复。
     *   * 仅适用于如下实例：
     *   * * MySQL 5.7高可用本地SSD盘版
     *   * * MySQL 5.6.
     *
     * @throws \Exception
     *
     * @return CreateDdrInstanceResponse
     */
    public function createDdrInstanceWithOptions(CreateDdrInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateDdrInstanceResponse::fromMap($this->doRequest('CreateDdrInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * CreateDdrInstance 调用CreateDdrInstance接口跨地域恢复数据到新实例。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action==CreateDdrInstance
     *   * &RegionId=cn-hangzhou
     *   * &Engine=MySQL
     *   * &EngineVersion=5.6
     *   * &DBInstanceClass=rds.mysql.s1.small
     *   * &DBInstanceStorage=20
     *   * &DBInstanceNetType=Intranet
     *   * &PayType=Prepaid
     *   * &RestoreType=0
     *   * &SecurityIPList=127.0.0.1
     *   * &BackupSetId=14358
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 恢复前可以调用[CheckCreateDdrDBInstance](~~121721~~)接口预检查某RDS实例是否可以用跨地域备份集进行跨地域恢复。
     *   * 仅适用于如下实例：
     *   * * MySQL 5.7高可用本地SSD盘版
     *   * * MySQL 5.6.
     *
     * @throws \Exception
     *
     * @return CreateDdrInstanceResponse
     */
    public function createDdrInstance(CreateDdrInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDdrInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCrossRegionBackupDBInstanceResponse
     */
    public function describeCrossRegionBackupDBInstanceWithOptions(DescribeCrossRegionBackupDBInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeCrossRegionBackupDBInstanceResponse::fromMap($this->doRequest('DescribeCrossRegionBackupDBInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCrossRegionBackupDBInstanceResponse
     */
    public function describeCrossRegionBackupDBInstance(DescribeCrossRegionBackupDBInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrossRegionBackupDBInstanceWithOptions($request, $runtime);
    }

    /**
     * DescribeInstanceCrossBackupPolicy 调用DescribeInstanceCrossBackupPolicy接口查询跨地域备份设置。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeInstanceCrossBackupPolicy
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 仅适用于如下实例：
     *   * * MySQL 5.7高可用本地SSD盘版
     *   * * MySQL 5.6.
     *
     * @throws \Exception
     *
     * @return DescribeInstanceCrossBackupPolicyResponse
     */
    public function describeInstanceCrossBackupPolicyWithOptions(DescribeInstanceCrossBackupPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceCrossBackupPolicyResponse::fromMap($this->doRequest('DescribeInstanceCrossBackupPolicy', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * DescribeInstanceCrossBackupPolicy 调用DescribeInstanceCrossBackupPolicy接口查询跨地域备份设置。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeInstanceCrossBackupPolicy
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 仅适用于如下实例：
     *   * * MySQL 5.7高可用本地SSD盘版
     *   * * MySQL 5.6.
     *
     * @throws \Exception
     *
     * @return DescribeInstanceCrossBackupPolicyResponse
     */
    public function describeInstanceCrossBackupPolicy(DescribeInstanceCrossBackupPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceCrossBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * DescribeCrossRegionBackups 调用DescribeCrossRegionBackups接口查看某RDS实例跨地域数据备份文件列表。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionBackups
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
     *   * &CrossBackupId=14562
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 查看日志备份文件请参见[DescribeCrossRegionLogBackupFiles](~~121734~~)。
     *   * 仅适用于如下实例：
     *   * * MySQL 5.7高可用本地SSD盘版
     *   * * MySQL 5.6.
     *
     * @throws \Exception
     *
     * @return DescribeCrossRegionBackupsResponse
     */
    public function describeCrossRegionBackupsWithOptions(DescribeCrossRegionBackupsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeCrossRegionBackupsResponse::fromMap($this->doRequest('DescribeCrossRegionBackups', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * DescribeCrossRegionBackups 调用DescribeCrossRegionBackups接口查看某RDS实例跨地域数据备份文件列表。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionBackups
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
     *   * &CrossBackupId=14562
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 查看日志备份文件请参见[DescribeCrossRegionLogBackupFiles](~~121734~~)。
     *   * 仅适用于如下实例：
     *   * * MySQL 5.7高可用本地SSD盘版
     *   * * MySQL 5.6.
     *
     * @throws \Exception
     *
     * @return DescribeCrossRegionBackupsResponse
     */
    public function describeCrossRegionBackups(DescribeCrossRegionBackupsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrossRegionBackupsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeReadDBInstanceDelayResponse
     */
    public function describeReadDBInstanceDelayWithOptions(DescribeReadDBInstanceDelayRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeReadDBInstanceDelayResponse::fromMap($this->doRequest('DescribeReadDBInstanceDelay', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeReadDBInstanceDelayResponse
     */
    public function describeReadDBInstanceDelay(DescribeReadDBInstanceDelayRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReadDBInstanceDelayWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RestoreTableResponse
     */
    public function restoreTableWithOptions(RestoreTableRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RestoreTableResponse::fromMap($this->doRequest('RestoreTable', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RestoreTableResponse
     */
    public function restoreTable(RestoreTableRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreTableWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateParameterGroupResponse
     */
    public function createParameterGroupWithOptions(CreateParameterGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateParameterGroupResponse::fromMap($this->doRequest('CreateParameterGroup', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateParameterGroupResponse
     */
    public function createParameterGroup(CreateParameterGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createParameterGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeParameterGroupsResponse
     */
    public function describeParameterGroupsWithOptions(DescribeParameterGroupsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeParameterGroupsResponse::fromMap($this->doRequest('DescribeParameterGroups', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeParameterGroupsResponse
     */
    public function describeParameterGroups(DescribeParameterGroupsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterGroupsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CloneParameterGroupResponse
     */
    public function cloneParameterGroupWithOptions(CloneParameterGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CloneParameterGroupResponse::fromMap($this->doRequest('CloneParameterGroup', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CloneParameterGroupResponse
     */
    public function cloneParameterGroup(CloneParameterGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneParameterGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeParameterGroupResponse
     */
    public function describeParameterGroupWithOptions(DescribeParameterGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeParameterGroupResponse::fromMap($this->doRequest('DescribeParameterGroup', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeParameterGroupResponse
     */
    public function describeParameterGroup(DescribeParameterGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyParameterGroupResponse
     */
    public function modifyParameterGroupWithOptions(ModifyParameterGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyParameterGroupResponse::fromMap($this->doRequest('ModifyParameterGroup', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyParameterGroupResponse
     */
    public function modifyParameterGroup(ModifyParameterGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParameterGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteParameterGroupResponse
     */
    public function deleteParameterGroupWithOptions(DeleteParameterGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteParameterGroupResponse::fromMap($this->doRequest('DeleteParameterGroup', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteParameterGroupResponse
     */
    public function deleteParameterGroup(DeleteParameterGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteParameterGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifySQLCollectorRetentionResponse
     */
    public function modifySQLCollectorRetentionWithOptions(ModifySQLCollectorRetentionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifySQLCollectorRetentionResponse::fromMap($this->doRequest('ModifySQLCollectorRetention', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifySQLCollectorRetentionResponse
     */
    public function modifySQLCollectorRetention(ModifySQLCollectorRetentionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySQLCollectorRetentionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSQLCollectorRetentionResponse
     */
    public function describeSQLCollectorRetentionWithOptions(DescribeSQLCollectorRetentionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSQLCollectorRetentionResponse::fromMap($this->doRequest('DescribeSQLCollectorRetention', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSQLCollectorRetentionResponse
     */
    public function describeSQLCollectorRetention(DescribeSQLCollectorRetentionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLCollectorRetentionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CheckInstanceExistResponse
     */
    public function checkInstanceExistWithOptions(CheckInstanceExistRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CheckInstanceExistResponse::fromMap($this->doRequest('CheckInstanceExist', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CheckInstanceExistResponse
     */
    public function checkInstanceExist(CheckInstanceExistRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkInstanceExistWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLogBackupFilesResponse
     */
    public function describeLogBackupFilesWithOptions(DescribeLogBackupFilesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeLogBackupFilesResponse::fromMap($this->doRequest('DescribeLogBackupFiles', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLogBackupFilesResponse
     */
    public function describeLogBackupFiles(DescribeLogBackupFilesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogBackupFilesWithOptions($request, $runtime);
    }

    /**
     * MigrateSecurityIPMode You can call this operation to switch a whitelist from normal mode to safe mode.
     *   * request demo:   * http(s)://rds.aliyuncs.com/? Action=MigrateSecurityIPMode
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxx
     *   * &<Common request parameters>
     *   * description:   * * In normal mode, IP addresses in the whitelist apply to both classic networks and VPCs. In case of security risks, we recommend that you switch to safe mode.
     *   * * In safe mode, IP addresses in the whitelist are divided into VPC IP addresses and the IP addresses of classic networks and public networks.
     *   * >
     *   * * Safe mode cannot be switched to normal mode.
     *   * * This operation is not applicable to SQL Server and MariaDB instances.
     *
     * @throws \Exception
     *
     * @return MigrateSecurityIPModeResponse
     */
    public function migrateSecurityIPModeWithOptions(MigrateSecurityIPModeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return MigrateSecurityIPModeResponse::fromMap($this->doRequest('MigrateSecurityIPMode', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * MigrateSecurityIPMode You can call this operation to switch a whitelist from normal mode to safe mode.
     *   * request demo:   * http(s)://rds.aliyuncs.com/? Action=MigrateSecurityIPMode
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxx
     *   * &<Common request parameters>
     *   * description:   * * In normal mode, IP addresses in the whitelist apply to both classic networks and VPCs. In case of security risks, we recommend that you switch to safe mode.
     *   * * In safe mode, IP addresses in the whitelist are divided into VPC IP addresses and the IP addresses of classic networks and public networks.
     *   * >
     *   * * Safe mode cannot be switched to normal mode.
     *   * * This operation is not applicable to SQL Server and MariaDB instances.
     *
     * @throws \Exception
     *
     * @return MigrateSecurityIPModeResponse
     */
    public function migrateSecurityIPMode(MigrateSecurityIPModeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateSecurityIPModeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SwitchDBInstanceVpcResponse
     */
    public function switchDBInstanceVpcWithOptions(SwitchDBInstanceVpcRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SwitchDBInstanceVpcResponse::fromMap($this->doRequest('SwitchDBInstanceVpc', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SwitchDBInstanceVpcResponse
     */
    public function switchDBInstanceVpc(SwitchDBInstanceVpcRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDBInstanceVpcWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCollationTimeZonesResponse
     */
    public function describeCollationTimeZonesWithOptions(DescribeCollationTimeZonesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeCollationTimeZonesResponse::fromMap($this->doRequest('DescribeCollationTimeZones', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCollationTimeZonesResponse
     */
    public function describeCollationTimeZones(DescribeCollationTimeZonesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCollationTimeZonesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceKeywordsResponse
     */
    public function describeInstanceKeywordsWithOptions(DescribeInstanceKeywordsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceKeywordsResponse::fromMap($this->doRequest('DescribeInstanceKeywords', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceKeywordsResponse
     */
    public function describeInstanceKeywords(DescribeInstanceKeywordsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceKeywordsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyCollationTimeZoneResponse
     */
    public function modifyCollationTimeZoneWithOptions(ModifyCollationTimeZoneRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyCollationTimeZoneResponse::fromMap($this->doRequest('ModifyCollationTimeZone', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyCollationTimeZoneResponse
     */
    public function modifyCollationTimeZone(ModifyCollationTimeZoneRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCollationTimeZoneWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBackupDatabaseResponse
     */
    public function describeBackupDatabaseWithOptions(DescribeBackupDatabaseRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeBackupDatabaseResponse::fromMap($this->doRequest('DescribeBackupDatabase', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBackupDatabaseResponse
     */
    public function describeBackupDatabase(DescribeBackupDatabaseRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupDatabaseWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CopyDatabaseBetweenInstancesResponse
     */
    public function copyDatabaseBetweenInstancesWithOptions(CopyDatabaseBetweenInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CopyDatabaseBetweenInstancesResponse::fromMap($this->doRequest('CopyDatabaseBetweenInstances', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CopyDatabaseBetweenInstancesResponse
     */
    public function copyDatabaseBetweenInstances(CopyDatabaseBetweenInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyDatabaseBetweenInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecoveryDBInstanceResponse
     */
    public function recoveryDBInstanceWithOptions(RecoveryDBInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RecoveryDBInstanceResponse::fromMap($this->doRequest('RecoveryDBInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RecoveryDBInstanceResponse
     */
    public function recoveryDBInstance(RecoveryDBInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoveryDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions(DescribeAvailableResourceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAvailableResourceResponse::fromMap($this->doRequest('DescribeAvailableResource', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResource(DescribeAvailableResourceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DestroyDBInstanceResponse
     */
    public function destroyDBInstanceWithOptions(DestroyDBInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DestroyDBInstanceResponse::fromMap($this->doRequest('DestroyDBInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DestroyDBInstanceResponse
     */
    public function destroyDBInstance(DestroyDBInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyReadonlyInstanceDelayReplicationTimeResponse
     */
    public function modifyReadonlyInstanceDelayReplicationTimeWithOptions(ModifyReadonlyInstanceDelayReplicationTimeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyReadonlyInstanceDelayReplicationTimeResponse::fromMap($this->doRequest('ModifyReadonlyInstanceDelayReplicationTime', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyReadonlyInstanceDelayReplicationTimeResponse
     */
    public function modifyReadonlyInstanceDelayReplicationTime(ModifyReadonlyInstanceDelayReplicationTimeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReadonlyInstanceDelayReplicationTimeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceProxyConfigurationResponse
     */
    public function describeDBInstanceProxyConfigurationWithOptions(DescribeDBInstanceProxyConfigurationRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstanceProxyConfigurationResponse::fromMap($this->doRequest('DescribeDBInstanceProxyConfiguration', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceProxyConfigurationResponse
     */
    public function describeDBInstanceProxyConfiguration(DescribeDBInstanceProxyConfigurationRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceProxyConfigurationWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateOnlineDatabaseTaskResponse
     */
    public function createOnlineDatabaseTaskWithOptions(CreateOnlineDatabaseTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateOnlineDatabaseTaskResponse::fromMap($this->doRequest('CreateOnlineDatabaseTask', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateOnlineDatabaseTaskResponse
     */
    public function createOnlineDatabaseTask(CreateOnlineDatabaseTaskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOnlineDatabaseTaskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersionWithOptions(UpgradeDBInstanceKernelVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpgradeDBInstanceKernelVersionResponse::fromMap($this->doRequest('UpgradeDBInstanceKernelVersion', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersion(UpgradeDBInstanceKernelVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceKernelVersionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceProxyConfigurationResponse
     */
    public function modifyDBInstanceProxyConfigurationWithOptions(ModifyDBInstanceProxyConfigurationRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceProxyConfigurationResponse::fromMap($this->doRequest('ModifyDBInstanceProxyConfiguration', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceProxyConfigurationResponse
     */
    public function modifyDBInstanceProxyConfiguration(ModifyDBInstanceProxyConfigurationRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceProxyConfigurationWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSecurityGroupConfigurationResponse
     */
    public function describeSecurityGroupConfigurationWithOptions(DescribeSecurityGroupConfigurationRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSecurityGroupConfigurationResponse::fromMap($this->doRequest('DescribeSecurityGroupConfiguration', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSecurityGroupConfigurationResponse
     */
    public function describeSecurityGroupConfiguration(DescribeSecurityGroupConfigurationRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupConfigurationWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifySecurityGroupConfigurationResponse
     */
    public function modifySecurityGroupConfigurationWithOptions(ModifySecurityGroupConfigurationRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifySecurityGroupConfigurationResponse::fromMap($this->doRequest('ModifySecurityGroupConfiguration', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifySecurityGroupConfigurationResponse
     */
    public function modifySecurityGroupConfiguration(ModifySecurityGroupConfigurationRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupConfigurationWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeOssDownloadsForSQLServerResponse
     */
    public function describeOssDownloadsForSQLServerWithOptions(DescribeOssDownloadsForSQLServerRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeOssDownloadsForSQLServerResponse::fromMap($this->doRequest('DescribeOssDownloadsForSQLServer', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeOssDownloadsForSQLServerResponse
     */
    public function describeOssDownloadsForSQLServer(DescribeOssDownloadsForSQLServerRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssDownloadsForSQLServerWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMigrateTasksForSQLServerResponse
     */
    public function describeMigrateTasksForSQLServerWithOptions(DescribeMigrateTasksForSQLServerRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMigrateTasksForSQLServerResponse::fromMap($this->doRequest('DescribeMigrateTasksForSQLServer', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMigrateTasksForSQLServerResponse
     */
    public function describeMigrateTasksForSQLServer(DescribeMigrateTasksForSQLServerRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrateTasksForSQLServerWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateMigrateTaskForSQLServerResponse
     */
    public function createMigrateTaskForSQLServerWithOptions(CreateMigrateTaskForSQLServerRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateMigrateTaskForSQLServerResponse::fromMap($this->doRequest('CreateMigrateTaskForSQLServer', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateMigrateTaskForSQLServerResponse
     */
    public function createMigrateTaskForSQLServer(CreateMigrateTaskForSQLServerRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMigrateTaskForSQLServerWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateMigrateTaskResponse
     */
    public function createMigrateTaskWithOptions(CreateMigrateTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateMigrateTaskResponse::fromMap($this->doRequest('CreateMigrateTask', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateMigrateTaskResponse
     */
    public function createMigrateTask(CreateMigrateTaskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMigrateTaskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeOssDownloadsResponse
     */
    public function describeOssDownloadsWithOptions(DescribeOssDownloadsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeOssDownloadsResponse::fromMap($this->doRequest('DescribeOssDownloads', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeOssDownloadsResponse
     */
    public function describeOssDownloads(DescribeOssDownloadsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssDownloadsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMigrateTasksResponse
     */
    public function describeMigrateTasksWithOptions(DescribeMigrateTasksRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMigrateTasksResponse::fromMap($this->doRequest('DescribeMigrateTasks', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMigrateTasksResponse
     */
    public function describeMigrateTasks(DescribeMigrateTasksRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrateTasksWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CopyDatabaseResponse
     */
    public function copyDatabaseWithOptions(CopyDatabaseRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CopyDatabaseResponse::fromMap($this->doRequest('CopyDatabase', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CopyDatabaseResponse
     */
    public function copyDatabase(CopyDatabaseRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyDatabaseWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ResetAccountResponse
     */
    public function resetAccountWithOptions(ResetAccountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ResetAccountResponse::fromMap($this->doRequest('ResetAccount', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ResetAccountResponse
     */
    public function resetAccount(ResetAccountRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstancesAsCsvResponse
     */
    public function describeDBInstancesAsCsvWithOptions(DescribeDBInstancesAsCsvRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstancesAsCsvResponse::fromMap($this->doRequest('DescribeDBInstancesAsCsv', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstancesAsCsvResponse
     */
    public function describeDBInstancesAsCsv(DescribeDBInstancesAsCsvRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesAsCsvWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceNetworkExpireTimeResponse
     */
    public function modifyDBInstanceNetworkExpireTimeWithOptions(ModifyDBInstanceNetworkExpireTimeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceNetworkExpireTimeResponse::fromMap($this->doRequest('ModifyDBInstanceNetworkExpireTime', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceNetworkExpireTimeResponse
     */
    public function modifyDBInstanceNetworkExpireTime(ModifyDBInstanceNetworkExpireTimeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceNetworkExpireTimeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyResourceGroupResponse
     */
    public function modifyResourceGroupWithOptions(ModifyResourceGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyResourceGroupResponse::fromMap($this->doRequest('ModifyResourceGroup', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyResourceGroupResponse
     */
    public function modifyResourceGroup(ModifyResourceGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRenewalPriceResponse
     */
    public function describeRenewalPriceWithOptions(DescribeRenewalPriceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRenewalPriceResponse::fromMap($this->doRequest('DescribeRenewalPrice', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRenewalPriceResponse
     */
    public function describeRenewalPrice(DescribeRenewalPriceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRenewalPriceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions(DescribePriceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribePriceResponse::fromMap($this->doRequest('DescribePrice', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribePriceResponse
     */
    public function describePrice(DescribePriceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions(RenewInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RenewInstanceResponse::fromMap($this->doRequest('RenewInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance(RenewInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CheckRecoveryConditionsResponse
     */
    public function checkRecoveryConditionsWithOptions(CheckRecoveryConditionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CheckRecoveryConditionsResponse::fromMap($this->doRequest('CheckRecoveryConditions', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CheckRecoveryConditionsResponse
     */
    public function checkRecoveryConditions(CheckRecoveryConditionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkRecoveryConditionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceAutoRenewalAttributeResponse
     */
    public function modifyInstanceAutoRenewalAttributeWithOptions(ModifyInstanceAutoRenewalAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceAutoRenewalAttributeResponse::fromMap($this->doRequest('ModifyInstanceAutoRenewalAttribute', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceAutoRenewalAttributeResponse
     */
    public function modifyInstanceAutoRenewalAttribute(ModifyInstanceAutoRenewalAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAutoRenewalAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceAutoRenewalAttributeResponse
     */
    public function describeInstanceAutoRenewalAttributeWithOptions(DescribeInstanceAutoRenewalAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceAutoRenewalAttributeResponse::fromMap($this->doRequest('DescribeInstanceAutoRenewalAttribute', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeInstanceAutoRenewalAttributeResponse
     */
    public function describeInstanceAutoRenewalAttribute(DescribeInstanceAutoRenewalAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAutoRenewalAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ReleaseReadWriteSplittingConnectionResponse
     */
    public function releaseReadWriteSplittingConnectionWithOptions(ReleaseReadWriteSplittingConnectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ReleaseReadWriteSplittingConnectionResponse::fromMap($this->doRequest('ReleaseReadWriteSplittingConnection', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ReleaseReadWriteSplittingConnectionResponse
     */
    public function releaseReadWriteSplittingConnection(ReleaseReadWriteSplittingConnectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseReadWriteSplittingConnectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyReadWriteSplittingConnectionResponse
     */
    public function modifyReadWriteSplittingConnectionWithOptions(ModifyReadWriteSplittingConnectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyReadWriteSplittingConnectionResponse::fromMap($this->doRequest('ModifyReadWriteSplittingConnection', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyReadWriteSplittingConnectionResponse
     */
    public function modifyReadWriteSplittingConnection(ModifyReadWriteSplittingConnectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReadWriteSplittingConnectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CalculateDBInstanceWeightResponse
     */
    public function calculateDBInstanceWeightWithOptions(CalculateDBInstanceWeightRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CalculateDBInstanceWeightResponse::fromMap($this->doRequest('CalculateDBInstanceWeight', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CalculateDBInstanceWeightResponse
     */
    public function calculateDBInstanceWeight(CalculateDBInstanceWeightRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->calculateDBInstanceWeightWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AllocateReadWriteSplittingConnectionResponse
     */
    public function allocateReadWriteSplittingConnectionWithOptions(AllocateReadWriteSplittingConnectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AllocateReadWriteSplittingConnectionResponse::fromMap($this->doRequest('AllocateReadWriteSplittingConnection', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AllocateReadWriteSplittingConnectionResponse
     */
    public function allocateReadWriteSplittingConnection(AllocateReadWriteSplittingConnectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateReadWriteSplittingConnectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstancePayTypeResponse
     */
    public function modifyDBInstancePayTypeWithOptions(ModifyDBInstancePayTypeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstancePayTypeResponse::fromMap($this->doRequest('ModifyDBInstancePayType', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstancePayTypeResponse
     */
    public function modifyDBInstancePayType(ModifyDBInstancePayTypeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstancePayTypeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCharacterSetNameResponse
     */
    public function describeCharacterSetNameWithOptions(DescribeCharacterSetNameRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeCharacterSetNameResponse::fromMap($this->doRequest('DescribeCharacterSetName', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCharacterSetNameResponse
     */
    public function describeCharacterSetName(DescribeCharacterSetNameRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCharacterSetNameWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteBackupResponse
     */
    public function deleteBackupWithOptions(DeleteBackupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteBackupResponse::fromMap($this->doRequest('DeleteBackup', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteBackupResponse
     */
    public function deleteBackup(DeleteBackupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDiagnosticReportListResponse
     */
    public function describeDiagnosticReportListWithOptions(DescribeDiagnosticReportListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDiagnosticReportListResponse::fromMap($this->doRequest('DescribeDiagnosticReportList', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDiagnosticReportListResponse
     */
    public function describeDiagnosticReportList(DescribeDiagnosticReportListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosticReportListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateDiagnosticReportResponse
     */
    public function createDiagnosticReportWithOptions(CreateDiagnosticReportRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateDiagnosticReportResponse::fromMap($this->doRequest('CreateDiagnosticReport', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateDiagnosticReportResponse
     */
    public function createDiagnosticReport(CreateDiagnosticReportRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiagnosticReportWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CloneDBInstanceResponse
     */
    public function cloneDBInstanceWithOptions(CloneDBInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CloneDBInstanceResponse::fromMap($this->doRequest('CloneDBInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CloneDBInstanceResponse
     */
    public function cloneDBInstance(CloneDBInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneDBInstanceWithOptions($request, $runtime);
    }

    /**
     * DescribeTags 调用DescribeTags接口查询RDS实例的标签。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeTags
     *   * &RegionId=cn-hangzhou
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 调用本接口时限制条件如下：
     *   * * 如果传入指定实例ID，则查询该实例下所有标签，其他过滤条件失效；
     *   * * 若查询标签时仅传入标签键（TagKey），未传入标签值（TagValue），则返回所有符合标签键条件的结果。若同时传入标签键和标签值，则返回两个条件都符合的结果。
     *
     * @throws \Exception
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions(DescribeTagsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeTagsResponse::fromMap($this->doRequest('DescribeTags', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * DescribeTags 调用DescribeTags接口查询RDS实例的标签。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=DescribeTags
     *   * &RegionId=cn-hangzhou
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 调用本接口时限制条件如下：
     *   * * 如果传入指定实例ID，则查询该实例下所有标签，其他过滤条件失效；
     *   * * 若查询标签时仅传入标签键（TagKey），未传入标签值（TagValue），则返回所有符合标签键条件的结果。若同时传入标签键和标签值，则返回两个条件都符合的结果。
     *
     * @throws \Exception
     *
     * @return DescribeTagsResponse
     */
    public function describeTags(DescribeTagsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceByTagsResponse
     */
    public function describeDBInstanceByTagsWithOptions(DescribeDBInstanceByTagsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstanceByTagsResponse::fromMap($this->doRequest('DescribeDBInstanceByTags', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceByTagsResponse
     */
    public function describeDBInstanceByTags(DescribeDBInstanceByTagsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceByTagsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RevokeOperatorPermissionResponse
     */
    public function revokeOperatorPermissionWithOptions(RevokeOperatorPermissionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RevokeOperatorPermissionResponse::fromMap($this->doRequest('RevokeOperatorPermission', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RevokeOperatorPermissionResponse
     */
    public function revokeOperatorPermission(RevokeOperatorPermissionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeOperatorPermissionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceTDEResponse
     */
    public function modifyDBInstanceTDEWithOptions(ModifyDBInstanceTDERequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceTDEResponse::fromMap($this->doRequest('ModifyDBInstanceTDE', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceTDEResponse
     */
    public function modifyDBInstanceTDE(ModifyDBInstanceTDERequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceTDEWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceSSLResponse
     */
    public function modifyDBInstanceSSLWithOptions(ModifyDBInstanceSSLRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceSSLResponse::fromMap($this->doRequest('ModifyDBInstanceSSL', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceSSLResponse
     */
    public function modifyDBInstanceSSL(ModifyDBInstanceSSLRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GrantOperatorPermissionResponse
     */
    public function grantOperatorPermissionWithOptions(GrantOperatorPermissionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GrantOperatorPermissionResponse::fromMap($this->doRequest('GrantOperatorPermission', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GrantOperatorPermissionResponse
     */
    public function grantOperatorPermission(GrantOperatorPermissionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantOperatorPermissionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceTDEResponse
     */
    public function describeDBInstanceTDEWithOptions(DescribeDBInstanceTDERequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstanceTDEResponse::fromMap($this->doRequest('DescribeDBInstanceTDE', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceTDEResponse
     */
    public function describeDBInstanceTDE(DescribeDBInstanceTDERequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceTDEWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSLWithOptions(DescribeDBInstanceSSLRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstanceSSLResponse::fromMap($this->doRequest('DescribeDBInstanceSSL', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSL(DescribeDBInstanceSSLRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSQLLogFilesResponse
     */
    public function describeSQLLogFilesWithOptions(DescribeSQLLogFilesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSQLLogFilesResponse::fromMap($this->doRequest('DescribeSQLLogFiles', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSQLLogFilesResponse
     */
    public function describeSQLLogFiles(DescribeSQLLogFilesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogFilesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceMonitorResponse
     */
    public function modifyDBInstanceMonitorWithOptions(ModifyDBInstanceMonitorRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceMonitorResponse::fromMap($this->doRequest('ModifyDBInstanceMonitor', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceMonitorResponse
     */
    public function modifyDBInstanceMonitor(ModifyDBInstanceMonitorRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceMonitorWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SwitchDBInstanceHAResponse
     */
    public function switchDBInstanceHAWithOptions(SwitchDBInstanceHARequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SwitchDBInstanceHAResponse::fromMap($this->doRequest('SwitchDBInstanceHA', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SwitchDBInstanceHAResponse
     */
    public function switchDBInstanceHA(SwitchDBInstanceHARequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDBInstanceHAWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceMonitorResponse
     */
    public function describeDBInstanceMonitorWithOptions(DescribeDBInstanceMonitorRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstanceMonitorResponse::fromMap($this->doRequest('DescribeDBInstanceMonitor', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceMonitorResponse
     */
    public function describeDBInstanceMonitor(DescribeDBInstanceMonitorRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceMonitorWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSQLCollectorPolicyResponse
     */
    public function describeSQLCollectorPolicyWithOptions(DescribeSQLCollectorPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSQLCollectorPolicyResponse::fromMap($this->doRequest('DescribeSQLCollectorPolicy', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSQLCollectorPolicyResponse
     */
    public function describeSQLCollectorPolicy(DescribeSQLCollectorPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLCollectorPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifySQLCollectorPolicyResponse
     */
    public function modifySQLCollectorPolicyWithOptions(ModifySQLCollectorPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifySQLCollectorPolicyResponse::fromMap($this->doRequest('ModifySQLCollectorPolicy', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifySQLCollectorPolicyResponse
     */
    public function modifySQLCollectorPolicy(ModifySQLCollectorPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySQLCollectorPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceHAConfigResponse
     */
    public function modifyDBInstanceHAConfigWithOptions(ModifyDBInstanceHAConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceHAConfigResponse::fromMap($this->doRequest('ModifyDBInstanceHAConfig', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceHAConfigResponse
     */
    public function modifyDBInstanceHAConfig(ModifyDBInstanceHAConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceHAConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceHAConfigResponse
     */
    public function describeDBInstanceHAConfigWithOptions(DescribeDBInstanceHAConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstanceHAConfigResponse::fromMap($this->doRequest('DescribeDBInstanceHAConfig', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceHAConfigResponse
     */
    public function describeDBInstanceHAConfig(DescribeDBInstanceHAConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceHAConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSQLReportsResponse
     */
    public function describeSQLReportsWithOptions(DescribeSQLReportsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSQLReportsResponse::fromMap($this->doRequest('DescribeSQLReports', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSQLReportsResponse
     */
    public function describeSQLReports(DescribeSQLReportsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLReportsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceIPArrayListResponse
     */
    public function describeDBInstanceIPArrayListWithOptions(DescribeDBInstanceIPArrayListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstanceIPArrayListResponse::fromMap($this->doRequest('DescribeDBInstanceIPArrayList', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceIPArrayListResponse
     */
    public function describeDBInstanceIPArrayList(DescribeDBInstanceIPArrayListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceIPArrayListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSQLLogReportListResponse
     */
    public function describeSQLLogReportListWithOptions(DescribeSQLLogReportListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSQLLogReportListResponse::fromMap($this->doRequest('DescribeSQLLogReportList', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSQLLogReportListResponse
     */
    public function describeSQLLogReportList(DescribeSQLLogReportListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogReportListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ResetAccountForPGResponse
     */
    public function resetAccountForPGWithOptions(ResetAccountForPGRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ResetAccountForPGResponse::fromMap($this->doRequest('ResetAccountForPG', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ResetAccountForPGResponse
     */
    public function resetAccountForPG(ResetAccountForPGRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountForPGWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpgradeDBInstanceEngineVersionResponse
     */
    public function upgradeDBInstanceEngineVersionWithOptions(UpgradeDBInstanceEngineVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpgradeDBInstanceEngineVersionResponse::fromMap($this->doRequest('UpgradeDBInstanceEngineVersion', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpgradeDBInstanceEngineVersionResponse
     */
    public function upgradeDBInstanceEngineVersion(UpgradeDBInstanceEngineVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceEngineVersionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RevokeAccountPrivilegeResponse
     */
    public function revokeAccountPrivilegeWithOptions(RevokeAccountPrivilegeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RevokeAccountPrivilegeResponse::fromMap($this->doRequest('RevokeAccountPrivilege', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RevokeAccountPrivilegeResponse
     */
    public function revokeAccountPrivilege(RevokeAccountPrivilegeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeAccountPrivilegeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstanceWithOptions(RestartDBInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RestartDBInstanceResponse::fromMap($this->doRequest('RestartDBInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstance(RestartDBInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions(ResetAccountPasswordRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ResetAccountPasswordResponse::fromMap($this->doRequest('ResetAccountPassword', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPassword(ResetAccountPasswordRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * RemoveTagsFromResource 调用RemoveTagsFromResource接口解绑标签。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=RemoveTagsFromResource
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxx
     *   * &RegionId=cn-hangzhou
     *   * &Tag.1.key=test
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 限制条件如下：
     *   * * 单次最多支持解绑10个标签；
     *   * * 若一个标签所绑定的实例全都解绑，则该标签自动删除；
     *   * * 若解绑标签时仅传入标签键（TagKey），未传入标签值（TagValue），则解绑所有符合标签键条件的标签。
     *   * * 必须传入至少一组标签或者单独的一个标签键。
     *
     * @throws \Exception
     *
     * @return RemoveTagsFromResourceResponse
     */
    public function removeTagsFromResourceWithOptions(RemoveTagsFromResourceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveTagsFromResourceResponse::fromMap($this->doRequest('RemoveTagsFromResource', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * RemoveTagsFromResource 调用RemoveTagsFromResource接口解绑标签。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=RemoveTagsFromResource
     *   * &DBInstanceId=rm-uf6wjk5xxxxxxx
     *   * &RegionId=cn-hangzhou
     *   * &Tag.1.key=test
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * 限制条件如下：
     *   * * 单次最多支持解绑10个标签；
     *   * * 若一个标签所绑定的实例全都解绑，则该标签自动删除；
     *   * * 若解绑标签时仅传入标签键（TagKey），未传入标签值（TagValue），则解绑所有符合标签键条件的标签。
     *   * * 必须传入至少一组标签或者单独的一个标签键。
     *
     * @throws \Exception
     *
     * @return RemoveTagsFromResourceResponse
     */
    public function removeTagsFromResource(RemoveTagsFromResourceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTagsFromResourceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PurgeDBInstanceLogResponse
     */
    public function purgeDBInstanceLogWithOptions(PurgeDBInstanceLogRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PurgeDBInstanceLogResponse::fromMap($this->doRequest('PurgeDBInstanceLog', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PurgeDBInstanceLogResponse
     */
    public function purgeDBInstanceLog(PurgeDBInstanceLogRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purgeDBInstanceLogWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifySecurityIpsResponse
     */
    public function modifySecurityIpsWithOptions(ModifySecurityIpsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifySecurityIpsResponse::fromMap($this->doRequest('ModifySecurityIps', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifySecurityIpsResponse
     */
    public function modifySecurityIps(ModifySecurityIpsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityIpsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyParameterResponse
     */
    public function modifyParameterWithOptions(ModifyParameterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyParameterResponse::fromMap($this->doRequest('ModifyParameter', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyParameterResponse
     */
    public function modifyParameter(ModifyParameterRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParameterWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceSpecResponse
     */
    public function modifyDBInstanceSpecWithOptions(ModifyDBInstanceSpecRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceSpecResponse::fromMap($this->doRequest('ModifyDBInstanceSpec', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceSpecResponse
     */
    public function modifyDBInstanceSpec(ModifyDBInstanceSpecRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceMaintainTimeResponse
     */
    public function modifyDBInstanceMaintainTimeWithOptions(ModifyDBInstanceMaintainTimeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceMaintainTimeResponse::fromMap($this->doRequest('ModifyDBInstanceMaintainTime', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceMaintainTimeResponse
     */
    public function modifyDBInstanceMaintainTime(ModifyDBInstanceMaintainTimeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceMaintainTimeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescriptionWithOptions(ModifyDBInstanceDescriptionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceDescriptionResponse::fromMap($this->doRequest('ModifyDBInstanceDescription', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescription(ModifyDBInstanceDescriptionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBDescriptionResponse
     */
    public function modifyDBDescriptionWithOptions(ModifyDBDescriptionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBDescriptionResponse::fromMap($this->doRequest('ModifyDBDescription', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBDescriptionResponse
     */
    public function modifyDBDescription(ModifyDBDescriptionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBDescriptionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions(ModifyBackupPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyBackupPolicyResponse::fromMap($this->doRequest('ModifyBackupPolicy', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicy(ModifyBackupPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions(ModifyAccountDescriptionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyAccountDescriptionResponse::fromMap($this->doRequest('ModifyAccountDescription', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescription(ModifyAccountDescriptionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountDescriptionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return MigrateToOtherZoneResponse
     */
    public function migrateToOtherZoneWithOptions(MigrateToOtherZoneRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return MigrateToOtherZoneResponse::fromMap($this->doRequest('MigrateToOtherZone', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return MigrateToOtherZoneResponse
     */
    public function migrateToOtherZone(MigrateToOtherZoneRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateToOtherZoneWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ImportDatabaseBetweenInstancesResponse
     */
    public function importDatabaseBetweenInstancesWithOptions(ImportDatabaseBetweenInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ImportDatabaseBetweenInstancesResponse::fromMap($this->doRequest('ImportDatabaseBetweenInstances', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ImportDatabaseBetweenInstancesResponse
     */
    public function importDatabaseBetweenInstances(ImportDatabaseBetweenInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importDatabaseBetweenInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GrantAccountPrivilegeResponse
     */
    public function grantAccountPrivilegeWithOptions(GrantAccountPrivilegeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GrantAccountPrivilegeResponse::fromMap($this->doRequest('GrantAccountPrivilege', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GrantAccountPrivilegeResponse
     */
    public function grantAccountPrivilege(GrantAccountPrivilegeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantAccountPrivilegeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTasksResponse
     */
    public function describeTasksWithOptions(DescribeTasksRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeTasksResponse::fromMap($this->doRequest('DescribeTasks', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTasksResponse
     */
    public function describeTasks(DescribeTasksRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTasksWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSQLLogReportsResponse
     */
    public function describeSQLLogReportsWithOptions(DescribeSQLLogReportsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSQLLogReportsResponse::fromMap($this->doRequest('DescribeSQLLogReports', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSQLLogReportsResponse
     */
    public function describeSQLLogReports(DescribeSQLLogReportsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogReportsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSQLLogRecordsResponse
     */
    public function describeSQLLogRecordsWithOptions(DescribeSQLLogRecordsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSQLLogRecordsResponse::fromMap($this->doRequest('DescribeSQLLogRecords', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSQLLogRecordsResponse
     */
    public function describeSQLLogRecords(DescribeSQLLogRecordsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSlowLogsResponse
     */
    public function describeSlowLogsWithOptions(DescribeSlowLogsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSlowLogsResponse::fromMap($this->doRequest('DescribeSlowLogs', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSlowLogsResponse
     */
    public function describeSlowLogs(DescribeSlowLogsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecordsWithOptions(DescribeSlowLogRecordsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSlowLogRecordsResponse::fromMap($this->doRequest('DescribeSlowLogRecords', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecords(DescribeSlowLogRecordsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeResourceUsageResponse
     */
    public function describeResourceUsageWithOptions(DescribeResourceUsageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeResourceUsageResponse::fromMap($this->doRequest('DescribeResourceUsage', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeResourceUsageResponse
     */
    public function describeResourceUsage(DescribeResourceUsageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceUsageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions(DescribeRegionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions(DescribeRegionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplatesWithOptions(DescribeParameterTemplatesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeParameterTemplatesResponse::fromMap($this->doRequest('DescribeParameterTemplates', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplates(DescribeParameterTemplatesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterTemplatesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeParametersResponse
     */
    public function describeParametersWithOptions(DescribeParametersRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeParametersResponse::fromMap($this->doRequest('DescribeParameters', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeParametersResponse
     */
    public function describeParameters(DescribeParametersRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParametersWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeModifyParameterLogResponse
     */
    public function describeModifyParameterLogWithOptions(DescribeModifyParameterLogRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeModifyParameterLogResponse::fromMap($this->doRequest('DescribeModifyParameterLog', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeModifyParameterLogResponse
     */
    public function describeModifyParameterLog(DescribeModifyParameterLogRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModifyParameterLogWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeErrorLogsResponse
     */
    public function describeErrorLogsWithOptions(DescribeErrorLogsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeErrorLogsResponse::fromMap($this->doRequest('DescribeErrorLogs', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeErrorLogsResponse
     */
    public function describeErrorLogs(DescribeErrorLogsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeErrorLogsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstancePerformanceResponse
     */
    public function describeDBInstancePerformanceWithOptions(DescribeDBInstancePerformanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstancePerformanceResponse::fromMap($this->doRequest('DescribeDBInstancePerformance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstancePerformanceResponse
     */
    public function describeDBInstancePerformance(DescribeDBInstancePerformanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancePerformanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDatabasesResponse
     */
    public function describeDatabasesWithOptions(DescribeDatabasesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDatabasesResponse::fromMap($this->doRequest('DescribeDatabases', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDatabasesResponse
     */
    public function describeDatabases(DescribeDatabasesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabasesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBinlogFilesResponse
     */
    public function describeBinlogFilesWithOptions(DescribeBinlogFilesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeBinlogFilesResponse::fromMap($this->doRequest('DescribeBinlogFiles', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBinlogFilesResponse
     */
    public function describeBinlogFiles(DescribeBinlogFilesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBinlogFilesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBackupTasksResponse
     */
    public function describeBackupTasksWithOptions(DescribeBackupTasksRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeBackupTasksResponse::fromMap($this->doRequest('DescribeBackupTasks', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBackupTasksResponse
     */
    public function describeBackupTasks(DescribeBackupTasksRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupTasksWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackupsWithOptions(DescribeBackupsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeBackupsResponse::fromMap($this->doRequest('DescribeBackups', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackups(DescribeBackupsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions(DescribeBackupPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeBackupPolicyResponse::fromMap($this->doRequest('DescribeBackupPolicy', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicy(DescribeBackupPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccountsWithOptions(DescribeAccountsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAccountsResponse::fromMap($this->doRequest('DescribeAccounts', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccounts(DescribeAccountsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescibeImportsFromDatabaseResponse
     */
    public function descibeImportsFromDatabaseWithOptions(DescibeImportsFromDatabaseRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescibeImportsFromDatabaseResponse::fromMap($this->doRequest('DescibeImportsFromDatabase', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescibeImportsFromDatabaseResponse
     */
    public function descibeImportsFromDatabase(DescibeImportsFromDatabaseRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->descibeImportsFromDatabaseWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstanceWithOptions(DeleteDBInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteDBInstanceResponse::fromMap($this->doRequest('DeleteDBInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstance(DeleteDBInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDatabaseResponse
     */
    public function deleteDatabaseWithOptions(DeleteDatabaseRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteDatabaseResponse::fromMap($this->doRequest('DeleteDatabase', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDatabaseResponse
     */
    public function deleteDatabase(DeleteDatabaseRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatabaseWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccountWithOptions(DeleteAccountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAccountResponse::fromMap($this->doRequest('DeleteAccount', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccount(DeleteAccountRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateTempDBInstanceResponse
     */
    public function createTempDBInstanceWithOptions(CreateTempDBInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateTempDBInstanceResponse::fromMap($this->doRequest('CreateTempDBInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateTempDBInstanceResponse
     */
    public function createTempDBInstance(CreateTempDBInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTempDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateDatabaseResponse
     */
    public function createDatabaseWithOptions(CreateDatabaseRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateDatabaseResponse::fromMap($this->doRequest('CreateDatabase', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateDatabaseResponse
     */
    public function createDatabase(CreateDatabaseRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatabaseWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateBackupResponse
     */
    public function createBackupWithOptions(CreateBackupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateBackupResponse::fromMap($this->doRequest('CreateBackup', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateBackupResponse
     */
    public function createBackup(CreateBackupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateAccountResponse
     */
    public function createAccountWithOptions(CreateAccountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateAccountResponse::fromMap($this->doRequest('CreateAccount', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateAccountResponse
     */
    public function createAccount(CreateAccountRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CheckDBNameAvailableResponse
     */
    public function checkDBNameAvailableWithOptions(CheckDBNameAvailableRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CheckDBNameAvailableResponse::fromMap($this->doRequest('CheckDBNameAvailable', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CheckDBNameAvailableResponse
     */
    public function checkDBNameAvailable(CheckDBNameAvailableRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDBNameAvailableWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CheckAccountNameAvailableResponse
     */
    public function checkAccountNameAvailableWithOptions(CheckAccountNameAvailableRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CheckAccountNameAvailableResponse::fromMap($this->doRequest('CheckAccountNameAvailable', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CheckAccountNameAvailableResponse
     */
    public function checkAccountNameAvailable(CheckAccountNameAvailableRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAccountNameAvailableWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelImportResponse
     */
    public function cancelImportWithOptions(CancelImportRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelImportResponse::fromMap($this->doRequest('CancelImport', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelImportResponse
     */
    public function cancelImport(CancelImportRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelImportWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddTagsToResourceResponse
     */
    public function addTagsToResourceWithOptions(AddTagsToResourceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddTagsToResourceResponse::fromMap($this->doRequest('AddTagsToResource', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddTagsToResourceResponse
     */
    public function addTagsToResource(AddTagsToResourceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagsToResourceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SwitchDBInstanceNetTypeResponse
     */
    public function switchDBInstanceNetTypeWithOptions(SwitchDBInstanceNetTypeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SwitchDBInstanceNetTypeResponse::fromMap($this->doRequest('SwitchDBInstanceNetType', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SwitchDBInstanceNetTypeResponse
     */
    public function switchDBInstanceNetType(SwitchDBInstanceNetTypeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDBInstanceNetTypeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnectionWithOptions(ReleaseInstancePublicConnectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ReleaseInstancePublicConnectionResponse::fromMap($this->doRequest('ReleaseInstancePublicConnection', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnection(ReleaseInstancePublicConnectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstancePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceNetworkTypeResponse
     */
    public function modifyDBInstanceNetworkTypeWithOptions(ModifyDBInstanceNetworkTypeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceNetworkTypeResponse::fromMap($this->doRequest('ModifyDBInstanceNetworkType', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceNetworkTypeResponse
     */
    public function modifyDBInstanceNetworkType(ModifyDBInstanceNetworkTypeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceNetworkTypeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionStringWithOptions(ModifyDBInstanceConnectionStringRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceConnectionStringResponse::fromMap($this->doRequest('ModifyDBInstanceConnectionString', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionString(ModifyDBInstanceConnectionStringRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConnectionStringWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceConnectionModeResponse
     */
    public function modifyDBInstanceConnectionModeWithOptions(ModifyDBInstanceConnectionModeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceConnectionModeResponse::fromMap($this->doRequest('ModifyDBInstanceConnectionMode', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyDBInstanceConnectionModeResponse
     */
    public function modifyDBInstanceConnectionMode(ModifyDBInstanceConnectionModeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConnectionModeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfoWithOptions(DescribeDBInstanceNetInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstanceNetInfoResponse::fromMap($this->doRequest('DescribeDBInstanceNetInfo', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfo(DescribeDBInstanceNetInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceNetInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateReadOnlyDBInstanceResponse
     */
    public function createReadOnlyDBInstanceWithOptions(CreateReadOnlyDBInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateReadOnlyDBInstanceResponse::fromMap($this->doRequest('CreateReadOnlyDBInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateReadOnlyDBInstanceResponse
     */
    public function createReadOnlyDBInstance(CreateReadOnlyDBInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReadOnlyDBInstanceWithOptions($request, $runtime);
    }

    /**
     * CreateDBInstance 调用CreateDBInstance接口创建一个RDS实例。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=CreateDBInstance
     *   * &RegionId=cn-hangzhou
     *   * &Engine=MySQL
     *   * &EngineVersion=5.6
     *   * &DBInstanceClass=rds.mysql.s1.small
     *   * &DBInstanceStorage=20
     *   * &DBInstanceNetType=Internet
     *   * &PayType=Postpaid
     *   * &SecurityIPList=10.23.12.27/24
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * **请确保在使用该接口前，已充分了解RDS产品的收费方式和<xref href="https://www.alibabacloud.com/product/apsaradb-for-rds#pricing" format="html" scope="external" props="intl">价格</xref><xref href="https://www.aliyun.com/price/product#/rds/detail" format="html" scope="external" props="china">价格</xref>。**
     *   * 关于RDS实例的规格，请参见[实例规格表](~~26312~~)。
     *
     * @throws \Exception
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions(CreateDBInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateDBInstanceResponse::fromMap($this->doRequest('CreateDBInstance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * CreateDBInstance 调用CreateDBInstance接口创建一个RDS实例。
     *   * request demo:   * ```
     *   * http(s)://rds.aliyuncs.com/?Action=CreateDBInstance
     *   * &RegionId=cn-hangzhou
     *   * &Engine=MySQL
     *   * &EngineVersion=5.6
     *   * &DBInstanceClass=rds.mysql.s1.small
     *   * &DBInstanceStorage=20
     *   * &DBInstanceNetType=Internet
     *   * &PayType=Postpaid
     *   * &SecurityIPList=10.23.12.27/24
     *   * &<公共请求参数>
     *   * ```
     *   * description:   * **请确保在使用该接口前，已充分了解RDS产品的收费方式和<xref href="https://www.alibabacloud.com/product/apsaradb-for-rds#pricing" format="html" scope="external" props="intl">价格</xref><xref href="https://www.aliyun.com/price/product#/rds/detail" format="html" scope="external" props="china">价格</xref>。**
     *   * 关于RDS实例的规格，请参见[实例规格表](~~26312~~)。
     *
     * @throws \Exception
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstance(CreateDBInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnectionWithOptions(AllocateInstancePublicConnectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AllocateInstancePublicConnectionResponse::fromMap($this->doRequest('AllocateInstancePublicConnection', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnection(AllocateInstancePublicConnectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateInstancePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstancesByPerformanceResponse
     */
    public function describeDBInstancesByPerformanceWithOptions(DescribeDBInstancesByPerformanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstancesByPerformanceResponse::fromMap($this->doRequest('DescribeDBInstancesByPerformance', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstancesByPerformanceResponse
     */
    public function describeDBInstancesByPerformance(DescribeDBInstancesByPerformanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesByPerformanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstancesByExpireTimeResponse
     */
    public function describeDBInstancesByExpireTimeWithOptions(DescribeDBInstancesByExpireTimeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstancesByExpireTimeResponse::fromMap($this->doRequest('DescribeDBInstancesByExpireTime', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstancesByExpireTimeResponse
     */
    public function describeDBInstancesByExpireTime(DescribeDBInstancesByExpireTimeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesByExpireTimeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions(DescribeDBInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstancesResponse::fromMap($this->doRequest('DescribeDBInstances', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstances(DescribeDBInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttributeWithOptions(DescribeDBInstanceAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstanceAttributeResponse::fromMap($this->doRequest('DescribeDBInstanceAttribute', 'HTTPS', 'POST', '2014-08-15', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttribute(DescribeDBInstanceAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
