// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.eci;

import com.aliyun.tea.*;
import com.aliyun.eci.models.*;

public class Client {

    public String _endpoint;
    public String _regionId;
    public String _protocol;
    public String _userAgent;
    public Integer _readTimeout;
    public Integer _connectTimeout;
    public String _httpProxy;
    public String _httpsProxy;
    public String _noProxy;
    public String _socks5Proxy;
    public String _socks5NetWork;
    public Integer _maxIdleConns;
    public com.aliyun.credentials.Client _credential;
    public Client(Config config) throws Exception {
        if (com.aliyun.teautil.Common.isUnset(TeaModel.buildMap(config))) {
            throw new TeaException(TeaConverter.buildMap(
                new TeaPair("name", "ParameterMissing"),
                new TeaPair("message", "'config' can not be unset")
            ));
        }

        if (com.aliyun.teautil.Common.empty(config.endpoint)) {
            throw new TeaException(TeaConverter.buildMap(
                new TeaPair("name", "ParameterMissing"),
                new TeaPair("message", "'config.endpoint' can not be empty")
            ));
        }

        if (com.aliyun.teautil.Common.empty(config.regionId)) {
            throw new TeaException(TeaConverter.buildMap(
                new TeaPair("name", "ParameterMissing"),
                new TeaPair("message", "'config.regionId' can not be empty")
            ));
        }

        if (com.aliyun.teautil.Common.empty(config.type)) {
            config.type = "access_key";
        }

        com.aliyun.credentials.models.Config credentialConfig = com.aliyun.credentials.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", config.accessKeyId),
            new TeaPair("type", config.type),
            new TeaPair("accessKeySecret", config.accessKeySecret),
            new TeaPair("securityToken", config.securityToken)
        ));
        this._credential = new com.aliyun.credentials.Client(credentialConfig);
        this._endpoint = config.endpoint;
        this._protocol = config.protocol;
        this._regionId = config.regionId;
        this._userAgent = config.userAgent;
        this._readTimeout = config.readTimeout;
        this._connectTimeout = config.connectTimeout;
        this._httpProxy = config.httpProxy;
        this._httpsProxy = config.httpsProxy;
        this._noProxy = config.noProxy;
        this._socks5Proxy = config.socks5Proxy;
        this._socks5NetWork = config.socks5NetWork;
        this._maxIdleConns = config.maxIdleConns;
    }

    public java.util.Map<String, Object> _request(String action, String protocol, String method, String authType, java.util.Map<String, Object> query, java.util.Map<String, Object> body, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        java.util.Map<String, Object> runtime_ = TeaConverter.buildMap(
            new TeaPair("timeouted", "retry"),
            new TeaPair("readTimeout", com.aliyun.teautil.Common.defaultNumber(runtime.readTimeout, _readTimeout)),
            new TeaPair("connectTimeout", com.aliyun.teautil.Common.defaultNumber(runtime.connectTimeout, _connectTimeout)),
            new TeaPair("httpProxy", com.aliyun.teautil.Common.defaultString(runtime.httpProxy, _httpProxy)),
            new TeaPair("httpsProxy", com.aliyun.teautil.Common.defaultString(runtime.httpsProxy, _httpsProxy)),
            new TeaPair("noProxy", com.aliyun.teautil.Common.defaultString(runtime.noProxy, _noProxy)),
            new TeaPair("maxIdleConns", com.aliyun.teautil.Common.defaultNumber(runtime.maxIdleConns, _maxIdleConns)),
            new TeaPair("retry", TeaConverter.buildMap(
                new TeaPair("retryable", runtime.autoretry),
                new TeaPair("maxAttempts", com.aliyun.teautil.Common.defaultNumber(runtime.maxAttempts, 2))
            )),
            new TeaPair("backoff", TeaConverter.buildMap(
                new TeaPair("policy", com.aliyun.teautil.Common.defaultString(runtime.backoffPolicy, "no")),
                new TeaPair("period", com.aliyun.teautil.Common.defaultNumber(runtime.backoffPeriod, 0))
            )),
            new TeaPair("ignoreSSL", runtime.ignoreSSL)
        );

        TeaRequest _lastRequest = null;
        long _now = System.currentTimeMillis();
        int _retryTimes = 0;
        while (Tea.allowRetry((java.util.Map<String, Object>) runtime_.get("retry"), _retryTimes, _now)) {
            if (_retryTimes > 0) {
                int backoffTime = Tea.getBackoffTime(runtime_.get("backoff"), _retryTimes);
                if (backoffTime > 0) {
                    Tea.sleep(backoffTime);
                }
            }
            _retryTimes = _retryTimes + 1;
            try {
                TeaRequest request_ = new TeaRequest();
                request_.protocol = com.aliyun.teautil.Common.defaultString(_protocol, protocol);
                request_.method = method;
                request_.pathname = "/";
                request_.query = com.aliyun.common.Common.query(TeaConverter.merge(Object.class,
                    TeaConverter.buildMap(
                        new TeaPair("Action", action),
                        new TeaPair("Format", "json"),
                        new TeaPair("RegionId", _regionId),
                        new TeaPair("Timestamp", com.aliyun.common.Common.getTimestamp()),
                        new TeaPair("Version", "2018-08-08"),
                        new TeaPair("SignatureNonce", com.aliyun.teautil.Common.getNonce())
                    ),
                    query
                ));
                if (!com.aliyun.teautil.Common.isUnset(body)) {
                    java.util.Map<String, Object> tmp = com.aliyun.teautil.Common.anyifyMapValue(com.aliyun.common.Common.query(body));
                    request_.body = Tea.toReadable(com.aliyun.teautil.Common.toFormString(tmp));
                }

                request_.headers = TeaConverter.buildMap(
                    new TeaPair("host", com.aliyun.common.Common.getHost("Eci", _regionId, _endpoint)),
                    new TeaPair("user-agent", this.getUserAgent())
                );
                if (!com.aliyun.teautil.Common.equalString(authType, "Anonymous")) {
                    String accessKeyId = this.getAccessKeyId();
                    String accessKeySecret = this.getAccessKeySecret();
                    request_.query.put("SignatureMethod", "HMAC-SHA1");
                    request_.query.put("SignatureVersion", "1.0");
                    request_.query.put("AccessKeyId", accessKeyId);
                    request_.query.put("Signature", com.aliyun.common.Common.getSignature(request_, accessKeySecret));
                }

                _lastRequest = request_;
                TeaResponse response_ = Tea.doAction(request_, runtime_);

                Object obj = com.aliyun.teautil.Common.readAsJSON(response_.body);
                java.util.Map<String, Object> res = com.aliyun.teautil.Common.assertAsMap(obj);
                if (com.aliyun.common.Common.hasError(res)) {
                    throw new TeaException(TeaConverter.buildMap(
                        new TeaPair("message", res.get("Message")),
                        new TeaPair("data", res),
                        new TeaPair("code", res.get("Code"))
                    ));
                }

                return res;
            } catch (Exception e) {
                if (Tea.isRetryable(e)) {
                    continue;
                }
                throw e;
            }
        }

        throw new TeaUnretryableException(_lastRequest);
    }

    public DescribeRegionsResponse describeRegions(DescribeRegionsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("DescribeRegions", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new DescribeRegionsResponse());
    }

    public DescribeImageCachesResponse describeImageCaches(DescribeImageCachesRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("DescribeImageCaches", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new DescribeImageCachesResponse());
    }

    public DeleteImageCacheResponse deleteImageCache(DeleteImageCacheRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("DeleteImageCache", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new DeleteImageCacheResponse());
    }

    public CreateImageCacheResponse createImageCache(CreateImageCacheRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("CreateImageCache", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new CreateImageCacheResponse());
    }

    public DescribeMultiContainerGroupMetricResponse describeMultiContainerGroupMetric(DescribeMultiContainerGroupMetricRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("DescribeMultiContainerGroupMetric", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new DescribeMultiContainerGroupMetricResponse());
    }

    public DescribeContainerGroupMetricResponse describeContainerGroupMetric(DescribeContainerGroupMetricRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("DescribeContainerGroupMetric", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new DescribeContainerGroupMetricResponse());
    }

    public UpdateContainerGroupByTemplateResponse updateContainerGroupByTemplate(UpdateContainerGroupByTemplateRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("UpdateContainerGroupByTemplate", "HTTPS", "POST", "AK", TeaModel.buildMap(request), null, runtime), new UpdateContainerGroupByTemplateResponse());
    }

    public CreateContainerGroupFromTemplateResponse createContainerGroupFromTemplate(CreateContainerGroupFromTemplateRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("CreateContainerGroupFromTemplate", "HTTPS", "POST", "AK", TeaModel.buildMap(request), null, runtime), new CreateContainerGroupFromTemplateResponse());
    }

    public ExportContainerGroupTemplateResponse exportContainerGroupTemplate(ExportContainerGroupTemplateRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("ExportContainerGroupTemplate", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new ExportContainerGroupTemplateResponse());
    }

    public RestartContainerGroupResponse restartContainerGroup(RestartContainerGroupRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("RestartContainerGroup", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new RestartContainerGroupResponse());
    }

    public UpdateContainerGroupResponse updateContainerGroup(UpdateContainerGroupRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("UpdateContainerGroup", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new UpdateContainerGroupResponse());
    }

    public DescribeContainerGroupPriceResponse describeContainerGroupPrice(DescribeContainerGroupPriceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("DescribeContainerGroupPrice", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new DescribeContainerGroupPriceResponse());
    }

    public ExecContainerCommandResponse execContainerCommand(ExecContainerCommandRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("ExecContainerCommand", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new ExecContainerCommandResponse());
    }

    public DescribeContainerLogResponse describeContainerLog(DescribeContainerLogRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("DescribeContainerLog", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new DescribeContainerLogResponse());
    }

    public CreateContainerGroupResponse createContainerGroup(CreateContainerGroupRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("CreateContainerGroup", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new CreateContainerGroupResponse());
    }

    public DescribeContainerGroupsResponse describeContainerGroups(DescribeContainerGroupsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("DescribeContainerGroups", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new DescribeContainerGroupsResponse());
    }

    public DeleteContainerGroupResponse deleteContainerGroup(DeleteContainerGroupRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        return TeaModel.toModel(this._request("DeleteContainerGroup", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new DeleteContainerGroupResponse());
    }

    public String getUserAgent() throws Exception {
        String userAgent = com.aliyun.teautil.Common.getUserAgent(_userAgent);
        return userAgent;
    }

    public String getAccessKeyId() throws Exception {
        if (com.aliyun.teautil.Common.isUnset(_credential)) {
            return "";
        }

        String accessKeyId = _credential.getAccessKeyId();
        return accessKeyId;
    }

    public String getAccessKeySecret() throws Exception {
        if (com.aliyun.teautil.Common.isUnset(_credential)) {
            return "";
        }

        String secret = _credential.getAccessKeySecret();
        return secret;
    }
}
