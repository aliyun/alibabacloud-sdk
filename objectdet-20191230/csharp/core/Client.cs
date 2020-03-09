// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;

using AlibabaCloud.Objectdet.Models;

namespace AlibabaCloud.Objectdet
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
                    string accessKeyId = GetAccessKeyId();
                    string accessKeySecret = GetAccessKeySecret();
                    request_.Query = AlibabaCloud.Commons.Common.Query(TeaConverter.merge<object>
                    (
                        new Dictionary<string, object>()
                        {
                            {"Action", action},
                            {"Format", "json"},
                            {"RegionId", _regionId},
                            {"Timestamp", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Version", "2019-12-30"},
                            {"SignatureMethod", "HMAC-SHA1"},
                            {"SignatureVersion", "1.0"},
                            {"SignatureNonce", AlibabaCloud.TeaUtil.Common.GetNonce()},
                            {"AccessKeyId", accessKeyId},
                        },
                        request
                    ));
                    request_.Headers = new Dictionary<string, string>
                    {
                        {"host", AlibabaCloud.Commons.Common.GetHost("objectdet", _regionId, _endpoint)},
                        {"user-agent", GetUserAgent()},
                    };
                    request_.Query["Signature"] = AlibabaCloud.Commons.Common.GetSignature(request_, accessKeySecret);
                    _lastRequest = request_;
                    TeaResponse response_ = TeaCore.DoAction(request_, runtime_);

                    object obj = AlibabaCloud.TeaUtil.Common.ReadAsJSON(response_.Body);
                    Dictionary<string, object> body = AlibabaCloud.TeaUtil.Common.AssertAsMap(obj);
                    if (AlibabaCloud.TeaUtil.Common.Is4xx(response_.StatusCode) || AlibabaCloud.TeaUtil.Common.Is5xx(response_.StatusCode))
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
                    string accessKeyId = await GetAccessKeyIdAsync();
                    string accessKeySecret = await GetAccessKeySecretAsync();
                    request_.Query = AlibabaCloud.Commons.Common.Query(TeaConverter.merge<object>
                    (
                        new Dictionary<string, object>()
                        {
                            {"Action", action},
                            {"Format", "json"},
                            {"RegionId", _regionId},
                            {"Timestamp", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Version", "2019-12-30"},
                            {"SignatureMethod", "HMAC-SHA1"},
                            {"SignatureVersion", "1.0"},
                            {"SignatureNonce", AlibabaCloud.TeaUtil.Common.GetNonce()},
                            {"AccessKeyId", accessKeyId},
                        },
                        request
                    ));
                    request_.Headers = new Dictionary<string, string>
                    {
                        {"host", AlibabaCloud.Commons.Common.GetHost("objectdet", _regionId, _endpoint)},
                        {"user-agent", GetUserAgent()},
                    };
                    request_.Query["Signature"] = AlibabaCloud.Commons.Common.GetSignature(request_, accessKeySecret);
                    _lastRequest = request_;
                    TeaResponse response_ = await TeaCore.DoActionAsync(request_, runtime_);

                    object obj = AlibabaCloud.TeaUtil.Common.ReadAsJSON(response_.Body);
                    Dictionary<string, object> body = AlibabaCloud.TeaUtil.Common.AssertAsMap(obj);
                    if (AlibabaCloud.TeaUtil.Common.Is4xx(response_.StatusCode) || AlibabaCloud.TeaUtil.Common.Is5xx(response_.StatusCode))
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

        public ClassifyVehicleInsuranceResponse ClassifyVehicleInsurance(ClassifyVehicleInsuranceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<ClassifyVehicleInsuranceResponse>(_request("ClassifyVehicleInsurance", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<ClassifyVehicleInsuranceResponse> ClassifyVehicleInsuranceAsync(ClassifyVehicleInsuranceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<ClassifyVehicleInsuranceResponse>(await _requestAsync("ClassifyVehicleInsurance", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public ClassifyVehicleInsuranceResponse ClassifyVehicleInsuranceAdvance(ClassifyVehicleInsuranceAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
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
                Product = "objectdet",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
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
                Content = request.ImageURLObject,
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
            ClassifyVehicleInsuranceRequest classifyVehicleInsurancereq = new ClassifyVehicleInsuranceRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, classifyVehicleInsurancereq);
            classifyVehicleInsurancereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            ClassifyVehicleInsuranceResponse classifyVehicleInsuranceResp = ClassifyVehicleInsurance(classifyVehicleInsurancereq, runtime);
            return classifyVehicleInsuranceResp;
        }

        public async Task<ClassifyVehicleInsuranceResponse> ClassifyVehicleInsuranceAdvanceAsync(ClassifyVehicleInsuranceAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
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
                Product = "objectdet",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
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
                Content = request.ImageURLObject,
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
            ClassifyVehicleInsuranceRequest classifyVehicleInsurancereq = new ClassifyVehicleInsuranceRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, classifyVehicleInsurancereq);
            classifyVehicleInsurancereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            ClassifyVehicleInsuranceResponse classifyVehicleInsuranceResp = await ClassifyVehicleInsuranceAsync(classifyVehicleInsurancereq, runtime);
            return classifyVehicleInsuranceResp;
        }

        public RecognizeVehicleDashboardResponse RecognizeVehicleDashboard(RecognizeVehicleDashboardRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<RecognizeVehicleDashboardResponse>(_request("RecognizeVehicleDashboard", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<RecognizeVehicleDashboardResponse> RecognizeVehicleDashboardAsync(RecognizeVehicleDashboardRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<RecognizeVehicleDashboardResponse>(await _requestAsync("RecognizeVehicleDashboard", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public RecognizeVehicleDashboardResponse RecognizeVehicleDashboardAdvance(RecognizeVehicleDashboardAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
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
                Product = "objectdet",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
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
                Content = request.ImageURLObject,
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
            RecognizeVehicleDashboardRequest recognizeVehicleDashboardreq = new RecognizeVehicleDashboardRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, recognizeVehicleDashboardreq);
            recognizeVehicleDashboardreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeVehicleDashboardResponse recognizeVehicleDashboardResp = RecognizeVehicleDashboard(recognizeVehicleDashboardreq, runtime);
            return recognizeVehicleDashboardResp;
        }

        public async Task<RecognizeVehicleDashboardResponse> RecognizeVehicleDashboardAdvanceAsync(RecognizeVehicleDashboardAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
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
                Product = "objectdet",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
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
                Content = request.ImageURLObject,
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
            RecognizeVehicleDashboardRequest recognizeVehicleDashboardreq = new RecognizeVehicleDashboardRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, recognizeVehicleDashboardreq);
            recognizeVehicleDashboardreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeVehicleDashboardResponse recognizeVehicleDashboardResp = await RecognizeVehicleDashboardAsync(recognizeVehicleDashboardreq, runtime);
            return recognizeVehicleDashboardResp;
        }

        public RecognizeVehicleDamageResponse RecognizeVehicleDamage(RecognizeVehicleDamageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<RecognizeVehicleDamageResponse>(_request("RecognizeVehicleDamage", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<RecognizeVehicleDamageResponse> RecognizeVehicleDamageAsync(RecognizeVehicleDamageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<RecognizeVehicleDamageResponse>(await _requestAsync("RecognizeVehicleDamage", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public RecognizeVehicleDamageResponse RecognizeVehicleDamageAdvance(RecognizeVehicleDamageAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
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
                Product = "objectdet",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
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
                Content = request.ImageURLObject,
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
            RecognizeVehicleDamageRequest recognizeVehicleDamagereq = new RecognizeVehicleDamageRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, recognizeVehicleDamagereq);
            recognizeVehicleDamagereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeVehicleDamageResponse recognizeVehicleDamageResp = RecognizeVehicleDamage(recognizeVehicleDamagereq, runtime);
            return recognizeVehicleDamageResp;
        }

        public async Task<RecognizeVehicleDamageResponse> RecognizeVehicleDamageAdvanceAsync(RecognizeVehicleDamageAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
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
                Product = "objectdet",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
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
                Content = request.ImageURLObject,
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
            RecognizeVehicleDamageRequest recognizeVehicleDamagereq = new RecognizeVehicleDamageRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, recognizeVehicleDamagereq);
            recognizeVehicleDamagereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeVehicleDamageResponse recognizeVehicleDamageResp = await RecognizeVehicleDamageAsync(recognizeVehicleDamagereq, runtime);
            return recognizeVehicleDamageResp;
        }

        public RecognizeVehiclePartsResponse RecognizeVehicleParts(RecognizeVehiclePartsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<RecognizeVehiclePartsResponse>(_request("RecognizeVehicleParts", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<RecognizeVehiclePartsResponse> RecognizeVehiclePartsAsync(RecognizeVehiclePartsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<RecognizeVehiclePartsResponse>(await _requestAsync("RecognizeVehicleParts", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public RecognizeVehiclePartsResponse RecognizeVehiclePartsAdvance(RecognizeVehiclePartsAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
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
                Product = "objectdet",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
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
                Content = request.ImageURLObject,
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
            RecognizeVehiclePartsRequest recognizeVehiclePartsreq = new RecognizeVehiclePartsRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, recognizeVehiclePartsreq);
            recognizeVehiclePartsreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeVehiclePartsResponse recognizeVehiclePartsResp = RecognizeVehicleParts(recognizeVehiclePartsreq, runtime);
            return recognizeVehiclePartsResp;
        }

        public async Task<RecognizeVehiclePartsResponse> RecognizeVehiclePartsAdvanceAsync(RecognizeVehiclePartsAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
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
                Product = "objectdet",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
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
                Content = request.ImageURLObject,
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
            RecognizeVehiclePartsRequest recognizeVehiclePartsreq = new RecognizeVehiclePartsRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, recognizeVehiclePartsreq);
            recognizeVehiclePartsreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeVehiclePartsResponse recognizeVehiclePartsResp = await RecognizeVehiclePartsAsync(recognizeVehiclePartsreq, runtime);
            return recognizeVehiclePartsResp;
        }

        public DetectVehicleResponse DetectVehicle(DetectVehicleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DetectVehicleResponse>(_request("DetectVehicle", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<DetectVehicleResponse> DetectVehicleAsync(DetectVehicleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DetectVehicleResponse>(await _requestAsync("DetectVehicle", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public DetectVehicleResponse DetectVehicleAdvance(DetectVehicleAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
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
                Product = "objectdet",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
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
                Content = request.ImageURLObject,
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
            DetectVehicleRequest detectVehiclereq = new DetectVehicleRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, detectVehiclereq);
            detectVehiclereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            DetectVehicleResponse detectVehicleResp = DetectVehicle(detectVehiclereq, runtime);
            return detectVehicleResp;
        }

        public async Task<DetectVehicleResponse> DetectVehicleAdvanceAsync(DetectVehicleAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
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
                Product = "objectdet",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
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
                Content = request.ImageURLObject,
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
            DetectVehicleRequest detectVehiclereq = new DetectVehicleRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, detectVehiclereq);
            detectVehiclereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            DetectVehicleResponse detectVehicleResp = await DetectVehicleAsync(detectVehiclereq, runtime);
            return detectVehicleResp;
        }

        public DetectMainBodyResponse DetectMainBody(DetectMainBodyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DetectMainBodyResponse>(_request("DetectMainBody", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public async Task<DetectMainBodyResponse> DetectMainBodyAsync(DetectMainBodyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            return TeaModel.ToObject<DetectMainBodyResponse>(await _requestAsync("DetectMainBody", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public DetectMainBodyResponse DetectMainBodyAdvance(DetectMainBodyAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
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
                Product = "objectdet",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
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
                Content = request.ImageURLObject,
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
            DetectMainBodyRequest detectMainBodyreq = new DetectMainBodyRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, detectMainBodyreq);
            detectMainBodyreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            DetectMainBodyResponse detectMainBodyResp = DetectMainBody(detectMainBodyreq, runtime);
            return detectMainBodyResp;
        }

        public async Task<DetectMainBodyResponse> DetectMainBodyAdvanceAsync(DetectMainBodyAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
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
                Product = "objectdet",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
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
                Content = request.ImageURLObject,
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
            DetectMainBodyRequest detectMainBodyreq = new DetectMainBodyRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, detectMainBodyreq);
            detectMainBodyreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            DetectMainBodyResponse detectMainBodyResp = await DetectMainBodyAsync(detectMainBodyreq, runtime);
            return detectMainBodyResp;
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
