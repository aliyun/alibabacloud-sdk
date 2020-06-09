<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109;

use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Endpoint\Endpoint;

use AlibabaCloud\SDK\Alidns\V20150109\Models\ListTagResourcesRequest;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CopyGtmConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CopyGtmConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainDnssecInfoRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainDnssecInfoResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDomainDnssecStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDomainDnssecStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\TransferDomainRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\TransferDomainResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTransferDomainsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTransferDomainsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainBackupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainBackupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RetrieveDomainRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RetrieveDomainResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmRecoveryPlanResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmRecoveryPlanResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteGtmRecoveryPlanResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlansRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlansResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ExecuteGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ExecuteGtmRecoveryPlanResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RollbackGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RollbackGtmRecoveryPlanResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\GetTxtRecordForVerifyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\GetTxtRecordForVerifyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordStatisticsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordStatisticsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceSystemCnameRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceSystemCnameResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInstanceDomainsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInstanceDomainsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\BindInstanceDomainsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\BindInstanceDomainsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UnbindInstanceDomainsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UnbindInstanceDomainsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCustomLineRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCustomLineResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddCustomLineRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddCustomLineResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteCustomLinesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteCustomLinesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLineRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLineResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLinesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLinesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsSummaryRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsSummaryResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordStatisticsSummaryRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordStatisticsSummaryResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\OperateBatchDomainRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\OperateBatchDomainResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultCountRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultCountResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetGtmAccessModeRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetGtmAccessModeResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetGtmMonitorStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetGtmMonitorStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmInstanceGlobalConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmInstanceGlobalConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmLogsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmLogsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteGtmAccessStrategyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteGtmAccessStrategyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmMonitorRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmMonitorResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAccessStrategyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAccessStrategyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstancesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstancesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteGtmAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteGtmAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategiesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategiesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAvailableAlertGroupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAvailableAlertGroupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorAvailableConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorAvailableConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmAccessStrategyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmAccessStrategyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmMonitorRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmMonitorResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainRemarkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainRemarkResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainRecordRemarkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainRecordRemarkResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSupportLinesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSupportLinesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstanceRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstanceResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainRecordRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainRecordResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainGroupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainGroupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDNSSLBWeightRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDNSSLBWeightResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDomainRecordStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDomainRecordStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDNSSLBStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDNSSLBStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ModifyHichinaDomainDNSRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ModifyHichinaDomainDNSResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\GetMainDomainNameRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\GetMainDomainNameResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSubDomainRecordsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSubDomainRecordsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainRecordsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainRecordsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainRecordInfoRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainRecordInfoResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainLogsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainLogsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainGroupsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainGroupsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstancesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstancesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteSubDomainRecordsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteSubDomainRecordsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDomainRecordRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDomainRecordResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDomainGroupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDomainGroupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ChangeDomainOfDnsProductRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ChangeDomainOfDnsProductResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ChangeDomainGroupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ChangeDomainGroupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainRecordRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainRecordResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainGroupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainGroupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainResponse;

class Alidns extends Rpc {
    public function __construct($config){
        parent::__construct($config);
        $this->_endpointRule = "central";
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint("alidns", $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions $runtime
     * @return ListTagResourcesResponse
     * @throws \Exception
     */
    public function listTagResourcesWithOptions(ListTagResourcesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListTagResourcesResponse::fromMap($this->doRequest("ListTagResources", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions $runtime
     * @return TagResourcesResponse
     * @throws \Exception
     */
    public function tagResourcesWithOptions(TagResourcesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return TagResourcesResponse::fromMap($this->doRequest("TagResources", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions $runtime
     * @return UntagResourcesResponse
     * @throws \Exception
     */
    public function untagResourcesWithOptions(UntagResourcesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UntagResourcesResponse::fromMap($this->doRequest("UntagResources", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
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
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeTagsResponse
     * @throws \Exception
     */
    public function describeTagsWithOptions(DescribeTagsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeTagsResponse::fromMap($this->doRequest("DescribeTags", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeTagsRequest $request
     * @return DescribeTagsResponse
     * @throws \Exception
     */
    public function describeTags(DescribeTagsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * @param CopyGtmConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return CopyGtmConfigResponse
     * @throws \Exception
     */
    public function copyGtmConfigWithOptions(CopyGtmConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CopyGtmConfigResponse::fromMap($this->doRequest("CopyGtmConfig", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param CopyGtmConfigRequest $request
     * @return CopyGtmConfigResponse
     * @throws \Exception
     */
    public function copyGtmConfig(CopyGtmConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->copyGtmConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainDnssecInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDomainDnssecInfoResponse
     * @throws \Exception
     */
    public function describeDomainDnssecInfoWithOptions(DescribeDomainDnssecInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDomainDnssecInfoResponse::fromMap($this->doRequest("DescribeDomainDnssecInfo", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDomainDnssecInfoRequest $request
     * @return DescribeDomainDnssecInfoResponse
     * @throws \Exception
     */
    public function describeDomainDnssecInfo(DescribeDomainDnssecInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDomainDnssecInfoWithOptions($request, $runtime);
    }

    /**
     * @param SetDomainDnssecStatusRequest $request
     * @param RuntimeOptions $runtime
     * @return SetDomainDnssecStatusResponse
     * @throws \Exception
     */
    public function setDomainDnssecStatusWithOptions(SetDomainDnssecStatusRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetDomainDnssecStatusResponse::fromMap($this->doRequest("SetDomainDnssecStatus", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param SetDomainDnssecStatusRequest $request
     * @return SetDomainDnssecStatusResponse
     * @throws \Exception
     */
    public function setDomainDnssecStatus(SetDomainDnssecStatusRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setDomainDnssecStatusWithOptions($request, $runtime);
    }

    /**
     * @param TransferDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return TransferDomainResponse
     * @throws \Exception
     */
    public function transferDomainWithOptions(TransferDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return TransferDomainResponse::fromMap($this->doRequest("TransferDomain", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param TransferDomainRequest $request
     * @return TransferDomainResponse
     * @throws \Exception
     */
    public function transferDomain(TransferDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->transferDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTransferDomainsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeTransferDomainsResponse
     * @throws \Exception
     */
    public function describeTransferDomainsWithOptions(DescribeTransferDomainsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeTransferDomainsResponse::fromMap($this->doRequest("DescribeTransferDomains", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeTransferDomainsRequest $request
     * @return DescribeTransferDomainsResponse
     * @throws \Exception
     */
    public function describeTransferDomains(DescribeTransferDomainsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeTransferDomainsWithOptions($request, $runtime);
    }

    /**
     * @param AddDomainBackupRequest $request
     * @param RuntimeOptions $runtime
     * @return AddDomainBackupResponse
     * @throws \Exception
     */
    public function addDomainBackupWithOptions(AddDomainBackupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddDomainBackupResponse::fromMap($this->doRequest("AddDomainBackup", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param AddDomainBackupRequest $request
     * @return AddDomainBackupResponse
     * @throws \Exception
     */
    public function addDomainBackup(AddDomainBackupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addDomainBackupWithOptions($request, $runtime);
    }

    /**
     * @param RetrieveDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return RetrieveDomainResponse
     * @throws \Exception
     */
    public function retrieveDomainWithOptions(RetrieveDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RetrieveDomainResponse::fromMap($this->doRequest("RetrieveDomain", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param RetrieveDomainRequest $request
     * @return RetrieveDomainResponse
     * @throws \Exception
     */
    public function retrieveDomain(RetrieveDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->retrieveDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmRecoveryPlanRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmRecoveryPlanResponse
     * @throws \Exception
     */
    public function describeGtmRecoveryPlanWithOptions(DescribeGtmRecoveryPlanRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmRecoveryPlanResponse::fromMap($this->doRequest("DescribeGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmRecoveryPlanRequest $request
     * @return DescribeGtmRecoveryPlanResponse
     * @throws \Exception
     */
    public function describeGtmRecoveryPlan(DescribeGtmRecoveryPlanRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @param AddGtmRecoveryPlanRequest $request
     * @param RuntimeOptions $runtime
     * @return AddGtmRecoveryPlanResponse
     * @throws \Exception
     */
    public function addGtmRecoveryPlanWithOptions(AddGtmRecoveryPlanRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddGtmRecoveryPlanResponse::fromMap($this->doRequest("AddGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param AddGtmRecoveryPlanRequest $request
     * @return AddGtmRecoveryPlanResponse
     * @throws \Exception
     */
    public function addGtmRecoveryPlan(AddGtmRecoveryPlanRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGtmRecoveryPlanRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateGtmRecoveryPlanResponse
     * @throws \Exception
     */
    public function updateGtmRecoveryPlanWithOptions(UpdateGtmRecoveryPlanRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateGtmRecoveryPlanResponse::fromMap($this->doRequest("UpdateGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateGtmRecoveryPlanRequest $request
     * @return UpdateGtmRecoveryPlanResponse
     * @throws \Exception
     */
    public function updateGtmRecoveryPlan(UpdateGtmRecoveryPlanRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGtmRecoveryPlanRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteGtmRecoveryPlanResponse
     * @throws \Exception
     */
    public function deleteGtmRecoveryPlanWithOptions(DeleteGtmRecoveryPlanRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteGtmRecoveryPlanResponse::fromMap($this->doRequest("DeleteGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteGtmRecoveryPlanRequest $request
     * @return DeleteGtmRecoveryPlanResponse
     * @throws \Exception
     */
    public function deleteGtmRecoveryPlan(DeleteGtmRecoveryPlanRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmRecoveryPlansRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmRecoveryPlansResponse
     * @throws \Exception
     */
    public function describeGtmRecoveryPlansWithOptions(DescribeGtmRecoveryPlansRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmRecoveryPlansResponse::fromMap($this->doRequest("DescribeGtmRecoveryPlans", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmRecoveryPlansRequest $request
     * @return DescribeGtmRecoveryPlansResponse
     * @throws \Exception
     */
    public function describeGtmRecoveryPlans(DescribeGtmRecoveryPlansRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmRecoveryPlansWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmRecoveryPlanAvailableConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmRecoveryPlanAvailableConfigResponse
     * @throws \Exception
     */
    public function describeGtmRecoveryPlanAvailableConfigWithOptions(DescribeGtmRecoveryPlanAvailableConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmRecoveryPlanAvailableConfigResponse::fromMap($this->doRequest("DescribeGtmRecoveryPlanAvailableConfig", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmRecoveryPlanAvailableConfigRequest $request
     * @return DescribeGtmRecoveryPlanAvailableConfigResponse
     * @throws \Exception
     */
    public function describeGtmRecoveryPlanAvailableConfig(DescribeGtmRecoveryPlanAvailableConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmRecoveryPlanAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteGtmRecoveryPlanRequest $request
     * @param RuntimeOptions $runtime
     * @return ExecuteGtmRecoveryPlanResponse
     * @throws \Exception
     */
    public function executeGtmRecoveryPlanWithOptions(ExecuteGtmRecoveryPlanRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ExecuteGtmRecoveryPlanResponse::fromMap($this->doRequest("ExecuteGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param ExecuteGtmRecoveryPlanRequest $request
     * @return ExecuteGtmRecoveryPlanResponse
     * @throws \Exception
     */
    public function executeGtmRecoveryPlan(ExecuteGtmRecoveryPlanRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->executeGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @param RollbackGtmRecoveryPlanRequest $request
     * @param RuntimeOptions $runtime
     * @return RollbackGtmRecoveryPlanResponse
     * @throws \Exception
     */
    public function rollbackGtmRecoveryPlanWithOptions(RollbackGtmRecoveryPlanRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RollbackGtmRecoveryPlanResponse::fromMap($this->doRequest("RollbackGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param RollbackGtmRecoveryPlanRequest $request
     * @return RollbackGtmRecoveryPlanResponse
     * @throws \Exception
     */
    public function rollbackGtmRecoveryPlan(RollbackGtmRecoveryPlanRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->rollbackGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @param PreviewGtmRecoveryPlanRequest $request
     * @param RuntimeOptions $runtime
     * @return PreviewGtmRecoveryPlanResponse
     * @throws \Exception
     */
    public function previewGtmRecoveryPlanWithOptions(PreviewGtmRecoveryPlanRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return PreviewGtmRecoveryPlanResponse::fromMap($this->doRequest("PreviewGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param PreviewGtmRecoveryPlanRequest $request
     * @return PreviewGtmRecoveryPlanResponse
     * @throws \Exception
     */
    public function previewGtmRecoveryPlan(PreviewGtmRecoveryPlanRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->previewGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @param GetTxtRecordForVerifyRequest $request
     * @param RuntimeOptions $runtime
     * @return GetTxtRecordForVerifyResponse
     * @throws \Exception
     */
    public function getTxtRecordForVerifyWithOptions(GetTxtRecordForVerifyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetTxtRecordForVerifyResponse::fromMap($this->doRequest("GetTxtRecordForVerify", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $request, $runtime));
    }

    /**
     * @param GetTxtRecordForVerifyRequest $request
     * @return GetTxtRecordForVerifyResponse
     * @throws \Exception
     */
    public function getTxtRecordForVerify(GetTxtRecordForVerifyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getTxtRecordForVerifyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainStatisticsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDomainStatisticsResponse
     * @throws \Exception
     */
    public function describeDomainStatisticsWithOptions(DescribeDomainStatisticsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDomainStatisticsResponse::fromMap($this->doRequest("DescribeDomainStatistics", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDomainStatisticsRequest $request
     * @return DescribeDomainStatisticsResponse
     * @throws \Exception
     */
    public function describeDomainStatistics(DescribeDomainStatisticsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDomainStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordStatisticsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeRecordStatisticsResponse
     * @throws \Exception
     */
    public function describeRecordStatisticsWithOptions(DescribeRecordStatisticsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeRecordStatisticsResponse::fromMap($this->doRequest("DescribeRecordStatistics", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeRecordStatisticsRequest $request
     * @return DescribeRecordStatisticsResponse
     * @throws \Exception
     */
    public function describeRecordStatistics(DescribeRecordStatisticsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeRecordStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmInstanceSystemCnameRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmInstanceSystemCnameResponse
     * @throws \Exception
     */
    public function describeGtmInstanceSystemCnameWithOptions(DescribeGtmInstanceSystemCnameRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmInstanceSystemCnameResponse::fromMap($this->doRequest("DescribeGtmInstanceSystemCname", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmInstanceSystemCnameRequest $request
     * @return DescribeGtmInstanceSystemCnameResponse
     * @throws \Exception
     */
    public function describeGtmInstanceSystemCname(DescribeGtmInstanceSystemCnameRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmInstanceSystemCnameWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceDomainsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeInstanceDomainsResponse
     * @throws \Exception
     */
    public function describeInstanceDomainsWithOptions(DescribeInstanceDomainsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeInstanceDomainsResponse::fromMap($this->doRequest("DescribeInstanceDomains", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeInstanceDomainsRequest $request
     * @return DescribeInstanceDomainsResponse
     * @throws \Exception
     */
    public function describeInstanceDomains(DescribeInstanceDomainsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeInstanceDomainsWithOptions($request, $runtime);
    }

    /**
     * @param BindInstanceDomainsRequest $request
     * @param RuntimeOptions $runtime
     * @return BindInstanceDomainsResponse
     * @throws \Exception
     */
    public function bindInstanceDomainsWithOptions(BindInstanceDomainsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return BindInstanceDomainsResponse::fromMap($this->doRequest("BindInstanceDomains", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param BindInstanceDomainsRequest $request
     * @return BindInstanceDomainsResponse
     * @throws \Exception
     */
    public function bindInstanceDomains(BindInstanceDomainsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->bindInstanceDomainsWithOptions($request, $runtime);
    }

    /**
     * @param UnbindInstanceDomainsRequest $request
     * @param RuntimeOptions $runtime
     * @return UnbindInstanceDomainsResponse
     * @throws \Exception
     */
    public function unbindInstanceDomainsWithOptions(UnbindInstanceDomainsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UnbindInstanceDomainsResponse::fromMap($this->doRequest("UnbindInstanceDomains", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param UnbindInstanceDomainsRequest $request
     * @return UnbindInstanceDomainsResponse
     * @throws \Exception
     */
    public function unbindInstanceDomains(UnbindInstanceDomainsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->unbindInstanceDomainsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCustomLineRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateCustomLineResponse
     * @throws \Exception
     */
    public function updateCustomLineWithOptions(UpdateCustomLineRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateCustomLineResponse::fromMap($this->doRequest("UpdateCustomLine", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateCustomLineRequest $request
     * @return UpdateCustomLineResponse
     * @throws \Exception
     */
    public function updateCustomLine(UpdateCustomLineRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateCustomLineWithOptions($request, $runtime);
    }

    /**
     * @param AddCustomLineRequest $request
     * @param RuntimeOptions $runtime
     * @return AddCustomLineResponse
     * @throws \Exception
     */
    public function addCustomLineWithOptions(AddCustomLineRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddCustomLineResponse::fromMap($this->doRequest("AddCustomLine", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param AddCustomLineRequest $request
     * @return AddCustomLineResponse
     * @throws \Exception
     */
    public function addCustomLine(AddCustomLineRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addCustomLineWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomLinesRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteCustomLinesResponse
     * @throws \Exception
     */
    public function deleteCustomLinesWithOptions(DeleteCustomLinesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteCustomLinesResponse::fromMap($this->doRequest("DeleteCustomLines", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteCustomLinesRequest $request
     * @return DeleteCustomLinesResponse
     * @throws \Exception
     */
    public function deleteCustomLines(DeleteCustomLinesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteCustomLinesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustomLineRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeCustomLineResponse
     * @throws \Exception
     */
    public function describeCustomLineWithOptions(DescribeCustomLineRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeCustomLineResponse::fromMap($this->doRequest("DescribeCustomLine", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeCustomLineRequest $request
     * @return DescribeCustomLineResponse
     * @throws \Exception
     */
    public function describeCustomLine(DescribeCustomLineRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeCustomLineWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustomLinesRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeCustomLinesResponse
     * @throws \Exception
     */
    public function describeCustomLinesWithOptions(DescribeCustomLinesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeCustomLinesResponse::fromMap($this->doRequest("DescribeCustomLines", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeCustomLinesRequest $request
     * @return DescribeCustomLinesResponse
     * @throws \Exception
     */
    public function describeCustomLines(DescribeCustomLinesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeCustomLinesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainStatisticsSummaryRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDomainStatisticsSummaryResponse
     * @throws \Exception
     */
    public function describeDomainStatisticsSummaryWithOptions(DescribeDomainStatisticsSummaryRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDomainStatisticsSummaryResponse::fromMap($this->doRequest("DescribeDomainStatisticsSummary", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDomainStatisticsSummaryRequest $request
     * @return DescribeDomainStatisticsSummaryResponse
     * @throws \Exception
     */
    public function describeDomainStatisticsSummary(DescribeDomainStatisticsSummaryRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDomainStatisticsSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordStatisticsSummaryRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeRecordStatisticsSummaryResponse
     * @throws \Exception
     */
    public function describeRecordStatisticsSummaryWithOptions(DescribeRecordStatisticsSummaryRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeRecordStatisticsSummaryResponse::fromMap($this->doRequest("DescribeRecordStatisticsSummary", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeRecordStatisticsSummaryRequest $request
     * @return DescribeRecordStatisticsSummaryResponse
     * @throws \Exception
     */
    public function describeRecordStatisticsSummary(DescribeRecordStatisticsSummaryRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeRecordStatisticsSummaryWithOptions($request, $runtime);
    }

    /**
     * @param OperateBatchDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return OperateBatchDomainResponse
     * @throws \Exception
     */
    public function operateBatchDomainWithOptions(OperateBatchDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return OperateBatchDomainResponse::fromMap($this->doRequest("OperateBatchDomain", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param OperateBatchDomainRequest $request
     * @return OperateBatchDomainResponse
     * @throws \Exception
     */
    public function operateBatchDomain(OperateBatchDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->operateBatchDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBatchResultDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeBatchResultDetailResponse
     * @throws \Exception
     */
    public function describeBatchResultDetailWithOptions(DescribeBatchResultDetailRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeBatchResultDetailResponse::fromMap($this->doRequest("DescribeBatchResultDetail", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeBatchResultDetailRequest $request
     * @return DescribeBatchResultDetailResponse
     * @throws \Exception
     */
    public function describeBatchResultDetail(DescribeBatchResultDetailRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeBatchResultDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBatchResultCountRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeBatchResultCountResponse
     * @throws \Exception
     */
    public function describeBatchResultCountWithOptions(DescribeBatchResultCountRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeBatchResultCountResponse::fromMap($this->doRequest("DescribeBatchResultCount", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeBatchResultCountRequest $request
     * @return DescribeBatchResultCountResponse
     * @throws \Exception
     */
    public function describeBatchResultCount(DescribeBatchResultCountRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeBatchResultCountWithOptions($request, $runtime);
    }

    /**
     * @param SetGtmAccessModeRequest $request
     * @param RuntimeOptions $runtime
     * @return SetGtmAccessModeResponse
     * @throws \Exception
     */
    public function setGtmAccessModeWithOptions(SetGtmAccessModeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetGtmAccessModeResponse::fromMap($this->doRequest("SetGtmAccessMode", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param SetGtmAccessModeRequest $request
     * @return SetGtmAccessModeResponse
     * @throws \Exception
     */
    public function setGtmAccessMode(SetGtmAccessModeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setGtmAccessModeWithOptions($request, $runtime);
    }

    /**
     * @param SetGtmMonitorStatusRequest $request
     * @param RuntimeOptions $runtime
     * @return SetGtmMonitorStatusResponse
     * @throws \Exception
     */
    public function setGtmMonitorStatusWithOptions(SetGtmMonitorStatusRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetGtmMonitorStatusResponse::fromMap($this->doRequest("SetGtmMonitorStatus", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param SetGtmMonitorStatusRequest $request
     * @return SetGtmMonitorStatusResponse
     * @throws \Exception
     */
    public function setGtmMonitorStatus(SetGtmMonitorStatusRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setGtmMonitorStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGtmInstanceGlobalConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateGtmInstanceGlobalConfigResponse
     * @throws \Exception
     */
    public function updateGtmInstanceGlobalConfigWithOptions(UpdateGtmInstanceGlobalConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateGtmInstanceGlobalConfigResponse::fromMap($this->doRequest("UpdateGtmInstanceGlobalConfig", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateGtmInstanceGlobalConfigRequest $request
     * @return UpdateGtmInstanceGlobalConfigResponse
     * @throws \Exception
     */
    public function updateGtmInstanceGlobalConfig(UpdateGtmInstanceGlobalConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateGtmInstanceGlobalConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmLogsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmLogsResponse
     * @throws \Exception
     */
    public function describeGtmLogsWithOptions(DescribeGtmLogsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmLogsResponse::fromMap($this->doRequest("DescribeGtmLogs", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmLogsRequest $request
     * @return DescribeGtmLogsResponse
     * @throws \Exception
     */
    public function describeGtmLogs(DescribeGtmLogsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmLogsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGtmAccessStrategyRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteGtmAccessStrategyResponse
     * @throws \Exception
     */
    public function deleteGtmAccessStrategyWithOptions(DeleteGtmAccessStrategyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteGtmAccessStrategyResponse::fromMap($this->doRequest("DeleteGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteGtmAccessStrategyRequest $request
     * @return DeleteGtmAccessStrategyResponse
     * @throws \Exception
     */
    public function deleteGtmAccessStrategy(DeleteGtmAccessStrategyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * @param AddGtmMonitorRequest $request
     * @param RuntimeOptions $runtime
     * @return AddGtmMonitorResponse
     * @throws \Exception
     */
    public function addGtmMonitorWithOptions(AddGtmMonitorRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddGtmMonitorResponse::fromMap($this->doRequest("AddGtmMonitor", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param AddGtmMonitorRequest $request
     * @return AddGtmMonitorResponse
     * @throws \Exception
     */
    public function addGtmMonitor(AddGtmMonitorRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addGtmMonitorWithOptions($request, $runtime);
    }

    /**
     * @param AddGtmAddressPoolRequest $request
     * @param RuntimeOptions $runtime
     * @return AddGtmAddressPoolResponse
     * @throws \Exception
     */
    public function addGtmAddressPoolWithOptions(AddGtmAddressPoolRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddGtmAddressPoolResponse::fromMap($this->doRequest("AddGtmAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param AddGtmAddressPoolRequest $request
     * @return AddGtmAddressPoolResponse
     * @throws \Exception
     */
    public function addGtmAddressPool(AddGtmAddressPoolRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @param AddGtmAccessStrategyRequest $request
     * @param RuntimeOptions $runtime
     * @return AddGtmAccessStrategyResponse
     * @throws \Exception
     */
    public function addGtmAccessStrategyWithOptions(AddGtmAccessStrategyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddGtmAccessStrategyResponse::fromMap($this->doRequest("AddGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param AddGtmAccessStrategyRequest $request
     * @return AddGtmAccessStrategyResponse
     * @throws \Exception
     */
    public function addGtmAccessStrategy(AddGtmAccessStrategyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmInstancesRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmInstancesResponse
     * @throws \Exception
     */
    public function describeGtmInstancesWithOptions(DescribeGtmInstancesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmInstancesResponse::fromMap($this->doRequest("DescribeGtmInstances", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmInstancesRequest $request
     * @return DescribeGtmInstancesResponse
     * @throws \Exception
     */
    public function describeGtmInstances(DescribeGtmInstancesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGtmAddressPoolRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteGtmAddressPoolResponse
     * @throws \Exception
     */
    public function deleteGtmAddressPoolWithOptions(DeleteGtmAddressPoolRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteGtmAddressPoolResponse::fromMap($this->doRequest("DeleteGtmAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteGtmAddressPoolRequest $request
     * @return DeleteGtmAddressPoolResponse
     * @throws \Exception
     */
    public function deleteGtmAddressPool(DeleteGtmAddressPoolRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmAccessStrategiesRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmAccessStrategiesResponse
     * @throws \Exception
     */
    public function describeGtmAccessStrategiesWithOptions(DescribeGtmAccessStrategiesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmAccessStrategiesResponse::fromMap($this->doRequest("DescribeGtmAccessStrategies", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmAccessStrategiesRequest $request
     * @return DescribeGtmAccessStrategiesResponse
     * @throws \Exception
     */
    public function describeGtmAccessStrategies(DescribeGtmAccessStrategiesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmAccessStrategiesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmAccessStrategyRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmAccessStrategyResponse
     * @throws \Exception
     */
    public function describeGtmAccessStrategyWithOptions(DescribeGtmAccessStrategyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmAccessStrategyResponse::fromMap($this->doRequest("DescribeGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmAccessStrategyRequest $request
     * @return DescribeGtmAccessStrategyResponse
     * @throws \Exception
     */
    public function describeGtmAccessStrategy(DescribeGtmAccessStrategyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmAccessStrategyAvailableConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmAccessStrategyAvailableConfigResponse
     * @throws \Exception
     */
    public function describeGtmAccessStrategyAvailableConfigWithOptions(DescribeGtmAccessStrategyAvailableConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmAccessStrategyAvailableConfigResponse::fromMap($this->doRequest("DescribeGtmAccessStrategyAvailableConfig", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmAccessStrategyAvailableConfigRequest $request
     * @return DescribeGtmAccessStrategyAvailableConfigResponse
     * @throws \Exception
     */
    public function describeGtmAccessStrategyAvailableConfig(DescribeGtmAccessStrategyAvailableConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmAccessStrategyAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmAvailableAlertGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmAvailableAlertGroupResponse
     * @throws \Exception
     */
    public function describeGtmAvailableAlertGroupWithOptions(DescribeGtmAvailableAlertGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmAvailableAlertGroupResponse::fromMap($this->doRequest("DescribeGtmAvailableAlertGroup", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmAvailableAlertGroupRequest $request
     * @return DescribeGtmAvailableAlertGroupResponse
     * @throws \Exception
     */
    public function describeGtmAvailableAlertGroup(DescribeGtmAvailableAlertGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmAvailableAlertGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmInstanceRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmInstanceResponse
     * @throws \Exception
     */
    public function describeGtmInstanceWithOptions(DescribeGtmInstanceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmInstanceResponse::fromMap($this->doRequest("DescribeGtmInstance", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmInstanceRequest $request
     * @return DescribeGtmInstanceResponse
     * @throws \Exception
     */
    public function describeGtmInstance(DescribeGtmInstanceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmInstanceAddressPoolRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmInstanceAddressPoolResponse
     * @throws \Exception
     */
    public function describeGtmInstanceAddressPoolWithOptions(DescribeGtmInstanceAddressPoolRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmInstanceAddressPoolResponse::fromMap($this->doRequest("DescribeGtmInstanceAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmInstanceAddressPoolRequest $request
     * @return DescribeGtmInstanceAddressPoolResponse
     * @throws \Exception
     */
    public function describeGtmInstanceAddressPool(DescribeGtmInstanceAddressPoolRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmInstanceAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmInstanceAddressPoolsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmInstanceAddressPoolsResponse
     * @throws \Exception
     */
    public function describeGtmInstanceAddressPoolsWithOptions(DescribeGtmInstanceAddressPoolsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmInstanceAddressPoolsResponse::fromMap($this->doRequest("DescribeGtmInstanceAddressPools", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmInstanceAddressPoolsRequest $request
     * @return DescribeGtmInstanceAddressPoolsResponse
     * @throws \Exception
     */
    public function describeGtmInstanceAddressPools(DescribeGtmInstanceAddressPoolsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmInstanceAddressPoolsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmInstanceStatusRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmInstanceStatusResponse
     * @throws \Exception
     */
    public function describeGtmInstanceStatusWithOptions(DescribeGtmInstanceStatusRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmInstanceStatusResponse::fromMap($this->doRequest("DescribeGtmInstanceStatus", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmInstanceStatusRequest $request
     * @return DescribeGtmInstanceStatusResponse
     * @throws \Exception
     */
    public function describeGtmInstanceStatus(DescribeGtmInstanceStatusRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmMonitorAvailableConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmMonitorAvailableConfigResponse
     * @throws \Exception
     */
    public function describeGtmMonitorAvailableConfigWithOptions(DescribeGtmMonitorAvailableConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmMonitorAvailableConfigResponse::fromMap($this->doRequest("DescribeGtmMonitorAvailableConfig", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmMonitorAvailableConfigRequest $request
     * @return DescribeGtmMonitorAvailableConfigResponse
     * @throws \Exception
     */
    public function describeGtmMonitorAvailableConfig(DescribeGtmMonitorAvailableConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmMonitorAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmMonitorConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeGtmMonitorConfigResponse
     * @throws \Exception
     */
    public function describeGtmMonitorConfigWithOptions(DescribeGtmMonitorConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeGtmMonitorConfigResponse::fromMap($this->doRequest("DescribeGtmMonitorConfig", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeGtmMonitorConfigRequest $request
     * @return DescribeGtmMonitorConfigResponse
     * @throws \Exception
     */
    public function describeGtmMonitorConfig(DescribeGtmMonitorConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeGtmMonitorConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGtmAccessStrategyRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateGtmAccessStrategyResponse
     * @throws \Exception
     */
    public function updateGtmAccessStrategyWithOptions(UpdateGtmAccessStrategyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateGtmAccessStrategyResponse::fromMap($this->doRequest("UpdateGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateGtmAccessStrategyRequest $request
     * @return UpdateGtmAccessStrategyResponse
     * @throws \Exception
     */
    public function updateGtmAccessStrategy(UpdateGtmAccessStrategyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGtmAddressPoolRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateGtmAddressPoolResponse
     * @throws \Exception
     */
    public function updateGtmAddressPoolWithOptions(UpdateGtmAddressPoolRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateGtmAddressPoolResponse::fromMap($this->doRequest("UpdateGtmAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateGtmAddressPoolRequest $request
     * @return UpdateGtmAddressPoolResponse
     * @throws \Exception
     */
    public function updateGtmAddressPool(UpdateGtmAddressPoolRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGtmMonitorRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateGtmMonitorResponse
     * @throws \Exception
     */
    public function updateGtmMonitorWithOptions(UpdateGtmMonitorRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateGtmMonitorResponse::fromMap($this->doRequest("UpdateGtmMonitor", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateGtmMonitorRequest $request
     * @return UpdateGtmMonitorResponse
     * @throws \Exception
     */
    public function updateGtmMonitor(UpdateGtmMonitorRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateGtmMonitorWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDomainRemarkRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateDomainRemarkResponse
     * @throws \Exception
     */
    public function updateDomainRemarkWithOptions(UpdateDomainRemarkRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateDomainRemarkResponse::fromMap($this->doRequest("UpdateDomainRemark", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateDomainRemarkRequest $request
     * @return UpdateDomainRemarkResponse
     * @throws \Exception
     */
    public function updateDomainRemark(UpdateDomainRemarkRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateDomainRemarkWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDomainRecordRemarkRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateDomainRecordRemarkResponse
     * @throws \Exception
     */
    public function updateDomainRecordRemarkWithOptions(UpdateDomainRecordRemarkRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateDomainRecordRemarkResponse::fromMap($this->doRequest("UpdateDomainRecordRemark", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateDomainRecordRemarkRequest $request
     * @return UpdateDomainRecordRemarkResponse
     * @throws \Exception
     */
    public function updateDomainRecordRemark(UpdateDomainRecordRemarkRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateDomainRecordRemarkWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSupportLinesRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeSupportLinesResponse
     * @throws \Exception
     */
    public function describeSupportLinesWithOptions(DescribeSupportLinesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeSupportLinesResponse::fromMap($this->doRequest("DescribeSupportLines", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeSupportLinesRequest $request
     * @return DescribeSupportLinesResponse
     * @throws \Exception
     */
    public function describeSupportLines(DescribeSupportLinesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeSupportLinesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainNsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDomainNsResponse
     * @throws \Exception
     */
    public function describeDomainNsWithOptions(DescribeDomainNsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDomainNsResponse::fromMap($this->doRequest("DescribeDomainNs", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDomainNsRequest $request
     * @return DescribeDomainNsResponse
     * @throws \Exception
     */
    public function describeDomainNs(DescribeDomainNsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDomainNsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDnsProductInstanceRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDnsProductInstanceResponse
     * @throws \Exception
     */
    public function describeDnsProductInstanceWithOptions(DescribeDnsProductInstanceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDnsProductInstanceResponse::fromMap($this->doRequest("DescribeDnsProductInstance", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDnsProductInstanceRequest $request
     * @return DescribeDnsProductInstanceResponse
     * @throws \Exception
     */
    public function describeDnsProductInstance(DescribeDnsProductInstanceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDnsProductInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDomainRecordRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateDomainRecordResponse
     * @throws \Exception
     */
    public function updateDomainRecordWithOptions(UpdateDomainRecordRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateDomainRecordResponse::fromMap($this->doRequest("UpdateDomainRecord", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $request, $runtime));
    }

    /**
     * @param UpdateDomainRecordRequest $request
     * @return UpdateDomainRecordResponse
     * @throws \Exception
     */
    public function updateDomainRecord(UpdateDomainRecordRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateDomainRecordWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDomainGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateDomainGroupResponse
     * @throws \Exception
     */
    public function updateDomainGroupWithOptions(UpdateDomainGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateDomainGroupResponse::fromMap($this->doRequest("UpdateDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateDomainGroupRequest $request
     * @return UpdateDomainGroupResponse
     * @throws \Exception
     */
    public function updateDomainGroup(UpdateDomainGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateDomainGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDNSSLBWeightRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateDNSSLBWeightResponse
     * @throws \Exception
     */
    public function updateDNSSLBWeightWithOptions(UpdateDNSSLBWeightRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateDNSSLBWeightResponse::fromMap($this->doRequest("UpdateDNSSLBWeight", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateDNSSLBWeightRequest $request
     * @return UpdateDNSSLBWeightResponse
     * @throws \Exception
     */
    public function updateDNSSLBWeight(UpdateDNSSLBWeightRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateDNSSLBWeightWithOptions($request, $runtime);
    }

    /**
     * @param SetDomainRecordStatusRequest $request
     * @param RuntimeOptions $runtime
     * @return SetDomainRecordStatusResponse
     * @throws \Exception
     */
    public function setDomainRecordStatusWithOptions(SetDomainRecordStatusRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetDomainRecordStatusResponse::fromMap($this->doRequest("SetDomainRecordStatus", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param SetDomainRecordStatusRequest $request
     * @return SetDomainRecordStatusResponse
     * @throws \Exception
     */
    public function setDomainRecordStatus(SetDomainRecordStatusRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setDomainRecordStatusWithOptions($request, $runtime);
    }

    /**
     * @param SetDNSSLBStatusRequest $request
     * @param RuntimeOptions $runtime
     * @return SetDNSSLBStatusResponse
     * @throws \Exception
     */
    public function setDNSSLBStatusWithOptions(SetDNSSLBStatusRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetDNSSLBStatusResponse::fromMap($this->doRequest("SetDNSSLBStatus", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param SetDNSSLBStatusRequest $request
     * @return SetDNSSLBStatusResponse
     * @throws \Exception
     */
    public function setDNSSLBStatus(SetDNSSLBStatusRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setDNSSLBStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHichinaDomainDNSRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyHichinaDomainDNSResponse
     * @throws \Exception
     */
    public function modifyHichinaDomainDNSWithOptions(ModifyHichinaDomainDNSRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyHichinaDomainDNSResponse::fromMap($this->doRequest("ModifyHichinaDomainDNS", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param ModifyHichinaDomainDNSRequest $request
     * @return ModifyHichinaDomainDNSResponse
     * @throws \Exception
     */
    public function modifyHichinaDomainDNS(ModifyHichinaDomainDNSRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyHichinaDomainDNSWithOptions($request, $runtime);
    }

    /**
     * @param GetMainDomainNameRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMainDomainNameResponse
     * @throws \Exception
     */
    public function getMainDomainNameWithOptions(GetMainDomainNameRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMainDomainNameResponse::fromMap($this->doRequest("GetMainDomainName", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param GetMainDomainNameRequest $request
     * @return GetMainDomainNameResponse
     * @throws \Exception
     */
    public function getMainDomainName(GetMainDomainNameRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMainDomainNameWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSubDomainRecordsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeSubDomainRecordsResponse
     * @throws \Exception
     */
    public function describeSubDomainRecordsWithOptions(DescribeSubDomainRecordsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeSubDomainRecordsResponse::fromMap($this->doRequest("DescribeSubDomainRecords", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeSubDomainRecordsRequest $request
     * @return DescribeSubDomainRecordsResponse
     * @throws \Exception
     */
    public function describeSubDomainRecords(DescribeSubDomainRecordsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeSubDomainRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordLogsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeRecordLogsResponse
     * @throws \Exception
     */
    public function describeRecordLogsWithOptions(DescribeRecordLogsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeRecordLogsResponse::fromMap($this->doRequest("DescribeRecordLogs", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeRecordLogsRequest $request
     * @return DescribeRecordLogsResponse
     * @throws \Exception
     */
    public function describeRecordLogs(DescribeRecordLogsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeRecordLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDomainsResponse
     * @throws \Exception
     */
    public function describeDomainsWithOptions(DescribeDomainsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDomainsResponse::fromMap($this->doRequest("DescribeDomains", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $request, $runtime));
    }

    /**
     * @param DescribeDomainsRequest $request
     * @return DescribeDomainsResponse
     * @throws \Exception
     */
    public function describeDomains(DescribeDomainsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRecordsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDomainRecordsResponse
     * @throws \Exception
     */
    public function describeDomainRecordsWithOptions(DescribeDomainRecordsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDomainRecordsResponse::fromMap($this->doRequest("DescribeDomainRecords", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $request, $runtime));
    }

    /**
     * @param DescribeDomainRecordsRequest $request
     * @return DescribeDomainRecordsResponse
     * @throws \Exception
     */
    public function describeDomainRecords(DescribeDomainRecordsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDomainRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRecordInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDomainRecordInfoResponse
     * @throws \Exception
     */
    public function describeDomainRecordInfoWithOptions(DescribeDomainRecordInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDomainRecordInfoResponse::fromMap($this->doRequest("DescribeDomainRecordInfo", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $request, $runtime));
    }

    /**
     * @param DescribeDomainRecordInfoRequest $request
     * @return DescribeDomainRecordInfoResponse
     * @throws \Exception
     */
    public function describeDomainRecordInfo(DescribeDomainRecordInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDomainRecordInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainLogsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDomainLogsResponse
     * @throws \Exception
     */
    public function describeDomainLogsWithOptions(DescribeDomainLogsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDomainLogsResponse::fromMap($this->doRequest("DescribeDomainLogs", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDomainLogsRequest $request
     * @return DescribeDomainLogsResponse
     * @throws \Exception
     */
    public function describeDomainLogs(DescribeDomainLogsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDomainLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDomainInfoResponse
     * @throws \Exception
     */
    public function describeDomainInfoWithOptions(DescribeDomainInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDomainInfoResponse::fromMap($this->doRequest("DescribeDomainInfo", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDomainInfoRequest $request
     * @return DescribeDomainInfoResponse
     * @throws \Exception
     */
    public function describeDomainInfo(DescribeDomainInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDomainInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainGroupsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDomainGroupsResponse
     * @throws \Exception
     */
    public function describeDomainGroupsWithOptions(DescribeDomainGroupsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDomainGroupsResponse::fromMap($this->doRequest("DescribeDomainGroups", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDomainGroupsRequest $request
     * @return DescribeDomainGroupsResponse
     * @throws \Exception
     */
    public function describeDomainGroups(DescribeDomainGroupsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDomainGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDNSSLBSubDomainsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDNSSLBSubDomainsResponse
     * @throws \Exception
     */
    public function describeDNSSLBSubDomainsWithOptions(DescribeDNSSLBSubDomainsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDNSSLBSubDomainsResponse::fromMap($this->doRequest("DescribeDNSSLBSubDomains", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDNSSLBSubDomainsRequest $request
     * @return DescribeDNSSLBSubDomainsResponse
     * @throws \Exception
     */
    public function describeDNSSLBSubDomains(DescribeDNSSLBSubDomainsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDNSSLBSubDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDnsProductInstancesRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDnsProductInstancesResponse
     * @throws \Exception
     */
    public function describeDnsProductInstancesWithOptions(DescribeDnsProductInstancesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDnsProductInstancesResponse::fromMap($this->doRequest("DescribeDnsProductInstances", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeDnsProductInstancesRequest $request
     * @return DescribeDnsProductInstancesResponse
     * @throws \Exception
     */
    public function describeDnsProductInstances(DescribeDnsProductInstancesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDnsProductInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSubDomainRecordsRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteSubDomainRecordsResponse
     * @throws \Exception
     */
    public function deleteSubDomainRecordsWithOptions(DeleteSubDomainRecordsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteSubDomainRecordsResponse::fromMap($this->doRequest("DeleteSubDomainRecords", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteSubDomainRecordsRequest $request
     * @return DeleteSubDomainRecordsResponse
     * @throws \Exception
     */
    public function deleteSubDomainRecords(DeleteSubDomainRecordsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteSubDomainRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDomainRecordRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteDomainRecordResponse
     * @throws \Exception
     */
    public function deleteDomainRecordWithOptions(DeleteDomainRecordRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteDomainRecordResponse::fromMap($this->doRequest("DeleteDomainRecord", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $request, $runtime));
    }

    /**
     * @param DeleteDomainRecordRequest $request
     * @return DeleteDomainRecordResponse
     * @throws \Exception
     */
    public function deleteDomainRecord(DeleteDomainRecordRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteDomainRecordWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDomainGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteDomainGroupResponse
     * @throws \Exception
     */
    public function deleteDomainGroupWithOptions(DeleteDomainGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteDomainGroupResponse::fromMap($this->doRequest("DeleteDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteDomainGroupRequest $request
     * @return DeleteDomainGroupResponse
     * @throws \Exception
     */
    public function deleteDomainGroup(DeleteDomainGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteDomainGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteDomainResponse
     * @throws \Exception
     */
    public function deleteDomainWithOptions(DeleteDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteDomainResponse::fromMap($this->doRequest("DeleteDomain", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $request, $runtime));
    }

    /**
     * @param DeleteDomainRequest $request
     * @return DeleteDomainResponse
     * @throws \Exception
     */
    public function deleteDomain(DeleteDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * @param ChangeDomainOfDnsProductRequest $request
     * @param RuntimeOptions $runtime
     * @return ChangeDomainOfDnsProductResponse
     * @throws \Exception
     */
    public function changeDomainOfDnsProductWithOptions(ChangeDomainOfDnsProductRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ChangeDomainOfDnsProductResponse::fromMap($this->doRequest("ChangeDomainOfDnsProduct", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param ChangeDomainOfDnsProductRequest $request
     * @return ChangeDomainOfDnsProductResponse
     * @throws \Exception
     */
    public function changeDomainOfDnsProduct(ChangeDomainOfDnsProductRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->changeDomainOfDnsProductWithOptions($request, $runtime);
    }

    /**
     * @param ChangeDomainGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return ChangeDomainGroupResponse
     * @throws \Exception
     */
    public function changeDomainGroupWithOptions(ChangeDomainGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ChangeDomainGroupResponse::fromMap($this->doRequest("ChangeDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param ChangeDomainGroupRequest $request
     * @return ChangeDomainGroupResponse
     * @throws \Exception
     */
    public function changeDomainGroup(ChangeDomainGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->changeDomainGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddDomainRecordRequest $request
     * @param RuntimeOptions $runtime
     * @return AddDomainRecordResponse
     * @throws \Exception
     */
    public function addDomainRecordWithOptions(AddDomainRecordRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddDomainRecordResponse::fromMap($this->doRequest("AddDomainRecord", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $request, $runtime));
    }

    /**
     * @param AddDomainRecordRequest $request
     * @return AddDomainRecordResponse
     * @throws \Exception
     */
    public function addDomainRecord(AddDomainRecordRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addDomainRecordWithOptions($request, $runtime);
    }

    /**
     * @param AddDomainGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return AddDomainGroupResponse
     * @throws \Exception
     */
    public function addDomainGroupWithOptions(AddDomainGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddDomainGroupResponse::fromMap($this->doRequest("AddDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, $request, $runtime));
    }

    /**
     * @param AddDomainGroupRequest $request
     * @return AddDomainGroupResponse
     * @throws \Exception
     */
    public function addDomainGroup(AddDomainGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addDomainGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return AddDomainResponse
     * @throws \Exception
     */
    public function addDomainWithOptions(AddDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddDomainResponse::fromMap($this->doRequest("AddDomain", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $request, $runtime));
    }

    /**
     * @param AddDomainRequest $request
     * @return AddDomainResponse
     * @throws \Exception
     */
    public function addDomain(AddDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addDomainWithOptions($request, $runtime);
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
