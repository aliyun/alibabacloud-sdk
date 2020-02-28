// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imageaudit;

import com.aliyun.tea.*;
import com.aliyun.imageaudit.models.*;
import com.aliyuncs.pop.RPCClient;

public class Client extends RPCClient {
    public Client(Config config) throws Exception {
        super(TeaModel.buildMap(config));
    }

    public java.util.Map<String, Object> _request(String action, String protocol, String method, java.util.Map<String, Object> request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        java.util.Map<String, Object> runtime_ = TeaConverter.buildMap(
            new TeaPair("timeouted", "retry"),
            new TeaPair("readTimeout", com.aliyun.common.Common.defaultNumber(runtime.readTimeout, _readTimeout)),
            new TeaPair("connectTimeout", com.aliyun.common.Common.defaultNumber(runtime.connectTimeout, _connectTimeout)),
            new TeaPair("httpProxy", com.aliyun.common.Common._default(runtime.httpProxy, _httpProxy)),
            new TeaPair("httpsProxy", com.aliyun.common.Common._default(runtime.httpsProxy, _httpsProxy)),
            new TeaPair("noProxy", com.aliyun.common.Common._default(runtime.noProxy, _noProxy)),
            new TeaPair("maxIdleConns", com.aliyun.common.Common.defaultNumber(runtime.maxIdleConns, _maxIdleConns)),
            new TeaPair("retry", TeaConverter.buildMap(
                new TeaPair("retryable", runtime.autoretry),
                new TeaPair("maxAttempts", com.aliyun.common.Common.defaultNumber(runtime.maxAttempts, 3))
            )),
            new TeaPair("backoff", TeaConverter.buildMap(
                new TeaPair("policy", com.aliyun.common.Common._default(runtime.backoffPolicy, "no")),
                new TeaPair("period", com.aliyun.common.Common.defaultNumber(runtime.backoffPeriod, 1))
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
                request_.protocol = com.aliyun.common.Common._default(_protocol, protocol);
                request_.method = method;
                request_.pathname = "/";
                request_.query = com.aliyun.common.Common.query(TeaConverter.merge(Object.class,
                    TeaConverter.buildMap(
                        new TeaPair("Action", action),
                        new TeaPair("Format", "json"),
                        new TeaPair("RegionId", _regionId),
                        new TeaPair("Timestamp", com.aliyun.common.Common.getTimestamp()),
                        new TeaPair("Date", com.aliyun.common.Common.getTimestamp()),
                        new TeaPair("Version", "2019-12-30"),
                        new TeaPair("SignatureMethod", "HMAC-SHA1"),
                        new TeaPair("SignatureVersion", "1.0"),
                        new TeaPair("SignatureNonce", com.aliyun.common.Common.getNonce()),
                        new TeaPair("AccessKeyId", _getAccessKeyId())
                    ),
                    request
                ));
                request_.headers = TeaConverter.buildMap(
                    new TeaPair("host", com.aliyun.common.Common.getHost("imageaudit", _regionId, _endpoint)),
                    new TeaPair("user-agent", com.aliyun.common.Common.getUserAgent(_userAgent))
                );
                request_.query.put("Signature", com.aliyun.common.Common.getSignature(request_, _getAccessKeySecret()));
                _lastRequest = request_;
                TeaResponse response_ = Tea.doAction(request_, runtime_);

                java.util.Map<String, Object> body = com.aliyun.common.Common.json(response_);
                if (com.aliyun.common.Common.hasError(body)) {
                    throw new TeaException(TeaConverter.buildMap(
                        new TeaPair("message", body.get("Message")),
                        new TeaPair("data", body),
                        new TeaPair("code", body.get("Code"))
                    ));
                }

                return body;
            } catch (Exception e) {
                if (Tea.isRetryable(e)) {
                    continue;
                }
                throw e;
            }
        }

        throw new TeaUnretryableException(_lastRequest);
    }

    public ScanTextResponse scanText(ScanTextRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("ScanText", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new ScanTextResponse());
    }

    public ScanImageResponse scanImage(ScanImageRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("ScanImage", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new ScanImageResponse());
    }
}
