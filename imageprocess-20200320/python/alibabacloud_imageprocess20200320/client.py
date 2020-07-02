# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_imageprocess20200320 import models as imageprocess_20200320_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "regional"
        self.check_config(config)
        self._endpoint = self.get_endpoint("imageprocess", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def detect_lung_nodule_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return imageprocess_20200320_models.DetectLungNoduleResponse().from_map(self.do_request("DetectLungNodule", "HTTPS", "POST", "2020-03-20", "AK", None, request.to_map(), runtime))


    def detect_lung_nodule(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.detect_lung_nodule_with_options(request, runtime)

    def detect_covid_19cad_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return imageprocess_20200320_models.DetectCovid19CadResponse().from_map(self.do_request("DetectCovid19Cad", "HTTPS", "POST", "2020-03-20", "AK", None, request.to_map(), runtime))


    def detect_covid_19cad(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.detect_covid_19cad_with_options(request, runtime)

    def get_async_job_result_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return imageprocess_20200320_models.GetAsyncJobResultResponse().from_map(self.do_request("GetAsyncJobResult", "HTTPS", "POST", "2020-03-20", "AK", None, request.to_map(), runtime))


    def get_async_job_result(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_async_job_result_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
