// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.servicemesh20200111;

import com.aliyun.tea.*;
import com.aliyun.servicemesh20200111.models.*;

public class Client extends com.aliyun.tearpc.Client {
    public Client(com.aliyun.tearpc.models.Config config) throws Exception {
        super(config);
        this._endpointRule = "central";
        this.checkConfig(config);
        this._endpoint = this.getEndpoint("servicemesh", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
    }


    public RemoveClusterFromServiceMeshResponse removeClusterFromServiceMeshWithOptions(RemoveClusterFromServiceMeshRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("RemoveClusterFromServiceMesh", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new RemoveClusterFromServiceMeshResponse());
    }

    public RemoveClusterFromServiceMeshResponse removeClusterFromServiceMesh(RemoveClusterFromServiceMeshRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.removeClusterFromServiceMeshWithOptions(request, runtime);
    }

    public AddClusterIntoServiceMeshResponse addClusterIntoServiceMeshWithOptions(AddClusterIntoServiceMeshRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("AddClusterIntoServiceMesh", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new AddClusterIntoServiceMeshResponse());
    }

    public AddClusterIntoServiceMeshResponse addClusterIntoServiceMesh(AddClusterIntoServiceMeshRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.addClusterIntoServiceMeshWithOptions(request, runtime);
    }

    public UpdateIstioInjectionConfigResponse updateIstioInjectionConfigWithOptions(UpdateIstioInjectionConfigRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("UpdateIstioInjectionConfig", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new UpdateIstioInjectionConfigResponse());
    }

    public UpdateIstioInjectionConfigResponse updateIstioInjectionConfig(UpdateIstioInjectionConfigRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.updateIstioInjectionConfigWithOptions(request, runtime);
    }

    public DescribeGuestClusterAccessLogDashboardsResponse describeGuestClusterAccessLogDashboardsWithOptions(DescribeGuestClusterAccessLogDashboardsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeGuestClusterAccessLogDashboards", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new DescribeGuestClusterAccessLogDashboardsResponse());
    }

    public DescribeGuestClusterAccessLogDashboardsResponse describeGuestClusterAccessLogDashboards(DescribeGuestClusterAccessLogDashboardsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeGuestClusterAccessLogDashboardsWithOptions(request, runtime);
    }

    public DescribeClusterPrometheusResponse describeClusterPrometheusWithOptions(DescribeClusterPrometheusRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeClusterPrometheus", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new DescribeClusterPrometheusResponse());
    }

    public DescribeClusterPrometheusResponse describeClusterPrometheus(DescribeClusterPrometheusRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeClusterPrometheusWithOptions(request, runtime);
    }

    public DescribeClusterGrafanaResponse describeClusterGrafanaWithOptions(DescribeClusterGrafanaRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeClusterGrafana", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new DescribeClusterGrafanaResponse());
    }

    public DescribeClusterGrafanaResponse describeClusterGrafana(DescribeClusterGrafanaRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeClusterGrafanaWithOptions(request, runtime);
    }

    public DescribeRegionsResponse describeRegionsWithOptions(DescribeRegionsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeRegions", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new DescribeRegionsResponse());
    }

    public DescribeRegionsResponse describeRegions(DescribeRegionsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeRegionsWithOptions(request, runtime);
    }

    public DescribeCensResponse describeCensWithOptions(DescribeCensRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeCens", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new DescribeCensResponse());
    }

    public DescribeCensResponse describeCens(DescribeCensRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeCensWithOptions(request, runtime);
    }

    public DescribeClustersInServiceMeshResponse describeClustersInServiceMeshWithOptions(DescribeClustersInServiceMeshRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeClustersInServiceMesh", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new DescribeClustersInServiceMeshResponse());
    }

    public DescribeClustersInServiceMeshResponse describeClustersInServiceMesh(DescribeClustersInServiceMeshRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeClustersInServiceMeshWithOptions(request, runtime);
    }

    public DescribeIngressGatewaysResponse describeIngressGatewaysWithOptions(DescribeIngressGatewaysRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeIngressGateways", "HTTPS", "GET", "2020-01-11", "AK", TeaModel.buildMap(request), null, runtime), new DescribeIngressGatewaysResponse());
    }

    public DescribeIngressGatewaysResponse describeIngressGateways(DescribeIngressGatewaysRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeIngressGatewaysWithOptions(request, runtime);
    }

    public DescribeUpgradeVersionResponse describeUpgradeVersionWithOptions(DescribeUpgradeVersionRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeUpgradeVersion", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new DescribeUpgradeVersionResponse());
    }

    public DescribeUpgradeVersionResponse describeUpgradeVersion(DescribeUpgradeVersionRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeUpgradeVersionWithOptions(request, runtime);
    }

    public UpdateMeshFeatureResponse updateMeshFeatureWithOptions(UpdateMeshFeatureRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("UpdateMeshFeature", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new UpdateMeshFeatureResponse());
    }

    public UpdateMeshFeatureResponse updateMeshFeature(UpdateMeshFeatureRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.updateMeshFeatureWithOptions(request, runtime);
    }

    public UpgradeMeshVersionResponse upgradeMeshVersionWithOptions(UpgradeMeshVersionRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("UpgradeMeshVersion", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new UpgradeMeshVersionResponse());
    }

    public UpgradeMeshVersionResponse upgradeMeshVersion(UpgradeMeshVersionRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.upgradeMeshVersionWithOptions(request, runtime);
    }

    public DescribeServiceMeshesResponse describeServiceMeshesWithOptions(DescribeServiceMeshesRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeServiceMeshes", "HTTPS", "GET", "2020-01-11", "AK", TeaModel.buildMap(request), null, runtime), new DescribeServiceMeshesResponse());
    }

    public DescribeServiceMeshesResponse describeServiceMeshes(DescribeServiceMeshesRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeServiceMeshesWithOptions(request, runtime);
    }

    public DescribeServiceMeshDetailResponse describeServiceMeshDetailWithOptions(DescribeServiceMeshDetailRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeServiceMeshDetail", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new DescribeServiceMeshDetailResponse());
    }

    public DescribeServiceMeshDetailResponse describeServiceMeshDetail(DescribeServiceMeshDetailRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeServiceMeshDetailWithOptions(request, runtime);
    }

    public DescribeServiceMeshKubeconfigResponse describeServiceMeshKubeconfigWithOptions(DescribeServiceMeshKubeconfigRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeServiceMeshKubeconfig", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new DescribeServiceMeshKubeconfigResponse());
    }

    public DescribeServiceMeshKubeconfigResponse describeServiceMeshKubeconfig(DescribeServiceMeshKubeconfigRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeServiceMeshKubeconfigWithOptions(request, runtime);
    }

    public CreateServiceMeshResponse createServiceMeshWithOptions(CreateServiceMeshRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("CreateServiceMesh", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new CreateServiceMeshResponse());
    }

    public CreateServiceMeshResponse createServiceMesh(CreateServiceMeshRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.createServiceMeshWithOptions(request, runtime);
    }

    public DeleteServiceMeshResponse deleteServiceMeshWithOptions(DeleteServiceMeshRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DeleteServiceMesh", "HTTPS", "POST", "2020-01-11", "AK", null, TeaModel.buildMap(request), runtime), new DeleteServiceMeshResponse());
    }

    public DeleteServiceMeshResponse deleteServiceMesh(DeleteServiceMeshRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.deleteServiceMeshWithOptions(request, runtime);
    }

    public String getEndpoint(String productId, String regionId, String endpointRule, String network, String suffix, java.util.Map<String, String> endpointMap, String endpoint) throws Exception {
        if (!com.aliyun.teautil.Common.empty(endpoint)) {
            return endpoint;
        }

        if (!com.aliyun.teautil.Common.isUnset(endpointMap) && !com.aliyun.teautil.Common.empty(endpointMap.get("regionId"))) {
            return endpointMap.get("regionId");
        }

        return com.aliyun.endpointutil.Client.getEndpointRules(productId, regionId, endpointRule, network, suffix);
    }
}
