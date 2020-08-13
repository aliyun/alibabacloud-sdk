<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddClusterIntoServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddClusterIntoServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddVmAppToMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\AddVmAppToMeshResponse;
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
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshKubeconfigRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshKubeconfigResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUpgradeVersionRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUpgradeVersionResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetDiagnosisRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetDiagnosisResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceNamespacesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceNamespacesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServicesRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServicesResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetServiceMeshSlbRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetServiceMeshSlbResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmAppMeshInfoRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmAppMeshInfoResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmMetaRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmMetaResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveClusterFromServiceMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveClusterFromServiceMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveVmAppFromMeshRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RemoveVmAppFromMeshResponse;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RunDiagnosisRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\RunDiagnosisResponse;
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
     * @param AddVmAppToMeshRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddVmAppToMeshResponse
     */
    public function addVmAppToMeshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddVmAppToMeshResponse::fromMap($this->doRequest('AddVmAppToMesh', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddVmAppToMeshRequest $request
     *
     * @return AddVmAppToMeshResponse
     */
    public function addVmAppToMesh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVmAppToMeshWithOptions($request, $runtime);
    }

    /**
     * @param GetVmAppMeshInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetVmAppMeshInfoResponse
     */
    public function getVmAppMeshInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetVmAppMeshInfoResponse::fromMap($this->doRequest('GetVmAppMeshInfo', 'HTTPS', 'GET', '2020-01-11', 'AK', $request, null, $runtime));
    }

    /**
     * @param GetVmAppMeshInfoRequest $request
     *
     * @return GetVmAppMeshInfoResponse
     */
    public function getVmAppMeshInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVmAppMeshInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetVmMetaRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetVmMetaResponse
     */
    public function getVmMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetVmMetaResponse::fromMap($this->doRequest('GetVmMeta', 'HTTPS', 'GET', '2020-01-11', 'AK', $request, null, $runtime));
    }

    /**
     * @param GetVmMetaRequest $request
     *
     * @return GetVmMetaResponse
     */
    public function getVmMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVmMetaWithOptions($request, $runtime);
    }

    /**
     * @param RemoveVmAppFromMeshRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RemoveVmAppFromMeshResponse
     */
    public function removeVmAppFromMeshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveVmAppFromMeshResponse::fromMap($this->doRequest('RemoveVmAppFromMesh', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param RemoveVmAppFromMeshRequest $request
     *
     * @return RemoveVmAppFromMeshResponse
     */
    public function removeVmAppFromMesh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVmAppFromMeshWithOptions($request, $runtime);
    }

    /**
     * @param GetRegisteredServiceEndpointsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetRegisteredServiceEndpointsResponse
     */
    public function getRegisteredServiceEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetRegisteredServiceEndpointsResponse::fromMap($this->doRequest('GetRegisteredServiceEndpoints', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetRegisteredServiceEndpointsRequest $request
     *
     * @return GetRegisteredServiceEndpointsResponse
     */
    public function getRegisteredServiceEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRegisteredServiceEndpointsWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceMeshSlbRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetServiceMeshSlbResponse
     */
    public function getServiceMeshSlbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetServiceMeshSlbResponse::fromMap($this->doRequest('GetServiceMeshSlb', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetServiceMeshSlbRequest $request
     *
     * @return GetServiceMeshSlbResponse
     */
    public function getServiceMeshSlb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceMeshSlbWithOptions($request, $runtime);
    }

    /**
     * @param GetRegisteredServicesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetRegisteredServicesResponse
     */
    public function getRegisteredServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetRegisteredServicesResponse::fromMap($this->doRequest('GetRegisteredServices', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetRegisteredServicesRequest $request
     *
     * @return GetRegisteredServicesResponse
     */
    public function getRegisteredServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRegisteredServicesWithOptions($request, $runtime);
    }

    /**
     * @param GetDiagnosisRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetDiagnosisResponse
     */
    public function getDiagnosisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDiagnosisResponse::fromMap($this->doRequest('GetDiagnosis', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetDiagnosisRequest $request
     *
     * @return GetDiagnosisResponse
     */
    public function getDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiagnosisWithOptions($request, $runtime);
    }

    /**
     * @param GetRegisteredServiceNamespacesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetRegisteredServiceNamespacesResponse
     */
    public function getRegisteredServiceNamespacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetRegisteredServiceNamespacesResponse::fromMap($this->doRequest('GetRegisteredServiceNamespaces', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetRegisteredServiceNamespacesRequest $request
     *
     * @return GetRegisteredServiceNamespacesResponse
     */
    public function getRegisteredServiceNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRegisteredServiceNamespacesWithOptions($request, $runtime);
    }

    /**
     * @param RunDiagnosisRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RunDiagnosisResponse
     */
    public function runDiagnosisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RunDiagnosisResponse::fromMap($this->doRequest('RunDiagnosis', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param RunDiagnosisRequest $request
     *
     * @return RunDiagnosisResponse
     */
    public function runDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDiagnosisWithOptions($request, $runtime);
    }

    /**
     * @param RemoveClusterFromServiceMeshRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveClusterFromServiceMeshResponse
     */
    public function removeClusterFromServiceMeshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveClusterFromServiceMeshResponse::fromMap($this->doRequest('RemoveClusterFromServiceMesh', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param RemoveClusterFromServiceMeshRequest $request
     *
     * @return RemoveClusterFromServiceMeshResponse
     */
    public function removeClusterFromServiceMesh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeClusterFromServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @param AddClusterIntoServiceMeshRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddClusterIntoServiceMeshResponse
     */
    public function addClusterIntoServiceMeshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddClusterIntoServiceMeshResponse::fromMap($this->doRequest('AddClusterIntoServiceMesh', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddClusterIntoServiceMeshRequest $request
     *
     * @return AddClusterIntoServiceMeshResponse
     */
    public function addClusterIntoServiceMesh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addClusterIntoServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIstioInjectionConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateIstioInjectionConfigResponse
     */
    public function updateIstioInjectionConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateIstioInjectionConfigResponse::fromMap($this->doRequest('UpdateIstioInjectionConfig', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param UpdateIstioInjectionConfigRequest $request
     *
     * @return UpdateIstioInjectionConfigResponse
     */
    public function updateIstioInjectionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIstioInjectionConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGuestClusterAccessLogDashboardsRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeGuestClusterAccessLogDashboardsResponse
     */
    public function describeGuestClusterAccessLogDashboardsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeGuestClusterAccessLogDashboardsResponse::fromMap($this->doRequest('DescribeGuestClusterAccessLogDashboards', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeGuestClusterAccessLogDashboardsRequest $request
     *
     * @return DescribeGuestClusterAccessLogDashboardsResponse
     */
    public function describeGuestClusterAccessLogDashboards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGuestClusterAccessLogDashboardsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterPrometheusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeClusterPrometheusResponse
     */
    public function describeClusterPrometheusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterPrometheusResponse::fromMap($this->doRequest('DescribeClusterPrometheus', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeClusterPrometheusRequest $request
     *
     * @return DescribeClusterPrometheusResponse
     */
    public function describeClusterPrometheus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterPrometheusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterGrafanaRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeClusterGrafanaResponse
     */
    public function describeClusterGrafanaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterGrafanaResponse::fromMap($this->doRequest('DescribeClusterGrafana', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeClusterGrafanaRequest $request
     *
     * @return DescribeClusterGrafanaResponse
     */
    public function describeClusterGrafana($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterGrafanaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCensRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeCensResponse
     */
    public function describeCensWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCensResponse::fromMap($this->doRequest('DescribeCens', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeCensRequest $request
     *
     * @return DescribeCensResponse
     */
    public function describeCens($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCensWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClustersInServiceMeshRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeClustersInServiceMeshResponse
     */
    public function describeClustersInServiceMeshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClustersInServiceMeshResponse::fromMap($this->doRequest('DescribeClustersInServiceMesh', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeClustersInServiceMeshRequest $request
     *
     * @return DescribeClustersInServiceMeshResponse
     */
    public function describeClustersInServiceMesh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClustersInServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIngressGatewaysRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeIngressGatewaysResponse
     */
    public function describeIngressGatewaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeIngressGatewaysResponse::fromMap($this->doRequest('DescribeIngressGateways', 'HTTPS', 'GET', '2020-01-11', 'AK', $request, null, $runtime));
    }

    /**
     * @param DescribeIngressGatewaysRequest $request
     *
     * @return DescribeIngressGatewaysResponse
     */
    public function describeIngressGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIngressGatewaysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUpgradeVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeUpgradeVersionResponse
     */
    public function describeUpgradeVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeUpgradeVersionResponse::fromMap($this->doRequest('DescribeUpgradeVersion', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeUpgradeVersionRequest $request
     *
     * @return DescribeUpgradeVersionResponse
     */
    public function describeUpgradeVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpgradeVersionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMeshFeatureRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateMeshFeatureResponse
     */
    public function updateMeshFeatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateMeshFeatureResponse::fromMap($this->doRequest('UpdateMeshFeature', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param UpdateMeshFeatureRequest $request
     *
     * @return UpdateMeshFeatureResponse
     */
    public function updateMeshFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMeshFeatureWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeMeshVersionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpgradeMeshVersionResponse
     */
    public function upgradeMeshVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpgradeMeshVersionResponse::fromMap($this->doRequest('UpgradeMeshVersion', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param UpgradeMeshVersionRequest $request
     *
     * @return UpgradeMeshVersionResponse
     */
    public function upgradeMeshVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeMeshVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServiceMeshesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeServiceMeshesResponse
     */
    public function describeServiceMeshesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeServiceMeshesResponse::fromMap($this->doRequest('DescribeServiceMeshes', 'HTTPS', 'GET', '2020-01-11', 'AK', $request, null, $runtime));
    }

    /**
     * @param DescribeServiceMeshesRequest $request
     *
     * @return DescribeServiceMeshesResponse
     */
    public function describeServiceMeshes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServiceMeshDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeServiceMeshDetailResponse
     */
    public function describeServiceMeshDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeServiceMeshDetailResponse::fromMap($this->doRequest('DescribeServiceMeshDetail', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeServiceMeshDetailRequest $request
     *
     * @return DescribeServiceMeshDetailResponse
     */
    public function describeServiceMeshDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServiceMeshKubeconfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeServiceMeshKubeconfigResponse
     */
    public function describeServiceMeshKubeconfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeServiceMeshKubeconfigResponse::fromMap($this->doRequest('DescribeServiceMeshKubeconfig', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeServiceMeshKubeconfigRequest $request
     *
     * @return DescribeServiceMeshKubeconfigResponse
     */
    public function describeServiceMeshKubeconfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceMeshKubeconfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceMeshRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateServiceMeshResponse
     */
    public function createServiceMeshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateServiceMeshResponse::fromMap($this->doRequest('CreateServiceMesh', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateServiceMeshRequest $request
     *
     * @return CreateServiceMeshResponse
     */
    public function createServiceMesh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceMeshWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServiceMeshRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteServiceMeshResponse
     */
    public function deleteServiceMeshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteServiceMeshResponse::fromMap($this->doRequest('DeleteServiceMesh', 'HTTPS', 'POST', '2020-01-11', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteServiceMeshRequest $request
     *
     * @return DeleteServiceMeshResponse
     */
    public function deleteServiceMesh($request)
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
