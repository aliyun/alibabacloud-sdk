# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_vcs20200515 import models as vcs_20200515_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "regional"
        self.check_config(config)
        self._endpoint = self.get_endpoint("vcs", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def get_face_options_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.GetFaceOptionsResponse().from_map(self.do_request("GetFaceOptions", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def get_face_options(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_face_options_with_options(request, runtime)

    def get_body_options_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.GetBodyOptionsResponse().from_map(self.do_request("GetBodyOptions", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def get_body_options(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_body_options_with_options(request, runtime)

    def stop_monitor_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.StopMonitorResponse().from_map(self.do_request("StopMonitor", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def stop_monitor(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.stop_monitor_with_options(request, runtime)

    def search_body_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.SearchBodyResponse().from_map(self.do_request("SearchBody", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def search_body(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.search_body_with_options(request, runtime)

    def add_monitor_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.AddMonitorResponse().from_map(self.do_request("AddMonitor", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def add_monitor(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_monitor_with_options(request, runtime)

    def get_monitor_result_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.GetMonitorResultResponse().from_map(self.do_request("GetMonitorResult", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def get_monitor_result(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_monitor_result_with_options(request, runtime)

    def update_monitor_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.UpdateMonitorResponse().from_map(self.do_request("UpdateMonitor", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def update_monitor(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_monitor_with_options(request, runtime)

    def get_device_video_url_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.GetDeviceVideoUrlResponse().from_map(self.do_request("GetDeviceVideoUrl", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def get_device_video_url(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_device_video_url_with_options(request, runtime)

    def get_inventory_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.GetInventoryResponse().from_map(self.do_request("GetInventory", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def get_inventory(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_inventory_with_options(request, runtime)

    def recognize_image_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.RecognizeImageResponse().from_map(self.do_request("RecognizeImage", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def recognize_image(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.recognize_image_with_options(request, runtime)

    def list_corps_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.ListCorpsResponse().from_map(self.do_request("ListCorps", "HTTPS", "POST", "2020-05-15", "AK,APP", None, request.to_map(), runtime))


    def list_corps(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_corps_with_options(request, runtime)

    def update_corp_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.UpdateCorpResponse().from_map(self.do_request("UpdateCorp", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def update_corp(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_corp_with_options(request, runtime)

    def update_device_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.UpdateDeviceResponse().from_map(self.do_request("UpdateDevice", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def update_device(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.update_device_with_options(request, runtime)

    def list_devices_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.ListDevicesResponse().from_map(self.do_request("ListDevices", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def list_devices(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.list_devices_with_options(request, runtime)

    def get_device_live_url_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.GetDeviceLiveUrlResponse().from_map(self.do_request("GetDeviceLiveUrl", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def get_device_live_url(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_device_live_url_with_options(request, runtime)

    def search_face_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.SearchFaceResponse().from_map(self.do_request("SearchFace", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def search_face(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.search_face_with_options(request, runtime)

    def add_device_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.AddDeviceResponse().from_map(self.do_request("AddDevice", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def add_device(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.add_device_with_options(request, runtime)

    def create_corp_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.CreateCorpResponse().from_map(self.do_request("CreateCorp", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def create_corp(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.create_corp_with_options(request, runtime)

    def delete_device_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return vcs_20200515_models.DeleteDeviceResponse().from_map(self.do_request("DeleteDevice", "HTTPS", "POST", "2020-05-15", "AK", None, request.to_map(), runtime))


    def delete_device(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.delete_device_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
