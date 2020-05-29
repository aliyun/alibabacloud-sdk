# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_roa.client import Client as ROAClient
from alibabacloud_cs20151215 import models as _cs20151215_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(ROAClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = ""
        self.check_config(config)
        self._endpoint_host = self.get_endpoint(self._product_id, self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint_host)

    def resume_component_upgrade_ex(self, clusterid, componentid, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.ResumeComponentUpgradeResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/resume", None, request.headers, None, runtime))


    def resume_component_upgrade(self, clusterid, componentid, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.resume_component_upgrade_ex(clusterid, componentid, request, runtime)

    def pause_component_upgrade_ex(self, clusterid, componentid, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.PauseComponentUpgradeResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/pause", None, request.headers, None, runtime))


    def pause_component_upgrade(self, clusterid, componentid, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.pause_component_upgrade_ex(clusterid, componentid, request, runtime)

    def cancel_component_upgrade_ex(self, clusterid, componentid, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.CancelComponentUpgradeResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/cancel", None, request.headers, None, runtime))


    def cancel_component_upgrade(self, clusterid, componentid, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.cancel_component_upgrade_ex(clusterid, componentid, request, runtime)

    def cancel_workflow_ex(self, workflow_name, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.CancelWorkflowResponse().from_map(self.do_request("2015-12-15", "HTTPS", "PUT", "AK", "/gs/workflow/" + workflow_name + "", None, request.headers, None, runtime))


    def cancel_workflow(self, workflow_name, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.cancel_workflow_ex(workflow_name, request, runtime)

    def descirbe_workflow_ex(self, workflow_name, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescirbeWorkflowResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflow/" + workflow_name + "", None, request.headers, None, runtime))


    def descirbe_workflow(self, workflow_name, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.descirbe_workflow_ex(workflow_name, request, runtime)

    def remove_workflow_ex(self, workflow_name, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.RemoveWorkflowResponse().from_map(self.do_request("2015-12-15", "HTTPS", "DELETE", "AK", "/gs/workflow/" + workflow_name + "", None, request.headers, None, runtime))


    def remove_workflow(self, workflow_name, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.remove_workflow_ex(workflow_name, request, runtime)

    def describe_workflows_ex(self, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescribeWorkflowsResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflows", None, request.headers, None, runtime))


    def describe_workflows(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_workflows_ex(request, runtime)

    def start_workflow_ex(self, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.StartWorkflowResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/gs/workflow", None, request.headers, None, runtime))


    def start_workflow(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.start_workflow_ex(request, runtime)

    def create_service_mesh_ex(self, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.CreateServiceMeshResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/servicemesh", None, request.headers, None, runtime))


    def create_service_mesh(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_service_mesh_ex(request, runtime)

    def service_mesh_add_cluster_ex(self, service_mesh_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.ServiceMeshAddClusterResponse().from_map(self.do_request("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + service_mesh_id + "/add/clusters", None, request.headers, None, runtime))


    def service_mesh_add_cluster(self, service_mesh_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.service_mesh_add_cluster_ex(service_mesh_id, request, runtime)

    def service_mesh_remove_cluster_ex(self, service_mesh_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.ServiceMeshRemoveClusterResponse().from_map(self.do_request("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + service_mesh_id + "/remove/clusters", None, request.headers, None, runtime))


    def service_mesh_remove_cluster(self, service_mesh_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.service_mesh_remove_cluster_ex(service_mesh_id, request, runtime)

    def update_service_mesh_ex(self, service_mesh_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.UpdateServiceMeshResponse().from_map(self.do_request("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + service_mesh_id + "", None, request.headers, None, runtime))


    def update_service_mesh(self, service_mesh_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_service_mesh_ex(service_mesh_id, request, runtime)

    def service_mesh_api_server_ex(self, service_mesh_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.ServiceMeshApiServerResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/servicemesh/" + service_mesh_id + "/api_proxy", None, request.headers, None, runtime))


    def service_mesh_api_server(self, service_mesh_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.service_mesh_api_server_ex(service_mesh_id, request, runtime)

    def un_install_cluster_addons_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.UnInstallClusterAddonsResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + cluster_id + "/components/uninstall", None, request.headers, request.body.to_map(), runtime))


    def un_install_cluster_addons(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.un_install_cluster_addons_ex(cluster_id, request, runtime)

    def describe_addons_ex(self, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescribeAddonsResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/clusters/components/metadata", UtilClient.stringify_map_value(request.query.to_map()), request.headers, None, runtime))


    def describe_addons(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_addons_ex(request, runtime)

    def cancel_cluster_upgrade_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.CancelClusterUpgradeResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + cluster_id + "/upgrade/cancel", None, request.headers, None, runtime))


    def cancel_cluster_upgrade(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.cancel_cluster_upgrade_ex(cluster_id, request, runtime)

    def describe_user_quota_ex(self, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescribeUserQuotaResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/quota", None, request.headers, None, runtime))


    def describe_user_quota(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_user_quota_ex(request, runtime)

    def describe_cluster_v2user_kubeconfig_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescribeClusterV2UserKubeconfigResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/k8s/" + cluster_id + "/user_config", UtilClient.stringify_map_value(request.query.to_map()), request.headers, None, runtime))


    def describe_cluster_v2user_kubeconfig(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_cluster_v2user_kubeconfig_ex(cluster_id, request, runtime)

    def remove_cluster_nodes_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.RemoveClusterNodesResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + cluster_id + "/nodes/remove", None, request.headers, request.body.to_map(), runtime))


    def remove_cluster_nodes(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.remove_cluster_nodes_ex(cluster_id, request, runtime)

    def upgrade_cluster_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.UpgradeClusterResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + cluster_id + "/upgrade", None, request.headers, request.body.to_map(), runtime))


    def upgrade_cluster(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.upgrade_cluster_ex(cluster_id, request, runtime)

    def pause_cluster_upgrade_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.PauseClusterUpgradeResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + cluster_id + "/upgrade/pause", None, request.headers, None, runtime))


    def pause_cluster_upgrade(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.pause_cluster_upgrade_ex(cluster_id, request, runtime)

    def resume_upgrade_cluster_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.ResumeUpgradeClusterResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + cluster_id + "/upgrade/resume", None, request.headers, None, runtime))


    def resume_upgrade_cluster(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.resume_upgrade_cluster_ex(cluster_id, request, runtime)

    def get_upgrade_status_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.GetUpgradeStatusResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/clusters/" + cluster_id + "/upgrade/status", None, request.headers, None, runtime))


    def get_upgrade_status(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_upgrade_status_ex(cluster_id, request, runtime)

    def modify_cluster_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.ModifyClusterResponse().from_map(self.do_request("2015-12-15", "HTTPS", "PUT", "AK", "/api/v2/clusters/" + cluster_id + "", None, request.headers, request.body.to_map(), runtime))


    def modify_cluster(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_cluster_ex(cluster_id, request, runtime)

    def install_cluster_addons_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.InstallClusterAddonsResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + cluster_id + "/components/install", None, request.headers, request.body.to_map(), runtime))


    def install_cluster_addons(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.install_cluster_addons_ex(cluster_id, request, runtime)

    def delete_trigger_hook_ex(self, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DeleteTriggerHookResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/hook/trigger", None, request.headers, None, runtime))


    def delete_trigger_hook(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_trigger_hook_ex(request, runtime)

    def modify_cluster_tags_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.ModifyClusterTagsResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + cluster_id + "/tags", None, request.headers, request.body.to_map(), runtime))


    def modify_cluster_tags(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.modify_cluster_tags_ex(cluster_id, request, runtime)

    def describe_external_agent_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescribeExternalAgentResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" + cluster_id + "/external/agent/deployment", None, request.headers, None, runtime))


    def describe_external_agent(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_external_agent_ex(cluster_id, request, runtime)

    def describe_cluster_attach_scripts_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescribeClusterAttachScriptsResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + cluster_id + "/attachscript", None, request.headers, None, runtime))


    def describe_cluster_attach_scripts(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_cluster_attach_scripts_ex(cluster_id, request, runtime)

    def scale_out_cluster_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.ScaleOutClusterResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + cluster_id + "", None, request.headers, request.body.to_map(), runtime))


    def scale_out_cluster(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.scale_out_cluster_ex(cluster_id, request, runtime)

    def create_trigger_hook_ex(self, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.CreateTriggerHookResponse().from_map(self.do_request("2015-12-15", "HTTPS", "PUT", "AK", "/hook/trigger", None, request.headers, request.body.to_map(), runtime))


    def create_trigger_hook(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_trigger_hook_ex(request, runtime)

    def upgrade_cluster_addons_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.UpgradeClusterAddonsResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + cluster_id + "/components/upgrade", None, request.headers, request.body.to_map(), runtime))


    def upgrade_cluster_addons(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.upgrade_cluster_addons_ex(cluster_id, request, runtime)

    def describe_cluster_addons_version_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescribeClusterAddonsVersionResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + cluster_id + "/components/version", None, request.headers, None, runtime))


    def describe_cluster_addons_version(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_cluster_addons_version_ex(cluster_id, request, runtime)

    def describe_cluster_addon_upgrade_status_ex(self, cluster_id, component_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescribeClusterAddonUpgradeStatusResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + cluster_id + "/components/" + component_id + "/upgradestatus", None, request.headers, None, runtime))


    def describe_cluster_addon_upgrade_status(self, cluster_id, component_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_cluster_addon_upgrade_status_ex(cluster_id, component_id, request, runtime)

    def delete_cluster_nodes_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DeleteClusterNodesResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + cluster_id + "/nodes", None, request.headers, request.body.to_map(), runtime))


    def delete_cluster_nodes(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_cluster_nodes_ex(cluster_id, request, runtime)

    def delete_template_ex(self, template_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DeleteTemplateResponse().from_map(self.do_request("2015-12-15", "HTTPS", "DELETE", "AK", "/templates/" + template_id + "", None, request.headers, None, runtime))


    def delete_template(self, template_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_template_ex(template_id, request, runtime)

    def describe_cluster_user_kubeconfig_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescribeClusterUserKubeconfigResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" + cluster_id + "/user_config", UtilClient.stringify_map_value(request.query.to_map()), request.headers, None, runtime))


    def describe_cluster_user_kubeconfig(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_cluster_user_kubeconfig_ex(cluster_id, request, runtime)

    def describe_cluster_nodes_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescribeClusterNodesResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + cluster_id + "/nodes", UtilClient.stringify_map_value(request.query.to_map()), request.headers, None, runtime))


    def describe_cluster_nodes(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_cluster_nodes_ex(cluster_id, request, runtime)

    def describe_cluster_logs_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescribeClusterLogsResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + cluster_id + "/logs", None, request.headers, None, runtime))


    def describe_cluster_logs(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_cluster_logs_ex(cluster_id, request, runtime)

    def attach_instances_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.AttachInstancesResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + cluster_id + "/attach", None, request.headers, request.body.to_map(), runtime))


    def attach_instances(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.attach_instances_ex(cluster_id, request, runtime)

    def describe_templates_ex(self, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescribeTemplatesResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/templates", UtilClient.stringify_map_value(request.query.to_map()), request.headers, None, runtime))


    def describe_templates(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_templates_ex(request, runtime)

    def create_template_ex(self, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.CreateTemplateResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/templates", None, request.headers, request.body.to_map(), runtime))


    def create_template(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_template_ex(request, runtime)

    def create_cluster_ex(self, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.CreateClusterResponse().from_map(self.do_request("2015-12-15", "HTTPS", "POST", "AK", "/clusters", None, request.headers, request.body.to_map(), runtime))


    def create_cluster(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_cluster_ex(request, runtime)

    def scale_cluster_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.ScaleClusterResponse().from_map(self.do_request("2015-12-15", "HTTPS", "PUT", "AK", "/clusters/" + cluster_id + "", None, request.headers, None, runtime))


    def scale_cluster(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.scale_cluster_ex(cluster_id, request, runtime)

    def describe_clusters_ex(self, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescribeClustersResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/clusters", UtilClient.stringify_map_value(request.query.to_map()), request.headers, None, runtime))


    def describe_clusters(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_clusters_ex(request, runtime)

    def describe_cluster_detail_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescribeClusterDetailResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + cluster_id + "", None, request.headers, None, runtime))


    def describe_cluster_detail(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_cluster_detail_ex(cluster_id, request, runtime)

    def delete_cluster_ex(self, cluster_id, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DeleteClusterResponse().from_map(self.do_request("2015-12-15", "HTTPS", "DELETE", "AK", "/clusters/" + cluster_id + "", None, request.headers, None, runtime))


    def delete_cluster(self, cluster_id, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_cluster_ex(cluster_id, request, runtime)

    def describe_api_version_ex(self, request, runtime):
        UtilClient.validate_model(request)
        return _cs20151215_models.DescribeApiVersionResponse().from_map(self.do_request("2015-12-15", "HTTPS", "GET", "AK", "/version", None, request.headers, None, runtime))


    def describe_api_version(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.describe_api_version_ex(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
