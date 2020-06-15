<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddClusterIntoServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddClusterIntoServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DeleteServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeCensRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeCensResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClusterGrafanaRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClusterGrafanaResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClusterPrometheusRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClusterPrometheusResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClustersInServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClustersInServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterAccessLogDashboardsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterAccessLogDashboardsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIngressGatewaysRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIngressGatewaysResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeRelatedResourcesReuseRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeRelatedResourcesReuseResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeReusableSlbRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeReusableSlbResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshKubeconfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshKubeconfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUpgradeVersionRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUpgradeVersionResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveClusterFromServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveClusterFromServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioInjectionConfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioInjectionConfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateMeshFeatureRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateMeshFeatureResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpgradeMeshVersionRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpgradeMeshVersionResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Servicemesh extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('servicemesh', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveClusterFromServiceMeshResponse
     */
    public function removeClusterFromServiceMeshWithOptions(RemoveClusterFromServiceMeshRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveClusterFromServiceMeshResponse::fromMap($this->doRequest('RemoveClusterFromServiceMesh', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveClusterFromServiceMeshResponse
     */
    public function removeClusterFromServiceMesh(RemoveClusterFromServiceMeshRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeClusterFromServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddClusterIntoServiceMeshResponse
     */
    public function addClusterIntoServiceMeshWithOptions(AddClusterIntoServiceMeshRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddClusterIntoServiceMeshResponse::fromMap($this->doRequest('AddClusterIntoServiceMesh', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddClusterIntoServiceMeshResponse
     */
    public function addClusterIntoServiceMesh(AddClusterIntoServiceMeshRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addClusterIntoServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateIstioInjectionConfigResponse
     */
    public function updateIstioInjectionConfigWithOptions(UpdateIstioInjectionConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateIstioInjectionConfigResponse::fromMap($this->doRequest('UpdateIstioInjectionConfig', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateIstioInjectionConfigResponse
     */
    public function updateIstioInjectionConfig(UpdateIstioInjectionConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIstioInjectionConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeGuestClusterAccessLogDashboardsResponse
     */
    public function describeGuestClusterAccessLogDashboardsWithOptions(DescribeGuestClusterAccessLogDashboardsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeGuestClusterAccessLogDashboardsResponse::fromMap($this->doRequest('DescribeGuestClusterAccessLogDashboards', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeGuestClusterAccessLogDashboardsResponse
     */
    public function describeGuestClusterAccessLogDashboards(DescribeGuestClusterAccessLogDashboardsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGuestClusterAccessLogDashboardsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeReusableSlbResponse
     */
    public function describeReusableSlbWithOptions(DescribeReusableSlbRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeReusableSlbResponse::fromMap($this->doRequest('DescribeReusableSlb', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeReusableSlbResponse
     */
    public function describeReusableSlb(DescribeReusableSlbRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReusableSlbWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeClusterPrometheusResponse
     */
    public function describeClusterPrometheusWithOptions(DescribeClusterPrometheusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterPrometheusResponse::fromMap($this->doRequest('DescribeClusterPrometheus', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeClusterPrometheusResponse
     */
    public function describeClusterPrometheus(DescribeClusterPrometheusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterPrometheusWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeClusterGrafanaResponse
     */
    public function describeClusterGrafanaWithOptions(DescribeClusterGrafanaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterGrafanaResponse::fromMap($this->doRequest('DescribeClusterGrafana', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeClusterGrafanaResponse
     */
    public function describeClusterGrafana(DescribeClusterGrafanaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterGrafanaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRelatedResourcesReuseResponse
     */
    public function describeRelatedResourcesReuseWithOptions(DescribeRelatedResourcesReuseRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRelatedResourcesReuseResponse::fromMap($this->doRequest('DescribeRelatedResourcesReuse', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRelatedResourcesReuseResponse
     */
    public function describeRelatedResourcesReuse(DescribeRelatedResourcesReuseRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRelatedResourcesReuseWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions(DescribeRegionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
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
     * @return DescribeCensResponse
     */
    public function describeCensWithOptions(DescribeCensRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeCensResponse::fromMap($this->doRequest('DescribeCens', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeCensResponse
     */
    public function describeCens(DescribeCensRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCensWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeClustersInServiceMeshResponse
     */
    public function describeClustersInServiceMeshWithOptions(DescribeClustersInServiceMeshRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeClustersInServiceMeshResponse::fromMap($this->doRequest('DescribeClustersInServiceMesh', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeClustersInServiceMeshResponse
     */
    public function describeClustersInServiceMesh(DescribeClustersInServiceMeshRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClustersInServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeIngressGatewaysResponse
     */
    public function describeIngressGatewaysWithOptions(DescribeIngressGatewaysRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeIngressGatewaysResponse::fromMap($this->doRequest('DescribeIngressGateways', 'HTTPS', 'GET', '2020-01-11', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeIngressGatewaysResponse
     */
    public function describeIngressGateways(DescribeIngressGatewaysRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIngressGatewaysWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeUpgradeVersionResponse
     */
    public function describeUpgradeVersionWithOptions(DescribeUpgradeVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeUpgradeVersionResponse::fromMap($this->doRequest('DescribeUpgradeVersion', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeUpgradeVersionResponse
     */
    public function describeUpgradeVersion(DescribeUpgradeVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpgradeVersionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateMeshFeatureResponse
     */
    public function updateMeshFeatureWithOptions(UpdateMeshFeatureRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateMeshFeatureResponse::fromMap($this->doRequest('UpdateMeshFeature', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateMeshFeatureResponse
     */
    public function updateMeshFeature(UpdateMeshFeatureRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMeshFeatureWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpgradeMeshVersionResponse
     */
    public function upgradeMeshVersionWithOptions(UpgradeMeshVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpgradeMeshVersionResponse::fromMap($this->doRequest('UpgradeMeshVersion', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpgradeMeshVersionResponse
     */
    public function upgradeMeshVersion(UpgradeMeshVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeMeshVersionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeServiceMeshesResponse
     */
    public function describeServiceMeshesWithOptions(DescribeServiceMeshesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeServiceMeshesResponse::fromMap($this->doRequest('DescribeServiceMeshes', 'HTTPS', 'GET', '2020-01-11', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeServiceMeshesResponse
     */
    public function describeServiceMeshes(DescribeServiceMeshesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeServiceMeshDetailResponse
     */
    public function describeServiceMeshDetailWithOptions(DescribeServiceMeshDetailRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeServiceMeshDetailResponse::fromMap($this->doRequest('DescribeServiceMeshDetail', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeServiceMeshDetailResponse
     */
    public function describeServiceMeshDetail(DescribeServiceMeshDetailRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshDetailWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeServiceMeshKubeconfigResponse
     */
    public function describeServiceMeshKubeconfigWithOptions(DescribeServiceMeshKubeconfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeServiceMeshKubeconfigResponse::fromMap($this->doRequest('DescribeServiceMeshKubeconfig', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeServiceMeshKubeconfigResponse
     */
    public function describeServiceMeshKubeconfig(DescribeServiceMeshKubeconfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshKubeconfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateServiceMeshResponse
     */
    public function createServiceMeshWithOptions(CreateServiceMeshRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateServiceMeshResponse::fromMap($this->doRequest('CreateServiceMesh', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateServiceMeshResponse
     */
    public function createServiceMesh(CreateServiceMeshRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteServiceMeshResponse
     */
    public function deleteServiceMeshWithOptions(DeleteServiceMeshRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteServiceMeshResponse::fromMap($this->doRequest('DeleteServiceMesh', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteServiceMeshResponse
     */
    public function deleteServiceMesh(DeleteServiceMeshRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceMeshWithOptions($request, $runtime);
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
