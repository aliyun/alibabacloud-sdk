// This file is auto-generated, don't edit it. Thanks.

#include <alibabacloud/endpoint_util.hpp>
#include <alibabacloud/open_platform_20191219.hpp>
#include <alibabacloud/rpc.hpp>
#include <boost/any.hpp>
#include <boost/throw_exception.hpp>
#include <darabonba/core.hpp>
#include <darabonba/util.hpp>
#include <iostream>
#include <map>

using namespace std;

using namespace Alibabacloud_OpenPlatform20191219;

Alibabacloud_OpenPlatform20191219::Client::Client(
    const shared_ptr<Alibabacloud_RPC::Config> &config)
    : Alibabacloud_RPC::Client(config) {
  _endpointRule = make_shared<string>("");
  checkConfig(config);
  _endpoint = make_shared<string>(
      getEndpoint(make_shared<string>("openplatform"), _regionId, _endpointRule,
                  _network, _suffix, _endpointMap, _endpoint));
};

AuthorizeFileUploadResponse
Alibabacloud_OpenPlatform20191219::Client::authorizeFileUploadWithOptions(
    shared_ptr<AuthorizeFileUploadRequest> request,
    shared_ptr<Darabonba_Util::RuntimeOptions> runtime) {
  Darabonba_Util::Client::validateModel(request);
  return AuthorizeFileUploadResponse(
      doRequest(make_shared<string>("AuthorizeFileUpload"),
                make_shared<string>("HTTPS"), make_shared<string>("GET"),
                make_shared<string>("2019-12-19"), make_shared<string>("AK"),
                make_shared<map<string, boost::any>>(request->toMap()), nullptr,
                runtime));
}

AuthorizeFileUploadResponse
Alibabacloud_OpenPlatform20191219::Client::authorizeFileUpload(
    shared_ptr<AuthorizeFileUploadRequest> request) {
  shared_ptr<Darabonba_Util::RuntimeOptions> runtime =
      make_shared<Darabonba_Util::RuntimeOptions>();
  return authorizeFileUploadWithOptions(request, runtime);
}

string Alibabacloud_OpenPlatform20191219::Client::getEndpoint(
    shared_ptr<string> productId, shared_ptr<string> regionId,
    shared_ptr<string> endpointRule, shared_ptr<string> network,
    shared_ptr<string> suffix, shared_ptr<map<string, string>> endpointMap,
    shared_ptr<string> endpoint) {
  if (!Darabonba_Util::Client::empty(endpoint)) {
    return *endpoint;
  }
  if (!Darabonba_Util::Client::isUnset<map<string, string>>(endpointMap) &&
      !Darabonba_Util::Client::empty(
          make_shared<string>((*endpointMap)[*regionId]))) {
    return (*endpointMap)[*regionId];
  }
  return Alibabacloud_EndpointUtil::Client::getEndpointRules(
      productId, regionId, endpointRule, network, suffix);
}
