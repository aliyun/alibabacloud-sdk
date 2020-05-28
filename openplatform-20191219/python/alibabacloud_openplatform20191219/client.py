# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_openplatform20191219 import models as open_platform_20191219_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = ""
        self.check_config(config)
        self._endpoint = self.get_endpoint(self._product_id, self._region_id, self._endpoint_rule, self._network,
                                           self._suffix, self._endpoint_map, self._endpoint)

    def authorize_file_upload(self, request, runtime):
        UtilClient.validate_model(request)
        return open_platform_20191219_models.AuthorizeFileUploadResponse().from_map(
            self.do_request("AuthorizeFileUpload", "HTTPS", "GET", "2019-12-19", "AK", request.to_map(), None, runtime))

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.empty(endpoint_map["regionId"]):
            return endpoint_map["regionId"]
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
