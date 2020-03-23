// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;

using AlibabaCloud.Videoenhan.Models;

namespace AlibabaCloud.Videoenhan
{
    public class Client 
    {
        private string _endpoint;
        private string _regionId;
        private string _protocol;
        private string _userAgent;
        private string _endpointType;
        private int? _readTimeout;
        private int? _connectTimeout;
        private string _httpProxy;
        private string _httpsProxy;
        private string _socks5Proxy;
        private string _socks5NetWork;
        private string _noProxy;
        private int? _maxIdleConns;
        private string _openPlatformEndpoint;
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
            if (AlibabaCloud.TeaUtil.Common.Empty(config.RegionId))
            {
                throw new TeaException(new Dictionary<string, string>
                {
                    {"name", "ParameterMissing"},
                    {"message", "'config.regionId' can not be empty"},
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
            this._endpointType = config.EndpointType;
            this._openPlatformEndpoint = config.OpenPlatformEndpoint;
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
                    {"maxAttempts", AlibabaCloud.TeaUtil.Common.DefaultNumber(runtime.MaxAttempts, 3)},
                }},
                {"backoff", new Dictionary<string, object>
                {
                    {"policy", AlibabaCloud.TeaUtil.Common.DefaultString(runtime.BackoffPolicy, "no")},
                    {"period", AlibabaCloud.TeaUtil.Common.DefaultNumber(runtime.BackoffPeriod, 1)},
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
                            {"Version", "2020-03-20"},
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
                        {"host", AlibabaCloud.Commons.Common.GetHost("videoenhan", _regionId, _endpoint)},
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
                    if (AlibabaCloud.TeaUtil.Common.Is4xx(response_.StatusCode) || AlibabaCloud.TeaUtil.Common.Is5xx(response_.StatusCode))
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
                    {"maxAttempts", AlibabaCloud.TeaUtil.Common.DefaultNumber(runtime.MaxAttempts, 3)},
                }},
                {"backoff", new Dictionary<string, object>
                {
                    {"policy", AlibabaCloud.TeaUtil.Common.DefaultString(runtime.BackoffPolicy, "no")},
                    {"period", AlibabaCloud.TeaUtil.Common.DefaultNumber(runtime.BackoffPeriod, 1)},
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
                            {"Version", "2020-03-20"},
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
                        {"host", AlibabaCloud.Commons.Common.GetHost("videoenhan", _regionId, _endpoint)},
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
                    if (AlibabaCloud.TeaUtil.Common.Is4xx(response_.StatusCode) || AlibabaCloud.TeaUtil.Common.Is5xx(response_.StatusCode))
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

        public GetAsyncJobResultResponse GetAsyncJobResult(GetAsyncJobResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<GetAsyncJobResultResponse>(_request("GetAsyncJobResult", "HTTPS", "POST", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetAsyncJobResultResponse> GetAsyncJobResultAsync(GetAsyncJobResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<GetAsyncJobResultResponse>(await _requestAsync("GetAsyncJobResult", "HTTPS", "POST", "AK", null, request.ToMap(), runtime));
        }

        public SuperResolveVideoResponse SuperResolveVideo(SuperResolveVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<SuperResolveVideoResponse>(_request("SuperResolveVideo", "HTTPS", "POST", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SuperResolveVideoResponse> SuperResolveVideoAsync(SuperResolveVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<SuperResolveVideoResponse>(await _requestAsync("SuperResolveVideo", "HTTPS", "POST", "AK", null, request.ToMap(), runtime));
        }

        public SuperResolveVideoResponse SuperResolveVideoAdvance(SuperResolveVideoAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "videoenhan",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.VideoUrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions() { };
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            SuperResolveVideoRequest superResolveVideoreq = new SuperResolveVideoRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, superResolveVideoreq);
            superResolveVideoreq.VideoUrl = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SuperResolveVideoResponse superResolveVideoResp = SuperResolveVideo(superResolveVideoreq, runtime);
            return superResolveVideoResp;
        }

        public async Task<SuperResolveVideoResponse> SuperResolveVideoAdvanceAsync(SuperResolveVideoAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "videoenhan",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.VideoUrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions() { };
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            SuperResolveVideoRequest superResolveVideoreq = new SuperResolveVideoRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, superResolveVideoreq);
            superResolveVideoreq.VideoUrl = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SuperResolveVideoResponse superResolveVideoResp = await SuperResolveVideoAsync(superResolveVideoreq, runtime);
            return superResolveVideoResp;
        }

        public EraseVideoLogoResponse EraseVideoLogo(EraseVideoLogoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<EraseVideoLogoResponse>(_request("EraseVideoLogo", "HTTPS", "POST", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EraseVideoLogoResponse> EraseVideoLogoAsync(EraseVideoLogoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<EraseVideoLogoResponse>(await _requestAsync("EraseVideoLogo", "HTTPS", "POST", "AK", null, request.ToMap(), runtime));
        }

        public EraseVideoLogoResponse EraseVideoLogoAdvance(EraseVideoLogoAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "videoenhan",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.VideoUrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions() { };
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            EraseVideoLogoRequest eraseVideoLogoreq = new EraseVideoLogoRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, eraseVideoLogoreq);
            eraseVideoLogoreq.VideoUrl = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            EraseVideoLogoResponse eraseVideoLogoResp = EraseVideoLogo(eraseVideoLogoreq, runtime);
            return eraseVideoLogoResp;
        }

        public async Task<EraseVideoLogoResponse> EraseVideoLogoAdvanceAsync(EraseVideoLogoAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "videoenhan",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.VideoUrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions() { };
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            EraseVideoLogoRequest eraseVideoLogoreq = new EraseVideoLogoRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, eraseVideoLogoreq);
            eraseVideoLogoreq.VideoUrl = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            EraseVideoLogoResponse eraseVideoLogoResp = await EraseVideoLogoAsync(eraseVideoLogoreq, runtime);
            return eraseVideoLogoResp;
        }

        public EraseVideoSubtitlesResponse EraseVideoSubtitles(EraseVideoSubtitlesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<EraseVideoSubtitlesResponse>(_request("EraseVideoSubtitles", "HTTPS", "POST", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EraseVideoSubtitlesResponse> EraseVideoSubtitlesAsync(EraseVideoSubtitlesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<EraseVideoSubtitlesResponse>(await _requestAsync("EraseVideoSubtitles", "HTTPS", "POST", "AK", null, request.ToMap(), runtime));
        }

        public EraseVideoSubtitlesResponse EraseVideoSubtitlesAdvance(EraseVideoSubtitlesAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "videoenhan",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.VideoUrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions() { };
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            EraseVideoSubtitlesRequest eraseVideoSubtitlesreq = new EraseVideoSubtitlesRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, eraseVideoSubtitlesreq);
            eraseVideoSubtitlesreq.VideoUrl = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            EraseVideoSubtitlesResponse eraseVideoSubtitlesResp = EraseVideoSubtitles(eraseVideoSubtitlesreq, runtime);
            return eraseVideoSubtitlesResp;
        }

        public async Task<EraseVideoSubtitlesResponse> EraseVideoSubtitlesAdvanceAsync(EraseVideoSubtitlesAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "videoenhan",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.VideoUrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions() { };
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            EraseVideoSubtitlesRequest eraseVideoSubtitlesreq = new EraseVideoSubtitlesRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, eraseVideoSubtitlesreq);
            eraseVideoSubtitlesreq.VideoUrl = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            EraseVideoSubtitlesResponse eraseVideoSubtitlesResp = await EraseVideoSubtitlesAsync(eraseVideoSubtitlesreq, runtime);
            return eraseVideoSubtitlesResp;
        }

        public AbstractEcommerceVideoResponse AbstractEcommerceVideo(AbstractEcommerceVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<AbstractEcommerceVideoResponse>(_request("AbstractEcommerceVideo", "HTTPS", "POST", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AbstractEcommerceVideoResponse> AbstractEcommerceVideoAsync(AbstractEcommerceVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<AbstractEcommerceVideoResponse>(await _requestAsync("AbstractEcommerceVideo", "HTTPS", "POST", "AK", null, request.ToMap(), runtime));
        }

        public AbstractEcommerceVideoResponse AbstractEcommerceVideoAdvance(AbstractEcommerceVideoAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "videoenhan",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.VideoUrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions() { };
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            AbstractEcommerceVideoRequest abstractEcommerceVideoreq = new AbstractEcommerceVideoRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, abstractEcommerceVideoreq);
            abstractEcommerceVideoreq.VideoUrl = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            AbstractEcommerceVideoResponse abstractEcommerceVideoResp = AbstractEcommerceVideo(abstractEcommerceVideoreq, runtime);
            return abstractEcommerceVideoResp;
        }

        public async Task<AbstractEcommerceVideoResponse> AbstractEcommerceVideoAdvanceAsync(AbstractEcommerceVideoAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "videoenhan",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.VideoUrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions() { };
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            AbstractEcommerceVideoRequest abstractEcommerceVideoreq = new AbstractEcommerceVideoRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, abstractEcommerceVideoreq);
            abstractEcommerceVideoreq.VideoUrl = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            AbstractEcommerceVideoResponse abstractEcommerceVideoResp = await AbstractEcommerceVideoAsync(abstractEcommerceVideoreq, runtime);
            return abstractEcommerceVideoResp;
        }

        public AbstractFilmVideoResponse AbstractFilmVideo(AbstractFilmVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<AbstractFilmVideoResponse>(_request("AbstractFilmVideo", "HTTPS", "POST", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AbstractFilmVideoResponse> AbstractFilmVideoAsync(AbstractFilmVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<AbstractFilmVideoResponse>(await _requestAsync("AbstractFilmVideo", "HTTPS", "POST", "AK", null, request.ToMap(), runtime));
        }

        public AbstractFilmVideoResponse AbstractFilmVideoAdvance(AbstractFilmVideoAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "videoenhan",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.VideoUrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions() { };
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            AbstractFilmVideoRequest abstractFilmVideoreq = new AbstractFilmVideoRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, abstractFilmVideoreq);
            abstractFilmVideoreq.VideoUrl = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            AbstractFilmVideoResponse abstractFilmVideoResp = AbstractFilmVideo(abstractFilmVideoreq, runtime);
            return abstractFilmVideoResp;
        }

        public async Task<AbstractFilmVideoResponse> AbstractFilmVideoAdvanceAsync(AbstractFilmVideoAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "videoenhan",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.VideoUrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions() { };
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            AbstractFilmVideoRequest abstractFilmVideoreq = new AbstractFilmVideoRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, abstractFilmVideoreq);
            abstractFilmVideoreq.VideoUrl = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            AbstractFilmVideoResponse abstractFilmVideoResp = await AbstractFilmVideoAsync(abstractFilmVideoreq, runtime);
            return abstractFilmVideoResp;
        }

        public AdjustVideoColorResponse AdjustVideoColor(AdjustVideoColorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<AdjustVideoColorResponse>(_request("AdjustVideoColor", "HTTPS", "POST", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AdjustVideoColorResponse> AdjustVideoColorAsync(AdjustVideoColorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<AdjustVideoColorResponse>(await _requestAsync("AdjustVideoColor", "HTTPS", "POST", "AK", null, request.ToMap(), runtime));
        }

        public AdjustVideoColorResponse AdjustVideoColorAdvance(AdjustVideoColorAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "videoenhan",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.VideoUrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions() { };
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            AdjustVideoColorRequest adjustVideoColorreq = new AdjustVideoColorRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, adjustVideoColorreq);
            adjustVideoColorreq.VideoUrl = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            AdjustVideoColorResponse adjustVideoColorResp = AdjustVideoColor(adjustVideoColorreq, runtime);
            return adjustVideoColorResp;
        }

        public async Task<AdjustVideoColorResponse> AdjustVideoColorAdvanceAsync(AdjustVideoColorAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "videoenhan",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.VideoUrlObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions() { };
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            AdjustVideoColorRequest adjustVideoColorreq = new AdjustVideoColorRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, adjustVideoColorreq);
            adjustVideoColorreq.VideoUrl = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            AdjustVideoColorResponse adjustVideoColorResp = await AdjustVideoColorAsync(adjustVideoColorreq, runtime);
            return adjustVideoColorResp;
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
