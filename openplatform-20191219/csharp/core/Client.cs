// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;

using AlibabaCloud.SDK.OpenPlatform.Models;

namespace AlibabaCloud.SDK.OpenPlatform
{
    public class Client 
    {
        private string _endpoint;
        private string _regionId;
        private string _protocol;
        private string _userAgent;
        private int? _readTimeout;
        private int? _connectTimeout;
        private string _httpProxy;
        private string _httpsProxy;
        private string _noProxy;
        private string _socks5Proxy;
        private string _socks5NetWork;
        private int? _maxIdleConns;
        private Aliyun.Credentials.Client _credential;

        public Client(Config config)
        {
            if (AlibabaCloud.TeaUtil.Common.IsUnset(config.ToMap()))
            {
                throw new TeaException(new Dictionary<string, string>
                {
                    {"name", "ParameterMissing"},
                    {"message", "'config' can not be unset"},
                });
            }
            if (AlibabaCloud.TeaUtil.Common.Empty(config.Endpoint))
            {
                throw new TeaException(new Dictionary<string, string>
                {
                    {"name", "ParameterMissing"},
                    {"message", "'config.endpoint' can not be empty"},
                });
            }
            if (AlibabaCloud.TeaUtil.Common.Empty(config.RegionId))
            {
                throw new TeaException(new Dictionary<string, string>
                {
                    {"name", "ParameterMissing"},
                    {"message", "'config.regionId' can not be empty"},
                });
            }
            if (AlibabaCloud.TeaUtil.Common.Empty(config.Type))
            {
                config.Type = "access_key";
            }
            Aliyun.Credentials.Models.Config credentialConfig = new Aliyun.Credentials.Models.Config
            {
                AccessKeyId = config.AccessKeyId,
                Type = config.Type,
                AccessKeySecret = config.AccessKeySecret,
                SecurityToken = config.SecurityToken,
            };
            this._credential = new Aliyun.Credentials.Client(credentialConfig);
            this._endpoint = config.Endpoint;
            this._protocol = config.Protocol;
            this._regionId = config.RegionId;
            this._userAgent = config.UserAgent;
            this._readTimeout = config.ReadTimeout;
            this._connectTimeout = config.ConnectTimeout;
            this._httpProxy = config.HttpProxy;
            this._httpsProxy = config.HttpsProxy;
            this._noProxy = config.NoProxy;
            this._socks5Proxy = config.Socks5Proxy;
            this._socks5NetWork = config.Socks5NetWork;
            this._maxIdleConns = config.MaxIdleConns;
        }

        public Dictionary<string, object> _request(string action, string protocol, string method, Dictionary<string, object> request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            Dictionary<string, object> runtime_ = new Dictionary<string, object>
            {
                {"timeouted", "retry"},
                {"readTimeout", AlibabaCloud.TeaUtil.Common.DefaultNumber(runtime.ReadTimeout, _readTimeout)},
                {"connectTimeout", AlibabaCloud.TeaUtil.Common.DefaultNumber(runtime.ConnectTimeout, _connectTimeout)},
                {"httpProxy", AlibabaCloud.TeaUtil.Common.DefaultString(runtime.HttpProxy, _httpProxy)},
                {"httpsProxy", AlibabaCloud.TeaUtil.Common.DefaultString(runtime.HttpsProxy, _httpsProxy)},
                {"noProxy", AlibabaCloud.TeaUtil.Common.DefaultString(runtime.NoProxy, _noProxy)},
                {"maxIdleConns", AlibabaCloud.TeaUtil.Common.DefaultNumber(runtime.MaxIdleConns, _maxIdleConns)},
                {"retry", new Dictionary<string, object>
                {
                    {"retryable", runtime.Autoretry},
                    {"maxAttempts", AlibabaCloud.TeaUtil.Common.DefaultNumber(runtime.MaxAttempts, 2)},
                }},
                {"backoff", new Dictionary<string, object>
                {
                    {"policy", AlibabaCloud.TeaUtil.Common.DefaultString(runtime.BackoffPolicy, "no")},
                    {"period", AlibabaCloud.TeaUtil.Common.DefaultNumber(runtime.BackoffPeriod, 0)},
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
                    string accessKeyId = GetAccessKeyId();
                    string accessKeySecret = GetAccessKeySecret();
                    request_.Protocol = AlibabaCloud.TeaUtil.Common.DefaultString(_protocol, protocol);
                    request_.Method = method;
                    request_.Pathname = "/";
                    request_.Query = AlibabaCloud.Commons.Common.Query(TeaConverter.merge<object>
                    (
                        new Dictionary<string, object>()
                        {
                            {"Action", action},
                            {"Format", "json"},
                            {"RegionId", _regionId},
                            {"Timestamp", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Version", "2019-12-19"},
                            {"SignatureMethod", "HMAC-SHA1"},
                            {"SignatureVersion", "1.0"},
                            {"SignatureNonce", AlibabaCloud.TeaUtil.Common.GetNonce()},
                            {"AccessKeyId", accessKeyId},
                        },
                        request
                    ));
                    request_.Headers = new Dictionary<string, string>
                    {
                        {"host", AlibabaCloud.Commons.Common.GetHost("OpenPlatform", _regionId, _endpoint)},
                        {"user-agent", GetUserAgent()},
                    };
                    request_.Query["Signature"] = AlibabaCloud.Commons.Common.GetSignature(request_, accessKeySecret);
                    _lastRequest = request_;
                    TeaResponse response_ = TeaCore.DoAction(request_, runtime_);

                    object obj = AlibabaCloud.TeaUtil.Common.ReadAsJSON(response_.Body);
                    Dictionary<string, object> body = AlibabaCloud.TeaUtil.Common.AssertAsMap(obj);
                    if (AlibabaCloud.Commons.Common.HasError(body))
                    {
                        throw new TeaException(new Dictionary<string, object>
                        {
                            {"message", body["Message"]},
                            {"data", body},
                            {"code", body["Code"]},
                        });
                    }
                    return body;
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

        public async Task<Dictionary<string, object>> _requestAsync(string action, string protocol, string method, Dictionary<string, object> request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            Dictionary<string, object> runtime_ = new Dictionary<string, object>
            {
                {"timeouted", "retry"},
                {"readTimeout", AlibabaCloud.TeaUtil.Common.DefaultNumber(runtime.ReadTimeout, _readTimeout)},
                {"connectTimeout", AlibabaCloud.TeaUtil.Common.DefaultNumber(runtime.ConnectTimeout, _connectTimeout)},
                {"httpProxy", AlibabaCloud.TeaUtil.Common.DefaultString(runtime.HttpProxy, _httpProxy)},
                {"httpsProxy", AlibabaCloud.TeaUtil.Common.DefaultString(runtime.HttpsProxy, _httpsProxy)},
                {"noProxy", AlibabaCloud.TeaUtil.Common.DefaultString(runtime.NoProxy, _noProxy)},
                {"maxIdleConns", AlibabaCloud.TeaUtil.Common.DefaultNumber(runtime.MaxIdleConns, _maxIdleConns)},
                {"retry", new Dictionary<string, object>
                {
                    {"retryable", runtime.Autoretry},
                    {"maxAttempts", AlibabaCloud.TeaUtil.Common.DefaultNumber(runtime.MaxAttempts, 2)},
                }},
                {"backoff", new Dictionary<string, object>
                {
                    {"policy", AlibabaCloud.TeaUtil.Common.DefaultString(runtime.BackoffPolicy, "no")},
                    {"period", AlibabaCloud.TeaUtil.Common.DefaultNumber(runtime.BackoffPeriod, 0)},
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
                    string accessKeyId = await GetAccessKeyIdAsync();
                    string accessKeySecret = await GetAccessKeySecretAsync();
                    request_.Protocol = AlibabaCloud.TeaUtil.Common.DefaultString(_protocol, protocol);
                    request_.Method = method;
                    request_.Pathname = "/";
                    request_.Query = AlibabaCloud.Commons.Common.Query(TeaConverter.merge<object>
                    (
                        new Dictionary<string, object>()
                        {
                            {"Action", action},
                            {"Format", "json"},
                            {"RegionId", _regionId},
                            {"Timestamp", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Version", "2019-12-19"},
                            {"SignatureMethod", "HMAC-SHA1"},
                            {"SignatureVersion", "1.0"},
                            {"SignatureNonce", AlibabaCloud.TeaUtil.Common.GetNonce()},
                            {"AccessKeyId", accessKeyId},
                        },
                        request
                    ));
                    request_.Headers = new Dictionary<string, string>
                    {
                        {"host", AlibabaCloud.Commons.Common.GetHost("OpenPlatform", _regionId, _endpoint)},
                        {"user-agent", GetUserAgent()},
                    };
                    request_.Query["Signature"] = AlibabaCloud.Commons.Common.GetSignature(request_, accessKeySecret);
                    _lastRequest = request_;
                    TeaResponse response_ = await TeaCore.DoActionAsync(request_, runtime_);

                    object obj = AlibabaCloud.TeaUtil.Common.ReadAsJSON(response_.Body);
                    Dictionary<string, object> body = AlibabaCloud.TeaUtil.Common.AssertAsMap(obj);
                    if (AlibabaCloud.Commons.Common.HasError(body))
                    {
                        throw new TeaException(new Dictionary<string, object>
                        {
                            {"message", body["Message"]},
                            {"data", body},
                            {"code", body["Code"]},
                        });
                    }
                    return body;
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

        public AuthorizeFileUploadResponse AuthorizeFileUpload(AuthorizeFileUploadRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<AuthorizeFileUploadResponse>(_request("AuthorizeFileUpload", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public async Task<AuthorizeFileUploadResponse> AuthorizeFileUploadAsync(AuthorizeFileUploadRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<AuthorizeFileUploadResponse>(await _requestAsync("AuthorizeFileUpload", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public string GetUserAgent()
        {
            string userAgent = AlibabaCloud.TeaUtil.Common.GetUserAgent(_userAgent);
            return userAgent;
        }

        public string GetAccessKeyId()
        {
            if (AlibabaCloud.TeaUtil.Common.IsUnset(_credential))
            {
                return "";
            }
            string accessKeyId = this._credential.GetAccessKeyId();
            return accessKeyId;
        }

        public async Task<string> GetAccessKeyIdAsync()
        {
            if (AlibabaCloud.TeaUtil.Common.IsUnset(_credential))
            {
                return "";
            }
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            return accessKeyId;
        }

        public string GetAccessKeySecret()
        {
            if (AlibabaCloud.TeaUtil.Common.IsUnset(_credential))
            {
                return "";
            }
            string secret = this._credential.GetAccessKeySecret();
            return secret;
        }

        public async Task<string> GetAccessKeySecretAsync()
        {
            if (AlibabaCloud.TeaUtil.Common.IsUnset(_credential))
            {
                return "";
            }
            string secret = await this._credential.GetAccessKeySecretAsync();
            return secret;
        }

    }
}
