// This file is auto-generated, don't edit it. Thanks.

#ifndef ALIBABACLOUD_OPENPLATFORM20191219_H_
#define ALIBABACLOUD_OPENPLATFORM20191219_H_

#include <alibabacloud/endpoint_util.hpp>
#include <alibabacloud/rpc.hpp>
#include <boost/throw_exception.hpp>
#include <darabonba/core.hpp>
#include <darabonba/util.hpp>
#include <iostream>
#include <map>

using namespace std;

namespace Alibabacloud_OpenPlatform20191219 {
class AuthorizeFileUploadRequest : public Darabonba::Model {
public:
  AuthorizeFileUploadRequest() {}
  explicit AuthorizeFileUploadRequest(
      const std::map<string, boost::any> &config)
      : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!product) {
      BOOST_THROW_EXCEPTION(
          boost::enable_error_info(std::runtime_error("product is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (product) {
      res["Product"] = boost::any(*product);
    }
    if (regionId) {
      res["RegionId"] = boost::any(*regionId);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("Product") != m.end() && !m["Product"].empty()) {
      product = make_shared<string>(boost::any_cast<string>(m["Product"]));
    }
    if (m.find("RegionId") != m.end() && !m["RegionId"].empty()) {
      regionId = make_shared<string>(boost::any_cast<string>(m["RegionId"]));
    }
  }

  shared_ptr<string> product{};
  shared_ptr<string> regionId{};

  ~AuthorizeFileUploadRequest() = default;
};
class AuthorizeFileUploadResponse : public Darabonba::Model {
public:
  AuthorizeFileUploadResponse() {}
  explicit AuthorizeFileUploadResponse(
      const std::map<string, boost::any> &config)
      : Darabonba::Model(config) {
    fromMap(config);
  };

  void validate() override {
    if (!accessKeyId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(
          std::runtime_error("accessKeyId is required.")));
    }
    if (!bucket) {
      BOOST_THROW_EXCEPTION(
          boost::enable_error_info(std::runtime_error("bucket is required.")));
    }
    if (!encodedPolicy) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(
          std::runtime_error("encodedPolicy is required.")));
    }
    if (!endpoint) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(
          std::runtime_error("endpoint is required.")));
    }
    if (!objectKey) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(
          std::runtime_error("objectKey is required.")));
    }
    if (!requestId) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(
          std::runtime_error("requestId is required.")));
    }
    if (!signature) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(
          std::runtime_error("signature is required.")));
    }
    if (!useAccelerate) {
      BOOST_THROW_EXCEPTION(boost::enable_error_info(
          std::runtime_error("useAccelerate is required.")));
    }
  }

  map<string, boost::any> toMap() override {
    map<string, boost::any> res;
    if (accessKeyId) {
      res["AccessKeyId"] = boost::any(*accessKeyId);
    }
    if (bucket) {
      res["Bucket"] = boost::any(*bucket);
    }
    if (encodedPolicy) {
      res["EncodedPolicy"] = boost::any(*encodedPolicy);
    }
    if (endpoint) {
      res["Endpoint"] = boost::any(*endpoint);
    }
    if (objectKey) {
      res["ObjectKey"] = boost::any(*objectKey);
    }
    if (requestId) {
      res["RequestId"] = boost::any(*requestId);
    }
    if (signature) {
      res["Signature"] = boost::any(*signature);
    }
    if (useAccelerate) {
      res["UseAccelerate"] = boost::any(*useAccelerate);
    }
    return res;
  }

  void fromMap(map<string, boost::any> m) override {
    if (m.find("AccessKeyId") != m.end() && !m["AccessKeyId"].empty()) {
      accessKeyId =
          make_shared<string>(boost::any_cast<string>(m["AccessKeyId"]));
    }
    if (m.find("Bucket") != m.end() && !m["Bucket"].empty()) {
      bucket = make_shared<string>(boost::any_cast<string>(m["Bucket"]));
    }
    if (m.find("EncodedPolicy") != m.end() && !m["EncodedPolicy"].empty()) {
      encodedPolicy =
          make_shared<string>(boost::any_cast<string>(m["EncodedPolicy"]));
    }
    if (m.find("Endpoint") != m.end() && !m["Endpoint"].empty()) {
      endpoint = make_shared<string>(boost::any_cast<string>(m["Endpoint"]));
    }
    if (m.find("ObjectKey") != m.end() && !m["ObjectKey"].empty()) {
      objectKey = make_shared<string>(boost::any_cast<string>(m["ObjectKey"]));
    }
    if (m.find("RequestId") != m.end() && !m["RequestId"].empty()) {
      requestId = make_shared<string>(boost::any_cast<string>(m["RequestId"]));
    }
    if (m.find("Signature") != m.end() && !m["Signature"].empty()) {
      signature = make_shared<string>(boost::any_cast<string>(m["Signature"]));
    }
    if (m.find("UseAccelerate") != m.end() && !m["UseAccelerate"].empty()) {
      useAccelerate =
          make_shared<bool>(boost::any_cast<bool>(m["UseAccelerate"]));
    }
  }

  shared_ptr<string> accessKeyId{};
  shared_ptr<string> bucket{};
  shared_ptr<string> encodedPolicy{};
  shared_ptr<string> endpoint{};
  shared_ptr<string> objectKey{};
  shared_ptr<string> requestId{};
  shared_ptr<string> signature{};
  shared_ptr<bool> useAccelerate{};

  ~AuthorizeFileUploadResponse() = default;
};
class Client : Alibabacloud_RPC::Client {
public:
  explicit Client(const shared_ptr<Alibabacloud_RPC::Config> &config);
  AuthorizeFileUploadResponse authorizeFileUploadWithOptions(
      shared_ptr<AuthorizeFileUploadRequest> request,
      shared_ptr<Darabonba_Util::RuntimeOptions> runtime);
  AuthorizeFileUploadResponse
  authorizeFileUpload(shared_ptr<AuthorizeFileUploadRequest> request);
  string getEndpoint(shared_ptr<string> productId, shared_ptr<string> regionId,
                     shared_ptr<string> endpointRule,
                     shared_ptr<string> network, shared_ptr<string> suffix,
                     shared_ptr<map<string, string>> endpointMap,
                     shared_ptr<string> endpoint);
};
} // namespace Alibabacloud_OpenPlatform20191219

#endif
