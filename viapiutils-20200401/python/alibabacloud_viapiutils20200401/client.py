# This file is auto-generated, don't edit it. Thanks.
from alibabacloud_tea_rpc.client import Client as RPCClient
from alibabacloud_viapiutils20200401 import models as viapiutils_20200401_models
from alibabacloud_tea_util import models as util_models
from alibabacloud_tea_util.client import Client as UtilClient
from alibabacloud_endpoint_util.client import Client as EndpointUtilClient


class Client(RPCClient):
    def __init__(self, config):
        super().__init__(config)
        self._endpoint_rule = "regional"
        self.check_config(config)
        self._endpoint = self.get_endpoint("viapiutils", self._region_id, self._endpoint_rule, self._network, self._suffix, self._endpoint_map, self._endpoint)

    def get_oss_sts_token_with_options(self, request, runtime):
        UtilClient.validate_model(request)
        return viapiutils_20200401_models.GetOssStsTokenResponse().from_map(self.do_request("GetOssStsToken", "HTTPS", "POST", "2020-04-01", "AK", None, request.to_map(), runtime))


    def get_oss_sts_token(self, request):
        runtime = util_models.RuntimeOptions(

        )
        return self.get_oss_sts_token_with_options(request, runtime)

    def get_endpoint(self, product_id, region_id, endpoint_rule, network, suffix, endpoint_map, endpoint):
        if not UtilClient.empty(endpoint):
            return endpoint
        if not UtilClient.is_unset(endpoint_map) and not UtilClient.empty(endpoint_map.get('regionId')):
            return endpoint_map.get('regionId')
        return EndpointUtilClient.get_endpoint_rules(product_id, region_id, endpoint_rule, network, suffix)
