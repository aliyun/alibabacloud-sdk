// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;

using AlibabaCloud.SDK.ECI.Models;

namespace AlibabaCloud.SDK.ECI
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

        public Dictionary<string, object> _request(string action, string protocol, string method, string authType, Dictionary<string, object> query, Dictionary<string, object> body, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
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
                            {"Version", "2018-08-08"},
                            {"SignatureNonce", AlibabaCloud.TeaUtil.Common.GetNonce()},
                        },
                        query
                    ));
                    if (!AlibabaCloud.TeaUtil.Common.IsUnset(body))
                    {
                        Dictionary<string, object> tmp = AlibabaCloud.TeaUtil.Common.AnyifyMapValue(AlibabaCloud.Commons.Common.Query(body));
                        request_.Body = TeaCore.BytesReadable(AlibabaCloud.TeaUtil.Common.ToFormString(tmp));
                    }
                    request_.Headers = new Dictionary<string, string>
                    {
                        {"host", AlibabaCloud.Commons.Common.GetHost("Eci", _regionId, _endpoint)},
                        {"user-agent", GetUserAgent()},
                    };
                    if (!AlibabaCloud.TeaUtil.Common.EqualString(authType, "Anonymous"))
                    {
                        string accessKeyId = GetAccessKeyId();
                        string accessKeySecret = GetAccessKeySecret();
                        request_.Query["SignatureMethod"] = "HMAC-SHA1";
                        request_.Query["SignatureVersion"] = "1.0";
                        request_.Query["AccessKeyId"] = accessKeyId;
                        request_.Query["Signature"] = AlibabaCloud.Commons.Common.GetSignature(request_, accessKeySecret);
                    }
                    _lastRequest = request_;
                    TeaResponse response_ = TeaCore.DoAction(request_, runtime_);

                    object obj = AlibabaCloud.TeaUtil.Common.ReadAsJSON(response_.Body);
                    Dictionary<string, object> res = AlibabaCloud.TeaUtil.Common.AssertAsMap(obj);
                    if (AlibabaCloud.Commons.Common.HasError(res))
                    {
                        throw new TeaException(new Dictionary<string, object>
                        {
                            {"message", res["Message"]},
                            {"data", res},
                            {"code", res["Code"]},
                        });
                    }
                    return res;
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

        public async Task<Dictionary<string, object>> _requestAsync(string action, string protocol, string method, string authType, Dictionary<string, object> query, Dictionary<string, object> body, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
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
                            {"Version", "2018-08-08"},
                            {"SignatureNonce", AlibabaCloud.TeaUtil.Common.GetNonce()},
                        },
                        query
                    ));
                    if (!AlibabaCloud.TeaUtil.Common.IsUnset(body))
                    {
                        Dictionary<string, object> tmp = AlibabaCloud.TeaUtil.Common.AnyifyMapValue(AlibabaCloud.Commons.Common.Query(body));
                        request_.Body = TeaCore.BytesReadable(AlibabaCloud.TeaUtil.Common.ToFormString(tmp));
                    }
                    request_.Headers = new Dictionary<string, string>
                    {
                        {"host", AlibabaCloud.Commons.Common.GetHost("Eci", _regionId, _endpoint)},
                        {"user-agent", GetUserAgent()},
                    };
                    if (!AlibabaCloud.TeaUtil.Common.EqualString(authType, "Anonymous"))
                    {
                        string accessKeyId = await GetAccessKeyIdAsync();
                        string accessKeySecret = await GetAccessKeySecretAsync();
                        request_.Query["SignatureMethod"] = "HMAC-SHA1";
                        request_.Query["SignatureVersion"] = "1.0";
                        request_.Query["AccessKeyId"] = accessKeyId;
                        request_.Query["Signature"] = AlibabaCloud.Commons.Common.GetSignature(request_, accessKeySecret);
                    }
                    _lastRequest = request_;
                    TeaResponse response_ = await TeaCore.DoActionAsync(request_, runtime_);

                    object obj = AlibabaCloud.TeaUtil.Common.ReadAsJSON(response_.Body);
                    Dictionary<string, object> res = AlibabaCloud.TeaUtil.Common.AssertAsMap(obj);
                    if (AlibabaCloud.Commons.Common.HasError(res))
                    {
                        throw new TeaException(new Dictionary<string, object>
                        {
                            {"message", res["Message"]},
                            {"data", res},
                            {"code", res["Code"]},
                        });
                    }
                    return res;
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

        public DescribeRegionsResponse DescribeRegions(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DescribeRegionsResponse>(_request("DescribeRegions", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeRegionsResponse> DescribeRegionsAsync(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DescribeRegionsResponse>(await _requestAsync("DescribeRegions", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public DescribeImageCachesResponse DescribeImageCaches(DescribeImageCachesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DescribeImageCachesResponse>(_request("DescribeImageCaches", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeImageCachesResponse> DescribeImageCachesAsync(DescribeImageCachesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DescribeImageCachesResponse>(await _requestAsync("DescribeImageCaches", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public DeleteImageCacheResponse DeleteImageCache(DeleteImageCacheRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DeleteImageCacheResponse>(_request("DeleteImageCache", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DeleteImageCacheResponse> DeleteImageCacheAsync(DeleteImageCacheRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DeleteImageCacheResponse>(await _requestAsync("DeleteImageCache", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public CreateImageCacheResponse CreateImageCache(CreateImageCacheRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<CreateImageCacheResponse>(_request("CreateImageCache", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CreateImageCacheResponse> CreateImageCacheAsync(CreateImageCacheRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<CreateImageCacheResponse>(await _requestAsync("CreateImageCache", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public DescribeMultiContainerGroupMetricResponse DescribeMultiContainerGroupMetric(DescribeMultiContainerGroupMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DescribeMultiContainerGroupMetricResponse>(_request("DescribeMultiContainerGroupMetric", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeMultiContainerGroupMetricResponse> DescribeMultiContainerGroupMetricAsync(DescribeMultiContainerGroupMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DescribeMultiContainerGroupMetricResponse>(await _requestAsync("DescribeMultiContainerGroupMetric", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public DescribeContainerGroupMetricResponse DescribeContainerGroupMetric(DescribeContainerGroupMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DescribeContainerGroupMetricResponse>(_request("DescribeContainerGroupMetric", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeContainerGroupMetricResponse> DescribeContainerGroupMetricAsync(DescribeContainerGroupMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DescribeContainerGroupMetricResponse>(await _requestAsync("DescribeContainerGroupMetric", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public UpdateContainerGroupByTemplateResponse UpdateContainerGroupByTemplate(UpdateContainerGroupByTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<UpdateContainerGroupByTemplateResponse>(_request("UpdateContainerGroupByTemplate", "HTTPS", "POST", "AK", request.ToMap(), null, runtime));
        }

        public async Task<UpdateContainerGroupByTemplateResponse> UpdateContainerGroupByTemplateAsync(UpdateContainerGroupByTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<UpdateContainerGroupByTemplateResponse>(await _requestAsync("UpdateContainerGroupByTemplate", "HTTPS", "POST", "AK", request.ToMap(), null, runtime));
        }

        public CreateContainerGroupFromTemplateResponse CreateContainerGroupFromTemplate(CreateContainerGroupFromTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<CreateContainerGroupFromTemplateResponse>(_request("CreateContainerGroupFromTemplate", "HTTPS", "POST", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CreateContainerGroupFromTemplateResponse> CreateContainerGroupFromTemplateAsync(CreateContainerGroupFromTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<CreateContainerGroupFromTemplateResponse>(await _requestAsync("CreateContainerGroupFromTemplate", "HTTPS", "POST", "AK", request.ToMap(), null, runtime));
        }

        public ExportContainerGroupTemplateResponse ExportContainerGroupTemplate(ExportContainerGroupTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<ExportContainerGroupTemplateResponse>(_request("ExportContainerGroupTemplate", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ExportContainerGroupTemplateResponse> ExportContainerGroupTemplateAsync(ExportContainerGroupTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<ExportContainerGroupTemplateResponse>(await _requestAsync("ExportContainerGroupTemplate", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public RestartContainerGroupResponse RestartContainerGroup(RestartContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<RestartContainerGroupResponse>(_request("RestartContainerGroup", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<RestartContainerGroupResponse> RestartContainerGroupAsync(RestartContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<RestartContainerGroupResponse>(await _requestAsync("RestartContainerGroup", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public UpdateContainerGroupResponse UpdateContainerGroup(UpdateContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<UpdateContainerGroupResponse>(_request("UpdateContainerGroup", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<UpdateContainerGroupResponse> UpdateContainerGroupAsync(UpdateContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<UpdateContainerGroupResponse>(await _requestAsync("UpdateContainerGroup", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public DescribeContainerGroupPriceResponse DescribeContainerGroupPrice(DescribeContainerGroupPriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DescribeContainerGroupPriceResponse>(_request("DescribeContainerGroupPrice", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeContainerGroupPriceResponse> DescribeContainerGroupPriceAsync(DescribeContainerGroupPriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DescribeContainerGroupPriceResponse>(await _requestAsync("DescribeContainerGroupPrice", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public ExecContainerCommandResponse ExecContainerCommand(ExecContainerCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<ExecContainerCommandResponse>(_request("ExecContainerCommand", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ExecContainerCommandResponse> ExecContainerCommandAsync(ExecContainerCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<ExecContainerCommandResponse>(await _requestAsync("ExecContainerCommand", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public DescribeContainerLogResponse DescribeContainerLog(DescribeContainerLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DescribeContainerLogResponse>(_request("DescribeContainerLog", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeContainerLogResponse> DescribeContainerLogAsync(DescribeContainerLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DescribeContainerLogResponse>(await _requestAsync("DescribeContainerLog", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public CreateContainerGroupResponse CreateContainerGroup(CreateContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<CreateContainerGroupResponse>(_request("CreateContainerGroup", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CreateContainerGroupResponse> CreateContainerGroupAsync(CreateContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<CreateContainerGroupResponse>(await _requestAsync("CreateContainerGroup", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public DescribeContainerGroupsResponse DescribeContainerGroups(DescribeContainerGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DescribeContainerGroupsResponse>(_request("DescribeContainerGroups", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeContainerGroupsResponse> DescribeContainerGroupsAsync(DescribeContainerGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DescribeContainerGroupsResponse>(await _requestAsync("DescribeContainerGroups", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public DeleteContainerGroupResponse DeleteContainerGroup(DeleteContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DeleteContainerGroupResponse>(_request("DeleteContainerGroup", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DeleteContainerGroupResponse> DeleteContainerGroupAsync(DeleteContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DeleteContainerGroupResponse>(await _requestAsync("DeleteContainerGroup", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
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
