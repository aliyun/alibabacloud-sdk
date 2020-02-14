// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;

using AlibabaCloud.RPC;
using AlibabaCloud.Facebody.Models;

namespace AlibabaCloud.Facebody
{
    public class Client : RPCClient
    {

        public Client(Config config): base(config.ToMap())
        { }

        public Dictionary<string, object> _request(string action, string protocol, string method, Dictionary<string, object> request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            Dictionary<string, object> runtime_ = new Dictionary<string, object>()
            {
                {"timeouted", "retry"},
                {"readTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ReadTimeout, _readTimeout)},
                {"connectTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ConnectTimeout, _connectTimeout)},
                {"httpProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpProxy, _httpProxy)},
                {"httpsProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpsProxy, _httpsProxy)},
                {"noProxy", AlibabaCloud.Commons.Common.Default(runtime.NoProxy, _noProxy)},
                {"maxIdleConns", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxIdleConns, _maxIdleConns)},
                {"retry", new Dictionary<string, object>()
                {
                    {"retryable", runtime.Autoretry},
                    {"maxAttempts", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxAttempts, 3)},
                }},
                {"backoff", new Dictionary<string, object>()
                {
                    {"policy", AlibabaCloud.Commons.Common.Default(runtime.BackoffPolicy, "no")},
                    {"period", AlibabaCloud.Commons.Common.DefaultNumber(runtime.BackoffPeriod, 1)},
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
                    request_.Protocol = AlibabaCloud.Commons.Common.Default(_protocol, protocol);
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
                            {"Date", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Version", "2019-12-30"},
                            {"SignatureMethod", "HMAC-SHA1"},
                            {"SignatureVersion", "1.0"},
                            {"SignatureNonce", AlibabaCloud.Commons.Common.GetNonce()},
                            {"AccessKeyId", _getAccessKeyId()},
                        },
                        request
                    ));
                    request_.Headers = new Dictionary<string, string>()
                    {
                        {"host", AlibabaCloud.Commons.Common.GetHost("facebody", _regionId, _endpoint)},
                        {"user-agent", AlibabaCloud.Commons.Common.GetUserAgent(_userAgent)},
                    };
                    request_.Query["Signature"] = AlibabaCloud.Commons.Common.GetSignature(request_, _getAccessKeySecret());
                    _lastRequest = request_;
                    TeaResponse response_ = TeaCore.DoAction(request_, runtime_);

                    Dictionary<string, object> body = AlibabaCloud.Commons.Common.Json(response_);
                    if (AlibabaCloud.Commons.Common.HasError(body))
                    {
                        throw new TeaException(new Dictionary<string, object>()
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

        public async Task<Dictionary<string, object>> _requestAsync(string action, string protocol, string method, Dictionary<string, object> request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            Dictionary<string, object> runtime_ = new Dictionary<string, object>()
            {
                {"timeouted", "retry"},
                {"readTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ReadTimeout, _readTimeout)},
                {"connectTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ConnectTimeout, _connectTimeout)},
                {"httpProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpProxy, _httpProxy)},
                {"httpsProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpsProxy, _httpsProxy)},
                {"noProxy", AlibabaCloud.Commons.Common.Default(runtime.NoProxy, _noProxy)},
                {"maxIdleConns", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxIdleConns, _maxIdleConns)},
                {"retry", new Dictionary<string, object>()
                {
                    {"retryable", runtime.Autoretry},
                    {"maxAttempts", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxAttempts, 3)},
                }},
                {"backoff", new Dictionary<string, object>()
                {
                    {"policy", AlibabaCloud.Commons.Common.Default(runtime.BackoffPolicy, "no")},
                    {"period", AlibabaCloud.Commons.Common.DefaultNumber(runtime.BackoffPeriod, 1)},
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
                    request_.Protocol = AlibabaCloud.Commons.Common.Default(_protocol, protocol);
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
                            {"Date", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Version", "2019-12-30"},
                            {"SignatureMethod", "HMAC-SHA1"},
                            {"SignatureVersion", "1.0"},
                            {"SignatureNonce", AlibabaCloud.Commons.Common.GetNonce()},
                            {"AccessKeyId", _getAccessKeyId()},
                        },
                        request
                    ));
                    request_.Headers = new Dictionary<string, string>()
                    {
                        {"host", AlibabaCloud.Commons.Common.GetHost("facebody", _regionId, _endpoint)},
                        {"user-agent", AlibabaCloud.Commons.Common.GetUserAgent(_userAgent)},
                    };
                    request_.Query["Signature"] = AlibabaCloud.Commons.Common.GetSignature(request_, _getAccessKeySecret());
                    _lastRequest = request_;
                    TeaResponse response_ = await TeaCore.DoActionAsync(request_, runtime_);

                    Dictionary<string, object> body = AlibabaCloud.Commons.Common.Json(response_);
                    if (AlibabaCloud.Commons.Common.HasError(body))
                    {
                        throw new TeaException(new Dictionary<string, object>()
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

        public DetectMaskResponse DetectMask(DetectMaskRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<DetectMaskResponse>(_request("DetectMask", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<DetectMaskResponse> DetectMaskAsync(DetectMaskRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<DetectMaskResponse>(await _requestAsync("DetectMask", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public DetectMaskResponse DetectMaskAdvance(DetectMaskAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "facebody",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
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
            ossClient.PostObject(uploadRequest, runtime);
            DetectMaskRequest detectMaskreq = new DetectMaskRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, detectMaskreq);
            detectMaskreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            DetectMaskResponse detectMaskResp = DetectMask(detectMaskreq, runtime);
            return detectMaskResp;
        }

        public async Task<DetectMaskResponse> DetectMaskAdvanceAsync(DetectMaskAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "facebody",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
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
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            DetectMaskRequest detectMaskreq = new DetectMaskRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, detectMaskreq);
            detectMaskreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            DetectMaskResponse detectMaskResp = await DetectMaskAsync(detectMaskreq, runtime);
            return detectMaskResp;
        }

        public RecognizeFaceResponse RecognizeFace(RecognizeFaceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<RecognizeFaceResponse>(_request("RecognizeFace", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<RecognizeFaceResponse> RecognizeFaceAsync(RecognizeFaceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<RecognizeFaceResponse>(await _requestAsync("RecognizeFace", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public RecognizeFaceResponse RecognizeFaceAdvance(RecognizeFaceAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "facebody",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
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
            ossClient.PostObject(uploadRequest, runtime);
            RecognizeFaceRequest recognizeFacereq = new RecognizeFaceRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, recognizeFacereq);
            recognizeFacereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeFaceResponse recognizeFaceResp = RecognizeFace(recognizeFacereq, runtime);
            return recognizeFaceResp;
        }

        public async Task<RecognizeFaceResponse> RecognizeFaceAdvanceAsync(RecognizeFaceAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "facebody",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
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
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            RecognizeFaceRequest recognizeFacereq = new RecognizeFaceRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, recognizeFacereq);
            recognizeFacereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeFaceResponse recognizeFaceResp = await RecognizeFaceAsync(recognizeFacereq, runtime);
            return recognizeFaceResp;
        }

        public CompareFaceResponse CompareFace(CompareFaceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<CompareFaceResponse>(_request("CompareFace", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<CompareFaceResponse> CompareFaceAsync(CompareFaceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<CompareFaceResponse>(await _requestAsync("CompareFace", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public DetectFaceResponse DetectFace(DetectFaceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<DetectFaceResponse>(_request("DetectFace", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<DetectFaceResponse> DetectFaceAsync(DetectFaceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<DetectFaceResponse>(await _requestAsync("DetectFace", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public DetectFaceResponse DetectFaceAdvance(DetectFaceAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "facebody",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
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
            ossClient.PostObject(uploadRequest, runtime);
            DetectFaceRequest detectFacereq = new DetectFaceRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, detectFacereq);
            detectFacereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            DetectFaceResponse detectFaceResp = DetectFace(detectFacereq, runtime);
            return detectFaceResp;
        }

        public async Task<DetectFaceResponse> DetectFaceAdvanceAsync(DetectFaceAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "facebody",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
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
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            DetectFaceRequest detectFacereq = new DetectFaceRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, detectFacereq);
            detectFacereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            DetectFaceResponse detectFaceResp = await DetectFaceAsync(detectFacereq, runtime);
            return detectFaceResp;
        }

    }
}
