# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_servicemesh20200111 import models as servicemesh_20200111_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "central"
        self.check_config(config)
        self._endpoint = self.get_endpoint("servicemesh", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def remove_cluster_from_service_mesh_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.RemoveClusterFromServiceMeshResponse().from_map(self.do_request("RemoveClusterFromServiceMesh", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def remove_cluster_from_service_mesh(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.remove_cluster_from_service_mesh_with_options(request, runtime)

    def add_cluster_into_service_mesh_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.AddClusterIntoServiceMeshResponse().from_map(self.do_request("AddClusterIntoServiceMesh", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def add_cluster_into_service_mesh(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_cluster_into_service_mesh_with_options(request, runtime)

    def update_istio_injection_config_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.UpdateIstioInjectionConfigResponse().from_map(self.do_request("UpdateIstioInjectionConfig", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def update_istio_injection_config(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_istio_injection_config_with_options(request, runtime)

    def describe_guest_cluster_access_log_dashboards_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.DescribeGuestClusterAccessLogDashboardsResponse().from_map(self.do_request("DescribeGuestClusterAccessLogDashboards", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def describe_guest_cluster_access_log_dashboards(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_guest_cluster_access_log_dashboards_with_options(request, runtime)

    def describe_reusable_slb_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.DescribeReusableSlbResponse().from_map(self.do_request("DescribeReusableSlb", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def describe_reusable_slb(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_reusable_slb_with_options(request, runtime)

    def describe_cluster_prometheus_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.DescribeClusterPrometheusResponse().from_map(self.do_request("DescribeClusterPrometheus", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def describe_cluster_prometheus(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_cluster_prometheus_with_options(request, runtime)

    def describe_cluster_grafana_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.DescribeClusterGrafanaResponse().from_map(self.do_request("DescribeClusterGrafana", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def describe_cluster_grafana(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_cluster_grafana_with_options(request, runtime)

    def describe_related_resources_reuse_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.DescribeRelatedResourcesReuseResponse().from_map(self.do_request("DescribeRelatedResourcesReuse", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def describe_related_resources_reuse(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_related_resources_reuse_with_options(request, runtime)

    def describe_regions_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.DescribeRegionsResponse().from_map(self.do_request("DescribeRegions", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def describe_regions(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_regions_with_options(request, runtime)

    def describe_cens_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.DescribeCensResponse().from_map(self.do_request("DescribeCens", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def describe_cens(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_cens_with_options(request, runtime)

    def describe_clusters_in_service_mesh_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.DescribeClustersInServiceMeshResponse().from_map(self.do_request("DescribeClustersInServiceMesh", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def describe_clusters_in_service_mesh(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_clusters_in_service_mesh_with_options(request, runtime)

    def describe_ingress_gateways_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.DescribeIngressGatewaysResponse().from_map(self.do_request("DescribeIngressGateways", "HTTPS", "GET", "2020-01-11", "AK", None, request.to_map(), runtime))


    def describe_ingress_gateways(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_ingress_gateways_with_options(request, runtime)

    def describe_upgrade_version_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.DescribeUpgradeVersionResponse().from_map(self.do_request("DescribeUpgradeVersion", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def describe_upgrade_version(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_upgrade_version_with_options(request, runtime)

    def update_mesh_feature_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.UpdateMeshFeatureResponse().from_map(self.do_request("UpdateMeshFeature", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def update_mesh_feature(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_mesh_feature_with_options(request, runtime)

    def upgrade_mesh_version_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.UpgradeMeshVersionResponse().from_map(self.do_request("UpgradeMeshVersion", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def upgrade_mesh_version(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.upgrade_mesh_version_with_options(request, runtime)

    def describe_service_meshes_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.DescribeServiceMeshesResponse().from_map(self.do_request("DescribeServiceMeshes", "HTTPS", "GET", "2020-01-11", "AK", None, request.to_map(), runtime))


    def describe_service_meshes(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_service_meshes_with_options(request, runtime)

    def describe_service_mesh_detail_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.DescribeServiceMeshDetailResponse().from_map(self.do_request("DescribeServiceMeshDetail", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def describe_service_mesh_detail(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_service_mesh_detail_with_options(request, runtime)

    def describe_service_mesh_kubeconfig_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.DescribeServiceMeshKubeconfigResponse().from_map(self.do_request("DescribeServiceMeshKubeconfig", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def describe_service_mesh_kubeconfig(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_service_mesh_kubeconfig_with_options(request, runtime)

    def create_service_mesh_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.CreateServiceMeshResponse().from_map(self.do_request("CreateServiceMesh", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def create_service_mesh(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_service_mesh_with_options(request, runtime)

    def delete_service_mesh_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return servicemesh_20200111_models.DeleteServiceMeshResponse().from_map(self.do_request("DeleteServiceMesh", "HTTPS", "POST", "2020-01-11", "AK", None, request.to_map(), runtime))


    def delete_service_mesh(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_service_mesh_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
