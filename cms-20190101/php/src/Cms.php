<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Cms\V20190101\Models\AddTagsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\AddTagsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ApplyMetricRuleTemplateRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ApplyMetricRuleTemplateResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateDynamicTagGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateDynamicTagGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMonitoringAgentProcessRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMonitoringAgentProcessResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHostAvailabilityRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHostAvailabilityResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleResourcesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleResourcesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleTemplateRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleTemplateResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorAgentProcessRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorAgentProcessResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorGroupInstancesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorGroupInstancesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorGroupNotifyPolicyRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorGroupNotifyPolicyResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitorGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitoringAgentProcessRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMonitoringAgentProcessResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteContactGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteContactGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteContactRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteContactResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteCustomMetricRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteCustomMetricResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteDynamicTagGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteDynamicTagGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteEventRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteEventRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteEventRuleTargetsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteEventRuleTargetsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteExporterOutputRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteExporterOutputResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteExporterRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteExporterRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteGroupMonitoringAgentProcessRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteGroupMonitoringAgentProcessResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteHostAvailabilityRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteHostAvailabilityResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleResourcesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleResourcesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleTargetsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleTargetsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleTemplateRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleTemplateResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupDynamicRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupDynamicRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupInstancesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupInstancesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupNotifyPolicyRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupNotifyPolicyResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitoringAgentProcessRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitoringAgentProcessResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteSiteMonitorsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteSiteMonitorsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListByContactGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListByContactGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventCountRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventCountResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventHistogramRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventHistogramResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomMetricListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomMetricListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeFolderListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeFolderListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricDataRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricDataResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricLastRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricLastResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricMetaListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricMetaListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleCountRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleCountResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTargetsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTargetsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricTopRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricTopResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstancesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstancesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupNotifyPolicyListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupNotifyPolicyListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentAccessKeyRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentAccessKeyResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentConfigRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentConfigResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentHostsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentHostsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentProcessesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentProcessesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentStatusesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentStatusesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringConfigRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringConfigResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductResourceTagKeyListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductResourceTagKeyListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProjectMetaRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProjectMetaResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorDataRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorDataResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorISPCityListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorISPCityListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorQuotaRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorQuotaResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorStatisticsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorStatisticsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventAttributeRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventAttributeResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventCountRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventCountResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventHistogramRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventHistogramResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventMetaListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventMetaListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeTagKeyListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeTagKeyListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeTagValueListRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeTagValueListResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableActiveMetricRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableActiveMetricRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableEventRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableEventRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableHostAvailabilityRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableHostAvailabilityResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableMetricRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableMetricRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableSiteMonitorsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\DisableSiteMonitorsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableActiveMetricRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableActiveMetricRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableEventRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableEventRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableHostAvailabilityRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableHostAvailabilityResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableMetricRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableMetricRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableSiteMonitorsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\EnableSiteMonitorsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\InstallMonitoringAgentRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\InstallMonitoringAgentResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyGroupMonitoringAgentProcessRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyGroupMonitoringAgentProcessResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMonitorGroupInstancesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMonitorGroupInstancesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMonitorGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMonitorGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifySiteMonitorRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifySiteMonitorResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutContactGroupRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutContactGroupResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutContactRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutContactResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomEventRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomEventResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomMetricRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomMetricResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutExporterOutputRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutExporterOutputResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutExporterRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutExporterRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutGroupMetricRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutGroupMetricRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutMetricRuleTargetsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutMetricRuleTargetsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitorGroupDynamicRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitorGroupDynamicRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitoringConfigRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitoringConfigResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\RemoveTagsRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\RemoveTagsResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\SendDryRunSystemEventRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\SendDryRunSystemEventResponse;
use AlibabaCloud\SDK\Cms\V20190101\Models\UninstallMonitoringAgentRequest;
use AlibabaCloud\SDK\Cms\V20190101\Models\UninstallMonitoringAgentResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Cms extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeExporterOutputListResponse
     */
    public function describeExporterOutputListWithOptions(DescribeExporterOutputListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeExporterOutputListResponse::fromMap($this->doRequest('DescribeExporterOutputList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeExporterOutputListResponse
     */
    public function describeExporterOutputList(DescribeExporterOutputListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExporterOutputListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteExporterOutputResponse
     */
    public function deleteExporterOutputWithOptions(DeleteExporterOutputRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteExporterOutputResponse::fromMap($this->doRequest('DeleteExporterOutput', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteExporterOutputResponse
     */
    public function deleteExporterOutput(DeleteExporterOutputRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExporterOutputWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutExporterOutputResponse
     */
    public function putExporterOutputWithOptions(PutExporterOutputRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutExporterOutputResponse::fromMap($this->doRequest('PutExporterOutput', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutExporterOutputResponse
     */
    public function putExporterOutput(PutExporterOutputRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putExporterOutputWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeFolderListResponse
     */
    public function describeFolderListWithOptions(DescribeFolderListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeFolderListResponse::fromMap($this->doRequest('DescribeFolderList', 'HTTPS', 'GET', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeFolderListResponse
     */
    public function describeFolderList(DescribeFolderListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFolderListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteExporterRuleResponse
     */
    public function deleteExporterRuleWithOptions(DeleteExporterRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteExporterRuleResponse::fromMap($this->doRequest('DeleteExporterRule', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteExporterRuleResponse
     */
    public function deleteExporterRule(DeleteExporterRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExporterRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeExporterRuleListResponse
     */
    public function describeExporterRuleListWithOptions(DescribeExporterRuleListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeExporterRuleListResponse::fromMap($this->doRequest('DescribeExporterRuleList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeExporterRuleListResponse
     */
    public function describeExporterRuleList(DescribeExporterRuleListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExporterRuleListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutExporterRuleResponse
     */
    public function putExporterRuleWithOptions(PutExporterRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutExporterRuleResponse::fromMap($this->doRequest('PutExporterRule', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutExporterRuleResponse
     */
    public function putExporterRule(PutExporterRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putExporterRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDynamicTagRuleListResponse
     */
    public function describeDynamicTagRuleListWithOptions(DescribeDynamicTagRuleListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDynamicTagRuleListResponse::fromMap($this->doRequest('DescribeDynamicTagRuleList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDynamicTagRuleListResponse
     */
    public function describeDynamicTagRuleList(DescribeDynamicTagRuleListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDynamicTagRuleListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeProductResourceTagKeyListResponse
     */
    public function describeProductResourceTagKeyListWithOptions(DescribeProductResourceTagKeyListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeProductResourceTagKeyListResponse::fromMap($this->doRequest('DescribeProductResourceTagKeyList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeProductResourceTagKeyListResponse
     */
    public function describeProductResourceTagKeyList(DescribeProductResourceTagKeyListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductResourceTagKeyListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateDynamicTagGroupResponse
     */
    public function createDynamicTagGroupWithOptions(CreateDynamicTagGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateDynamicTagGroupResponse::fromMap($this->doRequest('CreateDynamicTagGroup', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateDynamicTagGroupResponse
     */
    public function createDynamicTagGroup(CreateDynamicTagGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDynamicTagGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDynamicTagGroupResponse
     */
    public function deleteDynamicTagGroupWithOptions(DeleteDynamicTagGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteDynamicTagGroupResponse::fromMap($this->doRequest('DeleteDynamicTagGroup', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDynamicTagGroupResponse
     */
    public function deleteDynamicTagGroup(DeleteDynamicTagGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDynamicTagGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyGroupMonitoringAgentProcessResponse
     */
    public function modifyGroupMonitoringAgentProcessWithOptions(ModifyGroupMonitoringAgentProcessRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyGroupMonitoringAgentProcessResponse::fromMap($this->doRequest('ModifyGroupMonitoringAgentProcess', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyGroupMonitoringAgentProcessResponse
     */
    public function modifyGroupMonitoringAgentProcess(ModifyGroupMonitoringAgentProcessRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGroupMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteGroupMonitoringAgentProcessResponse
     */
    public function deleteGroupMonitoringAgentProcessWithOptions(DeleteGroupMonitoringAgentProcessRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteGroupMonitoringAgentProcessResponse::fromMap($this->doRequest('DeleteGroupMonitoringAgentProcess', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteGroupMonitoringAgentProcessResponse
     */
    public function deleteGroupMonitoringAgentProcess(DeleteGroupMonitoringAgentProcessRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateGroupMonitoringAgentProcessResponse
     */
    public function createGroupMonitoringAgentProcessWithOptions(CreateGroupMonitoringAgentProcessRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateGroupMonitoringAgentProcessResponse::fromMap($this->doRequest('CreateGroupMonitoringAgentProcess', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateGroupMonitoringAgentProcessResponse
     */
    public function createGroupMonitoringAgentProcess(CreateGroupMonitoringAgentProcessRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTagKeyListResponse
     */
    public function describeTagKeyListWithOptions(DescribeTagKeyListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeTagKeyListResponse::fromMap($this->doRequest('DescribeTagKeyList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTagKeyListResponse
     */
    public function describeTagKeyList(DescribeTagKeyListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagKeyListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTagValueListResponse
     */
    public function describeTagValueListWithOptions(DescribeTagValueListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeTagValueListResponse::fromMap($this->doRequest('DescribeTagValueList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTagValueListResponse
     */
    public function describeTagValueList(DescribeTagValueListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagValueListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveTagsResponse
     */
    public function removeTagsWithOptions(RemoveTagsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveTagsResponse::fromMap($this->doRequest('RemoveTags', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveTagsResponse
     */
    public function removeTags(RemoveTagsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTagsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddTagsResponse
     */
    public function addTagsWithOptions(AddTagsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddTagsResponse::fromMap($this->doRequest('AddTags', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddTagsResponse
     */
    public function addTags(AddTagsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeGroupMonitoringAgentProcessResponse
     */
    public function describeGroupMonitoringAgentProcessWithOptions(DescribeGroupMonitoringAgentProcessRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeGroupMonitoringAgentProcessResponse::fromMap($this->doRequest('DescribeGroupMonitoringAgentProcess', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeGroupMonitoringAgentProcessResponse
     */
    public function describeGroupMonitoringAgentProcess(DescribeGroupMonitoringAgentProcessRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutResourceMetricRulesResponse
     */
    public function putResourceMetricRulesWithOptions(PutResourceMetricRulesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutResourceMetricRulesResponse::fromMap($this->doRequest('PutResourceMetricRules', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutResourceMetricRulesResponse
     */
    public function putResourceMetricRules(PutResourceMetricRulesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putResourceMetricRulesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateMetricRuleResourcesResponse
     */
    public function createMetricRuleResourcesWithOptions(CreateMetricRuleResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateMetricRuleResourcesResponse::fromMap($this->doRequest('CreateMetricRuleResources', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateMetricRuleResourcesResponse
     */
    public function createMetricRuleResources(CreateMetricRuleResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMetricRuleResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMetricRuleResourcesResponse
     */
    public function deleteMetricRuleResourcesWithOptions(DeleteMetricRuleResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteMetricRuleResourcesResponse::fromMap($this->doRequest('DeleteMetricRuleResources', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMetricRuleResourcesResponse
     */
    public function deleteMetricRuleResources(DeleteMetricRuleResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRuleResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMetricRuleTargetsResponse
     */
    public function deleteMetricRuleTargetsWithOptions(DeleteMetricRuleTargetsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteMetricRuleTargetsResponse::fromMap($this->doRequest('DeleteMetricRuleTargets', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMetricRuleTargetsResponse
     */
    public function deleteMetricRuleTargets(DeleteMetricRuleTargetsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutMetricRuleTargetsResponse
     */
    public function putMetricRuleTargetsWithOptions(PutMetricRuleTargetsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutMetricRuleTargetsResponse::fromMap($this->doRequest('PutMetricRuleTargets', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutMetricRuleTargetsResponse
     */
    public function putMetricRuleTargets(PutMetricRuleTargetsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMetricRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricRuleTargetsResponse
     */
    public function describeMetricRuleTargetsWithOptions(DescribeMetricRuleTargetsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMetricRuleTargetsResponse::fromMap($this->doRequest('DescribeMetricRuleTargets', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricRuleTargetsResponse
     */
    public function describeMetricRuleTargets(DescribeMetricRuleTargetsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyMonitorGroupInstancesResponse
     */
    public function modifyMonitorGroupInstancesWithOptions(ModifyMonitorGroupInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyMonitorGroupInstancesResponse::fromMap($this->doRequest('ModifyMonitorGroupInstances', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyMonitorGroupInstancesResponse
     */
    public function modifyMonitorGroupInstances(ModifyMonitorGroupInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMonitorGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitoringAgentStatusesResponse
     */
    public function describeMonitoringAgentStatusesWithOptions(DescribeMonitoringAgentStatusesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMonitoringAgentStatusesResponse::fromMap($this->doRequest('DescribeMonitoringAgentStatuses', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitoringAgentStatusesResponse
     */
    public function describeMonitoringAgentStatuses(DescribeMonitoringAgentStatusesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentStatusesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateMonitorAgentProcessResponse
     */
    public function createMonitorAgentProcessWithOptions(CreateMonitorAgentProcessRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateMonitorAgentProcessResponse::fromMap($this->doRequest('CreateMonitorAgentProcess', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateMonitorAgentProcessResponse
     */
    public function createMonitorAgentProcess(CreateMonitorAgentProcessRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorAgentProcessWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAlertHistoryListResponse
     */
    public function describeAlertHistoryListWithOptions(DescribeAlertHistoryListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAlertHistoryListResponse::fromMap($this->doRequest('DescribeAlertHistoryList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAlertHistoryListResponse
     */
    public function describeAlertHistoryList(DescribeAlertHistoryListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertHistoryListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAlertingMetricRuleResourcesResponse
     */
    public function describeAlertingMetricRuleResourcesWithOptions(DescribeAlertingMetricRuleResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAlertingMetricRuleResourcesResponse::fromMap($this->doRequest('DescribeAlertingMetricRuleResources', 'HTTPS', 'GET', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAlertingMetricRuleResourcesResponse
     */
    public function describeAlertingMetricRuleResources(DescribeAlertingMetricRuleResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertingMetricRuleResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DisableActiveMetricRuleResponse
     */
    public function disableActiveMetricRuleWithOptions(DisableActiveMetricRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DisableActiveMetricRuleResponse::fromMap($this->doRequest('DisableActiveMetricRule', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DisableActiveMetricRuleResponse
     */
    public function disableActiveMetricRule(DisableActiveMetricRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableActiveMetricRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeActiveMetricRuleListResponse
     */
    public function describeActiveMetricRuleListWithOptions(DescribeActiveMetricRuleListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeActiveMetricRuleListResponse::fromMap($this->doRequest('DescribeActiveMetricRuleList', 'HTTPS', 'GET', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeActiveMetricRuleListResponse
     */
    public function describeActiveMetricRuleList(DescribeActiveMetricRuleListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveMetricRuleListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeProductsOfActiveMetricRuleResponse
     */
    public function describeProductsOfActiveMetricRuleWithOptions(DescribeProductsOfActiveMetricRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeProductsOfActiveMetricRuleResponse::fromMap($this->doRequest('DescribeProductsOfActiveMetricRule', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeProductsOfActiveMetricRuleResponse
     */
    public function describeProductsOfActiveMetricRule(DescribeProductsOfActiveMetricRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductsOfActiveMetricRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EnableActiveMetricRuleResponse
     */
    public function enableActiveMetricRuleWithOptions(EnableActiveMetricRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EnableActiveMetricRuleResponse::fromMap($this->doRequest('EnableActiveMetricRule', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EnableActiveMetricRuleResponse
     */
    public function enableActiveMetricRule(EnableActiveMetricRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableActiveMetricRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitorGroupInstanceAttributeResponse
     */
    public function describeMonitorGroupInstanceAttributeWithOptions(DescribeMonitorGroupInstanceAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMonitorGroupInstanceAttributeResponse::fromMap($this->doRequest('DescribeMonitorGroupInstanceAttribute', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitorGroupInstanceAttributeResponse
     */
    public function describeMonitorGroupInstanceAttribute(DescribeMonitorGroupInstanceAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitorGroupNotifyPolicyListResponse
     */
    public function describeMonitorGroupNotifyPolicyListWithOptions(DescribeMonitorGroupNotifyPolicyListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMonitorGroupNotifyPolicyListResponse::fromMap($this->doRequest('DescribeMonitorGroupNotifyPolicyList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitorGroupNotifyPolicyListResponse
     */
    public function describeMonitorGroupNotifyPolicyList(DescribeMonitorGroupNotifyPolicyListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupNotifyPolicyListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMonitorGroupResponse
     */
    public function deleteMonitorGroupWithOptions(DeleteMonitorGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteMonitorGroupResponse::fromMap($this->doRequest('DeleteMonitorGroup', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMonitorGroupResponse
     */
    public function deleteMonitorGroup(DeleteMonitorGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitorGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateMonitorGroupResponse
     */
    public function createMonitorGroupWithOptions(CreateMonitorGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateMonitorGroupResponse::fromMap($this->doRequest('CreateMonitorGroup', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateMonitorGroupResponse
     */
    public function createMonitorGroup(CreateMonitorGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitorGroupsResponse
     */
    public function describeMonitorGroupsWithOptions(DescribeMonitorGroupsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMonitorGroupsResponse::fromMap($this->doRequest('DescribeMonitorGroups', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitorGroupsResponse
     */
    public function describeMonitorGroups(DescribeMonitorGroupsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMonitorGroupNotifyPolicyResponse
     */
    public function deleteMonitorGroupNotifyPolicyWithOptions(DeleteMonitorGroupNotifyPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteMonitorGroupNotifyPolicyResponse::fromMap($this->doRequest('DeleteMonitorGroupNotifyPolicy', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMonitorGroupNotifyPolicyResponse
     */
    public function deleteMonitorGroupNotifyPolicy(DeleteMonitorGroupNotifyPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitorGroupNotifyPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitorGroupDynamicRulesResponse
     */
    public function describeMonitorGroupDynamicRulesWithOptions(DescribeMonitorGroupDynamicRulesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMonitorGroupDynamicRulesResponse::fromMap($this->doRequest('DescribeMonitorGroupDynamicRules', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitorGroupDynamicRulesResponse
     */
    public function describeMonitorGroupDynamicRules(DescribeMonitorGroupDynamicRulesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupDynamicRulesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateMonitorGroupInstancesResponse
     */
    public function createMonitorGroupInstancesWithOptions(CreateMonitorGroupInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateMonitorGroupInstancesResponse::fromMap($this->doRequest('CreateMonitorGroupInstances', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateMonitorGroupInstancesResponse
     */
    public function createMonitorGroupInstances(CreateMonitorGroupInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateMonitorGroupNotifyPolicyResponse
     */
    public function createMonitorGroupNotifyPolicyWithOptions(CreateMonitorGroupNotifyPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateMonitorGroupNotifyPolicyResponse::fromMap($this->doRequest('CreateMonitorGroupNotifyPolicy', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateMonitorGroupNotifyPolicyResponse
     */
    public function createMonitorGroupNotifyPolicy(CreateMonitorGroupNotifyPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorGroupNotifyPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMonitorGroupInstancesResponse
     */
    public function deleteMonitorGroupInstancesWithOptions(DeleteMonitorGroupInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteMonitorGroupInstancesResponse::fromMap($this->doRequest('DeleteMonitorGroupInstances', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMonitorGroupInstancesResponse
     */
    public function deleteMonitorGroupInstances(DeleteMonitorGroupInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitorGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMonitorGroupDynamicRuleResponse
     */
    public function deleteMonitorGroupDynamicRuleWithOptions(DeleteMonitorGroupDynamicRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteMonitorGroupDynamicRuleResponse::fromMap($this->doRequest('DeleteMonitorGroupDynamicRule', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMonitorGroupDynamicRuleResponse
     */
    public function deleteMonitorGroupDynamicRule(DeleteMonitorGroupDynamicRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitorGroupDynamicRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutMonitorGroupDynamicRuleResponse
     */
    public function putMonitorGroupDynamicRuleWithOptions(PutMonitorGroupDynamicRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutMonitorGroupDynamicRuleResponse::fromMap($this->doRequest('PutMonitorGroupDynamicRule', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutMonitorGroupDynamicRuleResponse
     */
    public function putMonitorGroupDynamicRule(PutMonitorGroupDynamicRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMonitorGroupDynamicRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitorGroupInstancesResponse
     */
    public function describeMonitorGroupInstancesWithOptions(DescribeMonitorGroupInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMonitorGroupInstancesResponse::fromMap($this->doRequest('DescribeMonitorGroupInstances', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitorGroupInstancesResponse
     */
    public function describeMonitorGroupInstances(DescribeMonitorGroupInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitorGroupCategoriesResponse
     */
    public function describeMonitorGroupCategoriesWithOptions(DescribeMonitorGroupCategoriesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMonitorGroupCategoriesResponse::fromMap($this->doRequest('DescribeMonitorGroupCategories', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitorGroupCategoriesResponse
     */
    public function describeMonitorGroupCategories(DescribeMonitorGroupCategoriesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorGroupCategoriesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyMonitorGroupResponse
     */
    public function modifyMonitorGroupWithOptions(ModifyMonitorGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyMonitorGroupResponse::fromMap($this->doRequest('ModifyMonitorGroup', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyMonitorGroupResponse
     */
    public function modifyMonitorGroup(ModifyMonitorGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMonitorGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricRuleListResponse
     */
    public function describeMetricRuleListWithOptions(DescribeMetricRuleListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMetricRuleListResponse::fromMap($this->doRequest('DescribeMetricRuleList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricRuleListResponse
     */
    public function describeMetricRuleList(DescribeMetricRuleListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutResourceMetricRuleResponse
     */
    public function putResourceMetricRuleWithOptions(PutResourceMetricRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutResourceMetricRuleResponse::fromMap($this->doRequest('PutResourceMetricRule', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutResourceMetricRuleResponse
     */
    public function putResourceMetricRule(PutResourceMetricRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putResourceMetricRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutGroupMetricRuleResponse
     */
    public function putGroupMetricRuleWithOptions(PutGroupMetricRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutGroupMetricRuleResponse::fromMap($this->doRequest('PutGroupMetricRule', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutGroupMetricRuleResponse
     */
    public function putGroupMetricRule(PutGroupMetricRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putGroupMetricRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EnableMetricRulesResponse
     */
    public function enableMetricRulesWithOptions(EnableMetricRulesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EnableMetricRulesResponse::fromMap($this->doRequest('EnableMetricRules', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EnableMetricRulesResponse
     */
    public function enableMetricRules(EnableMetricRulesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableMetricRulesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricRuleCountResponse
     */
    public function describeMetricRuleCountWithOptions(DescribeMetricRuleCountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMetricRuleCountResponse::fromMap($this->doRequest('DescribeMetricRuleCount', 'HTTPS', 'GET', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricRuleCountResponse
     */
    public function describeMetricRuleCount(DescribeMetricRuleCountRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleCountWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateGroupMetricRulesResponse
     */
    public function createGroupMetricRulesWithOptions(CreateGroupMetricRulesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateGroupMetricRulesResponse::fromMap($this->doRequest('CreateGroupMetricRules', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateGroupMetricRulesResponse
     */
    public function createGroupMetricRules(CreateGroupMetricRulesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupMetricRulesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DisableMetricRulesResponse
     */
    public function disableMetricRulesWithOptions(DisableMetricRulesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DisableMetricRulesResponse::fromMap($this->doRequest('DisableMetricRules', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DisableMetricRulesResponse
     */
    public function disableMetricRules(DisableMetricRulesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableMetricRulesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMetricRulesResponse
     */
    public function deleteMetricRulesWithOptions(DeleteMetricRulesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteMetricRulesResponse::fromMap($this->doRequest('DeleteMetricRules', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMetricRulesResponse
     */
    public function deleteMetricRules(DeleteMetricRulesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRulesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyMetricRuleTemplateResponse
     */
    public function modifyMetricRuleTemplateWithOptions(ModifyMetricRuleTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyMetricRuleTemplateResponse::fromMap($this->doRequest('ModifyMetricRuleTemplate', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyMetricRuleTemplateResponse
     */
    public function modifyMetricRuleTemplate(ModifyMetricRuleTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMetricRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ApplyMetricRuleTemplateResponse
     */
    public function applyMetricRuleTemplateWithOptions(ApplyMetricRuleTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ApplyMetricRuleTemplateResponse::fromMap($this->doRequest('ApplyMetricRuleTemplate', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ApplyMetricRuleTemplateResponse
     */
    public function applyMetricRuleTemplate(ApplyMetricRuleTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyMetricRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricRuleTemplateAttributeResponse
     */
    public function describeMetricRuleTemplateAttributeWithOptions(DescribeMetricRuleTemplateAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMetricRuleTemplateAttributeResponse::fromMap($this->doRequest('DescribeMetricRuleTemplateAttribute', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricRuleTemplateAttributeResponse
     */
    public function describeMetricRuleTemplateAttribute(DescribeMetricRuleTemplateAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleTemplateAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateMetricRuleTemplateResponse
     */
    public function createMetricRuleTemplateWithOptions(CreateMetricRuleTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateMetricRuleTemplateResponse::fromMap($this->doRequest('CreateMetricRuleTemplate', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateMetricRuleTemplateResponse
     */
    public function createMetricRuleTemplate(CreateMetricRuleTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMetricRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMetricRuleTemplateResponse
     */
    public function deleteMetricRuleTemplateWithOptions(DeleteMetricRuleTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteMetricRuleTemplateResponse::fromMap($this->doRequest('DeleteMetricRuleTemplate', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMetricRuleTemplateResponse
     */
    public function deleteMetricRuleTemplate(DeleteMetricRuleTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRuleTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricRuleTemplateListResponse
     */
    public function describeMetricRuleTemplateListWithOptions(DescribeMetricRuleTemplateListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMetricRuleTemplateListResponse::fromMap($this->doRequest('DescribeMetricRuleTemplateList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricRuleTemplateListResponse
     */
    public function describeMetricRuleTemplateList(DescribeMetricRuleTemplateListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleTemplateListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutCustomEventResponse
     */
    public function putCustomEventWithOptions(PutCustomEventRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutCustomEventResponse::fromMap($this->doRequest('PutCustomEvent', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutCustomEventResponse
     */
    public function putCustomEvent(PutCustomEventRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putCustomEventWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCustomEventCountResponse
     */
    public function describeCustomEventCountWithOptions(DescribeCustomEventCountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeCustomEventCountResponse::fromMap($this->doRequest('DescribeCustomEventCount', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCustomEventCountResponse
     */
    public function describeCustomEventCount(DescribeCustomEventCountRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomEventCountWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCustomEventAttributeResponse
     */
    public function describeCustomEventAttributeWithOptions(DescribeCustomEventAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeCustomEventAttributeResponse::fromMap($this->doRequest('DescribeCustomEventAttribute', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCustomEventAttributeResponse
     */
    public function describeCustomEventAttribute(DescribeCustomEventAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomEventAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCustomEventHistogramResponse
     */
    public function describeCustomEventHistogramWithOptions(DescribeCustomEventHistogramRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeCustomEventHistogramResponse::fromMap($this->doRequest('DescribeCustomEventHistogram', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCustomEventHistogramResponse
     */
    public function describeCustomEventHistogram(DescribeCustomEventHistogramRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomEventHistogramWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteCustomMetricResponse
     */
    public function deleteCustomMetricWithOptions(DeleteCustomMetricRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteCustomMetricResponse::fromMap($this->doRequest('DeleteCustomMetric', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteCustomMetricResponse
     */
    public function deleteCustomMetric(DeleteCustomMetricRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomMetricWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCustomMetricListResponse
     */
    public function describeCustomMetricListWithOptions(DescribeCustomMetricListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeCustomMetricListResponse::fromMap($this->doRequest('DescribeCustomMetricList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCustomMetricListResponse
     */
    public function describeCustomMetricList(DescribeCustomMetricListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomMetricListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutCustomMetricResponse
     */
    public function putCustomMetricWithOptions(PutCustomMetricRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutCustomMetricResponse::fromMap($this->doRequest('PutCustomMetric', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutCustomMetricResponse
     */
    public function putCustomMetric(PutCustomMetricRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putCustomMetricWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeEventRuleAttributeResponse
     */
    public function describeEventRuleAttributeWithOptions(DescribeEventRuleAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeEventRuleAttributeResponse::fromMap($this->doRequest('DescribeEventRuleAttribute', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeEventRuleAttributeResponse
     */
    public function describeEventRuleAttribute(DescribeEventRuleAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteContactGroupResponse
     */
    public function deleteContactGroupWithOptions(DeleteContactGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteContactGroupResponse::fromMap($this->doRequest('DeleteContactGroup', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteContactGroupResponse
     */
    public function deleteContactGroup(DeleteContactGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContactListResponse
     */
    public function describeContactListWithOptions(DescribeContactListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeContactListResponse::fromMap($this->doRequest('DescribeContactList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContactListResponse
     */
    public function describeContactList(DescribeContactListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContactListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContactListByContactGroupResponse
     */
    public function describeContactListByContactGroupWithOptions(DescribeContactListByContactGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeContactListByContactGroupResponse::fromMap($this->doRequest('DescribeContactListByContactGroup', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContactListByContactGroupResponse
     */
    public function describeContactListByContactGroup(DescribeContactListByContactGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContactListByContactGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteContactResponse
     */
    public function deleteContactWithOptions(DeleteContactRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteContactResponse::fromMap($this->doRequest('DeleteContact', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteContactResponse
     */
    public function deleteContact(DeleteContactRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutContactGroupResponse
     */
    public function putContactGroupWithOptions(PutContactGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutContactGroupResponse::fromMap($this->doRequest('PutContactGroup', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutContactGroupResponse
     */
    public function putContactGroup(PutContactGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putContactGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutContactResponse
     */
    public function putContactWithOptions(PutContactRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutContactResponse::fromMap($this->doRequest('PutContact', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutContactResponse
     */
    public function putContact(PutContactRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putContactWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContactGroupListResponse
     */
    public function describeContactGroupListWithOptions(DescribeContactGroupListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeContactGroupListResponse::fromMap($this->doRequest('DescribeContactGroupList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContactGroupListResponse
     */
    public function describeContactGroupList(DescribeContactGroupListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContactGroupListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutEventRuleTargetsResponse
     */
    public function putEventRuleTargetsWithOptions(PutEventRuleTargetsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutEventRuleTargetsResponse::fromMap($this->doRequest('PutEventRuleTargets', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutEventRuleTargetsResponse
     */
    public function putEventRuleTargets(PutEventRuleTargetsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEventRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteEventRuleTargetsResponse
     */
    public function deleteEventRuleTargetsWithOptions(DeleteEventRuleTargetsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteEventRuleTargetsResponse::fromMap($this->doRequest('DeleteEventRuleTargets', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteEventRuleTargetsResponse
     */
    public function deleteEventRuleTargets(DeleteEventRuleTargetsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DisableEventRulesResponse
     */
    public function disableEventRulesWithOptions(DisableEventRulesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DisableEventRulesResponse::fromMap($this->doRequest('DisableEventRules', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DisableEventRulesResponse
     */
    public function disableEventRules(DisableEventRulesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableEventRulesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeEventRuleTargetListResponse
     */
    public function describeEventRuleTargetListWithOptions(DescribeEventRuleTargetListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeEventRuleTargetListResponse::fromMap($this->doRequest('DescribeEventRuleTargetList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeEventRuleTargetListResponse
     */
    public function describeEventRuleTargetList(DescribeEventRuleTargetListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventRuleTargetListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteEventRulesResponse
     */
    public function deleteEventRulesWithOptions(DeleteEventRulesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteEventRulesResponse::fromMap($this->doRequest('DeleteEventRules', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteEventRulesResponse
     */
    public function deleteEventRules(DeleteEventRulesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventRulesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EnableEventRulesResponse
     */
    public function enableEventRulesWithOptions(EnableEventRulesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EnableEventRulesResponse::fromMap($this->doRequest('EnableEventRules', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EnableEventRulesResponse
     */
    public function enableEventRules(EnableEventRulesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableEventRulesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutEventRuleResponse
     */
    public function putEventRuleWithOptions(PutEventRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutEventRuleResponse::fromMap($this->doRequest('PutEventRule', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutEventRuleResponse
     */
    public function putEventRule(PutEventRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEventRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeEventRuleListResponse
     */
    public function describeEventRuleListWithOptions(DescribeEventRuleListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeEventRuleListResponse::fromMap($this->doRequest('DescribeEventRuleList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeEventRuleListResponse
     */
    public function describeEventRuleList(DescribeEventRuleListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventRuleListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSystemEventAttributeResponse
     */
    public function describeSystemEventAttributeWithOptions(DescribeSystemEventAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSystemEventAttributeResponse::fromMap($this->doRequest('DescribeSystemEventAttribute', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSystemEventAttributeResponse
     */
    public function describeSystemEventAttribute(DescribeSystemEventAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemEventAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSystemEventHistogramResponse
     */
    public function describeSystemEventHistogramWithOptions(DescribeSystemEventHistogramRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSystemEventHistogramResponse::fromMap($this->doRequest('DescribeSystemEventHistogram', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSystemEventHistogramResponse
     */
    public function describeSystemEventHistogram(DescribeSystemEventHistogramRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemEventHistogramWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSystemEventCountResponse
     */
    public function describeSystemEventCountWithOptions(DescribeSystemEventCountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSystemEventCountResponse::fromMap($this->doRequest('DescribeSystemEventCount', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSystemEventCountResponse
     */
    public function describeSystemEventCount(DescribeSystemEventCountRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemEventCountWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSystemEventMetaListResponse
     */
    public function describeSystemEventMetaListWithOptions(DescribeSystemEventMetaListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSystemEventMetaListResponse::fromMap($this->doRequest('DescribeSystemEventMetaList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSystemEventMetaListResponse
     */
    public function describeSystemEventMetaList(DescribeSystemEventMetaListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemEventMetaListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitoringAgentProcessesResponse
     */
    public function describeMonitoringAgentProcessesWithOptions(DescribeMonitoringAgentProcessesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMonitoringAgentProcessesResponse::fromMap($this->doRequest('DescribeMonitoringAgentProcesses', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitoringAgentProcessesResponse
     */
    public function describeMonitoringAgentProcesses(DescribeMonitoringAgentProcessesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentProcessesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UninstallMonitoringAgentResponse
     */
    public function uninstallMonitoringAgentWithOptions(UninstallMonitoringAgentRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UninstallMonitoringAgentResponse::fromMap($this->doRequest('UninstallMonitoringAgent', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UninstallMonitoringAgentResponse
     */
    public function uninstallMonitoringAgent(UninstallMonitoringAgentRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallMonitoringAgentWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitoringAgentAccessKeyResponse
     */
    public function describeMonitoringAgentAccessKeyWithOptions(DescribeMonitoringAgentAccessKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMonitoringAgentAccessKeyResponse::fromMap($this->doRequest('DescribeMonitoringAgentAccessKey', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitoringAgentAccessKeyResponse
     */
    public function describeMonitoringAgentAccessKey(DescribeMonitoringAgentAccessKeyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentAccessKeyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return InstallMonitoringAgentResponse
     */
    public function installMonitoringAgentWithOptions(InstallMonitoringAgentRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return InstallMonitoringAgentResponse::fromMap($this->doRequest('InstallMonitoringAgent', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return InstallMonitoringAgentResponse
     */
    public function installMonitoringAgent(InstallMonitoringAgentRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installMonitoringAgentWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SendDryRunSystemEventResponse
     */
    public function sendDryRunSystemEventWithOptions(SendDryRunSystemEventRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SendDryRunSystemEventResponse::fromMap($this->doRequest('SendDryRunSystemEvent', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SendDryRunSystemEventResponse
     */
    public function sendDryRunSystemEvent(SendDryRunSystemEventRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendDryRunSystemEventWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateMonitoringAgentProcessResponse
     */
    public function createMonitoringAgentProcessWithOptions(CreateMonitoringAgentProcessRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateMonitoringAgentProcessResponse::fromMap($this->doRequest('CreateMonitoringAgentProcess', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateMonitoringAgentProcessResponse
     */
    public function createMonitoringAgentProcess(CreateMonitoringAgentProcessRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitoringAgentConfigResponse
     */
    public function describeMonitoringAgentConfigWithOptions(DescribeMonitoringAgentConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMonitoringAgentConfigResponse::fromMap($this->doRequest('DescribeMonitoringAgentConfig', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitoringAgentConfigResponse
     */
    public function describeMonitoringAgentConfig(DescribeMonitoringAgentConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMonitoringAgentProcessResponse
     */
    public function deleteMonitoringAgentProcessWithOptions(DeleteMonitoringAgentProcessRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteMonitoringAgentProcessResponse::fromMap($this->doRequest('DeleteMonitoringAgentProcess', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMonitoringAgentProcessResponse
     */
    public function deleteMonitoringAgentProcess(DeleteMonitoringAgentProcessRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitoringAgentProcessWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitoringAgentHostsResponse
     */
    public function describeMonitoringAgentHostsWithOptions(DescribeMonitoringAgentHostsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMonitoringAgentHostsResponse::fromMap($this->doRequest('DescribeMonitoringAgentHosts', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitoringAgentHostsResponse
     */
    public function describeMonitoringAgentHosts(DescribeMonitoringAgentHostsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringAgentHostsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSiteMonitorDataResponse
     */
    public function describeSiteMonitorDataWithOptions(DescribeSiteMonitorDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSiteMonitorDataResponse::fromMap($this->doRequest('DescribeSiteMonitorData', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSiteMonitorDataResponse
     */
    public function describeSiteMonitorData(DescribeSiteMonitorDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifySiteMonitorResponse
     */
    public function modifySiteMonitorWithOptions(ModifySiteMonitorRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifySiteMonitorResponse::fromMap($this->doRequest('ModifySiteMonitor', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifySiteMonitorResponse
     */
    public function modifySiteMonitor(ModifySiteMonitorRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySiteMonitorWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSiteMonitorISPCityListResponse
     */
    public function describeSiteMonitorISPCityListWithOptions(DescribeSiteMonitorISPCityListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSiteMonitorISPCityListResponse::fromMap($this->doRequest('DescribeSiteMonitorISPCityList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSiteMonitorISPCityListResponse
     */
    public function describeSiteMonitorISPCityList(DescribeSiteMonitorISPCityListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorISPCityListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSiteMonitorQuotaResponse
     */
    public function describeSiteMonitorQuotaWithOptions(DescribeSiteMonitorQuotaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSiteMonitorQuotaResponse::fromMap($this->doRequest('DescribeSiteMonitorQuota', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSiteMonitorQuotaResponse
     */
    public function describeSiteMonitorQuota(DescribeSiteMonitorQuotaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorQuotaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSiteMonitorStatisticsResponse
     */
    public function describeSiteMonitorStatisticsWithOptions(DescribeSiteMonitorStatisticsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSiteMonitorStatisticsResponse::fromMap($this->doRequest('DescribeSiteMonitorStatistics', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSiteMonitorStatisticsResponse
     */
    public function describeSiteMonitorStatistics(DescribeSiteMonitorStatisticsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorStatisticsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EnableSiteMonitorsResponse
     */
    public function enableSiteMonitorsWithOptions(EnableSiteMonitorsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EnableSiteMonitorsResponse::fromMap($this->doRequest('EnableSiteMonitors', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EnableSiteMonitorsResponse
     */
    public function enableSiteMonitors(EnableSiteMonitorsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSiteMonitorsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSiteMonitorAttributeResponse
     */
    public function describeSiteMonitorAttributeWithOptions(DescribeSiteMonitorAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSiteMonitorAttributeResponse::fromMap($this->doRequest('DescribeSiteMonitorAttribute', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSiteMonitorAttributeResponse
     */
    public function describeSiteMonitorAttribute(DescribeSiteMonitorAttributeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorAttributeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSiteMonitorListResponse
     */
    public function describeSiteMonitorListWithOptions(DescribeSiteMonitorListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSiteMonitorListResponse::fromMap($this->doRequest('DescribeSiteMonitorList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSiteMonitorListResponse
     */
    public function describeSiteMonitorList(DescribeSiteMonitorListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteMonitorListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSiteMonitorsResponse
     */
    public function deleteSiteMonitorsWithOptions(DeleteSiteMonitorsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteSiteMonitorsResponse::fromMap($this->doRequest('DeleteSiteMonitors', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSiteMonitorsResponse
     */
    public function deleteSiteMonitors(DeleteSiteMonitorsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSiteMonitorsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DisableSiteMonitorsResponse
     */
    public function disableSiteMonitorsWithOptions(DisableSiteMonitorsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DisableSiteMonitorsResponse::fromMap($this->doRequest('DisableSiteMonitors', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DisableSiteMonitorsResponse
     */
    public function disableSiteMonitors(DisableSiteMonitorsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSiteMonitorsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateSiteMonitorResponse
     */
    public function createSiteMonitorWithOptions(CreateSiteMonitorRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateSiteMonitorResponse::fromMap($this->doRequest('CreateSiteMonitor', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateSiteMonitorResponse
     */
    public function createSiteMonitor(CreateSiteMonitorRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSiteMonitorWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeProjectMetaResponse
     */
    public function describeProjectMetaWithOptions(DescribeProjectMetaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeProjectMetaResponse::fromMap($this->doRequest('DescribeProjectMeta', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeProjectMetaResponse
     */
    public function describeProjectMeta(DescribeProjectMetaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectMetaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricListResponse
     */
    public function describeMetricListWithOptions(DescribeMetricListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMetricListResponse::fromMap($this->doRequest('DescribeMetricList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricListResponse
     */
    public function describeMetricList(DescribeMetricListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricMetaListResponse
     */
    public function describeMetricMetaListWithOptions(DescribeMetricMetaListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMetricMetaListResponse::fromMap($this->doRequest('DescribeMetricMetaList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricMetaListResponse
     */
    public function describeMetricMetaList(DescribeMetricMetaListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricMetaListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricTopResponse
     */
    public function describeMetricTopWithOptions(DescribeMetricTopRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMetricTopResponse::fromMap($this->doRequest('DescribeMetricTop', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricTopResponse
     */
    public function describeMetricTop(DescribeMetricTopRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricTopWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricDataResponse
     */
    public function describeMetricDataWithOptions(DescribeMetricDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMetricDataResponse::fromMap($this->doRequest('DescribeMetricData', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricDataResponse
     */
    public function describeMetricData(DescribeMetricDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricLastResponse
     */
    public function describeMetricLastWithOptions(DescribeMetricLastRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMetricLastResponse::fromMap($this->doRequest('DescribeMetricLast', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMetricLastResponse
     */
    public function describeMetricLast(DescribeMetricLastRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricLastWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EnableHostAvailabilityResponse
     */
    public function enableHostAvailabilityWithOptions(EnableHostAvailabilityRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EnableHostAvailabilityResponse::fromMap($this->doRequest('EnableHostAvailability', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EnableHostAvailabilityResponse
     */
    public function enableHostAvailability(EnableHostAvailabilityRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyHostAvailabilityResponse
     */
    public function modifyHostAvailabilityWithOptions(ModifyHostAvailabilityRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyHostAvailabilityResponse::fromMap($this->doRequest('ModifyHostAvailability', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyHostAvailabilityResponse
     */
    public function modifyHostAvailability(ModifyHostAvailabilityRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DisableHostAvailabilityResponse
     */
    public function disableHostAvailabilityWithOptions(DisableHostAvailabilityRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DisableHostAvailabilityResponse::fromMap($this->doRequest('DisableHostAvailability', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DisableHostAvailabilityResponse
     */
    public function disableHostAvailability(DisableHostAvailabilityRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeUnhealthyHostAvailabilityResponse
     */
    public function describeUnhealthyHostAvailabilityWithOptions(DescribeUnhealthyHostAvailabilityRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeUnhealthyHostAvailabilityResponse::fromMap($this->doRequest('DescribeUnhealthyHostAvailability', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeUnhealthyHostAvailabilityResponse
     */
    public function describeUnhealthyHostAvailability(DescribeUnhealthyHostAvailabilityRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUnhealthyHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateHostAvailabilityResponse
     */
    public function createHostAvailabilityWithOptions(CreateHostAvailabilityRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateHostAvailabilityResponse::fromMap($this->doRequest('CreateHostAvailability', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateHostAvailabilityResponse
     */
    public function createHostAvailability(CreateHostAvailabilityRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeHostAvailabilityListResponse
     */
    public function describeHostAvailabilityListWithOptions(DescribeHostAvailabilityListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeHostAvailabilityListResponse::fromMap($this->doRequest('DescribeHostAvailabilityList', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeHostAvailabilityListResponse
     */
    public function describeHostAvailabilityList(DescribeHostAvailabilityListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHostAvailabilityListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteHostAvailabilityResponse
     */
    public function deleteHostAvailabilityWithOptions(DeleteHostAvailabilityRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteHostAvailabilityResponse::fromMap($this->doRequest('DeleteHostAvailability', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteHostAvailabilityResponse
     */
    public function deleteHostAvailability(DeleteHostAvailabilityRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHostAvailabilityWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitoringConfigResponse
     */
    public function describeMonitoringConfigWithOptions(DescribeMonitoringConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMonitoringConfigResponse::fromMap($this->doRequest('DescribeMonitoringConfig', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMonitoringConfigResponse
     */
    public function describeMonitoringConfig(DescribeMonitoringConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitoringConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PutMonitoringConfigResponse
     */
    public function putMonitoringConfigWithOptions(PutMonitoringConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PutMonitoringConfigResponse::fromMap($this->doRequest('PutMonitoringConfig', 'HTTPS', 'POST', '2019-01-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PutMonitoringConfigResponse
     */
    public function putMonitoringConfig(PutMonitoringConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMonitoringConfigWithOptions($request, $runtime);
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
