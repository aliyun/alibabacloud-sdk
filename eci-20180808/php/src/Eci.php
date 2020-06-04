<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808;

use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Endpoint\Endpoint;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeRegionsRequest;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteImageCacheRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteImageCacheResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupByTemplateRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupByTemplateResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupFromTemplateRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupFromTemplateResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\RestartContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\RestartContainerGroupResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExecContainerCommandRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExecContainerCommandResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerLogRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerLogResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteContainerGroupResponse;

class Eci extends Rpc {
    public function __construct($config){
        parent::__construct($config);
        $this->_endpointRule = "";
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeRegionsResponse
     * @throws \Exception
     */
    public function describeRegionsWithOptions(DescribeRegionsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeRegionsResponse::fromMap($this->doRequest("DescribeRegions", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
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
     * @param DescribeImageCachesRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeImageCachesResponse
     * @throws \Exception
     */
    public function describeImageCachesWithOptions(DescribeImageCachesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeImageCachesResponse::fromMap($this->doRequest("DescribeImageCaches", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeImageCachesRequest $request
     * @return DescribeImageCachesResponse
     * @throws \Exception
     */
    public function describeImageCaches(DescribeImageCachesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeImageCachesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImageCacheRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteImageCacheResponse
     * @throws \Exception
     */
    public function deleteImageCacheWithOptions(DeleteImageCacheRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteImageCacheResponse::fromMap($this->doRequest("DeleteImageCache", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteImageCacheRequest $request
     * @return DeleteImageCacheResponse
     * @throws \Exception
     */
    public function deleteImageCache(DeleteImageCacheRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteImageCacheWithOptions($request, $runtime);
    }

    /**
     * @param CreateImageCacheRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateImageCacheResponse
     * @throws \Exception
     */
    public function createImageCacheWithOptions(CreateImageCacheRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateImageCacheResponse::fromMap($this->doRequest("CreateImageCache", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateImageCacheRequest $request
     * @return CreateImageCacheResponse
     * @throws \Exception
     */
    public function createImageCache(CreateImageCacheRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createImageCacheWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMultiContainerGroupMetricRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeMultiContainerGroupMetricResponse
     * @throws \Exception
     */
    public function describeMultiContainerGroupMetricWithOptions(DescribeMultiContainerGroupMetricRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeMultiContainerGroupMetricResponse::fromMap($this->doRequest("DescribeMultiContainerGroupMetric", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeMultiContainerGroupMetricRequest $request
     * @return DescribeMultiContainerGroupMetricResponse
     * @throws \Exception
     */
    public function describeMultiContainerGroupMetric(DescribeMultiContainerGroupMetricRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeMultiContainerGroupMetricWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContainerGroupMetricRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeContainerGroupMetricResponse
     * @throws \Exception
     */
    public function describeContainerGroupMetricWithOptions(DescribeContainerGroupMetricRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeContainerGroupMetricResponse::fromMap($this->doRequest("DescribeContainerGroupMetric", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeContainerGroupMetricRequest $request
     * @return DescribeContainerGroupMetricResponse
     * @throws \Exception
     */
    public function describeContainerGroupMetric(DescribeContainerGroupMetricRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeContainerGroupMetricWithOptions($request, $runtime);
    }

    /**
     * @param UpdateContainerGroupByTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateContainerGroupByTemplateResponse
     * @throws \Exception
     */
    public function updateContainerGroupByTemplateWithOptions(UpdateContainerGroupByTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateContainerGroupByTemplateResponse::fromMap($this->doRequest("UpdateContainerGroupByTemplate", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateContainerGroupByTemplateRequest $request
     * @return UpdateContainerGroupByTemplateResponse
     * @throws \Exception
     */
    public function updateContainerGroupByTemplate(UpdateContainerGroupByTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateContainerGroupByTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateContainerGroupFromTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateContainerGroupFromTemplateResponse
     * @throws \Exception
     */
    public function createContainerGroupFromTemplateWithOptions(CreateContainerGroupFromTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateContainerGroupFromTemplateResponse::fromMap($this->doRequest("CreateContainerGroupFromTemplate", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateContainerGroupFromTemplateRequest $request
     * @return CreateContainerGroupFromTemplateResponse
     * @throws \Exception
     */
    public function createContainerGroupFromTemplate(CreateContainerGroupFromTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createContainerGroupFromTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ExportContainerGroupTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return ExportContainerGroupTemplateResponse
     * @throws \Exception
     */
    public function exportContainerGroupTemplateWithOptions(ExportContainerGroupTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ExportContainerGroupTemplateResponse::fromMap($this->doRequest("ExportContainerGroupTemplate", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param ExportContainerGroupTemplateRequest $request
     * @return ExportContainerGroupTemplateResponse
     * @throws \Exception
     */
    public function exportContainerGroupTemplate(ExportContainerGroupTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->exportContainerGroupTemplateWithOptions($request, $runtime);
    }

    /**
     * @param RestartContainerGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return RestartContainerGroupResponse
     * @throws \Exception
     */
    public function restartContainerGroupWithOptions(RestartContainerGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RestartContainerGroupResponse::fromMap($this->doRequest("RestartContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param RestartContainerGroupRequest $request
     * @return RestartContainerGroupResponse
     * @throws \Exception
     */
    public function restartContainerGroup(RestartContainerGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->restartContainerGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateContainerGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateContainerGroupResponse
     * @throws \Exception
     */
    public function updateContainerGroupWithOptions(UpdateContainerGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateContainerGroupResponse::fromMap($this->doRequest("UpdateContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateContainerGroupRequest $request
     * @return UpdateContainerGroupResponse
     * @throws \Exception
     */
    public function updateContainerGroup(UpdateContainerGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateContainerGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContainerGroupPriceRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeContainerGroupPriceResponse
     * @throws \Exception
     */
    public function describeContainerGroupPriceWithOptions(DescribeContainerGroupPriceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeContainerGroupPriceResponse::fromMap($this->doRequest("DescribeContainerGroupPrice", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeContainerGroupPriceRequest $request
     * @return DescribeContainerGroupPriceResponse
     * @throws \Exception
     */
    public function describeContainerGroupPrice(DescribeContainerGroupPriceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeContainerGroupPriceWithOptions($request, $runtime);
    }

    /**
     * @param ExecContainerCommandRequest $request
     * @param RuntimeOptions $runtime
     * @return ExecContainerCommandResponse
     * @throws \Exception
     */
    public function execContainerCommandWithOptions(ExecContainerCommandRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ExecContainerCommandResponse::fromMap($this->doRequest("ExecContainerCommand", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param ExecContainerCommandRequest $request
     * @return ExecContainerCommandResponse
     * @throws \Exception
     */
    public function execContainerCommand(ExecContainerCommandRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->execContainerCommandWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContainerLogRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeContainerLogResponse
     * @throws \Exception
     */
    public function describeContainerLogWithOptions(DescribeContainerLogRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeContainerLogResponse::fromMap($this->doRequest("DescribeContainerLog", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeContainerLogRequest $request
     * @return DescribeContainerLogResponse
     * @throws \Exception
     */
    public function describeContainerLog(DescribeContainerLogRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeContainerLogWithOptions($request, $runtime);
    }

    /**
     * @param CreateContainerGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateContainerGroupResponse
     * @throws \Exception
     */
    public function createContainerGroupWithOptions(CreateContainerGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateContainerGroupResponse::fromMap($this->doRequest("CreateContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateContainerGroupRequest $request
     * @return CreateContainerGroupResponse
     * @throws \Exception
     */
    public function createContainerGroup(CreateContainerGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createContainerGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContainerGroupsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeContainerGroupsResponse
     * @throws \Exception
     */
    public function describeContainerGroupsWithOptions(DescribeContainerGroupsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeContainerGroupsResponse::fromMap($this->doRequest("DescribeContainerGroups", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeContainerGroupsRequest $request
     * @return DescribeContainerGroupsResponse
     * @throws \Exception
     */
    public function describeContainerGroups(DescribeContainerGroupsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeContainerGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteContainerGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteContainerGroupResponse
     * @throws \Exception
     */
    public function deleteContainerGroupWithOptions(DeleteContainerGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteContainerGroupResponse::fromMap($this->doRequest("DeleteContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteContainerGroupRequest $request
     * @return DeleteContainerGroupResponse
     * @throws \Exception
     */
    public function deleteContainerGroup(DeleteContainerGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteContainerGroupWithOptions($request, $runtime);
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
