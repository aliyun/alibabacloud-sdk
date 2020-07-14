<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupFromTemplateRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupFromTemplateResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteContainerGroupResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteImageCacheRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteImageCacheResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerLogRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerLogResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExecContainerCommandRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExecContainerCommandResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\RestartContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\RestartContainerGroupResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupByTemplateRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupByTemplateResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Eci extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eci', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions(DescribeRegionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
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
     * @return DescribeImageCachesResponse
     */
    public function describeImageCachesWithOptions(DescribeImageCachesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeImageCachesResponse::fromMap($this->doRequest('DescribeImageCaches', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeImageCachesResponse
     */
    public function describeImageCaches(DescribeImageCachesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageCachesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteImageCacheResponse
     */
    public function deleteImageCacheWithOptions(DeleteImageCacheRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteImageCacheResponse::fromMap($this->doRequest('DeleteImageCache', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteImageCacheResponse
     */
    public function deleteImageCache(DeleteImageCacheRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageCacheWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateImageCacheResponse
     */
    public function createImageCacheWithOptions(CreateImageCacheRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateImageCacheResponse::fromMap($this->doRequest('CreateImageCache', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateImageCacheResponse
     */
    public function createImageCache(CreateImageCacheRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageCacheWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMultiContainerGroupMetricResponse
     */
    public function describeMultiContainerGroupMetricWithOptions(DescribeMultiContainerGroupMetricRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMultiContainerGroupMetricResponse::fromMap($this->doRequest('DescribeMultiContainerGroupMetric', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMultiContainerGroupMetricResponse
     */
    public function describeMultiContainerGroupMetric(DescribeMultiContainerGroupMetricRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMultiContainerGroupMetricWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContainerGroupMetricResponse
     */
    public function describeContainerGroupMetricWithOptions(DescribeContainerGroupMetricRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeContainerGroupMetricResponse::fromMap($this->doRequest('DescribeContainerGroupMetric', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContainerGroupMetricResponse
     */
    public function describeContainerGroupMetric(DescribeContainerGroupMetricRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerGroupMetricWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateContainerGroupByTemplateResponse
     */
    public function updateContainerGroupByTemplateWithOptions(UpdateContainerGroupByTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateContainerGroupByTemplateResponse::fromMap($this->doRequest('UpdateContainerGroupByTemplate', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateContainerGroupByTemplateResponse
     */
    public function updateContainerGroupByTemplate(UpdateContainerGroupByTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContainerGroupByTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateContainerGroupFromTemplateResponse
     */
    public function createContainerGroupFromTemplateWithOptions(CreateContainerGroupFromTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateContainerGroupFromTemplateResponse::fromMap($this->doRequest('CreateContainerGroupFromTemplate', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateContainerGroupFromTemplateResponse
     */
    public function createContainerGroupFromTemplate(CreateContainerGroupFromTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContainerGroupFromTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ExportContainerGroupTemplateResponse
     */
    public function exportContainerGroupTemplateWithOptions(ExportContainerGroupTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ExportContainerGroupTemplateResponse::fromMap($this->doRequest('ExportContainerGroupTemplate', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ExportContainerGroupTemplateResponse
     */
    public function exportContainerGroupTemplate(ExportContainerGroupTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportContainerGroupTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RestartContainerGroupResponse
     */
    public function restartContainerGroupWithOptions(RestartContainerGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RestartContainerGroupResponse::fromMap($this->doRequest('RestartContainerGroup', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RestartContainerGroupResponse
     */
    public function restartContainerGroup(RestartContainerGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartContainerGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateContainerGroupResponse
     */
    public function updateContainerGroupWithOptions(UpdateContainerGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateContainerGroupResponse::fromMap($this->doRequest('UpdateContainerGroup', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateContainerGroupResponse
     */
    public function updateContainerGroup(UpdateContainerGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContainerGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContainerGroupPriceResponse
     */
    public function describeContainerGroupPriceWithOptions(DescribeContainerGroupPriceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeContainerGroupPriceResponse::fromMap($this->doRequest('DescribeContainerGroupPrice', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContainerGroupPriceResponse
     */
    public function describeContainerGroupPrice(DescribeContainerGroupPriceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerGroupPriceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ExecContainerCommandResponse
     */
    public function execContainerCommandWithOptions(ExecContainerCommandRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ExecContainerCommandResponse::fromMap($this->doRequest('ExecContainerCommand', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ExecContainerCommandResponse
     */
    public function execContainerCommand(ExecContainerCommandRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->execContainerCommandWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContainerLogResponse
     */
    public function describeContainerLogWithOptions(DescribeContainerLogRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeContainerLogResponse::fromMap($this->doRequest('DescribeContainerLog', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContainerLogResponse
     */
    public function describeContainerLog(DescribeContainerLogRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerLogWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateContainerGroupResponse
     */
    public function createContainerGroupWithOptions(CreateContainerGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateContainerGroupResponse::fromMap($this->doRequest('CreateContainerGroup', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateContainerGroupResponse
     */
    public function createContainerGroup(CreateContainerGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContainerGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContainerGroupsResponse
     */
    public function describeContainerGroupsWithOptions(DescribeContainerGroupsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeContainerGroupsResponse::fromMap($this->doRequest('DescribeContainerGroups', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContainerGroupsResponse
     */
    public function describeContainerGroups(DescribeContainerGroupsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerGroupsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteContainerGroupResponse
     */
    public function deleteContainerGroupWithOptions(DeleteContainerGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteContainerGroupResponse::fromMap($this->doRequest('DeleteContainerGroup', 'HTTPS', 'POST', '2018-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteContainerGroupResponse
     */
    public function deleteContainerGroup(DeleteContainerGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContainerGroupWithOptions($request, $runtime);
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
