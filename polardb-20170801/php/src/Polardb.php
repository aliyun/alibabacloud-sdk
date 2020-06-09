<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801;

use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Endpoint\Endpoint;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAuditLogCollectorRequest;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAuditLogCollectorResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAuditLogCollectorRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAuditLogCollectorResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDetachedBackupsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDetachedBackupsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersWithBackupsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersWithBackupsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLogBackupPolicyRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLogBackupPolicyResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyLogBackupPolicyRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyLogBackupPolicyResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMonitorRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMonitorResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMonitorRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMonitorResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupLogsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupLogsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterSSLRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterSSLResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterSSLRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterSSLResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CloseDBClusterMigrationRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CloseDBClusterMigrationResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMigrationRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMigrationResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBNodeClassRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBNodeClassResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBNodesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBNodesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBNodesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBNodesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBEndpointAddressRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBEndpointAddressResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBDescriptionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBDescriptionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterParametersRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterParametersResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterEndpointRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterEndpointResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAccountPasswordRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAccountPasswordResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterPerformanceRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterPerformanceResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBEndpointAddressRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBEndpointAddressResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBClusterEndpointRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBClusterEndpointResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBEndpointAddressRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBEndpointAddressResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterEndpointRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterEndpointResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RestartDBNodeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RestartDBNodeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodePerformanceRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodePerformanceResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAccessWhitelistRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAccessWhitelistResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMaintainTimeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMaintainTimeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RevokeAccountPrivilegeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RevokeAccountPrivilegeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ResetAccountRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ResetAccountResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\GrantAccountPrivilegeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\GrantAccountPrivilegeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDatabaseRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDatabaseResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDatabaseRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDatabaseResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteBackupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteBackupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\FailoverDBClusterRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\FailoverDBClusterResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterDescriptionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterDescriptionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBClusterRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBClusterResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateBackupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateBackupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponse;

class Polardb extends Rpc {
    public function __construct($config){
        parent::__construct($config);
        $this->_endpointRule = "regional";
        $this->_endpointMap = [
            "cn-qingdao" => "polardb.aliyuncs.com",
            "cn-beijing" => "polardb.aliyuncs.com",
            "cn-hangzhou" => "polardb.aliyuncs.com",
            "cn-shanghai" => "polardb.aliyuncs.com",
            "cn-shenzhen" => "polardb.aliyuncs.com",
            "cn-hongkong" => "polardb.aliyuncs.com",
            "ap-southeast-1" => "polardb.aliyuncs.com",
            "us-west-1" => "polardb.aliyuncs.com",
            "cn-hangzhou-finance" => "polardb.aliyuncs.com",
            "cn-shanghai-finance-1" => "polardb.aliyuncs.com",
            "us-east-1" => "polardb.ap-northeast-1.aliyuncs.com",
            "cn-shenzhen-finance-1" => "polardb.aliyuncs.com",
            "cn-north-2-gov-1" => "polardb.aliyuncs.com"
            ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint("polardb", $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param DescribeDBClusterAuditLogCollectorRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDBClusterAuditLogCollectorResponse
     * @throws \Exception
     */
    public function describeDBClusterAuditLogCollectorWithOptions(DescribeDBClusterAuditLogCollectorRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDBClusterAuditLogCollectorResponse::fromMap($this->doRequest("DescribeDBClusterAuditLogCollector", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDBClusterAuditLogCollectorRequest $request
     * @return DescribeDBClusterAuditLogCollectorResponse
     * @throws \Exception
     */
    public function describeDBClusterAuditLogCollector(DescribeDBClusterAuditLogCollectorRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDBClusterAuditLogCollectorWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterAuditLogCollectorRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyDBClusterAuditLogCollectorResponse
     * @throws \Exception
     */
    public function modifyDBClusterAuditLogCollectorWithOptions(ModifyDBClusterAuditLogCollectorRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyDBClusterAuditLogCollectorResponse::fromMap($this->doRequest("ModifyDBClusterAuditLogCollector", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyDBClusterAuditLogCollectorRequest $request
     * @return ModifyDBClusterAuditLogCollectorResponse
     * @throws \Exception
     */
    public function modifyDBClusterAuditLogCollector(ModifyDBClusterAuditLogCollectorRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyDBClusterAuditLogCollectorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDetachedBackupsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDetachedBackupsResponse
     * @throws \Exception
     */
    public function describeDetachedBackupsWithOptions(DescribeDetachedBackupsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDetachedBackupsResponse::fromMap($this->doRequest("DescribeDetachedBackups", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDetachedBackupsRequest $request
     * @return DescribeDetachedBackupsResponse
     * @throws \Exception
     */
    public function describeDetachedBackups(DescribeDetachedBackupsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDetachedBackupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClustersWithBackupsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDBClustersWithBackupsResponse
     * @throws \Exception
     */
    public function describeDBClustersWithBackupsWithOptions(DescribeDBClustersWithBackupsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDBClustersWithBackupsResponse::fromMap($this->doRequest("DescribeDBClustersWithBackups", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDBClustersWithBackupsRequest $request
     * @return DescribeDBClustersWithBackupsResponse
     * @throws \Exception
     */
    public function describeDBClustersWithBackups(DescribeDBClustersWithBackupsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDBClustersWithBackupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogBackupPolicyRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeLogBackupPolicyResponse
     * @throws \Exception
     */
    public function describeLogBackupPolicyWithOptions(DescribeLogBackupPolicyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeLogBackupPolicyResponse::fromMap($this->doRequest("DescribeLogBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeLogBackupPolicyRequest $request
     * @return DescribeLogBackupPolicyResponse
     * @throws \Exception
     */
    public function describeLogBackupPolicy(DescribeLogBackupPolicyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeLogBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLogBackupPolicyRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyLogBackupPolicyResponse
     * @throws \Exception
     */
    public function modifyLogBackupPolicyWithOptions(ModifyLogBackupPolicyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyLogBackupPolicyResponse::fromMap($this->doRequest("ModifyLogBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyLogBackupPolicyRequest $request
     * @return ModifyLogBackupPolicyResponse
     * @throws \Exception
     */
    public function modifyLogBackupPolicy(ModifyLogBackupPolicyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyLogBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterMonitorRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyDBClusterMonitorResponse
     * @throws \Exception
     */
    public function modifyDBClusterMonitorWithOptions(ModifyDBClusterMonitorRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyDBClusterMonitorResponse::fromMap($this->doRequest("ModifyDBClusterMonitor", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyDBClusterMonitorRequest $request
     * @return ModifyDBClusterMonitorResponse
     * @throws \Exception
     */
    public function modifyDBClusterMonitor(ModifyDBClusterMonitorRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyDBClusterMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterMonitorRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDBClusterMonitorResponse
     * @throws \Exception
     */
    public function describeDBClusterMonitorWithOptions(DescribeDBClusterMonitorRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDBClusterMonitorResponse::fromMap($this->doRequest("DescribeDBClusterMonitor", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDBClusterMonitorRequest $request
     * @return DescribeDBClusterMonitorResponse
     * @throws \Exception
     */
    public function describeDBClusterMonitor(DescribeDBClusterMonitorRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDBClusterMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterAvailableResourcesRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDBClusterAvailableResourcesResponse
     * @throws \Exception
     */
    public function describeDBClusterAvailableResourcesWithOptions(DescribeDBClusterAvailableResourcesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDBClusterAvailableResourcesResponse::fromMap($this->doRequest("DescribeDBClusterAvailableResources", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDBClusterAvailableResourcesRequest $request
     * @return DescribeDBClusterAvailableResourcesResponse
     * @throws \Exception
     */
    public function describeDBClusterAvailableResources(DescribeDBClusterAvailableResourcesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDBClusterAvailableResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupLogsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeBackupLogsResponse
     * @throws \Exception
     */
    public function describeBackupLogsWithOptions(DescribeBackupLogsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeBackupLogsResponse::fromMap($this->doRequest("DescribeBackupLogs", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeBackupLogsRequest $request
     * @return DescribeBackupLogsResponse
     * @throws \Exception
     */
    public function describeBackupLogs(DescribeBackupLogsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeBackupLogsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterSSLRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyDBClusterSSLResponse
     * @throws \Exception
     */
    public function modifyDBClusterSSLWithOptions(ModifyDBClusterSSLRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyDBClusterSSLResponse::fromMap($this->doRequest("ModifyDBClusterSSL", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyDBClusterSSLRequest $request
     * @return ModifyDBClusterSSLResponse
     * @throws \Exception
     */
    public function modifyDBClusterSSL(ModifyDBClusterSSLRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyDBClusterSSLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterSSLRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDBClusterSSLResponse
     * @throws \Exception
     */
    public function describeDBClusterSSLWithOptions(DescribeDBClusterSSLRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDBClusterSSLResponse::fromMap($this->doRequest("DescribeDBClusterSSL", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDBClusterSSLRequest $request
     * @return DescribeDBClusterSSLResponse
     * @throws \Exception
     */
    public function describeDBClusterSSL(DescribeDBClusterSSLRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDBClusterSSLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterMigrationRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDBClusterMigrationResponse
     * @throws \Exception
     */
    public function describeDBClusterMigrationWithOptions(DescribeDBClusterMigrationRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDBClusterMigrationResponse::fromMap($this->doRequest("DescribeDBClusterMigration", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDBClusterMigrationRequest $request
     * @return DescribeDBClusterMigrationResponse
     * @throws \Exception
     */
    public function describeDBClusterMigration(DescribeDBClusterMigrationRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDBClusterMigrationWithOptions($request, $runtime);
    }

    /**
     * @param CloseDBClusterMigrationRequest $request
     * @param RuntimeOptions $runtime
     * @return CloseDBClusterMigrationResponse
     * @throws \Exception
     */
    public function closeDBClusterMigrationWithOptions(CloseDBClusterMigrationRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CloseDBClusterMigrationResponse::fromMap($this->doRequest("CloseDBClusterMigration", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param CloseDBClusterMigrationRequest $request
     * @return CloseDBClusterMigrationResponse
     * @throws \Exception
     */
    public function closeDBClusterMigration(CloseDBClusterMigrationRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->closeDBClusterMigrationWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterMigrationRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyDBClusterMigrationResponse
     * @throws \Exception
     */
    public function modifyDBClusterMigrationWithOptions(ModifyDBClusterMigrationRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyDBClusterMigrationResponse::fromMap($this->doRequest("ModifyDBClusterMigration", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyDBClusterMigrationRequest $request
     * @return ModifyDBClusterMigrationResponse
     * @throws \Exception
     */
    public function modifyDBClusterMigration(ModifyDBClusterMigrationRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyDBClusterMigrationWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAutoRenewAttributeRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyAutoRenewAttributeResponse
     * @throws \Exception
     */
    public function modifyAutoRenewAttributeWithOptions(ModifyAutoRenewAttributeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyAutoRenewAttributeResponse::fromMap($this->doRequest("ModifyAutoRenewAttribute", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyAutoRenewAttributeRequest $request
     * @return ModifyAutoRenewAttributeResponse
     * @throws \Exception
     */
    public function modifyAutoRenewAttribute(ModifyAutoRenewAttributeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBNodeClassRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyDBNodeClassResponse
     * @throws \Exception
     */
    public function modifyDBNodeClassWithOptions(ModifyDBNodeClassRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyDBNodeClassResponse::fromMap($this->doRequest("ModifyDBNodeClass", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyDBNodeClassRequest $request
     * @return ModifyDBNodeClassResponse
     * @throws \Exception
     */
    public function modifyDBNodeClass(ModifyDBNodeClassRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyDBNodeClassWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoRenewAttributeRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeAutoRenewAttributeResponse
     * @throws \Exception
     */
    public function describeAutoRenewAttributeWithOptions(DescribeAutoRenewAttributeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeAutoRenewAttributeResponse::fromMap($this->doRequest("DescribeAutoRenewAttribute", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeAutoRenewAttributeRequest $request
     * @return DescribeAutoRenewAttributeResponse
     * @throws \Exception
     */
    public function describeAutoRenewAttribute(DescribeAutoRenewAttributeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBNodesRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateDBNodesResponse
     * @throws \Exception
     */
    public function createDBNodesWithOptions(CreateDBNodesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateDBNodesResponse::fromMap($this->doRequest("CreateDBNodes", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param CreateDBNodesRequest $request
     * @return CreateDBNodesResponse
     * @throws \Exception
     */
    public function createDBNodes(CreateDBNodesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createDBNodesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBNodesRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteDBNodesResponse
     * @throws \Exception
     */
    public function deleteDBNodesWithOptions(DeleteDBNodesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteDBNodesResponse::fromMap($this->doRequest("DeleteDBNodes", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteDBNodesRequest $request
     * @return DeleteDBNodesResponse
     * @throws \Exception
     */
    public function deleteDBNodes(DeleteDBNodesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteDBNodesWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions $runtime
     * @return UntagResourcesResponse
     * @throws \Exception
     */
    public function untagResourcesWithOptions(UntagResourcesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UntagResourcesResponse::fromMap($this->doRequest("UntagResources", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     * @return UntagResourcesResponse
     * @throws \Exception
     */
    public function untagResources(UntagResourcesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions $runtime
     * @return TagResourcesResponse
     * @throws \Exception
     */
    public function tagResourcesWithOptions(TagResourcesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return TagResourcesResponse::fromMap($this->doRequest("TagResources", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     * @return TagResourcesResponse
     * @throws \Exception
     */
    public function tagResources(TagResourcesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions $runtime
     * @return ListTagResourcesResponse
     * @throws \Exception
     */
    public function listTagResourcesWithOptions(ListTagResourcesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListTagResourcesResponse::fromMap($this->doRequest("ListTagResources", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     * @return ListTagResourcesResponse
     * @throws \Exception
     */
    public function listTagResources(ListTagResourcesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBEndpointAddressRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyDBEndpointAddressResponse
     * @throws \Exception
     */
    public function modifyDBEndpointAddressWithOptions(ModifyDBEndpointAddressRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyDBEndpointAddressResponse::fromMap($this->doRequest("ModifyDBEndpointAddress", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyDBEndpointAddressRequest $request
     * @return ModifyDBEndpointAddressResponse
     * @throws \Exception
     */
    public function modifyDBEndpointAddress(ModifyDBEndpointAddressRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyDBEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBDescriptionRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyDBDescriptionResponse
     * @throws \Exception
     */
    public function modifyDBDescriptionWithOptions(ModifyDBDescriptionRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyDBDescriptionResponse::fromMap($this->doRequest("ModifyDBDescription", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyDBDescriptionRequest $request
     * @return ModifyDBDescriptionResponse
     * @throws \Exception
     */
    public function modifyDBDescription(ModifyDBDescriptionRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyDBDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterParametersRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyDBClusterParametersResponse
     * @throws \Exception
     */
    public function modifyDBClusterParametersWithOptions(ModifyDBClusterParametersRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyDBClusterParametersResponse::fromMap($this->doRequest("ModifyDBClusterParameters", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyDBClusterParametersRequest $request
     * @return ModifyDBClusterParametersResponse
     * @throws \Exception
     */
    public function modifyDBClusterParameters(ModifyDBClusterParametersRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyDBClusterParametersWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterEndpointRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyDBClusterEndpointResponse
     * @throws \Exception
     */
    public function modifyDBClusterEndpointWithOptions(ModifyDBClusterEndpointRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyDBClusterEndpointResponse::fromMap($this->doRequest("ModifyDBClusterEndpoint", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyDBClusterEndpointRequest $request
     * @return ModifyDBClusterEndpointResponse
     * @throws \Exception
     */
    public function modifyDBClusterEndpoint(ModifyDBClusterEndpointRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyDBClusterEndpointWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccountPasswordRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyAccountPasswordResponse
     * @throws \Exception
     */
    public function modifyAccountPasswordWithOptions(ModifyAccountPasswordRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyAccountPasswordResponse::fromMap($this->doRequest("ModifyAccountPassword", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyAccountPasswordRequest $request
     * @return ModifyAccountPasswordResponse
     * @throws \Exception
     */
    public function modifyAccountPassword(ModifyAccountPasswordRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterPerformanceRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDBClusterPerformanceResponse
     * @throws \Exception
     */
    public function describeDBClusterPerformanceWithOptions(DescribeDBClusterPerformanceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDBClusterPerformanceResponse::fromMap($this->doRequest("DescribeDBClusterPerformance", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDBClusterPerformanceRequest $request
     * @return DescribeDBClusterPerformanceResponse
     * @throws \Exception
     */
    public function describeDBClusterPerformance(DescribeDBClusterPerformanceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDBClusterPerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterParametersRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDBClusterParametersResponse
     * @throws \Exception
     */
    public function describeDBClusterParametersWithOptions(DescribeDBClusterParametersRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDBClusterParametersResponse::fromMap($this->doRequest("DescribeDBClusterParameters", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDBClusterParametersRequest $request
     * @return DescribeDBClusterParametersResponse
     * @throws \Exception
     */
    public function describeDBClusterParameters(DescribeDBClusterParametersRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDBClusterParametersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterEndpointsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDBClusterEndpointsResponse
     * @throws \Exception
     */
    public function describeDBClusterEndpointsWithOptions(DescribeDBClusterEndpointsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDBClusterEndpointsResponse::fromMap($this->doRequest("DescribeDBClusterEndpoints", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDBClusterEndpointsRequest $request
     * @return DescribeDBClusterEndpointsResponse
     * @throws \Exception
     */
    public function describeDBClusterEndpoints(DescribeDBClusterEndpointsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDBClusterEndpointsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBEndpointAddressRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteDBEndpointAddressResponse
     * @throws \Exception
     */
    public function deleteDBEndpointAddressWithOptions(DeleteDBEndpointAddressRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteDBEndpointAddressResponse::fromMap($this->doRequest("DeleteDBEndpointAddress", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteDBEndpointAddressRequest $request
     * @return DeleteDBEndpointAddressResponse
     * @throws \Exception
     */
    public function deleteDBEndpointAddress(DeleteDBEndpointAddressRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteDBEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBClusterEndpointRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteDBClusterEndpointResponse
     * @throws \Exception
     */
    public function deleteDBClusterEndpointWithOptions(DeleteDBClusterEndpointRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteDBClusterEndpointResponse::fromMap($this->doRequest("DeleteDBClusterEndpoint", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteDBClusterEndpointRequest $request
     * @return DeleteDBClusterEndpointResponse
     * @throws \Exception
     */
    public function deleteDBClusterEndpoint(DeleteDBClusterEndpointRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteDBClusterEndpointWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBEndpointAddressRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateDBEndpointAddressResponse
     * @throws \Exception
     */
    public function createDBEndpointAddressWithOptions(CreateDBEndpointAddressRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateDBEndpointAddressResponse::fromMap($this->doRequest("CreateDBEndpointAddress", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param CreateDBEndpointAddressRequest $request
     * @return CreateDBEndpointAddressResponse
     * @throws \Exception
     */
    public function createDBEndpointAddress(CreateDBEndpointAddressRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createDBEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBClusterEndpointRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateDBClusterEndpointResponse
     * @throws \Exception
     */
    public function createDBClusterEndpointWithOptions(CreateDBClusterEndpointRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateDBClusterEndpointResponse::fromMap($this->doRequest("CreateDBClusterEndpoint", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param CreateDBClusterEndpointRequest $request
     * @return CreateDBClusterEndpointResponse
     * @throws \Exception
     */
    public function createDBClusterEndpoint(CreateDBClusterEndpointRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createDBClusterEndpointWithOptions($request, $runtime);
    }

    /**
     * @param RestartDBNodeRequest $request
     * @param RuntimeOptions $runtime
     * @return RestartDBNodeResponse
     * @throws \Exception
     */
    public function restartDBNodeWithOptions(RestartDBNodeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RestartDBNodeResponse::fromMap($this->doRequest("RestartDBNode", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param RestartDBNodeRequest $request
     * @return RestartDBNodeResponse
     * @throws \Exception
     */
    public function restartDBNode(RestartDBNodeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->restartDBNodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBNodePerformanceRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDBNodePerformanceResponse
     * @throws \Exception
     */
    public function describeDBNodePerformanceWithOptions(DescribeDBNodePerformanceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDBNodePerformanceResponse::fromMap($this->doRequest("DescribeDBNodePerformance", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDBNodePerformanceRequest $request
     * @return DescribeDBNodePerformanceResponse
     * @throws \Exception
     */
    public function describeDBNodePerformance(DescribeDBNodePerformanceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDBNodePerformanceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterAccessWhitelistRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyDBClusterAccessWhitelistResponse
     * @throws \Exception
     */
    public function modifyDBClusterAccessWhitelistWithOptions(ModifyDBClusterAccessWhitelistRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyDBClusterAccessWhitelistResponse::fromMap($this->doRequest("ModifyDBClusterAccessWhitelist", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyDBClusterAccessWhitelistRequest $request
     * @return ModifyDBClusterAccessWhitelistResponse
     * @throws \Exception
     */
    public function modifyDBClusterAccessWhitelist(ModifyDBClusterAccessWhitelistRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyDBClusterAccessWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterAccessWhitelistRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDBClusterAccessWhitelistResponse
     * @throws \Exception
     */
    public function describeDBClusterAccessWhitelistWithOptions(DescribeDBClusterAccessWhitelistRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDBClusterAccessWhitelistResponse::fromMap($this->doRequest("DescribeDBClusterAccessWhitelist", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDBClusterAccessWhitelistRequest $request
     * @return DescribeDBClusterAccessWhitelistResponse
     * @throws \Exception
     */
    public function describeDBClusterAccessWhitelist(DescribeDBClusterAccessWhitelistRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDBClusterAccessWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterMaintainTimeRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyDBClusterMaintainTimeResponse
     * @throws \Exception
     */
    public function modifyDBClusterMaintainTimeWithOptions(ModifyDBClusterMaintainTimeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyDBClusterMaintainTimeResponse::fromMap($this->doRequest("ModifyDBClusterMaintainTime", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyDBClusterMaintainTimeRequest $request
     * @return ModifyDBClusterMaintainTimeResponse
     * @throws \Exception
     */
    public function modifyDBClusterMaintainTime(ModifyDBClusterMaintainTimeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyDBClusterMaintainTimeWithOptions($request, $runtime);
    }

    /**
     * @param RevokeAccountPrivilegeRequest $request
     * @param RuntimeOptions $runtime
     * @return RevokeAccountPrivilegeResponse
     * @throws \Exception
     */
    public function revokeAccountPrivilegeWithOptions(RevokeAccountPrivilegeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RevokeAccountPrivilegeResponse::fromMap($this->doRequest("RevokeAccountPrivilege", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param RevokeAccountPrivilegeRequest $request
     * @return RevokeAccountPrivilegeResponse
     * @throws \Exception
     */
    public function revokeAccountPrivilege(RevokeAccountPrivilegeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->revokeAccountPrivilegeWithOptions($request, $runtime);
    }

    /**
     * @param ResetAccountRequest $request
     * @param RuntimeOptions $runtime
     * @return ResetAccountResponse
     * @throws \Exception
     */
    public function resetAccountWithOptions(ResetAccountRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ResetAccountResponse::fromMap($this->doRequest("ResetAccount", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ResetAccountRequest $request
     * @return ResetAccountResponse
     * @throws \Exception
     */
    public function resetAccount(ResetAccountRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->resetAccountWithOptions($request, $runtime);
    }

    /**
     * @param GrantAccountPrivilegeRequest $request
     * @param RuntimeOptions $runtime
     * @return GrantAccountPrivilegeResponse
     * @throws \Exception
     */
    public function grantAccountPrivilegeWithOptions(GrantAccountPrivilegeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GrantAccountPrivilegeResponse::fromMap($this->doRequest("GrantAccountPrivilege", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param GrantAccountPrivilegeRequest $request
     * @return GrantAccountPrivilegeResponse
     * @throws \Exception
     */
    public function grantAccountPrivilege(GrantAccountPrivilegeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->grantAccountPrivilegeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDatabasesRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDatabasesResponse
     * @throws \Exception
     */
    public function describeDatabasesWithOptions(DescribeDatabasesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDatabasesResponse::fromMap($this->doRequest("DescribeDatabases", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDatabasesRequest $request
     * @return DescribeDatabasesResponse
     * @throws \Exception
     */
    public function describeDatabases(DescribeDatabasesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDatabasesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDatabaseRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteDatabaseResponse
     * @throws \Exception
     */
    public function deleteDatabaseWithOptions(DeleteDatabaseRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteDatabaseResponse::fromMap($this->doRequest("DeleteDatabase", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteDatabaseRequest $request
     * @return DeleteDatabaseResponse
     * @throws \Exception
     */
    public function deleteDatabase(DeleteDatabaseRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAccountRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteAccountResponse
     * @throws \Exception
     */
    public function deleteAccountWithOptions(DeleteAccountRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteAccountResponse::fromMap($this->doRequest("DeleteAccount", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteAccountRequest $request
     * @return DeleteAccountResponse
     * @throws \Exception
     */
    public function deleteAccount(DeleteAccountRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateDatabaseRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateDatabaseResponse
     * @throws \Exception
     */
    public function createDatabaseWithOptions(CreateDatabaseRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateDatabaseResponse::fromMap($this->doRequest("CreateDatabase", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param CreateDatabaseRequest $request
     * @return CreateDatabaseResponse
     * @throws \Exception
     */
    public function createDatabase(CreateDatabaseRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBackupRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteBackupResponse
     * @throws \Exception
     */
    public function deleteBackupWithOptions(DeleteBackupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteBackupResponse::fromMap($this->doRequest("DeleteBackup", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteBackupRequest $request
     * @return DeleteBackupResponse
     * @throws \Exception
     */
    public function deleteBackup(DeleteBackupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteBackupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlowLogsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeSlowLogsResponse
     * @throws \Exception
     */
    public function describeSlowLogsWithOptions(DescribeSlowLogsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeSlowLogsResponse::fromMap($this->doRequest("DescribeSlowLogs", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeSlowLogsRequest $request
     * @return DescribeSlowLogsResponse
     * @throws \Exception
     */
    public function describeSlowLogs(DescribeSlowLogsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeSlowLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlowLogRecordsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeSlowLogRecordsResponse
     * @throws \Exception
     */
    public function describeSlowLogRecordsWithOptions(DescribeSlowLogRecordsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeSlowLogRecordsResponse::fromMap($this->doRequest("DescribeSlowLogRecords", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeSlowLogRecordsRequest $request
     * @return DescribeSlowLogRecordsResponse
     * @throws \Exception
     */
    public function describeSlowLogRecords(DescribeSlowLogRecordsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeSlowLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @param FailoverDBClusterRequest $request
     * @param RuntimeOptions $runtime
     * @return FailoverDBClusterResponse
     * @throws \Exception
     */
    public function failoverDBClusterWithOptions(FailoverDBClusterRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return FailoverDBClusterResponse::fromMap($this->doRequest("FailoverDBCluster", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param FailoverDBClusterRequest $request
     * @return FailoverDBClusterResponse
     * @throws \Exception
     */
    public function failoverDBCluster(FailoverDBClusterRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->failoverDBClusterWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterDescriptionRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyDBClusterDescriptionResponse
     * @throws \Exception
     */
    public function modifyDBClusterDescriptionWithOptions(ModifyDBClusterDescriptionRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyDBClusterDescriptionResponse::fromMap($this->doRequest("ModifyDBClusterDescription", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyDBClusterDescriptionRequest $request
     * @return ModifyDBClusterDescriptionResponse
     * @throws \Exception
     */
    public function modifyDBClusterDescription(ModifyDBClusterDescriptionRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyDBClusterDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccountDescriptionRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyAccountDescriptionResponse
     * @throws \Exception
     */
    public function modifyAccountDescriptionWithOptions(ModifyAccountDescriptionRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyAccountDescriptionResponse::fromMap($this->doRequest("ModifyAccountDescription", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyAccountDescriptionRequest $request
     * @return ModifyAccountDescriptionResponse
     * @throws \Exception
     */
    public function modifyAccountDescription(ModifyAccountDescriptionRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyAccountDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeRegionsResponse
     * @throws \Exception
     */
    public function describeRegionsWithOptions(DescribeRegionsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeRegionsResponse::fromMap($this->doRequest("DescribeRegions", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     * @return DescribeRegionsResponse
     * @throws \Exception
     */
    public function describeRegions(DescribeRegionsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeAccountsResponse
     * @throws \Exception
     */
    public function describeAccountsWithOptions(DescribeAccountsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeAccountsResponse::fromMap($this->doRequest("DescribeAccounts", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeAccountsRequest $request
     * @return DescribeAccountsResponse
     * @throws \Exception
     */
    public function describeAccounts(DescribeAccountsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeAccountsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBClusterRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteDBClusterResponse
     * @throws \Exception
     */
    public function deleteDBClusterWithOptions(DeleteDBClusterRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteDBClusterResponse::fromMap($this->doRequest("DeleteDBCluster", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteDBClusterRequest $request
     * @return DeleteDBClusterResponse
     * @throws \Exception
     */
    public function deleteDBCluster(DeleteDBClusterRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteDBClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBClusterRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateDBClusterResponse
     * @throws \Exception
     */
    public function createDBClusterWithOptions(CreateDBClusterRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateDBClusterResponse::fromMap($this->doRequest("CreateDBCluster", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param CreateDBClusterRequest $request
     * @return CreateDBClusterResponse
     * @throws \Exception
     */
    public function createDBCluster(CreateDBClusterRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createDBClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateBackupRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateBackupResponse
     * @throws \Exception
     */
    public function createBackupWithOptions(CreateBackupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateBackupResponse::fromMap($this->doRequest("CreateBackup", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param CreateBackupRequest $request
     * @return CreateBackupResponse
     * @throws \Exception
     */
    public function createBackup(CreateBackupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createBackupWithOptions($request, $runtime);
    }

    /**
     * @param CreateAccountRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateAccountResponse
     * @throws \Exception
     */
    public function createAccountWithOptions(CreateAccountRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateAccountResponse::fromMap($this->doRequest("CreateAccount", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param CreateAccountRequest $request
     * @return CreateAccountResponse
     * @throws \Exception
     */
    public function createAccount(CreateAccountRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createAccountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeBackupsResponse
     * @throws \Exception
     */
    public function describeBackupsWithOptions(DescribeBackupsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeBackupsResponse::fromMap($this->doRequest("DescribeBackups", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeBackupsRequest $request
     * @return DescribeBackupsResponse
     * @throws \Exception
     */
    public function describeBackups(DescribeBackupsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeBackupsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBackupPolicyRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyBackupPolicyResponse
     * @throws \Exception
     */
    public function modifyBackupPolicyWithOptions(ModifyBackupPolicyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyBackupPolicyResponse::fromMap($this->doRequest("ModifyBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyBackupPolicyRequest $request
     * @return ModifyBackupPolicyResponse
     * @throws \Exception
     */
    public function modifyBackupPolicy(ModifyBackupPolicyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupPolicyRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeBackupPolicyResponse
     * @throws \Exception
     */
    public function describeBackupPolicyWithOptions(DescribeBackupPolicyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeBackupPolicyResponse::fromMap($this->doRequest("DescribeBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeBackupPolicyRequest $request
     * @return DescribeBackupPolicyResponse
     * @throws \Exception
     */
    public function describeBackupPolicy(DescribeBackupPolicyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClustersRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDBClustersResponse
     * @throws \Exception
     */
    public function describeDBClustersWithOptions(DescribeDBClustersRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDBClustersResponse::fromMap($this->doRequest("DescribeDBClusters", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDBClustersRequest $request
     * @return DescribeDBClustersResponse
     * @throws \Exception
     */
    public function describeDBClusters(DescribeDBClustersRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDBClustersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterAttributeRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDBClusterAttributeResponse
     * @throws \Exception
     */
    public function describeDBClusterAttributeWithOptions(DescribeDBClusterAttributeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDBClusterAttributeResponse::fromMap($this->doRequest("DescribeDBClusterAttribute", "HTTPS", "POST", "2017-08-01", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDBClusterAttributeRequest $request
     * @return DescribeDBClusterAttributeResponse
     * @throws \Exception
     */
    public function describeDBClusterAttribute(DescribeDBClusterAttributeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDBClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array $endpointMap
     * @param string $endpoint
     * @return string
     * @throws \Exception
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint){
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap["regionId"])) {
            return $endpointMap["regionId"];
        }
        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
