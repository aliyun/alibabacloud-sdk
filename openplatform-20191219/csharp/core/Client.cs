// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;

using AlibabaCloud.RPCClient;
using Aliyun.SDK.Models;

namespace Aliyun.SDK
{
    public class Client : RPCClient
    {

        public Client(Config config): base(config.ToMap())
        { }

        public AuthorizeFileUploadResponse AuthorizeFileUpload(AuthorizeFileUploadRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            request.Validate();
            Dictionary<string, object> runtime_ = new Dictionary<string, object>()
            {
                {"timeouted", "retry"},
                {"readTimeout", AlibabaCloud.Common.DefaultNumber(runtime.ReadTimeout, _readTimeout)},
                {"connectTimeout", AlibabaCloud.Common.DefaultNumber(runtime.ConnectTimeout, _connectTimeout)},
                {"httpProxy", AlibabaCloud.Common.Default(runtime.HttpProxy, _httpProxy)},
                {"httpsProxy", AlibabaCloud.Common.Default(runtime.HttpsProxy, _httpsProxy)},
                {"noProxy", AlibabaCloud.Common.Default(runtime.NoProxy, _noProxy)},
                {"maxIdleConns", AlibabaCloud.Common.DefaultNumber(runtime.MaxIdleConns, _maxIdleConns)},
                {"retry", new Dictionary<string, object>()
                {
                    {"retryable", runtime.Autoretry},
                    {"maxAttempts", AlibabaCloud.Common.DefaultNumber(runtime.MaxAttempts, 3)},
                }},
                {"backoff", new Dictionary<string, object>()
                {
                    {"policy", AlibabaCloud.Common.Default(runtime.BackoffPolicy, "no")},
                    {"period", AlibabaCloud.Common.DefaultNumber(runtime.BackoffPeriod, 1)},
                }},
                {"ignoreSSL", runtime.IgnoreSSL},
            };

            TeaRequest _lastRequest = null;
            Exception _lastException = null;
            long _now = System.DateTime.Now.Millisecond;
            int _retryTimes = 0;
            while (TeaCore.AllowRetry((IDictionary) runtime_["retry"], _retryTimes, _now))
            {
                if (_retryTimes > 0)
                {
                    int backoffTime = TeaCore.GetBackoffTime((IDictionary)runtime_["backoff"], _retryTimes);
                    if (backoffTime > 0)
                    {
                        TeaCore.Sleep(backoffTime);
                    }
                }
                _retryTimes = _retryTimes + 1;
                try
                {
                    TeaRequest request_ = new TeaRequest();
                    request_.Protocol = _protocol;
                    request_.Method = "GET";
                    request_.Pathname = "/";
                    request_.Query = AlibabaCloud.Common.Query(TeaConverter.merge<object>
                    (
                        new Dictionary<string, object>()
                        {
                            {"Action", "AuthorizeFileUpload"},
                            {"Format", "json"},
                            {"RegionId", _regionId},
                            {"Timestamp", AlibabaCloud.Common.GetTimestamp()},
                            {"Version", "2019-12-19"},
                            {"SignatureMethod", "HMAC-SHA1"},
                            {"SignatureVersion", "1.0"},
                            {"SignatureNonce", AlibabaCloud.Common.GetNonce()},
                            {"AccessKeyId", _getAccessKeyId()},
                        },
                        request
                    ));
                    request_.Headers = new Dictionary<string, string>()
                    {
                        {"host", AlibabaCloud.Common.GetHost("OpenPlatform", _regionId, _endpoint)},
                        {"user-agent", AlibabaCloud.Common.GetUserAgent(_userAgent)},
                    };
                    request_.Query["Signature"] = AlibabaCloud.Common.GetSignature(request_, _getAccessKeySecret());
                    _lastRequest = request_;
                    TeaResponse response_ = TeaCore.DoAction(request_, runtime_);

                    Dictionary<string, object> body = _json(response_);
                    if (_hasError(body))
                    {
                        throw new TeaException(new Dictionary<string, object>()
                        {
                            {"message", body["Message"]},
                            {"data", body},
                            {"code", body["Code"]},
                        });
                    }
                    return TeaModel.ToObject<AuthorizeFileUploadResponse>(TeaConverter.merge<object>
                    (
                        body
                    ));
                }
                catch (Exception e)
                {
                    if (TeaCore.IsRetryable(e))
                    {
                        _lastException = e;
                        continue;
                    }
                    throw e;
                }
            }

            throw new TeaUnretryableException(_lastRequest, _lastException);
        }

        public async Task<AuthorizeFileUploadResponse> AuthorizeFileUploadAsync(AuthorizeFileUploadRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            request.Validate();
            Dictionary<string, object> runtime_ = new Dictionary<string, object>()
            {
                {"timeouted", "retry"},
                {"readTimeout", AlibabaCloud.Common.DefaultNumber(runtime.ReadTimeout, _readTimeout)},
                {"connectTimeout", AlibabaCloud.Common.DefaultNumber(runtime.ConnectTimeout, _connectTimeout)},
                {"httpProxy", AlibabaCloud.Common.Default(runtime.HttpProxy, _httpProxy)},
                {"httpsProxy", AlibabaCloud.Common.Default(runtime.HttpsProxy, _httpsProxy)},
                {"noProxy", AlibabaCloud.Common.Default(runtime.NoProxy, _noProxy)},
                {"maxIdleConns", AlibabaCloud.Common.DefaultNumber(runtime.MaxIdleConns, _maxIdleConns)},
                {"retry", new Dictionary<string, object>()
                {
                    {"retryable", runtime.Autoretry},
                    {"maxAttempts", AlibabaCloud.Common.DefaultNumber(runtime.MaxAttempts, 3)},
                }},
                {"backoff", new Dictionary<string, object>()
                {
                    {"policy", AlibabaCloud.Common.Default(runtime.BackoffPolicy, "no")},
                    {"period", AlibabaCloud.Common.DefaultNumber(runtime.BackoffPeriod, 1)},
                }},
                {"ignoreSSL", runtime.IgnoreSSL},
            };

            TeaRequest _lastRequest = null;
            Exception _lastException = null;
            long _now = System.DateTime.Now.Millisecond;
            int _retryTimes = 0;
            while (TeaCore.AllowRetry((IDictionary) runtime_["retry"], _retryTimes, _now))
            {
                if (_retryTimes > 0)
                {
                    int backoffTime = TeaCore.GetBackoffTime((IDictionary)runtime_["backoff"], _retryTimes);
                    if (backoffTime > 0)
                    {
                        TeaCore.Sleep(backoffTime);
                    }
                }
                _retryTimes = _retryTimes + 1;
                try
                {
                    TeaRequest request_ = new TeaRequest();
                    request_.Protocol = _protocol;
                    request_.Method = "GET";
                    request_.Pathname = "/";
                    request_.Query = AlibabaCloud.Common.Query(TeaConverter.merge<object>
                    (
                        new Dictionary<string, object>()
                        {
                            {"Action", "AuthorizeFileUpload"},
                            {"Format", "json"},
                            {"RegionId", _regionId},
                            {"Timestamp", AlibabaCloud.Common.GetTimestamp()},
                            {"Version", "2019-12-19"},
                            {"SignatureMethod", "HMAC-SHA1"},
                            {"SignatureVersion", "1.0"},
                            {"SignatureNonce", AlibabaCloud.Common.GetNonce()},
                            {"AccessKeyId", _getAccessKeyId()},
                        },
                        request
                    ));
                    request_.Headers = new Dictionary<string, string>()
                    {
                        {"host", AlibabaCloud.Common.GetHost("OpenPlatform", _regionId, _endpoint)},
                        {"user-agent", AlibabaCloud.Common.GetUserAgent(_userAgent)},
                    };
                    request_.Query["Signature"] = AlibabaCloud.Common.GetSignature(request_, _getAccessKeySecret());
                    _lastRequest = request_;
                    TeaResponse response_ = await TeaCore.DoActionAsync(request_, runtime_);

                    Dictionary<string, object> body = _json(response_);
                    if (_hasError(body))
                    {
                        throw new TeaException(new Dictionary<string, object>()
                        {
                            {"message", body["Message"]},
                            {"data", body},
                            {"code", body["Code"]},
                        });
                    }
                    return TeaModel.ToObject<AuthorizeFileUploadResponse>(TeaConverter.merge<object>
                    (
                        body
                    ));
                }
                catch (Exception e)
                {
                    if (TeaCore.IsRetryable(e))
                    {
                        _lastException = e;
                        continue;
                    }
                    throw e;
                }
            }

            throw new TeaUnretryableException(_lastRequest, _lastException);
        }

    }
}
